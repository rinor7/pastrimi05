<?php
/* Template Name: Contact Us */
global $header_type; // required to access global variable
include("includes/headers/{$header_type}.php");
?>

<main id="primary" class="site-main site-contact">

<?php get_template_part('includes/blocks/block-contact-us', null, array()); ?>

</main>

<?php include("includes/footers/default.php");  ?>