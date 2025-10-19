<?php
$servicesTitle = $autoverwertung_servicesTitle;
$services = [];
for ($i = 0; $i < 4; $i++) {
    $services[] = [
        'image' => ${'autoverwertung_services_' . $i . '_image'},
        'imageAlt' => ${'autoverwertung_services_' . $i . '_imageAlt'},
        'imageTitle' => ${'autoverwertung_services_' . $i . '_imageTitle'},
        'title' => ${'autoverwertung_services_' . $i . '_title'},
        'description' => ${'autoverwertung_services_' . $i . '_description'},
    ];
}
?>

<section id='services' class="container mt-25 sm:mt-48 scroll-mt-16">
    <h2 class="text-3xl md:text-4xl font-bold text-center mb-15"><?php echo $servicesTitle; ?></h2>
    <div class="grid md:grid-cols-2 gap-8 mt-8">
        <?php foreach ($services as $service): ?>
        <div
            class="p-2 bg-white shadow-lg rounded-lg transform transition-transform duration-1000 hover:scale-105 hover:shadow-xl sm:p-6">
            <div class="mb-4">
                <img src="<?= $base_path ?>/images/<?php echo $service['image']; ?>.jpg"
                    alt="<?php echo $service['imageAlt']; ?>" title="<?php echo $service['imageTitle']; ?>"
                    class="w-full h-48 object-cover rounded-lg" loading="lazy">
            </div>
            <h3 class="mb-5 text-3xl sm:text-3xl font-semibold text-primary"><?php echo $service['title']; ?></h3>
            <p class="text-lg md:text-xl leading-relaxed mt-2"><?php echo $service['description']; ?></p>
        </div>
        <?php endforeach; ?>
    </div>
</section>
