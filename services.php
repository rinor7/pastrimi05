<?php
/* Template Name: Services */
global $header_type; // required to access global variable
include("includes/headers/{$header_type}.php");
?>

<main id="primary" class="site-main site-services">

<?php get_template_part('includes/blocks/block-our-services', null, array()); ?>

</main>

<?php include("includes/footers/default.php");  ?>