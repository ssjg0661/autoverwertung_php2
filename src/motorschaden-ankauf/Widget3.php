<?php
$widget3_title = $motorschaden_widget3_title;
$widget3_advantages = [];
for ($i = 0; $i < 4; $i++) {
    $widget3_advantages[] = [
        'heading' => ${'motorschaden_widget3_advantages_' . $i . '_heading'},
        'subtext' => ${'motorschaden_widget3_advantages_' . $i . '_subtext'},
    ];
}
$widget3_image = $motorschaden_widget3_image;
$widget3_imageAlt = $motorschaden_widget3_imageAlt;
$widget3_imageTitle = $motorschaden_widget3_imageTitle;
?>

<section class="mt-25 sm:mt-48">
    <div class="flex xl:flex-row flex-col">
        <div class="xl:w-100 flex flex-col gap-14 py-12 px-8 bg-gray-100">
            <div class="flex flex-col gap-4">
                <h2 class="mb-10 text-3xl md:text-4xl font-bold"><?php echo $widget3_title; ?></h2>
                <?php foreach ($widget3_advantages as $adv): ?>
                <div class="mb-5 flex flex-row gap-4">
                    <div style="width:25px">
                        <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                            <g>
                                <path
                                    d="m492.22 76.13a63 63 0 0 0 -89.06 2.61l-205.79 218.26-87.47-97.5a63 63 0 1 0 -93.79 84.14l133.2 148.46a63 63 0 0 0 46.12 20.9h.78a63 63 0 0 0 45.84-19.77l252.78-268.04a63 63 0 0 0 -2.61-89.06z"
                                    fill="#57b236" />
                                <path
                                    d="m398.73 122.66a280.81 280.81 0 0 0 -2.4-36.66l-199 211-87.47-97.5a63 63 0 1 0 -93.79 84.14l105.17 117.17c153.31-.37 277.49-124.76 277.49-278.15z"
                                    fill="#6fba47" />
                            </g>
                        </svg>

                    </div>
                    <div class="flex flex-col">
                        <h3 class="font-bold text-xl"><?php echo $adv['heading']; ?></h3>
                        <span class="text-lg md:text-xl leading-relaxed"><?php echo $adv['subtext']; ?></span>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
