<?php
$widget4_sectionTitle = $motorschaden_widget4_sectionTitle;
$widget4_subtitle = $motorschaden_widget4_subtitle;
$widget4_services = [];
for ($i = 0; $i < 4; $i++) {
    $widget4_services[] = [
        'title' => ${'motorschaden_widget4_services_' . $i . '_title'},
        'text' => ${'motorschaden_widget4_services_' . $i . '_text'},
        'bg' => ${'motorschaden_widget4_services_' . $i . '_bg'},
    ];
}

$iconMap = ['fa-edit', 'fa-calendar', 'fa-message', 'fa-cart-shopping'];

?>

<section class="mt-25 sm:mt-48">
    <div class="flex flex-col items-center space-y-6">
        <div class="text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-primary"><?php echo $widget4_sectionTitle; ?></h2>
            <h3 class="text-lg md:text-xl leading-relaxed mt-4"><?php echo $widget4_subtitle; ?></h3>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-2 w-full">
            <?php foreach ($widget4_services as $index => $item): ?>
            <div class="flex items-center mobile-p-0 <?php echo $item['bg']; ?>">
                <div class="phone-display-none p-3 bg-white rounded-full shadow self-start">
                    <i class="fas <?php echo $iconMap[$index % count($iconMap)]; ?> fa-xl text-primary"></i>
                </div>
                <div class="ml-4 self-start">
                    <h4 class="text-3xl font-semibold mb-5"><?php echo $item['title']; ?></h4>
                    <p class="text-lg md:text-xl leading-relaxed"><?php echo $item['text']; ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>