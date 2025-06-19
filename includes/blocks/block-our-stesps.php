<?php if (!get_field('four_box-default2')['disable_section'] ?? false): ?>
<section class="four__boxes" aria-label="Si funksionojmë" id="si-funksionojme">
    <div class="container">
        <?php render_section_header('four_box-default2'); ?>

        <?php if (wp_is_mobile()): ?>
            <div class="swiper four-boxes-swiper">
                <div class="swiper-wrapper">
        <?php else: ?>
            <div class="row">
        <?php endif; ?>

                <?php 
                $group = get_field('four_box-default2'); 
                for ($i = 1; ; $i++): 
                    $imgField = "box{$i}img";
                    $iconField = "icon{$i}";
                    $titleField = "title{$i}";
                    $subField = "sub{$i}";

                    if (empty($group[$imgField]) && empty($group[$iconField]) && empty($group[$titleField]) && empty($group[$subField])) {
                        break;
                    }

                    $box_class = wp_is_mobile() ? 'swiper-slide' : 'col-lg-3';
                ?>
                    <div class="box steps <?php echo $box_class; ?>">
                        <div class="box__wrap">
                            <div class="<?php echo !empty($group[$imgField]) ? 'icon-holder' : 'icon-holder-circle'; ?>">
                                <?php if (!empty($group[$imgField])): ?>
                                    <img src="<?php echo esc_url($group[$imgField]); ?>" alt="Image" loading="lazy">
                                <?php else: ?>
                                    <span><?php echo $group[$iconField]; ?></span>
                                    <div class="count"><?php echo $i; ?></div>
                                <?php endif; ?>
                            </div>
                            <div class="text-holder">
                                <span><?php echo esc_html($group[$titleField]); ?></span>
                                <?php if (wp_is_mobile()) { ?>
                                    <p class="mobile-paragraph"><?php echo esc_html($group[$subField]); ?></p>
                                <?php } ?>
                            </div>
                            <div class="box__back">
                                <?php if (!wp_is_mobile()) { ?>
                                    <p class="desktop-paragraph"><?php echo esc_html($group[$subField]); ?></p>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>

        <?php if (wp_is_mobile()): ?>
                </div> <!-- swiper-wrapper -->
                <div class="swiper-pagination"></div>
            </div> <!-- swiper -->
        <?php else: ?>
            </div> <!-- row -->
        <?php endif; ?>

    </div>
</section>
<?php endif; ?>
