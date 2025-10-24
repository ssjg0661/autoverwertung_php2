<section id="hero" class="relative bg-gradient-to-r from-blue-500 to-green-500 text-white py-8 min-h-[70vh]">
    <div class="absolute inset-0 bg-cover bg-center opacity-40"
        style="background-image: url('<?= $base_path ?>/images/hero-image.jpg')"></div>
    <div class="absolute inset-0 bg-black opacity-40"></div>
    <div class="relative container mx-auto flex flex-col md:flex-row items-center md:justify-between min-h-[70vh]">
        <div class="md:w-1/2 mb-8 md:mb-0 text-center md:text-left">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-4"><?= ${$HeaderPrefix."_heroSection_title"} ?></h1>
            <p class="text-lg md:text-xl mb-4"><?= ${$HeaderPrefix."_heroSection_description"} ?></p>
            <!-- <p class="text-lg md:text-xl"><?= ${$HeaderPrefix."_heroSection_inquiryText"} ?></p> -->
        </div>
        <div
            class="bg-slate-50 text-black p-4 sm:p-6 md:p-8 rounded-lg shadow-lg w-full md:w-1/2 lg:w-2/5 mt-8 md:mt-0">
<?php
  require_once __DIR__ . '/InquiryForm.php';
  ?>
        </div>
    </div>
</section>