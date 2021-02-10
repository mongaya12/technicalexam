<!-- Welcome Start -->
<div class="welcome-block">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-4 mobile-order2">
                <div class="welcome-box team-box">
                    <div class="team-image">
                        <?php the_post_thumbnail('full'); ?>
                    </div>
                    <?php if( get_field('message') ) {  ?>
                    <div class="team-title">
                        <?php echo __( get_field('message'), 'universityanimalclinic' ); ?>
                    </div>
                    <?php } ?>
                </div>
            </div>
            <div class="col-lg-7 col-md-8">
                <div class="welcome-content">
                    <?php if( get_field('top_title') ) { ?>
                    <h4 class="optinal-h4"><?php echo __( get_field('top_title'), 'universityanimalclinic' ); ?></h4>
                    <?php } ?>
                    <div class="entry-content">
                        <?php the_content(); ?>
                    </div>
                    <?php 
                        $welcome_link = get_field('external_or_internal_link_welcome_section');
                    ?>
                    <a href="<?php echo webfx_get_link_option($welcome_link)['link']; ?>" target="<?php echo webfx_get_link_option($welcome_link)['target']; ?>" class="btn btn-primary"><?php echo __( get_field('call_to_action_label') , 'universityanimalclinic'); ?> </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Welcome End -->