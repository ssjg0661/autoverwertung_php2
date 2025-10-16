<?php
include("../config/common.php");

/**
 * Fahrzeug-Anfrage Formular-Handler mit Bildupload
 * Verwendet PHPMailer zum Versenden von E-Mails
 */

// Fehlerausgabe konfigurieren (in Produktion anpassen)
error_reporting(E_ALL);
ini_set('display_errors', 0);
ini_set('log_errors', 1);

// JSON-Header
header('Content-Type: application/json; charset=utf-8');

// PHPMailer-Klassen laden (ohne Composer)
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

/**
 * Helper: Felder → deutsche Labels
 */
$fieldLabels = [
    'Manufacturer'            => 'Hersteller',
    'Model'                   => 'Modell',
    'TypeOfEngine'            => 'Motorart',
    'YearOfFirstRegistration' => 'Erstzulassung (Jahr)',
    'Power'                   => 'Leistung (PS)',
    'Transmission'            => 'Getriebe',
    'Mileage'                 => 'Kilometerstand',
    'AskingPrice'             => 'Preisvorstellung',
    'Salutation'              => 'Anrede',
    'Name'                    => 'Name',
    'Street'                  => 'Straße',
    'ZipCode'                 => 'PLZ',
    'Location'                => 'Ort',
    'Email'                   => 'E-Mail',
    'Phone'                   => 'Telefon',
    'Notes'                   => 'Anmerkungen',
];

$config = [
    'smtp_host' => 'smtp.gmail.com',
    'smtp_port' => 587,
    'smtp_username' => $contact_email,
    'smtp_password' => 'benamimrssmnuaqh',
    'smtp_secure' => PHPMailer::ENCRYPTION_STARTTLS,
    'from_email' => 'noreply@example.com',
    'from_name' => 'Vehicle Inquiry Form',
    'to_email' => $contact_email,
    'to_name' => 'Kunde',
    'upload_dir' => __DIR__ . '/uploads/', // Verzeichnis für temporäre Uploads
    'max_file_size' => 5 * 1024 * 1024, // 5MB
    'allowed_types' => ['image/jpeg', 'image/jpg', 'image/png', 'image/webp'],
    'max_files' => 10
];

// Upload-Verzeichnis erstellen falls nicht vorhanden
if (!file_exists($config['upload_dir'])) {
    mkdir($config['upload_dir'], 0755, true);
}

/**
 * Sanitizen
 */
function sanitizeInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
    return $data;
}

/**
 * E-Mail validieren
 */
function validateEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

/**
 * JSON-Antwort senden
 */
function sendResponse($success, $message, $data = []) {
    echo json_encode([
        'success' => $success,
        'message' => $message,
        'data'    => $data
    ], JSON_UNESCAPED_UNICODE);
    exit;
}

/**
 * Bildupload validieren und verarbeiten
 */
function handleImageUploads($config) {
    $uploadedFiles = [];
    $errors = [];

    if (!isset($_FILES['images']) || empty($_FILES['images']['name'][0])) {
        return ['files' => [], 'errors' => []];
    }

    $fileCount = count($_FILES['images']['name']);

    if ($fileCount > $config['max_files']) {
        return ['files' => [], 'errors' => ["Maximal {$config['max_files']} Bilder erlaubt"]];
    }

    for ($i = 0; $i < $fileCount; $i++) {
        // Prüfen ob Upload erfolgreich war
        if ($_FILES['images']['error'][$i] !== UPLOAD_ERR_OK) {
            $errors[] = "Fehler beim Upload von Bild " . ($i + 1);
            continue;
        }

        $fileName = $_FILES['images']['name'][$i];
        $fileTmpName = $_FILES['images']['tmp_name'][$i];
        $fileSize = $_FILES['images']['size'][$i];
        $fileMime = $_FILES['images']['type'][$i];

        // Dateigröße prüfen
        if ($fileSize > $config['max_file_size']) {
            $errors[] = "$fileName ist zu groß (max. 5MB)";
            continue;
        }

        // MIME-Type prüfen
        if (!in_array($fileMime, $config['allowed_types'])) {
            $errors[] = "$fileName: Nur JPG, PNG und WEBP erlaubt";
            continue;
        }

        // Zusätzliche Sicherheitsprüfung mit getimagesize
        $imageInfo = @getimagesize($fileTmpName);
        if ($imageInfo === false) {
            $errors[] = "$fileName ist keine gültige Bilddatei";
            continue;
        }

        // Sicherer Dateiname generieren
        $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
        $safeFileName = uniqid('vehicle_', true) . '.' . $fileExtension;
        $uploadPath = $config['upload_dir'] . $safeFileName;

        // Datei verschieben
        if (move_uploaded_file($fileTmpName, $uploadPath)) {
            $uploadedFiles[] = [
                'path' => $uploadPath,
                'name' => $fileName,
                'size' => $fileSize,
                'mime' => $fileMime
            ];
        } else {
            $errors[] = "Fehler beim Speichern von $fileName";
        }
    }

    return ['files' => $uploadedFiles, 'errors' => $errors];
}

/**
 * Temporäre Dateien löschen
 */
function cleanupFiles($files) {
    foreach ($files as $file) {
        if (file_exists($file['path'])) {
            @unlink($file['path']);
        }
    }
}

// Nur POST erlauben
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    sendResponse(false, 'Ungültige Anfragemethode');
}

// Pflichtfelder prüfen
$requiredFields = [
    'Manufacturer', 'Model', 'TypeOfEngine', 'YearOfFirstRegistration', 'Power',
    'Transmission', 'Mileage', 'AskingPrice', 'Salutation', 'Name',
    'Street', 'ZipCode', 'Location', 'Email', 'Phone'
];

$formData = [];
$errors   = [];

foreach ($requiredFields as $field) {
    if (!isset($_POST[$field]) || empty(trim($_POST[$field]))) {
        $label = isset($fieldLabels[$field]) ? $fieldLabels[$field] : $field;
        $errors[] = "$label ist erforderlich";
    } else {
        $formData[$field] = sanitizeInput($_POST[$field]);
    }
}

// E-Mail-Format prüfen
if (!empty($formData['Email']) && !validateEmail($formData['Email'])) {
    $errors[] = 'Ungültiges E-Mail-Format';
}

// Jahr prüfen
if (!empty($formData['YearOfFirstRegistration'])) {
    $year = intval($formData['YearOfFirstRegistration']);
    if ($year < 1900 || $year > intval(date('Y'))) {
        $errors[] = 'Ungültiges Jahr der Erstzulassung';
    }
}

// Optional: Anmerkungen
$formData['Notes'] = isset($_POST['Notes']) ? sanitizeInput($_POST['Notes']) : '';

// Fehler zurückgeben
if (!empty($errors)) {
    sendResponse(false, 'Validierung fehlgeschlagen: ' . implode(', ', $errors));
}

// Bilder verarbeiten
$imageUpload = handleImageUploads($config);

if (!empty($imageUpload['errors'])) {
    sendResponse(false, 'Bildupload-Fehler: ' . implode(', ', $imageUpload['errors']));
}

$uploadedImages = $imageUpload['files'];

// PHPMailer einrichten
$mail = new PHPMailer(true);

try {
    // Server
    $mail->isSMTP();
    $mail->Host       = $config['smtp_host'];
    $mail->SMTPAuth   = true;
    $mail->Username   = $config['smtp_username'];
    $mail->Password   = $config['smtp_password'];
    $mail->SMTPSecure = $config['smtp_secure'];
    $mail->Port       = $config['smtp_port'];
    $mail->CharSet    = 'UTF-8';

    // Empfänger
    $mail->setFrom($config['from_email'], $config['from_name']);
    $mail->addAddress($config['to_email'], $config['to_name']);
    $mail->addReplyTo($formData['Email'], $formData['Name']);

    // Bilder als Anhänge hinzufügen
    foreach ($uploadedImages as $image) {
        $mail->addAttachment($image['path'], $image['name']);
    }

    // Inhalt
    $mail->isHTML(true);
    $mail->Subject = 'Neue Fahrzeuganfrage – ' . $formData['Manufacturer'] . ' ' . $formData['Model'];

    // Datum für Fußzeile
    $now = date('d.m.Y H:i:s');

    // HTML-Body
    $emailBody  = '<html><body style="font-family: Arial, sans-serif; line-height: 1.6; color: #333;">';
    $emailBody .= '<div style="max-width: 600px; margin: 0 auto; padding: 20px; background: #f9f9f9;">';
    $emailBody .= '<h2 style="color: #00a63e; border-bottom: 2px solid #00a63e; padding-bottom: 10px;">Neue Fahrzeuganfrage</h2>';

    // Fahrzeugdaten
    $emailBody .= '<h3 style="color: #00a63e; margin-top: 20px;">Fahrzeuginformationen</h3>';
    $emailBody .= '<table style="width: 100%; border-collapse: collapse;">';
    $emailBody .= '<tr><td style="padding: 8px; background: #fff;"><strong>Hersteller:</strong></td><td style="padding: 8px; background: #fff;">' . $formData['Manufacturer'] . '</td></tr>';
    $emailBody .= '<tr><td style="padding: 8px; background: #f5f5f5;"><strong>Modell:</strong></td><td style="padding: 8px; background: #f5f5f5;">' . $formData['Model'] . '</td></tr>';
    $emailBody .= '<tr><td style="padding: 8px; background: #fff;"><strong>Motorart:</strong></td><td style="padding: 8px; background: #fff;">' . $formData['TypeOfEngine'] . '</td></tr>';
    $emailBody .= '<tr><td style="padding: 8px; background: #f5f5f5;"><strong>Erstzulassung (Jahr):</strong></td><td style="padding: 8px; background: #f5f5f5;">' . $formData['YearOfFirstRegistration'] . '</td></tr>';
    $emailBody .= '<tr><td style="padding: 8px; background: #fff;"><strong>Leistung:</strong></td><td style="padding: 8px; background: #fff;">' . $formData['Power'] . '</td></tr>';
    $emailBody .= '<tr><td style="padding: 8px; background: #f5f5f5;"><strong>Getriebe:</strong></td><td style="padding: 8px; background: #f5f5f5;">' . $formData['Transmission'] . '</td></tr>';
    $emailBody .= '<tr><td style="padding: 8px; background: #fff;"><strong>Kilometerstand:</strong></td><td style="padding: 8px; background: #fff;">' . $formData['Mileage'] . '</td></tr>';
    $emailBody .= '<tr><td style="padding: 8px; background: #f5f5f5;"><strong>Preisvorstellung:</strong></td><td style="padding: 8px; background: #f5f5f5;">' . $formData['AskingPrice'] . '</td></tr>';
    $emailBody .= '</table>';

    // Kontaktdaten
    $emailBody .= '<h3 style="color: #00a63e; margin-top: 20px;">Kontaktinformationen</h3>';
    $emailBody .= '<table style="width: 100%; border-collapse: collapse;">';
    $emailBody .= '<tr><td style="padding: 8px; background: #fff;"><strong>Anrede:</strong></td><td style="padding: 8px; background: #fff;">' . $formData['Salutation'] . '</td></tr>';
    $emailBody .= '<tr><td style="padding: 8px; background: #f5f5f5;"><strong>Name:</strong></td><td style="padding: 8px; background: #f5f5f5;">' . $formData['Name'] . '</td></tr>';
    $emailBody .= '<tr><td style="padding: 8px; background: #fff;"><strong>Straße:</strong></td><td style="padding: 8px; background: #fff;">' . $formData['Street'] . '</td></tr>';
    $emailBody .= '<tr><td style="padding: 8px; background: #f5f5f5;"><strong>PLZ:</strong></td><td style="padding: 8px; background: #f5f5f5;">' . $formData['ZipCode'] . '</td></tr>';
    $emailBody .= '<tr><td style="padding: 8px; background: #fff;"><strong>Ort:</strong></td><td style="padding: 8px; background: #fff;">' . $formData['Location'] . '</td></tr>';
    $emailBody .= '<tr><td style="padding: 8px; background: #f5f5f5;"><strong>E-Mail:</strong></td><td style="padding: 8px; background: #f5f5f5;"><a href="mailto:' . $formData['Email'] . '">' . $formData['Email'] . '</a></td></tr>';
    $emailBody .= '<tr><td style="padding: 8px; background: #fff;"><strong>Telefon:</strong></td><td style="padding: 8px; background: #fff;"><a href="tel:' . $formData['Phone'] . '">' . $formData['Phone'] . '</a></td></tr>';
    $emailBody .= '</table>';

    // Anmerkungen
    if (!empty($formData['Notes'])) {
        $emailBody .= '<h3 style="color: #00a63e; margin-top: 20px;">Zusätzliche Hinweise</h3>';
        $emailBody .= '<div style="padding: 15px; background: #fff; border-left: 4px solid #00a63e;">';
        $emailBody .= nl2br($formData['Notes']);
        $emailBody .= '</div>';
    }

    // Bilder-Info
    if (!empty($uploadedImages)) {
        $emailBody .= '<h3 style="color: #00a63e; margin-top: 20px;">Fahrzeugbilder</h3>';
        $emailBody .= '<p style="padding: 10px; background: #fff;">Es wurden ' . count($uploadedImages) . ' Bild(er) angehängt.</p>';
    }

    // Fußzeile
    $emailBody .= '<div style="margin-top: 30px; padding-top: 20px; border-top: 1px solid #ddd; text-align: center; color: #666; font-size: 12px;">';
    $emailBody .= '<p>Diese E-Mail wurde über das Fahrzeuganfrage-Formular am ' . $now . ' gesendet.</p>';
    $emailBody .= '</div>';

    $emailBody .= '</div></body></html>';

    $mail->Body = $emailBody;

    // Plain-Text
    $textBody  = "Neue Fahrzeuganfrage\n\n";
    $textBody .= "FAHRZEUGINFORMATIONEN\n";
    $textBody .= "----------------------\n";
    $textBody .= "Hersteller: " . $formData['Manufacturer'] . "\n";
    $textBody .= "Modell: " . $formData['Model'] . "\n";
    $textBody .= "Motorart: " . $formData['TypeOfEngine'] . "\n";
    $textBody .= "Erstzulassung (Jahr): " . $formData['YearOfFirstRegistration'] . "\n";
    $textBody .= "Leistung: " . $formData['Power'] . "\n";
    $textBody .= "Getriebe: " . $formData['Transmission'] . "\n";
    $textBody .= "Kilometerstand: " . $formData['Mileage'] . "\n";
    $textBody .= "Preisvorstellung: " . $formData['AskingPrice'] . "\n\n";

    $textBody .= "KONTAKTINFORMATIONEN\n";
    $textBody .= "---------------------\n";
    $textBody .= "Anrede: " . $formData['Salutation'] . "\n";
    $textBody .= "Name: " . $formData['Name'] . "\n";
    $textBody .= "Straße: " . $formData['Street'] . "\n";
    $textBody .= "PLZ: " . $formData['ZipCode'] . "\n";
    $textBody .= "Ort: " . $formData['Location'] . "\n";
    $textBody .= "E-Mail: " . $formData['Email'] . "\n";
    $textBody .= "Telefon: " . $formData['Phone'] . "\n\n";

    if (!empty($formData['Notes'])) {
        $textBody .= "ZUSÄTZLICHE HINWEISE\n";
        $textBody .= "--------------------\n";
        $textBody .= $formData['Notes'] . "\n\n";
    }

    if (!empty($uploadedImages)) {
        $textBody .= "FAHRZEUGBILDER\n";
        $textBody .= "--------------\n";
        $textBody .= count($uploadedImages) . " Bild(er) wurden angehängt.\n\n";
    }

    $textBody .= "Diese E-Mail wurde über das Fahrzeuganfrage-Formular am " . $now . " gesendet.";

    $mail->AltBody = $textBody;

    // Senden
    $mail->send();

    // Temporäre Dateien löschen
    cleanupFiles($uploadedImages);

    // Log
    error_log('Fahrzeuganfrage erfolgreich versendet für: ' . $formData['Email'] . ' mit ' . count($uploadedImages) . ' Bild(ern)');

    // Erfolg
    sendResponse(true, 'Ihre Anfrage wurde erfolgreich gesendet! Wir melden uns in Kürze.');

} catch (Exception $e) {
    // Temporäre Dateien löschen bei Fehler
    cleanupFiles($uploadedImages);
    
    // Fehler loggen
    error_log('PHPMailer-Fehler: ' . $mail->ErrorInfo);

    // Fehlerantwort
    sendResponse(false, 'Senden der Anfrage fehlgeschlagen. Bitte versuchen Sie es später erneut oder kontaktieren Sie uns direkt.');
}