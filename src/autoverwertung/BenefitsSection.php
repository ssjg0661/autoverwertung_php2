<?php
$benefitsSection_title = $autoverwertung_benefitsSection_title;
$benefitsSection_benefits = [];
for ($i = 0; $i < 6; $i++) {
    $benefitsSection_benefits[] = [
        'title' => ${'autoverwertung_benefits_' . $i . '_title'},
        'description' => ${'autoverwertung_benefits_' . $i . '_description'},
    ];
}

$iconMap = ['fa-paper-plane', 'fa-money-check-alt', 'fa-leaf', 'fa-truck', 'fa-smile', 'fa-handshake'];

?>

<section id="benefits" class="relative mt-25 sm:mt-48 px-6 py-6 sm:px-8 md:py-10 md:px-10 lg:px-12 bg-white scroll-mt-16">
    <div class="absolute inset-0 bg-gradient-to-r from-green-400 via-gray-200 to-blue-300 opacity-90 rounded-lg"></div>
    <div class="relative container mx-auto text-center">
        <h2 class="text-3xl sm:text-4xl font-bold mb-15 sm:mb-10 mt-2"><?php echo $benefitsSection_title; ?></h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
            <?php foreach ($benefitsSection_benefits as $index => $benefit): ?>
            <div
                class="p-4 sm:p-6 bg-gray-50 border rounded-lg shadow-lg hover:shadow-xl transition-shadow flex flex-col justify-between h-full">
                <div class="flex items-center mb-4 h-14">
                    <div class="mr-4">
                        <i class="fas <?php echo $iconMap[$index % count($iconMap)]; ?> fa-lg text-primary"></i>
                    </div>
                    <h3 class="text-xl sm:text-2xl font-semibold text-primary"><?php echo $benefit['title']; ?></h3>
                </div>
                <div class="flex-grow">
                    <p class="text-left text-lg md:text-xl leading-relaxed"><?php echo $benefit['description']; ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
