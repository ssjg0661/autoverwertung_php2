<?php
$widget6_sectionTitle = $unfallwagen_widget9_sectionTitle;
$widget6_subtitle = $unfallwagen_widget9_subtitle;
$widget6_steps = [];
for ($i = 0; $i < 4; $i++) {
    $widget6_steps[] = [
        'title' => ${'unfallwagen_widget9_steps_' . $i . '_title'},
        'step' => ${'unfallwagen_widget9_steps_' . $i . '_step'},
    ];
}

$iconMap = ['fa-car', 'fa-file-alt', 'fa-handshake', 'fa-money-bill-wave'];

?>

<section class="mt-25 sm:mt-48">
    <div class="mb-10 text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-primary"><?php echo $widget6_sectionTitle; ?></h2>
        <h3 class="text-lg md:text-xl leading-relaxed mt-4"><?php echo $widget6_subtitle; ?></h3>
    </div>


    <div class="process-wrapper">
        <div class="steps-container">
            <div class="step-item">
                <div class="icon-box">
                    <svg  fill="currentColor" enable-background="new 0 0 512 512" height="50" viewBox="0 0 512 512" width="50" xmlns="http://www.w3.org/2000/svg"><g ><g ><path  d="m451.6 49.7c-2.1-6.3-6.3-11.8-11.7-15.6-5.5-3.8-12.1-5.8-18.8-5.7h-330.1c-6.7-.1-13.3 1.9-18.8 5.7s-9.6 9.3-11.7 15.6l-60.5 182.1v230.4c-.4 11.4 8.6 21 20 21.3h1.4 14.2c11.4.4 21-8.6 21.3-20 0-.4 0-.9 0-1.3v-38.4h398.2v38.4c0 6.2 1.9 11.3 5.7 15.3s8.8 6 14.9 6h14.9c11.4.4 21-8.6 21.3-20 0-.4 0-.9 0-1.3v-230.4zm-306.2 284.5c-7.3 7.6-16.5 11.4-27.4 11.4-10.4.2-20.5-3.8-28.1-11-7.7-7-12-17-11.7-27.4.1-21.9 17.9-39.7 39.8-39.8 10.4-.2 20.4 4.1 27.4 11.7 7.2 7.5 11.2 17.6 11 28.1.1 10.1-3.8 19.9-11 27zm277.4 0c-7.4 7.4-17.6 11.5-28.1 11.4-10.1.1-19.8-3.8-27-11-7.6-7.3-11.4-16.5-11.4-27.4-.2-10.4 3.8-20.5 11-28.1 7-7.7 17-12 27.4-11.7 21.9.1 39.7 17.9 39.8 39.8 0 10.4-3.9 19.5-11.7 27zm-363.8-145.1 39.1-118h315.7l39.2 118z"/></g></g></svg>
                </div>
                <div class="step-content">
                    <div class="step-number">1.</div>
                    <div class="step-label">Ankauf-Formular ausfüllen</div>
                </div>
            </div>

            <div class="connector"></div>

            <div class="step-item">
                <div class="icon-box">
                    <svg height="50" fill="currentColor" viewBox="0 0 48 48" width="50" xmlns="http://www.w3.org/2000/svg"><g id="Layer_2" data-name="Layer 2"><path d="m38 0h-16.34a6.0039 6.0039 0 0 0 -4.244 1.7559l-11.66 11.66a6.0035 6.0035 0 0 0 -1.756 4.2441v24.34a6.0066 6.0066 0 0 0 6 6h28a6.0066 6.0066 0 0 0 6-6v-36a6.0066 6.0066 0 0 0 -6-6zm-6 34h-16a2 2 0 0 1 0-4h16a2 2 0 0 1 0 4zm0-12h-16a2 2 0 0 1 0-4h16a2 2 0 0 1 0 4z"/></g></svg>
                </div>
                <div class="step-content">
                    <div class="step-number">2.</div>
                    <div class="step-label">Angebot erhalten</div>
                </div>
            </div>

            <div class="connector"></div>

            <div class="step-item">
                <div class="icon-box">
                    <svg clip-rule="evenodd" fill="currentColor" fill-rule="evenodd" height="60" image-rendering="optimizeQuality" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" viewBox="0 0 512 512" width="60" xmlns="http://www.w3.org/2000/svg"><g ><g  fill-rule="nonzero"><path d="m119 115c4 0 6 4 5 7l-24 191c0 3-3 5-7 5-7-1-88-11-88-11-3-1-5-4-5-7 2-16 24-191 24-191 1-3 4-6 7-5 8 1 88 11 88 11z"></path><path d="m116 145c-4 0-6 2-6 6v1l-46 47v1l28 85c-1 2-1 5 0 7 18 22 44 41 72 61 23 17 46 35 66 55h1c5 5 12 8 20 8 7 0 14-3 19-8 5-4 7-10 8-15l15 15c5 5 13 8 20 8 7 0 14-3 20-8 4-4 6-10 7-15l1 1c6 5 13 8 20 8s14-3 20-8c4-4 7-10 8-15v1c6 5 13 8 20 8s15-3 20-8c5-6 8-13 8-20 0-7-2-14-8-20l-21-21-3 4c-7 7-19 8-26 1-1-1-2-2-2-3l-81-80c-7-7-23-23-34-23-11 1-26 18-32 26-8 10-22 12-35 9-6-1-11-3-16-6-6-4-11-9-14-15-7-11-7-24-3-36v-1l3-6s1 0 1-1c10-17 23-32 38-43z"></path><path d="m359 125 83-29h1c3-1 6 1 7 4l62 182v1c1 3-1 6-4 7l-84 28c-3 1-7 0-8-3l-61-182c0-1 0-1 0-1-1-3 1-6 4-7z"></path><path d="m418 291c0 3-44-131-44-132h-1c-73-25-151-52-197 35v1c-7 13-6 23-1 31 3 4 6 8 10 10 4 3 9 5 13 6 9 2 18 0 23-6 16-20 28-29 40-30 13 0 26 9 44 27l81 81s1 1 1 1c3 2 7 2 9 0z"></path></g></g></svg>
                </div>
                <div class="step-content">
                    <div class="step-number">3.</div>
                    <div class="step-label">Verkauf abschließen</div>
                </div>
            </div>

            <div class="connector"></div>

            <div class="step-item">
                <div class="icon-box">
                    <svg  fill="currentColor" enable-background="new 0 0 512 512" height="50" viewBox="0 0 512 512" width="50" xmlns="http://www.w3.org/2000/svg"><g><g><circle cx="256" cy="362" r="15"/><path d="m399.079 287h-286.158c-5.191 18.291-19.63 32.73-37.921 37.921v74.157c18.291 5.191 32.73 19.63 37.921 37.921h286.157c5.191-18.291 19.63-32.73 37.921-37.921v-74.157c-18.29-5.191-32.729-19.63-37.92-37.921zm-258.079 90h-20c-8.284 0-15-6.716-15-15s6.716-15 15-15h20c8.284 0 15 6.716 15 15s-6.716 15-15 15zm115 30c-24.813 0-45-20.187-45-45s20.187-45 45-45 45 20.187 45 45-20.187 45-45 45zm135-30h-20c-8.284 0-15-6.716-15-15s6.716-15 15-15h20c8.284 0 15 6.716 15 15s-6.716 15-15 15z"/><path d="m497 212h-482c-8.284 0-15 6.716-15 15v270c0 8.284 6.716 15 15 15h482c8.284 0 15-6.716 15-15v-270c0-8.284-6.716-15-15-15zm-30 200c0 8.284-6.716 15-15 15-13.785 0-25 11.215-25 25 0 8.284-6.716 15-15 15h-312c-8.284 0-15-6.716-15-15 0-13.785-11.215-25-25-25-8.284 0-15-6.716-15-15v-100c0-8.284 6.716-15 15-15 13.785 0 25-11.215 25-25 0-8.284 6.716-15 15-15h312c8.284 0 15 6.716 15 15 0 13.785 11.215 25 25 25 8.284 0 15 6.716 15 15z"/></g><g><path d="m274.445 141.207-58.258 40.793h133.115l-22.043-31.48c-17.96 6.238-38.07 2.692-52.814-9.313z"/><path d="m315.324 2.714-256.048 179.286h104.608l103.939-72.779c6.786-4.752 16.139-3.102 20.891 3.684 7.907 11.292 23.526 14.046 34.818 6.139 6.786-4.752 16.139-3.102 20.891 3.684l41.503 59.272h73.247l-122.958-175.602c-4.752-6.786-14.105-8.436-20.891-3.684z"/></g></g></svg>
                </div>
                <div class="step-content">
                    <div class="step-number">4.</div>
                    <div class="step-label">Geld erhalten</div>
                </div>
            </div>
        </div>
    </div>

</section>