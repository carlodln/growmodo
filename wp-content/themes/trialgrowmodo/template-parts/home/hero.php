<!-- HOMEPAGE HERO SECTION -->
<?php
    $hero   = get_field('hero_section');

    if($hero):
        $title  = $hero['title'];
        $description  = $hero['description'];

        $button_text_1      = $hero['button_1']['button_text'];
        $button_url_1       = $hero['button_1']['button_url'];
        $button_new_tab_1   = $hero['button_1']['open_in_new_tab'];

        $button_text_2      = $hero['button_2']['button_text'];
        $button_url_2       = $hero['button_2']['button_url'];
        $button_new_tab_2   = $hero['button_2']['open_in_new_tab'];

        $button_text_2      = $hero['button_2']['button_text'];
        $button_url_2       = $hero['button_2']['button_url'];
        $button_new_tab_2   = $hero['button_2']['open_in_new_tab'];

        $counter_label_1    = $hero['counter_1']['label'];
        $counter_value_1    = $hero['counter_1']['value'];

        $counter_label_2    = $hero['counter_2']['label'];
        $counter_value_2    = $hero['counter_2']['value'];

        $counter_label_3    = $hero['counter_3']['label'];
        $counter_value_3    = $hero['counter_3']['value'];

        $image              = $hero['image'] ?? '';
        $badge              = $hero['badge'] ?? '';
    endif;
?>

<section class="home-hero-section">
    <div class="container">
        <div class="content">
            <?php if($title): ?>
            <h1><?= $title; ?></h1>
            <?php endif; ?>
            <?php if($description): ?>
            <p><?= $description; ?></p>
            <?php endif; ?>
            <div class="hero-buttons">
                <?php if($button_text_1 && $button_url_1): ?>
                <a 
                    href="<?= $button_url_1; ?>" 
                    <?= $button_new_tab_1 ? 'target="_blank" rel="noopener noreferrer"' : ''; ?>
                    class="btn">
                    <?= $button_text_1; ?>
                </a>
                <?php endif; ?>
                <?php if($button_text_2 && $button_url_2): ?>
                <a 
                    href="<?= $button_url_2; ?>" 
                    <?= $button_new_tab_2 ? 'target="_blank" rel="noopener noreferrer"' : ''; ?>
                    class="btn btn-primary">
                    <?= $button_text_2; ?>
                </a>
                <?php endif; ?>
            </div>
            <div class="hero-counters">
                <?php if($counter_value_1 && $counter_label_1): ?>
                <div class="hero-counter">
                    <p class="value"><?= $counter_value_1; ?></p>
                    <p class="label"><?= $counter_label_1; ?></p>
                </div>
                <?php endif; ?>
                <?php if($counter_value_2 && $counter_label_2): ?>
                <div class="hero-counter">
                    <p class="value"><?= $counter_value_2; ?></p>
                    <p class="label"><?= $counter_label_2; ?></p>
                </div>
                <?php endif; ?>
                <?php if($counter_value_3 && $counter_label_3): ?>
                <div class="hero-counter">
                    <p class="value"><?= $counter_value_3; ?></p>
                    <p class="label"><?= $counter_label_3; ?></p>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <?php if($image): ?>
    <div class="hero-image" style="background-image: url(<?= $image['url']; ?>)">
        <?php if($badge): ?>
        <img src="<?= $badge['url']; ?>" alt="hero badge" class="hero-badge" />
        <?php endif; ?>
    </div>
    <?php endif; ?>
</section>