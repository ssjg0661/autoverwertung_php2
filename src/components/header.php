<?php
/* ====== BOOTSTRAP (manual base on localhost, auto on live) ====== */
$host     = $_SERVER['HTTP_HOST'] ?? 'localhost';
$isHttps  = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off')
            || (($_SERVER['HTTP_X_FORWARDED_PROTO'] ?? '') === 'https');
$protocol = $isHttps ? 'https' : 'http';
$origin   = "$protocol://$host";


// Detect current page slug from the directory of the running script (last segment only)
$scriptName = $_SERVER['SCRIPT_NAME'] ?? '/index.php';
$scriptDir  = rtrim(str_replace('\\', '/', dirname($scriptName)), '/'); // e.g. /AutoverwertungPHP/motorschaden-ankauf
$segments   = array_values(array_filter(explode('/', $scriptDir)));
$lastSeg    = end($segments) ?: '';
global $currentPage;
$currentPage = $lastSeg === '' || $lastSeg === basename(trim($base_path, '/')) ? 'autoverwertung' : $lastSeg;

// Canonical URL (strip query, add slash for folder URLs)
$requestUri     = $_SERVER['REQUEST_URI'] ?? '/';
$uriNoQuery     = strtok($requestUri, '?');
$canonicalPath  = rtrim($uriNoQuery, '/');
if ($canonicalPath === '') $canonicalPath = '/';
if ($canonicalPath !== '/' && substr($canonicalPath, -1) !== '/') $canonicalPath .= '/';
$canonicalUrl   = $origin . $canonicalPath;


// defaults (avoid notices if not set elsewhere)
$common_phoneNumber   = $common_phoneNumber   ?? '';
$header_logo_imgName  = $header_logo_imgName  ?? 'logo';
$header_logo_alt      = $header_logo_alt      ?? 'Autoverwertung';
$header_logo_title    = $header_logo_title    ?? 'Autoverwertung';
$header_nav_0_title   = $header_nav_0_title   ?? 'Autoverwertung';
$header_nav_1_title   = $header_nav_1_title   ?? 'Motorschaden Ankauf';
$header_nav_2_title   = $header_nav_2_title   ?? 'Unfallwagen Ankauf';

$headerKeys = [
  'autoverwertung'        => 'autoverwertung',
  'motorschaden-ankauf'   => 'motorschaden',
  'unfallwagen-ankauf'    => 'unfallwagen',
];

$headerKeys_imp_dat  = [
  'autoverwertung'        => 'autoverwertung',
  'motorschaden-ankauf'   => 'motorschaden',
  'unfallwagen-ankauf'    => 'unfallwagen',
  'impressum'    => 'impressum',
  'datenschutz'    => 'datenschutz',

];

$HeaderPrefix      = $headerKeys[$currentPage] ?? 'autoverwertung';
$HeaderPrefix_imp_dat  = $headerKeys[$currentPage] ?? $headerKeys_imp_dat[$currentPage] ?? 'autoverwertung';


?>
<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Base is root on live; manual (folder) on localhost -->
    <link rel="icon" type="image/png" href="<?= $base_path ?>/images/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/svg+xml" href="<?= $base_path ?>/images/favicon.svg">
    <link rel="shortcut icon" href="<?= $base_path ?>/images/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= $base_path ?>/images/apple-touch-icon.png">
    <meta name="apple-mobile-web-app-title" content="autoverwertung">
    <link rel="manifest" href="<?= $base_path ?>/images/site.webmanifest">
    <title><?php echo ${$HeaderPrefix_imp_dat . '_head_title'};?></title>
    <meta name="description" content=" <?php echo ${$HeaderPrefix . '_head_description'}; ?>">
    <meta name="keywords" content="<?php echo ${$HeaderPrefix . '_head_keywords'}; ?>">
    <!-- Canonical / Social -->
    <link rel="canonical" href="<?= $canonicalUrl ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?= $canonicalUrl ?>">
    <meta property="og:title" content="<?php echo ${$HeaderPrefix . '_head_title'};?>">
    <meta property="og:description" content="<?php echo ${$HeaderPrefix . '_head_description'};?>">
    <meta property="og:image"
        content="<?= $base_path ?>/images/images/<?php echo $autoverwertung_head_og_image; ?>.jpg">
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="<?= $canonicalUrl ?>">
    <meta name="twitter:title" content="<?php echo ${$HeaderPrefix . '_head_title'};?>">
    <meta name="twitter:description" content="<?php echo ${$HeaderPrefix . '_head_description'};?>">
    <meta name="twitter:image"
        content="<?= $base_path ?>/images/images/<?php echo $autoverwertung_head_twitter_image; ?>.jpg">
    <link rel="stylesheet" href="<?= $base_path ?>/styles/fontawesome/css/all.min.css">
    <!-- base-relative asset path works in localhost subfolder and on live root -->
    <link rel="stylesheet" href="<?php echo $base_path; ?>/styles/style.css">
    <?php
    $faqQuestions = [];
    $faqVarName = $HeaderPrefix . '_faq_1_questions';

    $i = 0;
    while (isset(${$faqVarName . '_' . $i . '_question'})) {
        $faqQuestions[] = [
            'question' => ${$faqVarName . '_' . $i . '_question'},
            'answer' => ${$faqVarName . '_' . $i . '_answer'}
        ];
        $i++;
    }

    $mainEntity = [];
    foreach ($faqQuestions as $q) {
        $mainEntity[] = [
            "@type" => "Question",
            "name" => $q['question'],
            "acceptedAnswer" => [
                "@type" => "Answer",
                "text" => $q['answer'],
            ],
        ];
    }

    $schema = [
        "@context" => "https://schema.org",
        "@type" => "FAQPage",
    ];

    if (!empty($mainEntity)) {
        $schema['mainEntity'] = $mainEntity;
    }

    $jsonSchema = json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);

    echo '<script type="application/ld+json">' . $jsonSchema . '</script>';
    ?>
</head>

<body>
    <header class="sticky top-0 z-50 bg-white shadow">
        <div class="container mx-auto flex items-center justify-between p-4">
            <div class="flex items-center">
                <img src="<?= $base_path ?>/images/<?= rawurlencode($header_logo_imgName) ?>.png"
                    alt="<?= $header_logo_alt ?>" title="<?= $header_logo_title ?>" class="h-12 mr-3">
            </div>

            <div class="flex items-center md:hidden">
                <button class="text-2xl focus:outline-none" aria-label="Menü öffnen" id="navToggle">
                    <i class="fas fa-bars"></i>
                </button>
            </div>

            <!-- Desktop Navigation -->
            <nav class="hidden md:flex space-x-6">
                <a href="<?= $base_path ?>/" class="hover:text-primary hover:cursor-pointer"
                    title="<?= $header_nav_0_title ?>">Autoverwertung</a>
                <a href="<?= $base_path ?>/motorschaden-ankauf/" class="hover:text-primary hover:cursor-pointer"
                    title="<?= $header_nav_1_title ?>">Motorschaden Ankauf</a>
                <a href="<?= $base_path ?>/unfallwagen-ankauf/" class="hover:text-primary hover:cursor-pointer"
                    title="<?= $header_nav_2_title ?>">Unfallwagen Ankauf</a>
            </nav>

            <a href="tel:<?= $phone3 ?>"
                class="font-bold hidden md:flex items-center px-4 py-2 bg-primary text-white rounded hover:bg-primaryDark transition duration-300"
                title="<?= $header_phone_title ?? 'Jetzt anrufen' ?>">
                <i class="fas fa-phone-alt mr-2"></i><?= $phone1 ?>
            </a>
        </div>

        <!-- Mobile Sidebar Overlay -->
        <div id="mobileOverlay" class="fixed top-0 left-0 right-0 bottom-0 bg-black z-40"
            style="background-color: rgba(0,0,0,0.5);"></div>

        <!-- Mobile Sidebar Menu -->
        <nav id="mobileNav" class="fixed top-0 right-0 h-full w-64 bg-white shadow-lg z-50">
            <div class="flex flex-col h-full">
                <!-- Close Button -->
                <div class="flex justify-end p-4 border-b">
                    <button id="navClose" class="text-2xl focus:outline-none" aria-label="Menü schließen">
                        <i class="fas fa-times"></i>
                    </button>
                </div>

                <!-- Navigation Links -->
                <div class="flex flex-col p-4 space-y-4">
                    <a href="<?= $base_path ?>/" class="py-3 px-4 hover:bg-gray-100 rounded transition duration-200"
                        title="<?= $header_nav_0_title ?>">
                        <i class="fas fa-car mr-2"></i>Autoverwertung
                    </a>
                    <a href="<?= $base_path ?>/motorschaden-ankauf/"
                        class="py-3 px-4 hover:bg-gray-100 rounded transition duration-200"
                        title="<?= $header_nav_1_title ?>">
                        <i class="fas fa-wrench mr-2"></i>Motorschaden Ankauf
                    </a>
                    <a href="<?= $base_path ?>/unfallwagen-ankauf/"
                        class="py-3 px-4 hover:bg-gray-100 rounded transition duration-200"
                        title="<?= $header_nav_2_title ?>">
                        <i class="fas fa-car-crash mr-2"></i>Unfallwagen Ankauf
                    </a>
                </div>

                <!-- Phone Button -->
                <div class="mt-auto p-4 border-t">
                    <a href="tel:<?= $phone3 ?>"
                        class="font-bold flex items-center justify-center px-4 py-3 bg-primary text-white rounded hover:bg-primaryDark transition duration-300 w-full"
                        title="<?= $header_phone_title ?? 'Jetzt anrufen' ?>">
                        <i class="fas fa-phone-alt mr-2"></i><?= $phone1 ?>
                    </a>
                </div>
            </div>
        </nav>
    </header>

    <!-- Mobile Phone Number Display -->
<!-- Mobile Phone Bar - Clickable -->
<div class="mobile-phone-bar">
    <a href="tel:<?= $phone3 ?>" class="mobile-phone-link" title="Jetzt anrufen">
        <div class="mobile-phone-icon-wrapper">
            <i class="fas fa-phone-alt mobile-phone-icon"></i>
        </div>
        <div class="mobile-phone-content">
            <span class="mobile-phone-label">Jetzt anrufen</span>
            <span class="mobile-phone-number"><?= $phone1 ?></span>
        </div>
    </a>
</div>
    

    <script>
    // Mobile navigation toggle
    const navToggle = document.getElementById('navToggle');
    const navClose = document.getElementById('navClose');
    const mobileNav = document.getElementById('mobileNav');
    const mobileOverlay = document.getElementById('mobileOverlay');

    function openNav() {
        mobileNav.classList.add('open');
        mobileOverlay.classList.add('open');
        document.body.style.overflow = 'hidden';
    }

    function closeNav() {
        mobileNav.classList.remove('open');
        mobileOverlay.classList.remove('open');
        document.body.style.overflow = '';
    }

    navToggle.addEventListener('click', openNav);
    navClose.addEventListener('click', closeNav);
    mobileOverlay.addEventListener('click', closeNav);

    // Close on link click
    const mobileLinks = mobileNav.querySelectorAll('a');
    mobileLinks.forEach(link => {
        link.addEventListener('click', closeNav);
    });
    </script>