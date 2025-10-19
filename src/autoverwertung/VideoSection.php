<?php
$videoSection_title = $autoverwertung_videoSection_title;
$videoSection_videoLink = $autoverwertung_videoSection_videoLink;
?>

<section id="video-section" class="mt-25 sm:mt-48 scroll-mt-16">
    <h2 class="text-center text-3xl md:text-4xl font-bold text-primary mb-15"><?php echo $videoSection_title; ?></h2>
    <div class="aspect-video w-1/2 h-1/2 ml-auto mr-auto">
        <iframe src="<?php echo $videoSection_videoLink; ?>" title="<?php echo $videoSection_title; ?>" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen
            class="w-full h-full rounded-lg shadow-lg"></iframe>
    </div>
</section>
