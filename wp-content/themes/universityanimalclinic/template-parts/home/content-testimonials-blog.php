<!-- Testi and Blog Start -->
<div class="testi-blog">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="testimonials">
                    <div class="comman-icon">
                        <span class="icon-quotes"></span>
                    </div>
                    <h1>What Our Clients Have to Say</h1>
                    <a class="btn btn-primary" href="javascript:void(0);">View All Testimonials</a>
                    <div class="testi-owl owl-carousel">
                        <?php 
                            $testimonials = webfx_get_testimonial_posts(); 
                            if( $testimonials ){ 
                                foreach( $testimonials as $testimony ){
                        ?>
                                <div class="item">
                                    <?php echo apply_filters('the_content',$testimony->post_content); ?>
                                    <b>- <?php echo $testimony->post_title; ?></b>
                                </div>
                        <?php
                                } 
                            } 
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="home-blog">
                    <div class="blog-title">
                        <h4 class="optinal-h4">OUR BLOG</h4>
                        <a class="btn btn-secondary" href="javascript:void(0);">View All Posts</a>
                    </div>
                    <div class="blog-main">
                        <?php
                            $blog_post = webfx_get_blog_posts(); 
                            if( $blog_post ) {
                                foreach( $blog_post as $post ){
                        ?>
                                <div class="blog-image">
                                    <?php echo get_the_post_thumbnail( $post->ID, 'full' ); ?>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-inner">
                                        <h4><?php echo $post->post_title; ?></h4>
                                        <p><?php echo wp_trim_words( $post->post_content, 27, '[...]' ); ?></p>
                                        <div class="readmore">
                                            <a class="btn btn-primary" href="<?php echo get_permalink( $post->ID ); ?>">Read More</a>
                                        </div>
                                    </div>
                                </div>
                        <?php
                                } 
                            } 
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testi and Blog End -->