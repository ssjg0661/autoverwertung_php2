<?php
$carSellingProcess_title = $autoverwertung_carSellingProcess_title;
$carSellingProcess_content = [];
for ($i = 0; $i < 3; $i++) {
    $carSellingProcess_content[] = [
        'strongText' => ${'autoverwertung_carSellingProcess_content_' . $i . '_strongText'},
        'text' => ${'autoverwertung_carSellingProcess_content_' . $i . '_text'},
    ];
}

$customerTrustAndSupport_title = $autoverwertung_customerTrustAndSupport_title;
$customerTrustAndSupport_content = [];
for ($i = 0; $i < 2; $i++) {
    $customerTrustAndSupport_content[] = [
        'text' => ${'autoverwertung_customerTrustAndSupport_content_' . $i . '_text'},
    ];
}
$customerTrustAndSupport_cta_link = $autoverwertung_customerTrustAndSupport_cta_link;
$customerTrustAndSupport_cta_title = $autoverwertung_customerTrustAndSupport_cta_title;
$customerTrustAndSupport_cta_text = $autoverwertung_customerTrustAndSupport_cta_text;

?>

<section class="mt-25 sm:mt-48">
    <div class="container mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <div class="space-y-8">
                <h2 class="text-4xl font-bold text-secondary"><?php echo $carSellingProcess_title; ?></h2>
                <?php foreach ($carSellingProcess_content as $item): ?>
                <p class="text-lg md:text-xl leading-relaxed">
                    <strong><?php echo $item['strongText']; ?></strong> <?php echo $item['text']; ?>
                </p>
                <?php endforeach; ?>
            </div>
            <div class="space-y-8">
                <h2 class="text-3xl md:text-4xl font-bold text-primary w-full"><?php echo $customerTrustAndSupport_title; ?></h2>
                <?php foreach ($customerTrustAndSupport_content as $item): ?>
                <p class="text-lg md:text-xl leading-relaxed"><?php echo $item['text']; ?></p>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="mt-12 text-center">
            <a href="mailto:<?= $email ?>"
                class="text-lg md:text-xl bg-secondary text-white py-3 px-4 font-semibold hover:bg-secondaryDark inline-flex items-center w-auto self-start rounded-lg"
                title="<?php echo $customerTrustAndSupport_cta_title; ?>">
                <?php echo $customerTrustAndSupport_cta_text; ?>
            </a>
        </div>
    </div>
</section>
