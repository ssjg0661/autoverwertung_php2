<?php
$salesProcess_sectionTitle = $autoverwertung_salesProcess_sectionTitle;
$salesProcess_steps = [];
for ($i = 0; $i < 3; $i++) {
    $salesProcess_steps[] = [
        'title' => ${'autoverwertung_salesProcess_steps_' . $i . '_title'},
        'description' => ${'autoverwertung_salesProcess_steps_' . $i . '_description'},
    ];
}

$iconMap = ['fa-phone', 'fa-clipboard-list', 'fa-handshake', 'fa-truck', 'fa-money-bill-wave'];

?>

<section id="process-section" class="mt-25 sm:mt-48 scroll-mt-16">
    <div class="container">
            <h2 class="text-center text-3xl md:text-4xl font-bold text-primary mb-15"><?php echo $salesProcess_sectionTitle; ?></h2>
    <div class="flex flex-col md:flex-row gap-x-8">
        <?php foreach ($salesProcess_steps as $index => $step): ?>
            <div class="flex flex-col items-center gap-y-4 p-4 sm:p-6 flex-1">
                <div class="text-primary mb-4">
                    <i class="fas <?php echo $iconMap[$index % count($iconMap)]; ?> fa-4x"></i>
                </div>
                <h3 class="text-center text-2xl font-semibold"><?php echo $step['title']; ?></h3>
                <p class="text-lg md:text-xl leading-relaxed"><?php echo $step['description']; ?></p>
            </div>
        <?php endforeach; ?>
    </div>
    </div>
</section>
