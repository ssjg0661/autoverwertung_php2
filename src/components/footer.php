<?php
include __DIR__ . '/../../config/common.php';
?>
<footer class="bg-gray-800 py-8 sm:py-10 lg:py-12 mt-48 text-white">
    <div class="container mx-auto px-6 sm:px-8 lg:px-12">
        <div class="flex flex-col md:flex-row md:justify-between space-y-6 md:space-y-0 gap-4">
            <!-- Company Title and Description -->
            <div class="text-center md:text-left md:w-1/3">
                <h3 class="text-xl sm:text-2xl font-semibold"><?php echo $footer_title; ?></h3>
                <p class="text-sm sm:text-lg mt-2"><?php echo $footer_description; ?></p>
            </div>
            <!-- Quick Links -->
            <div class="text-center md:text-left md:w-1/3">
                <h3 class="text-lg sm:text-xl font-semibold flex justify-center md:justify-start items-center">Empfohlene Links</h3>
                <ul class="mt-2 space-y-2">
                    <li class="text-sm sm:text-base flex items-center justify-center md:justify-start">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill-alt" viewBox="0 0 16 16"><path d="M12.13 8.75l-5.48 4.8c-.64.56-1.65.1-1.65-.76V3.21a1 1 0 0 1 1.65-.75l5.48 4.79a1 1 0 0 1 0 1.5z"/></svg>
                        <a href="<?= $base_path ?>/" title="Unfallwagen Ankauf" class="hover:underline mx-2">
                            Startseite
                        </a>
                    </li>
                    <li class="text-sm sm:text-base flex items-center justify-center md:justify-start">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill-alt" viewBox="0 0 16 16"><path d="M12.13 8.75l-5.48 4.8c-.64.56-1.65.1-1.65-.76V3.21a1 1 0 0 1 1.65-.75l5.48 4.79a1 1 0 0 1 0 1.5z"/></svg>
                        <a href="<?= $base_path ?>/impressum/" title="Unfallwagen Ankauf" class="hover:underline mx-2">
                            Impressum
                        </a>
                    </li>
                    <li class="text-sm sm:text-base flex items-center justify-center md:justify-start">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill-alt" viewBox="0 0 16 16"><path d="M12.13 8.75l-5.48 4.8c-.64.56-1.65.1-1.65-.76V3.21a1 1 0 0 1 1.65-.75l5.48 4.79a1 1 0 0 1 0 1.5z"/></svg>
                        <a href="<?= $base_path ?>/datenschutz/" title="Unfallwagen Ankauf" class="hover:underline mx-2">
                            Datenschutz
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Contact Information -->
            <div class="text-center md:text-left md:w-1/3">
                <h3 class="text-lg sm:text-xl font-semibold flex justify-center md:justify-start items-center">
                    Kontakt
                </h3>
                <p class="mt-2 text-sm sm:text-base flex items-center justify-center md:justify-start">
                    <i class="fas fa-home mr-2"></i>
                    <?php echo $adresse . ", " . $plz . " " . $land;?> 
                </p>
                <p  class="mt-2 text-sm sm:text-base flex items-center justify-center md:justify-start">
                    <i class="fas fa-phone-alt mr-2"></i>
                    Telefon:&nbsp;
                    <a href="tel:<?= $phone3 ?>" class="hover:underline"><?= $phone1 ?></a>
                </p>
                <p  class="mt-2 text-sm sm:text-base flex items-center justify-center md:justify-start">
                    <i class="fas fa-envelope mr-2"></i>
                    E-Mail:&nbsp;
                     <a href="mailto:<?= $email ?>" class="hover:underline"><?= $email ?></a>
                </p>
            </div>
        </div>

        <!-- Legal Notice -->
        <div class="text-center mt-6 sm:mt-8">
            <span class="text-xs sm:text-sm"> &copy; <?php echo date("Y"); ?>  Copyright. Alle Rechte sind vorbehalten.</span>
        </div>
    </div>
</footer>
<script>
function scrollToSection(sectionId) {
    document.getElementById(sectionId).scrollIntoView({
        behavior: 'smooth'
    });
}
</script>
</body>

</html>