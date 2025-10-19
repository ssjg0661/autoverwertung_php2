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
                    <i class="fas fa-car"></i>
                </div>
                <div class="step-content">
                    <div class="step-number">1.</div>
                    <div class="step-label">Ankauf-Formular ausfüllen</div>
                </div>
            </div>

            <div class="connector"></div>

            <div class="step-item">
                <div class="icon-box">
                    <i class="fas fa-file-alt"></i>
                </div>
                <div class="step-content">
                    <div class="step-number">2.</div>
                    <div class="step-label">Angebot erhalten</div>
                </div>
            </div>

            <div class="connector"></div>

            <div class="step-item">
                <div class="icon-box">
                    <i class="fas fa-handshake"></i>
                </div>
                <div class="step-content">
                    <div class="step-number">3.</div>
                    <div class="step-label">Verkauf abschließen</div>
                </div>
            </div>

            <div class="connector"></div>

            <div class="step-item">
                <div class="icon-box">
                    <i class="fas fa-money-bill-wave"></i>
                </div>
                <div class="step-content">
                    <div class="step-number">4.</div>
                    <div class="step-label">Geld erhalten</div>
                </div>
            </div>
        </div>
    </div>

</section>