<?php
$widget6 = [
    'sectionTitle' => $unfallwagen_widget6_sectionTitle,
    'description' => $unfallwagen_widget6_description,
    'tips' => [],
];
for ($i = 0; $i < 5; $i++) {
    $widget6['tips'][] = [
        'title' => ${'unfallwagen_widget6_tips_' . $i . '_title'},
        'text' => ${'unfallwagen_widget6_tips_' . $i . '_text'},
    ];
}
?>

<div class=" mt-25 sm:mt-48">
    <div class="flex flex-col w-full gap-6 px-4 md:px-12 py-10 bg-gray-50 rounded-lg shadow-md">
        <h2 class="text-primary text-3xl md:text-4xl font-bold leading-tight mb-6 text-center">
            <?php echo $widget6['sectionTitle']; ?>
        </h2>
        <p class="text-lg md:text-xl leading-relaxed mb-6"><?php echo $widget6['description']; ?></p>
        <ul class="list-disc list-inside">
            <?php foreach ($widget6['tips'] as $tip): ?>
            <li class="mb-2">
                <span class="text-lg md:text-xl leading-relaxed font-bold"><?php echo $tip['title']; ?>: </span>
                <span class="text-lg md:text-xl leading-relaxed"><?php echo $tip['text']; ?></span>
            </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>