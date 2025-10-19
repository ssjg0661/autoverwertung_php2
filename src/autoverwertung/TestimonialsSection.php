<?php
$testimonialsSection_title = $autoverwertung_testimonialsSection_title;
$testimonialsSection_testimonials = [];
for ($i = 0; $i < 3; $i++) {
    $testimonialsSection_testimonials[] = [
        'name' => ${'autoverwertung_testimonialsSection_testimonials_' . $i . '_name'},
        'avatar' => ${'autoverwertung_testimonialsSection_testimonials_' . $i . '_avatar'},
        'feedback' => ${'autoverwertung_testimonialsSection_testimonials_' . $i . '_feedback'},
        'additionalInfo' => ${'autoverwertung_testimonialsSection_testimonials_' . $i . '_additionalInfo'},
    ];
}
?>

<section id="testimonials-section" class="mt-25 sm:mt-48 rounded-lg">
    <div class="container">

        <div class="max-w-6xl mx-auto text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-primary mb-15"><?php echo $testimonialsSection_title; ?></h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto">
            <?php foreach ($testimonialsSection_testimonials as $testimonial): ?>
            <div
                class="bg-white p-8 rounded-xl shadow-lg transform hover:scale-105 transition duration-300 ease-in-out h-full flex flex-col">
                <div class="flex items-center mb-6">
                    <div class="rounded-full mr-4 flex-shrink-0">
                        <span class="text-3xl"><?php echo $testimonial['avatar']; ?></span>
                    </div>
                    <h3 class="text-xl md:text-2xl font-semibold text-gray-800"><?php echo $testimonial['name']; ?></h3>
                </div>
                <p class="text-gray-600 italic text-lg md:text-xl flex-grow leading-relaxed mb-4">
                    <?php echo $testimonial['feedback']; ?></p>
                <p class="text-gray-400 text-sm mt-auto"><?php echo $testimonial['additionalInfo']; ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
