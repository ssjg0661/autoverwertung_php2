<?php
$processStepsSection_title = $autoverwertung_processStepsSection_title;
$processSteps = [];
for ($i = 0; $i < 5; $i++) {
    $processSteps[] = [
        'title' => ${'autoverwertung_processSteps_' . $i . '_title'},
        'description' => ${'autoverwertung_processSteps_' . $i . '_description'},
    ];
}

$icons = ['fa-paper-plane', 'fa-calendar-alt', 'fa-car', 'fa-certificate', 'fa-recycle'];

?>

<section id="process" class="relative mt-25 sm:mt-48">
    <div class="relative max-w-5xl mx-auto rounded-lg">
        <h2 class="text-3xl md:text-4xl font-bold text-center mb-15"><?php echo $processStepsSection_title; ?></h2>
        <div class="space-y-8">
            <?php foreach ($processSteps as $index => $step): ?>
            <div
                class="bg-white shadow-lg rounded-lg p-4 sm:p-6 flex flex-col sm:flex-row items-center sm:items-center">
                <div
                    class="text-xl aspect-ratio-1-1 w-16 h-12 flex items-center justify-center bg-primary text-white rounded-full mb-4 sm:mb-0 sm:mr-4">
                    <i class="fas <?php echo $icons[$index % count($icons)]; ?>"></i>
                </div>
                <div class="text-center sm:text-left">
                    <h3 class="mb-1 text-xl sm:text-2xl font-semibold text-gray-800"><?php echo $step['title']; ?></h3>
                    <p class="text-lg md:text-xl leading-relaxed"><?php echo $step['description']; ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
