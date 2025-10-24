<?php
$widget5 = [
    'sectionTitle' => $unfallwagen_widget5_sectionTitle,
    'description' => $unfallwagen_widget5_description,
    'features' => [],
];
for ($i = 0; $i < 4; $i++) {
    $widget5['features'][] = [
        'title' => ${'unfallwagen_widget5_features_' . $i . '_title'},
        'description' => ${'unfallwagen_widget5_features_' . $i . '_description'},
    ];
}
$icons = ['fa-car-crash', 'fa-cogs', 'fa-handshake', 'fa-shield-alt'];
?>

<div class=" mt-25 sm:mt-48">
    <div>
        <h2 class="text-primary text-3xl md:text-4xl font-bold leading-tight mb-4">
            <?php echo $widget5['sectionTitle']; ?>
        </h2>
        <p class="text-lg md:text-xl leading-relaxed mb-6"><?php echo $widget5['description']; ?></p>

        <div class="flex flex-wrap justify-between gap-6">
            <?php foreach ($widget5['features'] as $index => $feature): ?>
                <?php $icon = $icons[$index % count($icons)]; ?>
                <div class="flex flex-row items-start w-full sm:w-[48%]">
                    <i class="fas <?php echo $icon; ?> text-4xl text-primary mr-4"></i>
                    <div class="flex flex-col gap-4">
                        <h3 class="text-xl md:text-3xl font-bold leading-tight"><?php echo $feature['title']; ?></h3>
                        <p class="text-lg md:text-xl leading-relaxed"><?php echo $feature['description']; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>