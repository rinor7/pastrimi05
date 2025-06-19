<?php
/* Template Name: Gallery */
global $header_type; // required to access global variable
include("includes/headers/{$header_type}.php");
?>

<main id="primary" class="site-main site-gallery">

<?php 
$homepage_id = 93; // Replace with actual homepage ID
$group = get_field('gallery-group', $homepage_id);
if (!($group['disable_section'] ?? false)) : 
    $items = $group['pt_noswiper_items'] ?? [];

    $count = count($items);
    $col_class = 'col-lg-3';
    if ($count == 6) {
        $col_class = 'col-lg-4';
    }
?>
<section class="slider__boxes-section-plus full-gallery-page">
    <div class="container">
        <?php render_section_header('gallery-group', $homepage_id); ?>
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
    </div>
</section>
<?php endif; ?>


</main>

<?php include("includes/footers/default.php");  ?>