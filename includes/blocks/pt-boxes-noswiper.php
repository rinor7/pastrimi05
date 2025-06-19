<?php 
$group = get_field('gallery-group');
if (!($group['disable_section'] ?? false)) : 
    $items = $group['pt_noswiper_items'] ?? [];
    $items = array_slice($items, 0, 6); // Limit to 6 on homepage

    $count = count($items);
    $col_class = 'col-lg-3';
    if ($count == 6) {
        $col_class = 'col-lg-4';
    }

    // Dynamic button fields
    $view_all_url = $group['view_all_button_url'] ?? '';
    $view_all_label = $group['view_all_button_label'] ?? 'View All Photos';
?>
<section class="slider__boxes-section-plus homepage-gallery">
    <div class="container">
        <?php render_section_header('gallery-group'); ?>
        <div class="row">
            <?php foreach ($items as $item): ?>
                <div class="box__wrapper <?php echo esc_attr($col_class); ?>">
                    <?php if (!empty($item['image'])): ?>
                        <div class="img">
                            <img src="<?php echo esc_url($item['image']); ?>" alt="" loading="lazy">
                        </div>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
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
