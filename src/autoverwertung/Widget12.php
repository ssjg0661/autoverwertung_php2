<?php
$widget12_featuresTitle = $autoverwertung_widget12_featuresTitle;
$widget12_sectionTitle = $autoverwertung_widget12_sectionTitle;
$widget12_sectionDescription = $autoverwertung_widget12_sectionDescription;
$widget12_featuresList = [
    $autoverwertung_widget12_featuresList_0,
    $autoverwertung_widget12_featuresList_1,
    $autoverwertung_widget12_featuresList_2,
    $autoverwertung_widget12_featuresList_3,
];
$widget12_cards = [
    [
        'title' => $autoverwertung_widget12_cards_0_title,
        'description' => $autoverwertung_widget12_cards_0_description,
    ],
    [
        'title' => $autoverwertung_widget12_cards_1_title,
        'description' => $autoverwertung_widget12_cards_1_description,
    ],
    [
        'title' => $autoverwertung_widget12_cards_2_title,
        'description' => $autoverwertung_widget12_cards_2_description,
    ],
    [
        'title' => $autoverwertung_widget12_cards_3_title,
        'description' => $autoverwertung_widget12_cards_3_description,
    ],
];


$iconSvgs = [
    '<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24" fill="currentColor"><path d="M4 8h4V4H4v4zm6 12h4v-4h-4v4zm-6 0h4v-4H4v4zm0-6h4v-4H4v4zm6 0h4v-4h-4v4zm6-10v4h4V4h-4zm-6 4h4V4h-4v4zm6 6h4v-4h-4v4zm0 6h4v-4h-4v4z"/></svg>',
    '<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24" fill="currentColor"><path d="M15.5 1h-8C6.12 1 5 2.12 5 3.5v17C5 21.88 6.12 23 7.5 23h8c1.38 0 2.5-1.12 2.5-2.5v-17C18 2.12 16.88 1 15.5 1zm-4 21c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5zm4.5-4H7V4h9v14z"/></svg>',
    '<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24" fill="currentColor"><path d="M12 16.5l4-4h-3v-9h-2v9H8l4 4zm9-13h-6v1.99h6v14.03H3V5.49h6V3.5H3c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h18c1.1 0 2-.9 2-2v-14c0-1.1-.9-2-2-2z"/></svg>',
    '<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24" fill="currentColor"><path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/></svg>',
];

?>

<section class="container mt-25 sm:mt-48 scroll-mt-16 mx-auto flex flex-wrap items-center gap-8">

    <div class="flex-1 min-w-[250px] pr-5 mb-8">
        <h2 class="text-3xl md:text-4xl font-bold leading-tight mb-4"><?php echo $widget12_sectionTitle; ?></h2>
        <p class="text-lg md:text-xl leading-relaxed"><?php echo $widget12_sectionDescription; ?></p>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-5 gap-y-3 mt-5">
            <?php foreach ($widget12_featuresList as $feature): ?>
            <div class="flex items-center">
                <div class="w-5 h-5 bg-primary text-white rounded-full flex items-center justify-center mr-2 aspect-ratio-1-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" fill="white" viewBox="0 0 24 24">
                        <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z" />
                    </svg>
                </div>
                <span class="text-lg md:text-xl leading-relaxed"><?php echo $feature; ?></span>
            </div>
            <?php endforeach; ?>
        </div>
    </div>

    <div class="flex-1-3 min-w-[300px] grid grid-cols-1 sm:grid-cols-2 gap-5">
        <?php foreach ($widget12_cards as $index => $card): ?>
        <div class="bg-gray-100 rounded-xl p-6 hover:-translate-y-1 transition-transform duration-300">
            <div class="w-12 h-12 bg-gray-200 text-primary rounded-lg flex items-center justify-center mb-5">
                <?php echo $iconSvgs[$index]; ?>
            </div>
            <h3 class="text-xl lg:text-2xl font-semibold mb-2"><?php echo $card['title']; ?></h3>
            <p class="text-lg md:text-xl leading-relaxed"><?php echo $card['description']; ?></p>
        </div>
        <?php endforeach; ?>
    </div>
</section>
