<?php
$widget2 = [
    'sectionTitle' => $unfallwagen_widget2_sectionTitle,
    'subtitle' => $unfallwagen_widget2_subtitle,
    'phone' => $unfallwagen_widget2_phone,
    'email' => $unfallwagen_widget2_email,
];
?>

<div class=" mt-25 sm:mt-48">
    <div class="text-center flex flex-col items-center bg-gray-50 p-16">
        <h2 class="text-3xl md:text-4xl leading-tight text-primary font-bold mb-6">
            <?php echo $widget2['sectionTitle']; ?>
        </h2>
        <h3 class="text-2xl md:text-2xl"><?php echo $widget2['subtitle']; ?></h3>
        <div class="flex flex-column md:flex-row justify-between w-full max-w-2xl mt-6">
            <!-- Phone Section -->
            <div class="flex flex-row gap-4 items-center text-center">
                <i class="fas fa-phone-alt text-secondaryDark text-xl"></i>
                <span class="text-lg md:text-xl"><?= $phone1 ?></span>
            </div>
            <!-- Email Section -->
            <div class="flex flex-row gap-4 items-center text-center">
                <i class="fas fa-envelope text-secondaryDark text-xl"></i>
                <span class="text-lg md:text-xl"><?= $email ?></span>
            </div>
        </div>
    </div>
</div>