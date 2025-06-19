<?php 
$homepage_id = 372;

// Merr fushat për four_box-default nga homepage
$four_box = get_field('four_box-default', $homepage_id);

// Kontrollo nëse section-i është i çaktivizuar në faqen aktuale
if (get_field('four_box-default_disable_section') || (!empty($four_box['disable_section']) && $four_box['disable_section'])) {
    return;
}
?>

<!-- Swiper CSS - Add this in your <head> or enqueue properly in WP -->
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
/>

<section class="our__services" aria-label="Shërbimet tona" id="sherbimet">
    <div class="container">
        <?php render_section_header('four_box-default'); ?>

        <div class="swiper ourServicesSwiper">
            <div class="swiper-wrapper">
                <?php 
                for ($i = 1; $i <= 5; $i++) :
                    $img = $four_box["box{$i}img"] ?? '';
                    $title = $four_box["title{$i}"] ?? '';
                    $link = $four_box["title{$i}link"] ?? '#';

                    // Skip box if there's no image and title
                    if (empty($img) && empty($title)) continue;
                ?>
                <div class="swiper-slide">
                    <div class="box">
                        <div class="box__wrap">
                            <div class="img">
                                <div class="scale-img">
                                    <img src="<?php echo esc_url($img); ?>" alt="Image" loading="lazy" />
                                </div>
                            </div>
                            <div class="titles<?php echo empty($link) ? ' no-link' : ''; ?>">
                                <?php if (!empty($link)): ?>
                                    <div class="button">
                                        <a href="<?php echo esc_url($link); ?>">
                                            <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                <?php endif; ?>
                                <span class="title">
                                    <?php echo $title; ?>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endfor; ?>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>