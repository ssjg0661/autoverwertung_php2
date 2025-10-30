<?php
$carSellingProcess = [
    'title' => $unfallwagen_carSellingProcess_title,
    'content' => [],
];
for ($i = 0; $i < 3; $i++) {
    $carSellingProcess['content'][] = [
        'strongText' => ${'unfallwagen_carSellingProcess_content_' . $i . '_strongText'},
        'text' => ${'unfallwagen_carSellingProcess_content_' . $i . '_text'},
    ];
}

$customerTrustAndSupport = [
    'title' => $unfallwagen_customerTrustAndSupport_title,
    'content' => [],
    'cta' => [
        'link' => $unfallwagen_customerTrustAndSupport_cta_link,
        'title' => $unfallwagen_customerTrustAndSupport_cta_title,
        'text' => $unfallwagen_customerTrustAndSupport_cta_text,
    ],
];
for ($i = 0; $i < 2; $i++) {
    $customerTrustAndSupport['content'][] = [
        'text' => ${'unfallwagen_customerTrustAndSupport_content_' . $i . '_text'},
    ];
}
?>

<section class="mt-25 sm:mt-48">
    <div class="container mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Car Selling Process -->
            <div class="space-y-8">
                <h2 class="text-3xl md:text-4xl font-bold text-primary w-full">
                    <?php echo $carSellingProcess['title']; ?>
                </h2>
                <?php foreach ($carSellingProcess['content'] as $item): ?>
                <p class="text-lg md:text-xl leading-relaxed">
                    <strong><?php echo $item['strongText']; ?></strong> <?php echo $item['text']; ?>
                </p>
                <?php endforeach; ?>
            </div>

            <!-- Customer Trust and Support -->
            <div class="space-y-8">
                <h2 class="text-3xl md:text-4xl font-bold text-primary w-full">
                    <?php echo $customerTrustAndSupport['title']; ?>
                </h2>
                <?php foreach ($customerTrustAndSupport['content'] as $item): ?>
                <p class="text-lg md:text-xl leading-relaxed">
                    <?php echo $item['text']; ?>
                </p>
                <?php endforeach; ?>
                <div class="mt-6">
                    <a href="#inquiry-form-container"
                        class="text-lg md:text-xl bg-secondary text-white py-3 px-4 font-semibold hover:bg-secondaryDark inline-flex items-center w-auto self-start rounded-lg"
                        title="<?php echo $customerTrustAndSupport['cta']['title']; ?>">
                        <?php echo $customerTrustAndSupport['cta']['text']; ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>