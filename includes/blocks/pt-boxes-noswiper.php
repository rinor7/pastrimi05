<?php 
$group = get_field('gallery-group');
if (!($group['disable_section'] ?? false)) : 
    $items = $group['pt_noswiper_items'] ?? [];
    $items = array_slice($items, 0, 6); // Limit to 6 on homepage

    // Dynamic button fields
    $view_all_url = $group['view_all_button_url'] ?? '';
    $view_all_label = $group['view_all_button_label'] ?? 'View All Photos';
?>

<!-- Swiper CSS -->
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
/>

<section class="slider__boxes-section-plus homepage-gallery">
    <div class="container">
        <?php render_section_header('gallery-group'); ?>

        <div class="swiper gallerySwiper">
            <div class="swiper-wrapper">
                <?php foreach ($items as $item): ?>
                    <div class="swiper-slide box__wrapper">
                        <?php if (!empty($item['image'])): ?>
                            <div class="img">
                                <img src="<?php echo esc_url($item['image']); ?>" alt="" loading="lazy" />
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-pagination"></div> -->
        </div>

        <?php if (!empty($view_all_url)): ?>
            <div class="view-all">
                <a href="<?php echo esc_url($view_all_url); ?>">
                    <?php echo esc_html($view_all_label); ?>
                </a>
            </div>
        <?php endif; ?>
    </div>
</section>
<?php endif; ?>