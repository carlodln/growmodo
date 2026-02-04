<!-- HOME PAGE PROPERTIES SECTION -->
<?php
    $properties = get_field('properties_section');
    if($properties):
        $title = $properties['title'];
        $description = $properties['description'];

        $button_text  = $properties['cta']['button_text'];
        $button_url  = $properties['cta']['button_url'];
        $button_new_tab  = $properties['cta']['open_in_new_tab'];

    endif;

    $query = new WP_Query([
        'post_type'      => 'property',
        'post_status'    => 'publish',
        'posts_per_page' => 6
    ]);
    
?>
<section class="container home-properties-section">
    <div class="section-header">
        <div class="section-header-content">
            <img src="<?= get_template_directory_uri(); ?>/assets/images/eyebrow.svg" alt="icon" class="eyebrow-icon"/>
            <?php if($title): ?>
                <h2><?= $title; ?></h2>
            <?php endif; ?>
            <?php if($description): ?>
                <p><?= $description; ?></p>
            <?php endif; ?>
        </div>
        <?php if($button_text && $button_url): ?>
            <a 
                href="<?= $button_url; ?>" 
                <?= $button_new_tab ? 'target="_blank" rel="noopener noreferrer"' : ''; ?>
                class="btn btn-secondary">
                <?= $button_text; ?>
            </a> 
        <?php endif; ?>
    </div>
    <div>
    <?php if ($query->have_posts()) : ?>
    <div class="swiper property-swiper">
        <div class="swiper-wrapper">
        <?php while ($query->have_posts()) : $query->the_post();
            $price    = get_field('price');
            $type     = get_field('type');
            $beds     = get_field('bedroom'); 
            $baths    = get_field('bathroom'); 
        ?>
            <div class="swiper-slide">
                <article class="property-card">
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="property-image-box">
                            <img 
                                src="<?= get_the_post_thumbnail_url(get_the_ID(), 'large'); ?>" 
                                alt="<?= esc_attr(get_the_title()); ?>"
                            >
                        </div>
                    <?php endif; ?>
                    <h3><?= esc_html(get_the_title()); ?></h3>
                    <p><?= esc_html(wp_trim_words(get_the_content(), 9, '…')); ?> <a href="<?= esc_url(get_permalink()); ?>">Read More</a></p>
                    <div class="property-meta">
                        <?php if($beds): ?>
                        <div class="meta-item">
                            <img src="<?= get_template_directory_uri(); ?>/assets/images/bedroom.svg" alt="bedroom icon"/>
                            <?= $beds; ?>-Bedroom
                        </div>
                        <?php endif; ?>
                        <?php if($baths): ?>
                        <div class="meta-item">
                            <img src="<?= get_template_directory_uri(); ?>/assets/images/bathroom.svg" alt="bathroom icon"/>
                            <?= $baths; ?>-Bathroom
                        </div>
                        <?php endif; ?>
                        <?php if($type): ?>
                        <div class="meta-item">
                            <img src="<?= get_template_directory_uri(); ?>/assets/images/villa.svg" alt="villa icon"/>
                            <?= $type; ?>
                        </div>
                        <?php endif; ?>
                    </div>
                    <div class="property-footer">
                        <?php if($price): ?>
                        <div class="price-meta">
                            <p>Price</p>
                            <p class="property-price">$<?= number_format($price); ?></p>
                        </div>
                        <?php endif; ?>
                        <a href="#" class="btn btn-primary">View Property Details</a>
                    </div>
                </article>
            </div>
        <?php
            endwhile;
            wp_reset_postdata();
        ?>
        </div>
    </div>
    <div class="property-swiper-controls">
        <div class="swiper-pagination"></div>
        <div class="swiper-navigation">
            <div class="custom-swiper-nav prev">
                <img src="<?= get_template_directory_uri(); ?>/assets/images/arrow-left.svg" alt="Prev">
            </div>
            <div class="custom-swiper-nav next">
                <img src="<?= get_template_directory_uri(); ?>/assets/images/arrow-right.svg" alt="Next">
            </div>
        </div>
    </div>
    <?php endif; ?>
</section>