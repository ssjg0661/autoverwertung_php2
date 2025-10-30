<?php
$widget2 = [
    'sectionTitle' => $unfallwagen_widget2_sectionTitle,
    'subtitle' => $unfallwagen_widget2_subtitle,
    'phone' => $unfallwagen_widget2_phone,
    'email' => $unfallwagen_widget2_email,
];
?>

<div class="mt-25 sm:mt-48">
    <div class="text-center flex flex-col items-center bg-gray-50 p-16">
        <h2 class="text-3xl md:text-4xl leading-tight text-primary font-bold mb-6">
            <?php echo $widget2['sectionTitle']; ?>
        </h2>
        <h3 class="text-2xl md:text-2xl"><?php echo $widget2['subtitle']; ?></h3>
        <div class="flex flex-column md:flex-row justify-between w-full max-w-2xl mt-6">
            <!-- Phone Section -->
            <div class="flex flex-row gap-4 items-center text-center text-primary">
                <svg version="1.1" fill="currentColor" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 16 16">
                        <path d="M12.2 10c-1.1-0.1-1.7 1.4-2.5 1.8-1.3 0.7-3.7-1.8-3.7-1.8s-2.5-2.4-1.9-3.7c0.5-0.8 2-1.4 1.9-2.5-0.1-1-2.3-4.6-3.4-3.6-2.4 2.2-2.6 3.1-2.6 4.9-0.1 3.1 3.9 7 3.9 7 0.4 0.4 3.9 4 7 3.9 1.8 0 2.7-0.2 4.9-2.6 1-1.1-2.5-3.3-3.6-3.4z">
                        </path>
                    </svg>
                <a href="tel:<?= $phone3 ?>" class="text-lg md:text-xl hover:text-primary text-black transition-colors duration-200">
                    <?= $phone1 ?>
                </a>
            </div>
            <!-- Email Section -->
            <div class="flex flex-row gap-4 items-center text-primary text-center">
                <svg  fill="currentColor" enable-background="new 0 0 265 195" height="20" viewBox="0 0 265 195" width="20" xmlns="http://www.w3.org/2000/svg">
                        <g >
                            <path clip-rule="evenodd" d="m17.549.291h229.901c3.388 0 6.553.959 9.238 2.653l-124.124 104.082-122.686-104.945c2.301-1.151 4.922-1.79 7.671-1.79zm247.355 15.695c.064.607.096 1.215.096 1.822v159.352c0 2.397-.479 4.667-1.343 6.713l-83.368-96.826zm-12.595 178.052c-1.534.448-3.165.671-4.859.671h-229.901c-1.502 0-2.909-.192-4.315-.511l83.56-97.785 30.752 26.244c2.845 2.589 7.065 2.461 9.782.128l31.135-25.957zm-250.743-9.654c-1.023-2.205-1.566-4.667-1.566-7.224v-159.352c0-1.279.128-2.525.416-3.74l84.71 72.435z" fill-rule="evenodd"></path>
                        </g>
                    </svg>
                <a href="mailto:<?= $email ?>" class="text-lg md:text-xl hover:text-primary text-black transition-colors duration-200">
                    <?= $email ?>
                </a>
            </div>
        </div>
    </div>
</div>