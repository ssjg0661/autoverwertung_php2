<?php
$widget4 = [
    'mainTitle' => $unfallwagen_widget4_mainTitle,
    'mainDescription' => $unfallwagen_widget4_mainDescription,
    'subTitle' => $unfallwagen_widget4_subTitle,
    'subDescription' => $unfallwagen_widget4_subDescription,
    'whatsappButtonText' => $unfallwagen_widget4_whatsappButtonText,
    'image' => $unfallwagen_widget4_image,
    'imageAlt' => $unfallwagen_widget4_imageAlt,
    'imageTitle' => $unfallwagen_widget4_imageTitle,
];
?>

<div class=" mt-25 sm:mt-48">
    <div class="flex xl:flex-row flex-col">
        <div class="xl:w-100 flex flex-col gap-14 py-12 bg-gray-50">
            <div class="flex flex-col gap-4">
                <h2 class="text-primary text-3xl md:text-4xl font-bold leading-tight mb-4">
                    <?php echo $widget4['mainTitle']; ?>
                </h2>
                <p class="text-lg md:text-xl leading-relaxed"><?php echo $widget4['mainDescription']; ?></p>
            </div>

            <div class="flex flex-col gap-4">
                <h3 class="text-primary text-3xl md:text-4xl font-bold leading-tight mb-4">
                    <?php echo $widget4['subTitle']; ?>
                </h3>
                <p class="text-lg md:text-xl leading-relaxed"><?php echo $widget4['subDescription']; ?></p>
            </div>
            <a href='#inquiry-form-container' class="text-lg md:text-xl bg-secondary text-white py-3 px-4 font-semibold hover:bg-secondaryDark inline-flex items-center w-auto self-start rounded-lg"><?php echo $widget4['whatsappButtonText']; ?></a>
        </div>

        <!-- Right Section (Image) -->
        <div class="xl:w-70 bg-black flex items-center justify-center">
            <img class="w-full h-full" src="<?= $base_path ?>/images/<?php echo $widget4['image']; ?>.jpg" alt="<?php echo $widget4['imageAlt']; ?>" title="<?php echo $widget4['imageTitle']; ?>">
        </div>
    </div>
</div>
