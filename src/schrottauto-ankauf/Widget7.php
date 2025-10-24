<?php
$widget7 = [
    'steps' => [],
];
for ($i = 0; $i < 3; $i++) {
    $widget7['steps'][] = [
        'title' => ${'unfallwagen_widget7_steps_' . $i . '_title'},
        'description' => ${'unfallwagen_widget7_steps_' . $i . '_description'},
    ];
}
$icons = ['fa-calendar-alt', 'fa-car-side', 'fa-money-bill-wave'];
?>

<div class="mt-25 sm:mt-48">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mx-auto mt-12 sm:mt-20">
        <?php foreach ($widget7['steps'] as $idx => $step): ?>
        <?php $icon = $icons[$idx % count($icons)]; ?>
        <div class="flex flex-col items-center p-6 bg-white rounded-lg shadow-lg">
            <div class="bg-gray-200 p-6 rounded-lg">
                <i class="fas <?php echo $icon; ?> text-6xl text-primary"></i>
            </div>
            <h3 class="text-xl md:text-3xl font-bold leading-tight mt-4 mb-4 text-center">
                <?php echo $step['title']; ?>
            </h3>
            <p class="text-lg md:text-xl leading-relaxed text-center mt-auto">
                <?php echo $step['description']; ?>
            </p>
        </div>
        <?php endforeach; ?>
    </div>
</div>