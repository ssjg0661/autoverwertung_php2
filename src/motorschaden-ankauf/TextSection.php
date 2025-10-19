<?php
$textSection1_mainSection_title = $motorschaden_textSection1_mainSection_title;
$textSection1_mainSection_description = $motorschaden_textSection1_mainSection_description;
$textSection1_mainSection_whatsappLink = $motorschaden_textSection1_mainSection_whatsappLink;
$textSection1_mainSection_whatsappButtonText = $motorschaden_textSection1_mainSection_whatsappButtonText;
$textSection1_sustainabilitySection_title = $motorschaden_textSection1_sustainabilitySection_title;
$textSection1_sustainabilitySection_description = $motorschaden_textSection1_sustainabilitySection_description;
?>

<section id="text-section-1"
    class="relative mt-25 sm:mt-48 py-10 px-8 sm:px-10 md:px-14 lg:px-20 bg-gradient-to-r from-blue-50 via-white to-blue-50 rounded-lg shadow-xl scroll-mt-16 text-gray-800">
    <div class="max-w-5xl mx-auto text-center space-y-6">
        <h2 class="text-4xl md:text-4xl font-extrabold leading-tight"><?php echo $textSection1_mainSection_title; ?>
        </h2>
        <p class="text-lg md:text-xl leading-relaxed"><?php echo $textSection1_mainSection_description; ?></p>
        <a href="tel:<?= $phone3 ?>" target="_blank"
            class="text-3xl md:text-3xl bg-secondary text-white py-3 px-4 font-semibold hover:bg-secondaryDark inline-flex items-center w-auto self-start rounded-lg">
            <?= $phone1 ?>
        </a>
    </div>
    <div class="mt-10 max-w-5xl mx-auto text-center border-t-2 border-gray-100 pt-8">
        <h3 class="text-xl md:text-3xl font-semibold mb-4"><?php echo $textSection1_sustainabilitySection_title; ?></h3>
        <p class="text-lg md:text-xl leading-relaxed"><?php echo $textSection1_sustainabilitySection_description; ?></p>
    </div>
</section>
