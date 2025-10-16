<?php
$widget2_title = $motorschaden_widget2_title;
$widget2_description = $motorschaden_widget2_description;
$widget2_whatsappLink = $motorschaden_widget2_whatsappLink;
$widget2_whatsappButtonText = $motorschaden_widget2_whatsappButtonText;
$widget2_image = $motorschaden_widget2_image;
$widget2_imageAlt = $motorschaden_widget2_imageAlt;
$widget2_imageTitle = $motorschaden_widget2_imageTitle;
?>

<section class="mt-25 sm:mt-48">
    <div class="flex xl:flex-row flex-col">
        <div class="justify-between xl:w-100 flex flex-col gap-14 py-12 px-8 bg-gray-100">
            <div class="flex flex-col gap-4">
                <h2 class="mb-10 text-3xl md:text-4xl font-bold"><?php echo $widget2_title; ?></h2>
                <p class="text-lg md:text-xl leading-relaxed text-black"><?php echo $widget2_description; ?></p>
            </div>
            <div>
                <a href="tel:<?= $phone3 ?>" target="_blank"
                    class="text-3xl md:text-3xl bg-secondary text-white py-3 px-4 font-semibold hover:bg-secondaryDark inline-flex items-center w-auto self-start rounded-lg">
                    <?= $phone1 ?>
                </a>
            </div>
        </div>
        <div class="xl:w-50 bg-black flex items-center justify-center">
            <img class="w-full h-full" src="<?= $base_path ?>/images/<?php echo $widget2_image; ?>.jpg"
                alt="<?php echo $widget2_imageAlt; ?>" title="<?php echo $widget2_imageTitle; ?>">
        </div>
    </div>
</section>
