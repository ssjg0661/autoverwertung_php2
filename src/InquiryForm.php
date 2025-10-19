

<div id="inquiry-form-container">
    <h2 class="text-xl sm:text-2xl font-bold mb-4 text-center">Anfrage-Formular in 3 Schritten</h2>
    
    <div id="success-message" class="success-message hidden"></div>
    
    <form id="inquiry-form" class="space-y-4" method="post" enctype="multipart/form-data" novalidate>
        <!-- Schritt 1: Fahrzeuginformationen -->
        <div id="step-1-fields" class="hidden">
            <div class="mb-4">
                <label for="Manufacturer" class="block text-sm sm:text-lg font-semibold mb-1">Hersteller *</label>
                <select id="Manufacturer" name="Manufacturer"
                    class="w-full p-2 sm:p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none"
                    required>
                    <option value="">Marke wählen</option>
                </select>
                <div class="error-message" id="error-Manufacturer"></div>
            </div>

            <div class="flex flex-col md:flex-row md:space-x-4 mb-4">
                <div class="w-full md:w-1/2 mb-4 md:mb-0">
                    <label for="Model" class="block text-sm sm:text-lg font-semibold mb-1">Modell *</label>
                    <input type="text" id="Model" name="Model" placeholder="Modell eingeben"
                        class="w-full p-2 sm:p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none"
                        required>
                    <div class="error-message" id="error-Model"></div>
                </div>

                <div class="w-full md:w-1/2">
                    <label for="TypeOfEngine" class="block text-sm sm:text-lg font-semibold mb-1">Kraftstoff *</label>
                    <select id="TypeOfEngine" name="TypeOfEngine"
                        class="w-full p-2 sm:p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none"
                        required>
                        <option value="">Motorart wählen</option>
                    </select>
                    <div class="error-message" id="error-TypeOfEngine"></div>
                </div>
            </div>

            <div class="flex flex-col md:flex-row md:space-x-4 mb-4">
                <div class="flex flex-col w-full md:w-1/2 mb-4 md:mb-0">
                    <label for="YearOfFirstRegistration" class="block text-sm sm:text-lg font-semibold mb-1">Erstzulassung (Jahr) *</label>
                    <input type="number" id="YearOfFirstRegistration" name="YearOfFirstRegistration"
                        placeholder="Jahreszahl eingeben" min="1900" max="2025"
                        class="w-full p-2 sm:p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none"
                        required>
                    <div class="error-message" id="error-YearOfFirstRegistration"></div>
                </div>

                <div class="flex flex-col w-full md:w-1/2 mb-4 md:mb-0">
                    <label for="Power" class="block text-sm sm:text-lg font-semibold mb-1">Leistung (PS) *</label>
                    <input type="text" id="Power" name="Power" placeholder="Leistung in PS eingeben"
                        class="mt-auto w-full p-2 sm:p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none"
                        required>
                    <div class="error-message" id="error-Power"></div>
                </div>
            </div>
        </div>

        <!-- Schritt 2: Zusätzliche Fahrzeuginformationen + Bilder -->
        <div id="step-2-fields" class="hidden">
            <div class="mb-4">
                <label for="Transmission" class="block text-sm sm:text-lg font-semibold mb-1">Getriebe *</label>
                <select id="Transmission" name="Transmission"
                    class="w-full p-2 sm:p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none"
                    required>
                    <option value="">Getriebeart wählen</option>
                </select>
                <div class="error-message" id="error-Transmission"></div>
            </div>

            <div class="flex flex-col md:flex-row md:space-x-4 mb-4">
                <div class="w-full md:w-1/2 mb-4 md:mb-0">
                    <label for="Mileage" class="block text-sm sm:text-lg font-semibold mb-1">Kilometerstand (km) *</label>
                    <input type="text" id="Mileage" name="Mileage" placeholder="Kilometerstand eingeben"
                        class="w-full p-2 sm:p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none"
                        required>
                    <div class="error-message" id="error-Mileage"></div>
                </div>

                <div class="w-full md:w-1/2 mb-4 md:mb-0">
                    <label for="AskingPrice" class="block text-sm sm:text-lg font-semibold mb-1">Preisvorstellung *</label>
                    <input type="text" id="AskingPrice" name="AskingPrice" placeholder="Preisvorstellung eingeben"
                        class="w-full p-2 sm:p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none"
                        required>
                    <div class="error-message" id="error-AskingPrice"></div>
                </div>
            </div>

            <div class="mb-4">
                <label for="Notes" class="block text-sm sm:text-lg font-semibold mb-1">Anmerkungen</label>
                <textarea id="Notes" name="Notes" placeholder="Zusätzliche Hinweise" rows="4"
                    class="w-full p-2 sm:p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none"></textarea>
            </div>

            <!-- Bildupload-Bereich -->
            <div class="mb-4">
                <label class="block text-sm sm:text-lg font-semibold mb-1">Fahrzeugbilder</label>
                <p class="text-sm text-gray-600 mb-2">Sie können bis zu 10 Bilder hochladen (max. 5MB pro Bild, JPG/PNG/WEBP)</p>
                
                <div id="upload-area" class="upload-area">
                    <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48">
                        <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <p class="mt-2 text-sm text-gray-600">
                        <span class="font-semibold text-blue-600">Klicken zum Hochladen</span> oder Dateien hierher ziehen
                    </p>
                    <input type="file" id="vehicle-images" name="images[]" multiple accept="image/jpeg,image/jpg,image/png,image/webp" class="hidden">
                </div>
                <div class="error-message" id="error-images"></div>
                
                <div id="image-preview-container" class="image-preview-container"></div>
            </div>
        </div>

        <!-- Schritt 3: Kontaktinformationen -->
        <div id="step-3-fields" class="hidden">
            <div class="flex flex-col md:flex-row md:space-x-4 mb-4">
                <div class="w-full md:w-1/2 mb-4 md:mb-0">
                    <label for="Salutation" class="block text-sm sm:text-lg font-semibold mb-1">Anrede *</label>
                    <select id="Salutation" name="Salutation"
                        class="w-full p-2 sm:p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none"
                        required>
                        <option value="">Anrede wählen</option>
                        <option value="Mr.">Herr</option>
                        <option value="Mrs.">Frau</option>
                    </select>
                    <div class="error-message" id="error-Salutation"></div>
                </div>

                <div class="w-full md:w-1/2 mb-4 md:mb-0">
                    <label for="Name" class="block text-sm sm:text-lg font-semibold mb-1">Name *</label>
                    <input type="text" id="Name" name="Name" placeholder="Name eingeben"
                        class="w-full p-2 sm:p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none"
                        required>
                    <div class="error-message" id="error-Name"></div>
                </div>
            </div>

            <div class="mb-4">
                <label for="Street" class="block text-sm sm:text-lg font-semibold mb-1">Straße *</label>
                <input type="text" id="Street" name="Street" placeholder="Straße eingeben"
                    class="w-full p-2 sm:p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none"
                    required>
                <div class="error-message" id="error-Street"></div>
            </div>

            <div class="flex flex-col md:flex-row md:space-x-4 mb-4">
                <div class="w-full md:w-1/2 mb-4 md:mb-0">
                    <label for="ZipCode" class="block text-sm sm:text-lg font-semibold mb-1">PLZ *</label>
                    <input type="text" id="ZipCode" name="ZipCode" placeholder="PLZ eingeben"
                        class="w-full p-2 sm:p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none"
                        required>
                    <div class="error-message" id="error-ZipCode"></div>
                </div>

                <div class="w-full md:w-1/2 mb-4 md:mb-0">
                    <label for="Location" class="block text-sm sm:text-lg font-semibold mb-1">Ort *</label>
                    <input type="text" id="Location" name="Location" placeholder="Ort eingeben"
                        class="w-full p-2 sm:p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none"
                        required>
                    <div class="error-message" id="error-Location"></div>
                </div>
            </div>

            <div class="flex flex-col md:flex-row md:space-x-4 mb-4">
                <div class="w-full md:w-1/2 mb-4 md:mb-0">
                    <label for="Email" class="block text-sm sm:text-lg font-semibold mb-1">E-Mail *</label>
                    <input type="email" id="Email" name="Email" placeholder="E-Mail eingeben"
                        class="w-full p-2 sm:p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none"
                        required>
                    <div class="error-message" id="error-Email"></div>
                </div>

                <div class="w-full md:w-1/2 mb-4 md:mb-0">
                    <label for="Phone" class="block text-sm sm:text-lg font-semibold mb-1">Telefon *</label>
                    <input type="tel" id="Phone" name="Phone" placeholder="Telefonnummer eingeben"
                        class="w-full p-2 sm:p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none"
                        required>
                    <div class="error-message" id="error-Phone"></div>
                </div>
            </div>
        </div>

        <!-- Navigations-Buttons -->
        <div class="flex flex-col sm:flex-row justify-between mt-4 space-y-2 sm:space-y-0">
            <button type="button" id="prev-button"
                class="bg-primary text-white py-2 px-4 rounded-lg font-bold hover:bg-primaryDark transition duration-300">Zurück</button>
            <button type="button" id="next-button"
                class="bg-primary text-white py-2 px-4 rounded-lg font-bold hover:bg-primaryDark transition duration-300">Weiter</button>
            <button type="submit" id="submit-button"
                class="bg-primary text-white py-2 px-4 rounded-lg font-bold hover:bg-primaryDark transition duration-300 hidden">
                <span id="submit-text">Anfrage senden</span>
                <span id="submit-loading" class="hidden">Wird gesendet …</span>
            </button>
        </div>
    </form>
</div>

<script>
document.addEventListener('DOMContentLoaded', () => {
    let currentStep = 0;
    let selectedFiles = [];

    const brands = [
        "Andere", "Abarth", "AC", "Acura", "Aixam", "Alfa Romeo", "Alpina", "Artega", "Asia Motors",
        "Aston Martin", "Audi", "Austin", "Austin Healey", "Bentley", "BMW", "Borgward", "Brilliance",
        "Bugatti", "Buick", "Cadillac", "Casalini", "Caterham", "Chatenet", "Chevrolet", "Chrysler",
        "Citroën", "Cobra", "Corvette", "Dacia", "Daewoo", "Daihatsu", "DeTomaso", "Dodge", "Ferrari",
        "Fiat", "Fisker", "Ford", "GAC Gonow", "Gemballa", "GMC", "Grecav", "Hamann", "Holden", "Honda",
        "Hummer", "Hyundai", "Infiniti", "Isuzu", "Iveco", "Jaguar", "Jeep", "Kia", "Königsegg", "KTM",
        "Lada", "Lamborghini", "Lancia", "Land Rover", "Landwind", "Lexus", "Ligier", "Lincoln", "Lotus",
        "Mahindra", "Maserati", "Maybach", "Mazda", "McLaren", "Mercedes-Benz", "MG", "Microcar", "MINI",
        "Mitsubishi", "Morgan", "Nissan", "NSU", "Oldsmobile", "Opel", "Pagani", "Peugeot", "Piaggio",
        "Plymouth", "Pontiac", "Porsche", "Proton", "Renault", "Rolls-Royce", "Rover", "Ruf", "Saab",
        "Santana", "Seat", "Skoda", "Smart", "speedART", "Spyker", "Ssangyong", "Subaru", "Suzuki",
        "Talbot", "Tata", "Techart", "Tesla", "Toyota", "Trabant", "Triumph", "TVR", "Volkswagen", "Volvo",
        "Wartburg", "Westfield", "Wiesmann"
    ];
    const engineTypes = ["Andere", "Benzin", "Diesel", "Erdgas", "Autogas", "Hybrid", "Elektro"];
    const transmissionTypes = ["Schaltgetriebe", "Automatik", "Andere"];

    const stepFields = [
        document.getElementById('step-1-fields'),
        document.getElementById('step-2-fields'),
        document.getElementById('step-3-fields'),
    ];

    const prevButton = document.getElementById('prev-button');
    const nextButton = document.getElementById('next-button');
    const submitButton = document.getElementById('submit-button');
    const inquiryForm = document.getElementById('inquiry-form');
    const uploadArea = document.getElementById('upload-area');
    const fileInput = document.getElementById('vehicle-images');
    const previewContainer = document.getElementById('image-preview-container');

    // Auswahlfelder füllen
    const manufacturerSelect = document.getElementById('Manufacturer');
    brands.forEach(brand => {
        const option = document.createElement('option');
        option.value = brand;
        option.textContent = brand;
        manufacturerSelect.appendChild(option);
    });

    const engineTypeSelect = document.getElementById('TypeOfEngine');
    engineTypes.forEach(type => {
        const option = document.createElement('option');
        option.value = type;
        option.textContent = type;
        engineTypeSelect.appendChild(option);
    });

    const transmissionSelect = document.getElementById('Transmission');
    transmissionTypes.forEach(type => {
        const option = document.createElement('option');
        option.value = type;
        option.textContent = type;
        transmissionSelect.appendChild(option);
    });

    // Bildupload-Funktionen
    uploadArea.addEventListener('click', () => fileInput.click());

    uploadArea.addEventListener('dragover', (e) => {
        e.preventDefault();
        uploadArea.classList.add('dragover');
    });

    uploadArea.addEventListener('dragleave', () => {
        uploadArea.classList.remove('dragover');
    });

    uploadArea.addEventListener('drop', (e) => {
        e.preventDefault();
        uploadArea.classList.remove('dragover');
        handleFiles(e.dataTransfer.files);
    });

    fileInput.addEventListener('change', (e) => {
        handleFiles(e.target.files);
    });

    function handleFiles(files) {
        const errorDiv = document.getElementById('error-images');
        errorDiv.textContent = '';

        const maxFiles = 10;
        const maxSize = 5 * 1024 * 1024; // 5MB
        const allowedTypes = ['image/jpeg', 'image/jpg', 'image/png', 'image/webp'];

        const newFiles = Array.from(files);
        
        // Prüfen ob Limit überschritten
        if (selectedFiles.length + newFiles.length > maxFiles) {
            errorDiv.textContent = `Maximal ${maxFiles} Bilder erlaubt`;
            return;
        }

        // Dateien validieren
        for (const file of newFiles) {
            if (!allowedTypes.includes(file.type)) {
                errorDiv.textContent = 'Nur JPG, PNG und WEBP Dateien erlaubt';
                return;
            }
            if (file.size > maxSize) {
                errorDiv.textContent = `${file.name} ist zu groß (max. 5MB)`;
                return;
            }
        }

        // Dateien hinzufügen und Vorschau erstellen
        newFiles.forEach(file => {
            selectedFiles.push(file);
            createImagePreview(file, selectedFiles.length - 1);
        });
    }

    function createImagePreview(file, index) {
        const reader = new FileReader();
        reader.onload = (e) => {
            const previewDiv = document.createElement('div');
            previewDiv.className = 'image-preview';
            previewDiv.innerHTML = `
                <img src="${e.target.result}" alt="Preview">
                <button type="button" class="remove-image" data-index="${index}">×</button>
            `;
            
            previewDiv.querySelector('.remove-image').addEventListener('click', () => {
                removeImage(index);
            });
            
            previewContainer.appendChild(previewDiv);
        };
        reader.readAsDataURL(file);
    }

    function removeImage(index) {
        selectedFiles.splice(index, 1);
        updateImagePreviews();
    }

    function updateImagePreviews() {
        previewContainer.innerHTML = '';
        selectedFiles.forEach((file, index) => {
            createImagePreview(file, index);
        });
    }

    function clearErrors() {
        document.querySelectorAll('.error-message').forEach(el => el.textContent = '');
        document.querySelectorAll('.error').forEach(el => el.classList.remove('error'));
    }

    function validateCurrentStep() {
        clearErrors();
        const currentFields = stepFields[currentStep].querySelectorAll('input, select, textarea');
        let isValid = true;

        currentFields.forEach(field => {
            if (field.hasAttribute('required') && !field.value.trim()) {
                field.classList.add('error');
                const errorDiv = document.getElementById(`error-${field.name}`);
                if (errorDiv) {
                    errorDiv.textContent = 'Dieses Feld ist erforderlich';
                }
                isValid = false;
            }
            
            if (field.name === 'Email' && field.value.trim()) {
                const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!emailPattern.test(field.value)) {
                    field.classList.add('error');
                    const errorDiv = document.getElementById(`error-${field.name}`);
                    if (errorDiv) {
                        errorDiv.textContent = 'Bitte eine gültige E-Mail-Adresse eingeben';
                    }
                    isValid = false;
                }
            }
        });

        return isValid;
    }

    function updateFormVisibility() {
        stepFields.forEach((field, index) => {
            if (index === currentStep) {
                field.classList.remove('hidden');
            } else {
                field.classList.add('hidden');
            }
        });

        if (currentStep === 0) {
            prevButton.classList.add('hidden');
        } else {
            prevButton.classList.remove('hidden');
        }

        if (currentStep === stepFields.length - 1) {
            nextButton.classList.add('hidden');
            submitButton.classList.remove('hidden');
        } else {
            nextButton.classList.remove('hidden');
            submitButton.classList.add('hidden');
        }
    }

    function nextStep() {
        if (validateCurrentStep()) {
            currentStep = Math.min(currentStep + 1, stepFields.length - 1);
            updateFormVisibility();
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }
    }

    function prevStep() {
        currentStep = Math.max(currentStep - 1, 0);
        updateFormVisibility();
        window.scrollTo({ top: 0, behavior: 'smooth' });
    }

    async function handleSubmit(event) {
        event.preventDefault();
        
        if (!validateCurrentStep()) {
            return;
        }

        const formData = new FormData(inquiryForm);
        
        // Entferne das Standard-File-Input und füge manuell ausgewählte Dateien hinzu
        formData.delete('images[]');
        selectedFiles.forEach((file, index) => {
            formData.append('images[]', file);
        });

        const submitText = document.getElementById('submit-text');
        const submitLoading = document.getElementById('submit-loading');
        
        submitButton.disabled = true;
        submitText.classList.add('hidden');
        submitLoading.classList.remove('hidden');

        try {
            const response = await fetch('<?= $base_path ?>/contact/contact.php', {
                method: 'POST',
                body: formData
            });

            const result = await response.json();

            if (result.success) {
                const successMsg = document.getElementById('success-message');
                successMsg.textContent = result.message || 'Formular erfolgreich gesendet!';
                successMsg.classList.remove('hidden');
                inquiryForm.reset();
                selectedFiles = [];
                previewContainer.innerHTML = '';
                currentStep = 0;
                updateFormVisibility();
                window.scrollTo({ top: 0, behavior: 'smooth' });
                
                setTimeout(() => {
                    successMsg.classList.add('hidden');
                }, 5000);
            } else {
                alert(result.message || 'Es ist ein Fehler aufgetreten. Bitte erneut versuchen.');
            }
        } catch (error) {
            console.error('Error:', error);
            alert('Es ist ein Fehler aufgetreten. Bitte erneut versuchen.');
        } finally {
            submitButton.disabled = false;
            submitText.classList.remove('hidden');
            submitLoading.classList.add('hidden');
        }
    }

    nextButton.addEventListener('click', nextStep);
    prevButton.addEventListener('click', prevStep);
    inquiryForm.addEventListener('submit', handleSubmit);

    updateFormVisibility();
});
</script>