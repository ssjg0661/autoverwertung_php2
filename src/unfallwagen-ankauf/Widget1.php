<?php
$widget1 = [
    'sectionTitle' => $unfallwagen_widget1_sectionTitle,
    'steps' => [],
];
for ($i = 0; $i < 4; $i++) {
    $widget1['steps'][] = [
        'number' => ${'unfallwagen_widget1_steps_' . $i . '_number'},
        'title' => ${'unfallwagen_widget1_steps_' . $i . '_title'},
        'description' => ${'unfallwagen_widget1_steps_' . $i . '_description'},
    ];
}
?>

<div class=" mt-25 sm:mt-48 space-y-8">
    <h2 class="mb-15 text-3xl md:text-4xl font-bold text-primary w-full">
        <?php echo $widget1['sectionTitle']; ?>
    </h2>
    <div class="items-center flex flex-dep-on-screen gap-4">
        <?php foreach ($widget1['steps'] as $idx => $step): ?>
        <div class="flex flex-col gap-4 xl:w-50 text-center">
            <?php if ($idx % 2 === 0): ?>
            <div class="relative flex items-center justify-center">
                <h3 class="text-8xl font-semibold text-gray-300"><?php echo $step['number']; ?></h3>
                <div class="w-1 h-1 rounded-full bg-white p-2 absolute"></div>
                <div class="w-1 h-1 rounded-full border-primary border-4 absolute"></div>
            </div>
            <?php endif; ?>
            <h4 class="order1 text-xl font-semibold"><?php echo $step['title']; ?></h4>
            <p class="order2 text-lg md:text-xl leading-relaxed"><?php echo $step['description']; ?></p>
            <?php if ($idx % 2 === 1): ?>
            <div class="order3 relative flex items-center justify-center">
                <h3 class=" text-8xl font-semibold text-gray-300"><?php echo $step['number']; ?></h3>
                <div class=" w-1 h-1 rounded-full bg-white p-2 absolute"></div>
                <div class=" w-1 h-1 rounded-full border-primary border-4 absolute"></div>
            </div>
            <?php endif; ?>
        </div>
        <?php endforeach; ?>
    </div>
</div>
