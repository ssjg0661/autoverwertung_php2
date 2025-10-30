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
            <svg width="20" clip-rule="evenodd" fill-rule="evenodd" image-rendering="optimizeQuality" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" viewBox="0 0 177800 177800" xmlns="http://www.w3.org/2000/svg"><g ><ellipse cx="88899" cy="88901.1" fill="#48b02c" rx="88899.2" ry="88899.2"/><g fill="#fff"><path d="m63682 130860-34295-34294c-2461-2462-2470-6510 1-8981 2470-2470 6518-2461 8980 0l34294 34294c2463 2462 2471 6511 0 8981-2470 2470-6519 2462-8980 0z"/><path d="m63664 121861 33012-33012 8897-8897 25401-25401c2470-2470 6510-2468 8980 1 2471 2471 2459 6524 2 8981l-25401 25401-8896 8897-33012 33012c-2471 2471-6511 2469-8982-1-2470-2470-2471-6511-1-8981z"/></g></g></svg>
            <span class="text-lg md:text-xl leading-relaxed"><?php echo $text; ?></span>
        </div>
        <?php endforeach; ?>
    </div>
</div>
