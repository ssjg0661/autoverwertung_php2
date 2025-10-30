<?php
$widget4_sectionTitle = $motorschaden_widget4_sectionTitle;
$widget4_subtitle = $motorschaden_widget4_subtitle;
$widget4_services = [];
for ($i = 0; $i < 4; $i++) {
    $widget4_services[] = [
        'title' => ${'motorschaden_widget4_services_' . $i . '_title'},
        'text' => ${'motorschaden_widget4_services_' . $i . '_text'},
        'bg' => ${'motorschaden_widget4_services_' . $i . '_bg'},
    ];
}

$iconMap = [
    '<svg clip-rule="evenodd" fill="currentColor" width="25" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg"><g transform="translate(-2108 -328)"><path d="m2144 328h-21c-3.98 0-7.79 1.58-10.61 4.393-2.81 2.813-4.39 6.629-4.39 10.607v34c0 3.978 1.58 7.794 4.39 10.607 2.82 2.813 6.63 4.393 10.61 4.393h26c3.98 0 7.79-1.58 10.61-4.393 2.81-2.813 4.39-6.629 4.39-10.607v-13c0-1.656-1.34-3-3-3s-3 1.344-3 3v13c0 2.387-.95 4.676-2.64 6.364-1.68 1.688-3.97 2.636-6.36 2.636-7.87 0-18.13 0-26 0-2.39 0-4.68-.948-6.36-2.636-1.69-1.688-2.64-3.977-2.64-6.364 0-9.956 0-24.044 0-34 0-2.387.95-4.676 2.64-6.364 1.68-1.688 3.97-2.636 6.36-2.636h21c1.66 0 3-1.344 3-3s-1.34-3-3-3zm9.12 2.636-30.24 30.243c-.46.459-.76 1.054-.85 1.697l-2 14c-.13.935.18 1.878.85 2.545.67.668 1.61.982 2.54.849l14-2c.65-.092 1.24-.39 1.7-.849 0 0 19.21-19.212 30.24-30.242 1.69-1.688 2.64-3.977 2.64-6.364s-.95-4.676-2.64-6.364c-1.14-1.141-2.37-2.374-3.51-3.515-1.69-1.688-3.98-2.636-6.36-2.636-2.39 0-4.68.948-6.37 2.636zm-4.12 12.607 7.76 7.757-21.17 21.172s-9.05 1.292-9.05 1.292 1.29-9.05 1.29-9.05zm-.88 12.878 3-3c1.17-1.17 1.17-3.072 0-4.242-1.17-1.171-3.07-1.171-4.24 0l-3 3c-1.17 1.17-1.17 3.072 0 4.242 1.17 1.171 3.07 1.171 4.24 0zm12.88-9.364-7.76-7.757 4.12-4.121c.57-.563 1.33-.879 2.13-.879.79 0 1.55.316 2.12.879l3.51 3.514c.56.563.88 1.326.88 2.122 0 .795-.32 1.558-.88 2.121z"/></g></svg>',

    '<svg   fill="currentColor" width="25" enable-background="new 0 0 24 24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="m2 19c0 1.7 1.3 3 3 3h14c1.7 0 3-1.3 3-3v-8h-20zm17-15h-2v-1c0-.6-.4-1-1-1s-1 .4-1 1v1h-6v-1c0-.6-.4-1-1-1s-1 .4-1 1v1h-2c-1.7 0-3 1.3-3 3v2h20v-2c0-1.7-1.3-3-3-3z"/></svg>',
    
    '<svg  enable-background="new 0 0 512 512" fill="currentColor"  height="25" viewBox="0 0 512 512" width="25" xmlns="http://www.w3.org/2000/svg"><g><path d="m354.03 31.622h-296.13c-31.93 0-57.9 25.97-57.9 57.9v259.5c0 12.29 13.899 19.218 23.71 12.21l82.47-58.84c6.92-4.93 15.06-7.54 23.56-7.54h181.39c31.93 0 57.9-25.97 57.9-57.9v-190.33c0-8.28-6.72-15-15-15zm-72.86 181.71h-173.31c-8.28 0-15-6.71-15-15 0-8.28 6.72-15 15-15h173.31c8.28 0 15 6.72 15 15 0 8.29-6.72 15-15 15zm0-70h-173.31c-8.28 0-15-6.71-15-15 0-8.28 6.72-15 15-15h173.31c8.28 0 15 6.72 15 15 0 8.29-6.72 15-15 15z"/><path d="m512 205.872v259.49c0 12.207-13.829 19.268-23.71 12.21l-82.47-58.83c-6.92-4.93-15.06-7.54-23.56-7.54h-181.39c-31.93 0-57.9-25.98-57.9-57.91v-28.44h168.16c48.47 0 87.9-39.43 87.9-87.9v-88.99h55.07c31.93 0 57.9 25.98 57.9 57.91z"/></g></svg>',
    
    '<svg  enable-background="new 0 0 512 512" fill="currentColor" height="25" viewBox="0 0 512 512" width="25" xmlns="http://www.w3.org/2000/svg"><g><path d="m477.733 154.433v157.8c0 42.532-34.602 77.134-77.134 77.134h-336.332v51.4c0 25.989 21.145 47.133 47.134 47.133h353.466c25.989 0 47.134-21.144 47.134-47.133v-241c-.001-21.528-14.515-39.719-34.268-45.334z"/><path d="m447.733 312.233v-161.733h-447.733v161.733c0 26.031 21.102 47.133 47.133 47.133h353.467c26.031.001 47.133-21.102 47.133-47.133zm-65.333-19.266h-64.267c-8.284 0-15-6.716-15-15s6.716-15 15-15h64.267c8.284 0 15 6.716 15 15s-6.715 15-15 15z"/><path d="m447.733 71.233c0-26.031-21.102-47.133-47.133-47.133h-353.466c-26.031 0-47.134 21.103-47.134 47.134v49.266h447.733z"/></g></svg>'
];

?>

<section class="mt-25 sm:mt-48">
    <div class="flex flex-col items-center space-y-6">
        <div class="text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-primary"><?php echo $widget4_sectionTitle; ?></h2>
            <h3 class="text-lg md:text-xl leading-relaxed mt-4"><?php echo $widget4_subtitle; ?></h3>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-2 w-full">
            <?php foreach ($widget4_services as $index => $item): ?>
            <div class="flex items-center mobile-p-0 <?php echo $item['bg']; ?>">
                <div class="phone-display-none p-3 bg-white text-primary rounded-full shadow self-start">
                    <?php echo $iconMap[$index % count($iconMap)]; ?>
                </div>
                <div class="ml-4 self-start">
                    <h4 class="text-3xl font-semibold mb-5"><?php echo $item['title']; ?></h4>
                    <p class="text-lg md:text-xl leading-relaxed"><?php echo $item['text']; ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>