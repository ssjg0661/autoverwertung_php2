<?php
include __DIR__ . '/../config/common.php';
?>
<footer class="bg-gray-800 py-8 sm:py-10 lg:py-12 mt-48 text-white">
    <div class="container mx-auto px-6 sm:px-8 lg:px-12">
        <div class="flex flex-col md:flex-row md:justify-between space-y-6 md:space-y-0 gap-4">
            <!-- Company Title and Description -->
            <div class="text-center md:text-left md:w-1/3">
                <p class="text-xl sm:text-2xl font-semibold"><?php echo $footer_title; ?></p>
                <p class="text-sm sm:text-lg mt-2"><?php echo $footer_description; ?></p>
            </div>
            <!-- Quick Links -->
            <div class="text-center md:text-left md:w-1/3">
                <p class="text-lg sm:text-xl font-semibold flex justify-center md:justify-start items-center">
                    Empfohlene Links</p>
                <ul class="mt-2 space-y-2">
                    <li class="text-sm sm:text-base flex items-center justify-center md:justify-start">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-caret-right-fill-alt" viewBox="0 0 16 16">
                            <path
                                d="M12.13 8.75l-5.48 4.8c-.64.56-1.65.1-1.65-.76V3.21a1 1 0 0 1 1.65-.75l5.48 4.79a1 1 0 0 1 0 1.5z" />
                        </svg>
                        <a href="<?= $base_path ?>/" title="Unfallwagen Ankauf" class="hover:underline mx-2">
                            Startseite
                        </a>
                    </li>
                    <li class="text-sm sm:text-base flex items-center justify-center md:justify-start">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-caret-right-fill-alt" viewBox="0 0 16 16">
                            <path
                                d="M12.13 8.75l-5.48 4.8c-.64.56-1.65.1-1.65-.76V3.21a1 1 0 0 1 1.65-.75l5.48 4.79a1 1 0 0 1 0 1.5z" />
                        </svg>
                        <a href="<?= $base_path ?>/impressum/" title="Unfallwagen Ankauf" class="hover:underline mx-2">
                            Impressum
                        </a>
                    </li>
                    <li class="text-sm sm:text-base flex items-center justify-center md:justify-start">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-caret-right-fill-alt" viewBox="0 0 16 16">
                            <path
                                d="M12.13 8.75l-5.48 4.8c-.64.56-1.65.1-1.65-.76V3.21a1 1 0 0 1 1.65-.75l5.48 4.79a1 1 0 0 1 0 1.5z" />
                        </svg>
                        <a href="<?= $base_path ?>/datenschutz/" title="Unfallwagen Ankauf"
                            class="hover:underline mx-2">
                            Datenschutz
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Contact Information -->
            <div class="text-center md:text-left md:w-1/3">
                <p class="text-lg sm:text-xl font-semibold flex justify-center md:justify-start items-center">
                    Kontakt
                </p>
                <p class="gap-2 mt-2 text-sm sm:text-base flex items-center justify-center md:justify-start">
                    <svg  fill="white" enable-background="new 0 0 512 512" height="16" viewBox="0 0 512 512"
                        width="16" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="m497.52 214.92-208.36-201.44c-18.59-17.98-47.73-17.98-66.33 0l-208.35 201.44c-13.98 13.52-18.28 33.87-10.96 51.85s24.64 29.6 44.12 29.6h6.38v148.25c0 37.16 30.35 67.39 67.66 67.39h46.61v-145.26c0-37.16 30.35-67.39 67.66-67.39h40.09c37.31 0 67.66 30.23 67.66 67.39v145.25h46.61c37.31 0 67.66-30.23 67.66-67.39v-148.24h6.38c19.48 0 36.8-11.62 44.12-29.6 7.33-17.98 3.03-38.33-10.95-51.85z" />
                    </svg>
                    <?php echo $adresse . ", " . $plz . " " . $land;?>
                </p>
                <p class="gap-2 mt-2 text-sm sm:text-base flex items-center justify-center md:justify-start">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        width="16" height="16" viewBox="0 0 16 16">
                        <path fill="white"
                            d="M12.2 10c-1.1-0.1-1.7 1.4-2.5 1.8-1.3 0.7-3.7-1.8-3.7-1.8s-2.5-2.4-1.9-3.7c0.5-0.8 2-1.4 1.9-2.5-0.1-1-2.3-4.6-3.4-3.6-2.4 2.2-2.6 3.1-2.6 4.9-0.1 3.1 3.9 7 3.9 7 0.4 0.4 3.9 4 7 3.9 1.8 0 2.7-0.2 4.9-2.6 1-1.1-2.5-3.3-3.6-3.4z">
                        </path>
                    </svg>
                    Telefon:&nbsp;
                    <a href="tel:<?= $phone3 ?>" class="hover:underline"><?= $phone1 ?></a>
                </p>
                <p class="gap-2 mt-2 text-sm sm:text-base flex items-center justify-center md:justify-start">
                    <svg  fill="white" enable-background="new 0 0 265 195" height="16" viewBox="0 0 265 195"
                        width="16" xmlns="http://www.w3.org/2000/svg">
                        <g >
                            <path clip-rule="evenodd"
                                d="m17.549.291h229.901c3.388 0 6.553.959 9.238 2.653l-124.124 104.082-122.686-104.945c2.301-1.151 4.922-1.79 7.671-1.79zm247.355 15.695c.064.607.096 1.215.096 1.822v159.352c0 2.397-.479 4.667-1.343 6.713l-83.368-96.826zm-12.595 178.052c-1.534.448-3.165.671-4.859.671h-229.901c-1.502 0-2.909-.192-4.315-.511l83.56-97.785 30.752 26.244c2.845 2.589 7.065 2.461 9.782.128l31.135-25.957zm-250.743-9.654c-1.023-2.205-1.566-4.667-1.566-7.224v-159.352c0-1.279.128-2.525.416-3.74l84.71 72.435z"
                                fill-rule="evenodd" />
                        </g>
                    </svg>
                    E-Mail:&nbsp;
                    <a href="mailto:<?= $email ?>" class="hover:underline"><?= $email ?></a>
                </p>
            </div>
        </div>

        <!-- Legal Notice -->
        <div class="text-center mt-6 sm:mt-8">
            <span class="text-xs sm:text-sm"> &copy; <?php echo date("Y"); ?> Copyright. Alle Rechte sind
                vorbehalten.</span>
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