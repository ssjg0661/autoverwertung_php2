<?php
$widget5_sectionTitle = $motorschaden_widget5_sectionTitle;
$widget5_subtitle = $motorschaden_widget5_subtitle;
$widget5_steps = [];
for ($i = 0; $i < 3; $i++) {
    $widget5_steps[] = [
        'title' => ${'motorschaden_widget5_steps_' . $i . '_title'},
        'image' => ${'motorschaden_widget5_steps_' . $i . '_image'},
        'imageAlt' => ${'motorschaden_widget5_steps_' . $i . '_imageAlt'},
        'imageTitle' => ${'motorschaden_widget5_steps_' . $i . '_imageTitle'},
        'description' => ${'motorschaden_widget5_steps_' . $i . '_description'},
    ];
}
?>

<section class="mt-25 sm:mt-48">
    <h2 class="text-center text-3xl md:text-4xl font-bold text-primary mb-15"><?php echo $widget5_sectionTitle; ?></h2>
    <p class="text-center text-lg md:text-xl leading-relaxed mb-10"><?php echo $widget5_subtitle; ?></p>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <?php foreach ($widget5_steps as $step): ?>
        <div class="flex flex-col items-center text-center p-6 bg-white shadow-lg rounded-lg">
            <img src="<?= $base_path ?>/images/<?php echo $step['image']; ?>.png" alt="<?php echo $step['imageAlt']; ?>"
                title="<?php echo $step['imageTitle']; ?>" class="w-24 h-24 mb-4">
            <h3 class="text-lg md:text-xl font-semibold mb-2"><?php echo $step['title']; ?></h3>
            <p class="text-lg md:text-xl leading-relaxed"><?php echo $step['description']; ?></p>
        </div>
        <?php endforeach; ?>
    </div>
</section>
