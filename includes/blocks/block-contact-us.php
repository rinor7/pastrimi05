<?php 

$homepage_id = 366;

// Merr fushat për block_contact-us nga homepage
$contact_block = get_field('block_contact-us', $homepage_id);

// Merr vlerën e disable_section vetëm nga faqja aktuale (pa parametër ID)
$current_disable = get_field('block_contact-us_disable_section'); // ose get_field('block_contact-us')['disable_section'] ?? false;

// Nëse disable_section e faqes aktuale është true, mos shfaq section-in
if ($current_disable) {
    return;
}

// Nëse disable_section është edhe në fushën e homepage, gjithashtu mos shfaq (opsionale, mund ta heqësh nëse nuk do)
if (!empty($contact_block['disable_section']) && $contact_block['disable_section']) {
    return;
}

$title = $contact_block['title'] ?? 'Get a Free Quote';
$form = $contact_block['form_shortcode'] ?? '';
$right_img = $contact_block['right_image'] ?? '';
$right_text = $contact_block['right_text'] ?? 'Pastrimi05 is trusted by more than 1,700 clients.';
?>

<section class="my__form" aria-label="Kontakt Form" id="kontakt">
    <div class="contactform container">
        <div class="my-form col-lg-8 col-md-7">
            <span class="title-form"><?php echo esc_html($title); ?></span>
            <div class="my-contact-form">
                <?php echo $form; ?>
            </div>
        </div>
        <div class="my-form-rightside col-lg-4 col-md-5">
            <div class="quote-right-box">
                <?php if ($right_img): ?>
                    <div class="image-holder">
                        <img src="<?php echo esc_url($right_img); ?>" alt="">
                    </div>
                <?php endif; ?>
                <?php if ($right_text): ?>
                    <div class="text-holder">
                        <span><?php echo esc_html($right_text); ?></span>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
