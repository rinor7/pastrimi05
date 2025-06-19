<?php if (!get_field('group_banner')['disable_section'] ?? false): ?>
<section class="banner__section banner-one__section" aria-label="Banner">
    <div class="swiper bannerSwiper">
        <div class="swiper-wrapper">

            <?php if (have_rows('group_banner_slider')): ?>
                <?php while (have_rows('group_banner_slider')): the_row(); ?>
                    <div class="swiper-slide slide-bg" style="background-image: url(<?php echo esc_url(get_sub_field('image')); ?>);">
                        <div class="container">
                            <div class="row">
                                <div class="centers col-lg-8">
                                    <p><?php the_sub_field('subtitle'); ?></p>
                                    <h2><?php the_sub_field('title'); ?></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>

        </div>
        <div class="bg-layer">
            <?php if(wp_is_mobile()) { ?>
                <img class="mobile-version" src="<?php echo get_template_directory_uri(); ?>/assets/img/slide-right-bg-mob.webp" alt="layer1">
            <?php } else { ?>
                <img class="desktop-version" src="<?php echo get_template_directory_uri(); ?>/assets/img/slide-right-bg.webp" alt="layer2">
            <?php } ?>
        </div>
        <div class="static-elements-right">
            <div class="custom-arrows">
                <div class="swiper-button-next banner-button-next"></div>
                <div class="swiper-button-prev banner-button-prev"></div>
            </div>
            <div class="custom-call-action">
                <div class="icon-holder">
                    <span><i class="fas fa-phone-volume"></i></span>
                </div>
                <ul>
                    <?php dynamic_sidebar('widget-2');?>
                </ul>
            </div>
        </div>
        
    </div>
</section>
<?php endif; ?>
