<?php
$sustainabilitySection_title = $autoverwertung_sustainabilitySection_title;
$sustainabilitySection_info = $autoverwertung_sustainabilitySection_info;
$sustainabilitySection_cta = $autoverwertung_sustainabilitySection_cta;
$sustainabilitySection_image = $autoverwertung_sustainabilitySection_image;
$sustainabilitySection_imageAlt = $autoverwertung_sustainabilitySection_imageAlt;
$sustainabilitySection_imageTitle = $autoverwertung_sustainabilitySection_imageTitle;
?>

<section id="sustainability-section" class="mt-25 sm:mt-48 scroll-mt-16">
    <div class="container grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
        <div class="text-gray-800">
            <h2 class="text-3xl md:text-4xl font-bold text-primary mb-6"><?php echo $sustainabilitySection_title; ?>
            </h2>
            <p class="text-lg md:text-xl leading-relaxed"><?php echo $sustainabilitySection_info; ?></p>
            <p class="text-lg md:text-xl leading-relaxed mt-4"><?php echo $sustainabilitySection_cta; ?></p>
        </div>
        <div>
            <img src="<?= $base_path ?>/images/<?php echo $sustainabilitySection_image; ?>.jpg"
                alt="<?php echo $sustainabilitySection_imageAlt; ?>"
                title="<?php echo $sustainabilitySection_imageTitle; ?>" class="rounded-lg shadow-lg">
        </div>
    </div>
</section>
