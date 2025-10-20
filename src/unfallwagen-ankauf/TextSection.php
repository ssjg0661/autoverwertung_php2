<?php
$textSection1 = [
    'title' => $unfallwagen_textSection1_mainSection_title,
    'description' => $unfallwagen_textSection1_mainSection_description,
    'whatsappLink' => $unfallwagen_textSection1_mainSection_whatsappLink,
    'whatsappButtonText' => $unfallwagen_textSection1_mainSection_whatsappButtonText,
    'sustainabilityTitle' => $unfallwagen_textSection1_sustainabilitySection_title,
    'sustainabilityDescription' => $unfallwagen_textSection1_sustainabilitySection_description,
];
?>

<section id="text-section-1"
    class="relative mt-25 sm:mt-48 py-10 px-8 sm:px-10 md:px-14 lg:px-20 bg-gradient-to-r from-blue-50 via-white to-blue-50 rounded-lg shadow-xl scroll-mt-16 text-gray-800">
    <div class="max-w-5xl mx-auto text-center space-y-6">
        <h2 class="text-3xl md:text-4xl font-extrabold leading-tight"><?php echo $textSection1['title']; ?></h2>
        <p class="text-lg md:text-xl leading-relaxed"><?php echo $textSection1['description']; ?></p>
        <a href="tel:<?= $phone3 ?>" target="_blank"
            class="text-3xl md:text-3xl bg-secondary text-white py-3 px-4 font-semibold hover:bg-secondaryDark inline-flex items-center w-auto self-start rounded-lg">
            <?= $phone1 ?>
        </a>
    </div>
    <div class="mt-10 max-w-5xl mx-auto text-center border-t-2 border-gray-100 pt-8">
        <h3 class="text-xl font-semibold mb-4"><?php echo $textSection1['sustainabilityTitle']; ?></h3>
        <p class="text-lg leading-relaxed"><?php echo $textSection1['sustainabilityDescription']; ?></p>
    </div>
</section>