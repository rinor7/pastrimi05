<?php
/* Template Name: Home */
global $header_type; // required to access global variable
include("includes/headers/{$header_type}.php");
?>

<main id="primary" class="site-main">

<?php get_template_part('includes/blocks/block-banner-one', null, array()); ?>

<?php get_template_part('includes/blocks/block-about', null, array()); ?>

<?php get_template_part('includes/blocks/block-our-services', null, array()); ?>

<?php get_template_part('includes/blocks/pt-boxes-noswiper', null, array()); ?>

<?php get_template_part('includes/blocks/block-our-stesps', null, array()); ?>

<?php get_template_part('includes/blocks/block-video', null, array()); ?>

<?php get_template_part('includes/blocks/block-contact-us', null, array()); ?>

</main>

<?php include("includes/footers/default.php");  ?>