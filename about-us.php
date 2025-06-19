<?php
/* Template Name: About Us */
global $header_type; // required to access global variable
include("includes/headers/{$header_type}.php");
?>

<main id="primary" class="site-main site-about">

<?php get_template_part('includes/blocks/block-about', null, array()); ?>

<?php get_template_part('includes/blocks/block-contact-us', null, array()); ?>

</main>

<?php include("includes/footers/default.php");  ?>