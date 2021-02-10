<div class="container">
    <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="footer-logo">
                <a href="<?php echo site_url(); ?>">
                    <img src="<?php echo get_field('footer_logo','option')['url']; ?>" alt="<?php echo get_field('footer_logo','option')['url']; ?>" />
                </a>
            </div>
            <div class="footer-social">
                <ul>
                    <?php 
                        if( get_field('facebook_link','option') ) {
                    ?>
                    <li>
                        <a href="<?php echo get_field('facebook_link','option'); ?>" target="_blank" class="icon-facebook"></a>
                    </li>
                    <?php } ?>

                    <?php if( get_field('instagram_link','option') ){ ?>
                    <li>
                        <a href="<?php echo get_field('instagram_link','option'); ?>" target="_blank" class="icon-instagram"></a>
                    </li>
                    <?php } ?>

                    <?php if( get_field('youtube_link','option') ) { ?>
                    <li>
                        <a href="<?php echo get_field('youtube_link','option'); ?>" target="_blank" class="icon-youtube"></a>
                    </li>
                    <?php } ?>

                    <?php if( get_field('tiktok_link','option') ) { ?> 
                    <li>
                        <a href="<?php echo get_field('tiktok_link','option'); ?>" target="_blank" class="icon-tiktoc"></a>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="footer-contact">
                <h4>CONTACT INFORMATION</h4>
                <p>
                    <?php echo get_field('location','option'); ?><br/>
                    <a class="learn-more" href="https://www.google.com/maps/place/<?php echo wp_strip_all_tags(get_field('location','option')); ?>" target="_blank">Get Directions <span class="icon-arrow-right"></span></a>
                </p>
                <p>
                    Phone: <a class="color-body" href="tel:<?php echo webfx_trim_phone_numbers_hypens( get_field('footer_phone','option') ); ?>"><?php echo get_field('footer_phone','option'); ?></a>
                </p>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="footer-contact">
                <h4>HOURS OF OPERATION</h4>
                <?php 
                    echo apply_filters('acf_the_content', get_field('footer_content_schedule','option') );
                ?>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="footer-contact">
                <h4>AWARDS & ASSOCIATIONS</h4>
                <ul class="award-logos">
                    <?php 
                        if( $awardlogo = get_field('images_awards','option') ) {
                            foreach( $awardlogo as $logo ) {
                    ?>
                            <li>
                                <img src="<?php echo $logo['image']['url']; ?>" alt="Award" />
                            </li>
                    <?php 
                            }
                        } 
                    ?>
                </ul>
            </div>
        </div>
    </div>
</div>