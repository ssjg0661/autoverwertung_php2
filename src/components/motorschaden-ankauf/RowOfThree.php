<?php
$rowOfThreeTexts = [];
for ($i = 0; $i < 3; $i++) {
    $rowOfThreeTexts[] = ${'motorschaden_rowOfThreeTexts_' . $i};
}
?>

<div id="row-of-three-section-2" class="mt-25 sm:mt-48 scroll-mt-16">
    <div class="flex flex-col sm:flex-row gap-6 sm:gap-4 justify-between border-y border-primaryLight">
        <?php foreach ($rowOfThreeTexts as $text): ?>
        <div class="flex items-center gap-3 p-4">
            <i class="fas fa-check-circle text-primary w-6 h-6"></i>
            <span class="text-lg md:text-xl leading-relaxed"><?php echo $text; ?></span>
        </div>
        <?php endforeach; ?>
    </div>
</div>
