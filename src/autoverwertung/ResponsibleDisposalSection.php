<?php
$responsibleDisposalSection_title = $autoverwertung_responsibleDisposalSection_title;
$responsibleDisposalSection_info = $autoverwertung_responsibleDisposalSection_info;
$responsibleDisposalSection_cta = $autoverwertung_responsibleDisposalSection_cta;
$responsibleDisposalSection_image = $autoverwertung_responsibleDisposalSection_image;
$responsibleDisposalSection_imageAlt = $autoverwertung_responsibleDisposalSection_imageAlt;
$responsibleDisposalSection_imageTitle = $autoverwertung_responsibleDisposalSection_imageTitle;
?>


<section id="responsible-disposal-section" class="mt-25 sm:mt-48 scroll-mt-16">
    <div class="container">
        <div class="flex flex-col md:flex-row gap-8 items-center">
            <div class="flex-1">
                <img src="<?= $base_path ?>/images/<?php echo $responsibleDisposalSection_image; ?>.jpg"
                    alt="<?php echo $responsibleDisposalSection_imageAlt; ?>"
                    title="<?php echo $responsibleDisposalSection_imageTitle; ?>"
                    class="rounded-lg shadow-lg w-full spect-ratio-1-1 object-cover">
            </div>
            <div class="flex-1-3">
                <h2 class="text-3xl md:text-4xl font-bold text-secondary mb-6">
                    <?php echo $responsibleDisposalSection_title; ?></h2>
                <p class="text-lg md:text-xl leading-relaxed"><?php echo $responsibleDisposalSection_info; ?></p>
                <p class="mt-4 text-lg md:text-xl leading-relaxed"><?php echo $responsibleDisposalSection_cta; ?></p>
            </div>
        </div>
    </div>
</section>
