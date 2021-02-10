<?php get_header() ?>

<main id="primary" class="site-main">

    <?php
        while ( have_posts() ) :
            the_post();

            // Banner Section
            get_template_part( 'template-parts/home/content', 'banner' );
            
            // Welcome Section
            get_template_part( 'template-parts/home/content', 'welcome-section' );

            // Home Services Section
            get_template_part( 'template-parts/home/content', 'home-services' );

            // Home Team Start Section
            get_template_part( 'template-parts/home/content', 'home-team');

            // Exotic Care Section
            get_template_part( 'template-parts/home/content', 'exotic-care');

            // Fun Facts
            get_template_part( 'template-parts/home/content', 'fun-facts');

            // Testimonials and Blog
            get_template_part( 'template-parts/home/content', 'testimonials-blog');

    ?>

    <?php
        endwhile; // End of the loop.
    ?>

</main><!-- #main -->

<?php
get_footer();