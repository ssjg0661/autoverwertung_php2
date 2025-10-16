<?php
$textSection1_mainSection_title = $autoverwertung_textSection1_mainSection_title;
$textSection1_mainSection_description = $autoverwertung_textSection1_mainSection_description;
$textSection1_mainSection_whatsappLink = $autoverwertung_textSection1_mainSection_whatsappLink;
$textSection1_mainSection_whatsappButtonText = $autoverwertung_textSection1_mainSection_whatsappButtonText;
$textSection1_sustainabilitySection_title = $autoverwertung_textSection1_sustainabilitySection_title;
$textSection1_sustainabilitySection_description = $autoverwertung_textSection1_sustainabilitySection_description;
?>

<!-- <section id="text-section-1" class="relative mt-25 sm:mt-48 py-10 px-8 sm:px-10 md:px-14 lg:px-20 bg-gradient-to-r from-blue-50 via-white to-blue-50 rounded-lg shadow-xl scroll-mt-16">
    <div class="max-w-5xl mx-auto text-center space-y-6">
        <h2 class="text-4xl md:text-4xl font-bold leading-tight"><?php echo $textSection1_mainSection_title; ?></h2>
        <p class="text-lg md:text-xl leading-relaxed"><?php echo $textSection1_mainSection_description; ?></p>
        <a href="<?php echo $textSection1_mainSection_whatsappLink; ?>" target="_blank" class="bg-primary text-white py-3 px-8 rounded-full inline-flex items-center shadow-lg transform hover:scale-105 text-2xl md:text-3xl font-bold">
            <?php echo $textSection1_mainSection_whatsappButtonText; ?>
        </a>
    </div>
    <div class="mt-10 max-w-5xl mx-auto text-center border-t-2 border-gray-100 pt-8">
        <h3 class="text-lg md:text-xl leading-relaxed mb-4"><?php echo $textSection1_sustainabilitySection_title; ?></h3>
        <p class="text-lg md:text-xl leading-relaxed"><?php echo $textSection1_sustainabilitySection_description; ?></p>
    </div>
</section> -->


<section id="text-section-1" class="relative mt-25 sm:mt-48 scroll-mt-16">
    <div class="mx-auto container">
        <div class="bg-white rounded-2xl shadow-2xl space-y-8">
            <div class="space-y-6">
                <h2 class="text-3xl md:text-4xl font-bold leading-tight text-primary text-left">
                    <?php echo $textSection1_mainSection_title; ?>
                </h2>
                <p class="text-lg md:text-xl mb-15 leading-relaxed text-left">
                    <?php echo $textSection1_mainSection_description; ?>
                </p>

                <!-- Sustainability Section -->
                <div class="sustainability-section">
                    <h3 class="text-xl md:text-2xl font-semibold text-left mb-4 text-green-800">
                        <?php echo $textSection1_sustainabilitySection_title; ?>
                    </h3>
                    <p class="text-lg md:text-xl leading-relaxed text-left text-green-700 font-medium">
                        <?php echo $textSection1_sustainabilitySection_description; ?>
                    </p>
                </div>
            </div>

            <div class="flex justify-end pt-4">
                <a href="tel:<?= $phone3 ?>" class="text-3xl md:text-3xl bg-secondary text-white py-3 px-4 font-semibold hover:bg-secondaryDark inline-flex items-center w-auto self-start rounded-lg"><?= $phone1 ?></a>
            </div>
        </div>
    </div>
</section>
