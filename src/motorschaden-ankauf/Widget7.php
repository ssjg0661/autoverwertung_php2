<?php
$widget7_sectionTitle = $motorschaden_widget7_sectionTitle;
$widget7_subtitle = $motorschaden_widget7_subtitle;
$widget7_steps = [];
for ($i = 0; $i < 4; $i++) {
    $widget7_steps[] = [
        'title' => ${'motorschaden_widget7_steps_' . $i . '_title'},
    ];
}

$iconMap = ['fa-paper-plane', 'fa-euro-sign', 'fa-check-circle', 'fa-car'];

?>

<section class="px-6 sm:px-8 md:px-12 lg:px-20 mt-25 sm:mt-48 phone-display-none">
    <div class="text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-primary"><?php echo $widget7_sectionTitle; ?></h2>
        <h3 class="text-lg md:text-xl leading-relaxed mt-4"><?php echo $widget7_subtitle; ?></h3>
    </div>

    <div class="flex flex-col items-center mt-12 sm:mt-20 gap-4">
        <?php foreach ($widget7_steps as $index => $step): ?>
        <div class="flex w-full justify-center">
            <!-- Desktop: Left side text (even indices) -->
            <?php if ($index % 2 === 0): ?>
            <p class="hidden md:block w-56 text-right pr-4 text-xl leading-relaxed"><?php echo $step['title']; ?></p>
            <?php else: ?>
            <div class="hidden md:block w-56"></div>
            <?php endif; ?>

            <!-- Center column with icon and line -->
            <div class="flex flex-col items-center gap-4 flex-shrink-0">
                <div class="text-xl font-bold w-12 h-12 bg-primary text-white flex items-center justify-center rounded-full shadow-lg">
                    <?php echo $index +1; ?>
                </div>
                <?php if ($index < count($widget7_steps) - 1): ?>
                <div class="w-0.5 h-16 bg-primary"></div>
                <?php endif; ?>
            </div>

            <!-- Desktop: Right side text (odd indices) -->
            <?php if ($index % 2 !== 0): ?>
            <p class="hidden md:block w-56 text-left text-xl leading-relaxed pl-4"><?php echo $step['title']; ?></p>
            <?php else: ?>
            <div class="hidden md:block w-56"></div>
            <?php endif; ?>

            <!-- Mobile: Always show text on the right -->
            <p class="md:hidden text-left text-lg pl-4 flex-1"><?php echo $step['title']; ?></p>
        </div>
        <?php endforeach; ?>
    </div>
</section>