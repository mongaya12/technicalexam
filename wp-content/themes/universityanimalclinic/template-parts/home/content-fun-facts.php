<!-- Fun Fact Start -->
<div class="fun-fact line-bg">
    <div class="container">
        <div class="fun-friday">
            FUN FACT
            <span class="friday-label">FRIDAY</span>
        </div>
        <div class="fun-fact-owl owl-carousel">
            <?php 
                $fun_facts = webfx_get_fun_facts_posts();
                if( $fun_facts ){
                    foreach( $fun_facts as $fact ){
            ?>
                    <div class="item">
                        <div class="fun-image">
                            <?php echo get_the_post_thumbnail( $fact->ID, 'full' ); ?>
                            <a class="play-icon icon-youtube" href="<?php echo get_field('video_url', $fact->ID ); ?>" data-fancybox></a>
                        </div>
                        <div class="fun-content">
                            <?php echo apply_filters('the_content', $fact->post_content ); ?>
                            <a class="btn btn-primary" href="#">View Our Video Library</a>
                        </div>
                    </div>
            <?php 
                    }
                } 
            ?>
        </div>
    </div>
</div>
<!-- Fun Fact End -->