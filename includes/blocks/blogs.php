<?php if (!get_field('pt-blogs')['disable_section'] ?? false): ?>
<section class="blogs__section">
    <div class="container">
        
        <?php render_section_header('pt-blogs'); ?>

        <?php 
                $args = array(
                'posts_per_page' => 4,
                // 'category_name' => 'blogs'
                ); 
                $the_query = new WP_Query( $args );
                if($the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); 
            ?>

        <?php the_title(); ?>

        <?php
                endwhile;
                endif;
                wp_reset_postdata();
            ?>
    </div>
</section>
<?php endif; ?>