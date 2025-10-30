<?php

$heroKeys = [
  'autoverwertung'        => 'autoverwertung',
  'motorschaden-ankauf'   => 'motorschaden',
  'schrottauto-ankauf'    => 'unfallwagen',
];
$heroPrefix      = $heroKeys[$currentPage] ?? 'autoverwertung';

$faq_title = ${$heroPrefix . '_faq_0_title'};
$faq_questions = [];
$i = 0;
while (isset(${$heroPrefix . '_faq_1_questions_' . $i . '_question'})) {
    $faq_questions[] = [
        'question' => ${$heroPrefix . '_faq_1_questions_' . $i . '_question'},
        'answer' => ${$heroPrefix . '_faq_1_questions_' . $i . '_answer'},
    ];
    $i++;
}
?>

<section id="faq" class="px-6 sm:px-8 mt-25 sm:mt-48 scroll-mt-16">
    <h2 class="text-3xl md:text-4xl font-semibold text-center mb-15"><?php echo $faq_title; ?></h2>
    <div class="max-w-5xl mx-auto space-y-4 sm:space-y-6 mt-6 sm:mt-8">
        <?php foreach ($faq_questions as $index => $item): ?>
        <div class="p-4 sm:p-6 bg-white shadow-lg rounded-lg hover:shadow-xl transition-shadow">
            <div class="flex justify-between items-center cursor-pointer faq-question">
                <p class="text-xl sm:text-2xl font-semibold"><?php echo $item['question']; ?></p>
                <span class="text-xl sm:text-2xl faq-toggle">+</span>
            </div>
            <div class="faq-answer" style="max-height: 0; overflow: hidden; transition: max-height 0.3s ease-in-out;">
                <p class="mt-2 text-lg md:text-xl leading-relaxed"><?php echo $item['answer']; ?></p>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const faqQuestions = document.querySelectorAll('.faq-question');
    faqQuestions.forEach(question => {
        question.addEventListener('click', () => {
            const answer = question.nextElementSibling;
            const toggle = question.querySelector('.faq-toggle');

            if (answer.style.maxHeight && answer.style.maxHeight !== '0px') {
                answer.style.maxHeight = '0px';
                toggle.textContent = '+';
            } else {
                answer.style.maxHeight = answer.scrollHeight + 'px';
                toggle.textContent = '−';
            }
        });
    });
});
</script>