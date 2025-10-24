<?php
$widget3 = [
    'sectionTitle' => $unfallwagen_widget3_sectionTitle,
    'description' => $unfallwagen_widget3_description,
];
?>

<div class=" mt-25 sm:mt-48">
    <div class="flex flex-col items-center">
        <div class="flex flex-column md:flex-row w-full items-center">
            <div class=" mb-10 mb-0 flex items-center justify-center xl:w-50">
                <i class="fa-solid fa-hand-holding-dollar text-9xl text-primary"></i>
            </div>
            <div class="flex flex-col xl:w-50">
                <h2 class="text-3xl md:text-4xl font-bold leading-tight mb-4"><?php echo $widget3['sectionTitle']; ?></h2>
                <p class="text-lg md:text-xl leading-relaxed"><?php echo $widget3['description']; ?></p>
            </div>
        </div>
    </div>
</div>