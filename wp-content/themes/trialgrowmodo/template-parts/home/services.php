<!-- HOME PAGE SERVICES SECTION -->
<?php
    $services = get_field('services_section');
    if($services): 
        $service_title_1 = $services['service_1']['title'];
        $service_icon_1 = $services['service_1']['icon'] ?? '';
        $service_url_1 = $services['service_1']['url'];

        $service_title_2 = $services['service_2']['title'];
        $service_icon_2 = $services['service_2']['icon'] ?? '';
        $service_url_2 = $services['service_2']['url'];

        $service_title_3 = $services['service_3']['title'];
        $service_icon_3 = $services['service_3']['icon'] ?? '';
        $service_url_3 = $services['service_3']['url'];

        $service_title_4 = $services['service_4']['title'];
        $service_icon_4 = $services['service_4']['icon'] ?? '';
        $service_url_4 = $services['service_4']['url'];
    endif;
?>
<section class="home-services-section">
    <?php if($service_title_1): ?>

        <?php if($service_icon_1): ?>
            <a class="service-box" href="<?= $service_url_1; ?>">
                <img src="<?= get_template_directory_uri(); ?>/assets/images/right-up-arrow.svg" alt="arrow icon" class="arrow"/>
                <img src="<?= $service_icon_1['url']; ?>" alt="<?= $service_icon_1['alt']; ?>" class="icon">
                <h3><?= $service_title_1; ?></h3>
            </a>
        <?php endif; ?>

        <?php if($service_icon_2): ?>
            <a class="service-box" href="<?= $service_url_2; ?>">
                <img src="<?= get_template_directory_uri(); ?>/assets/images/right-up-arrow.svg" alt="arrow icon" class="arrow"/>
                <img src="<?= $service_icon_2['url']; ?>" alt="<?= $service_icon_2['alt']; ?>" class="icon">
                <h3><?= $service_title_2; ?></h3>
            </a>
        <?php endif; ?>

        <?php if($service_icon_3): ?>
            <a class="service-box" href="<?= $service_url_3; ?>">
                <img src="<?= get_template_directory_uri(); ?>/assets/images/right-up-arrow.svg" alt="arrow icon" class="arrow"/>
                <img src="<?= $service_icon_3['url']; ?>" alt="<?= $service_icon_3['alt']; ?>" class="icon">
                <h3><?= $service_title_3; ?></h3>
            </a>
        <?php endif; ?>

        <?php if($service_icon_4): ?>
            <a class="service-box" href="<?= $service_url_4; ?>">
                <img src="<?= get_template_directory_uri(); ?>/assets/images/right-up-arrow.svg" alt="arrow icon" class="arrow"/>
                <img src="<?= $service_icon_4['url']; ?>" alt="<?= $service_icon_4['alt']; ?>" class="icon">
                <h3><?= $service_title_4; ?></h3>
            </a>
        <?php endif; ?>
    <?php endif; ?>
</section>