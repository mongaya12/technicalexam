<!-- Home Team Start -->
<div class="home-team">
    <div class="team-banner">
        <?php if( get_field('background_image') ){ ?>
        <div class="banner-image">
            <img src="<?php echo get_field('background_image')['url']; ?>" alt="<?php echo get_field('background_image')['alt']; ?>" />
        </div>
        <?php } ?>
    </div>
    <div class="team-content">
        <div class="container">
            <div class="team-wrap">
                <?php if( get_field('our_team_top_title') ){ ?>
                    <h4 class="optinal-h4"><?php echo __(get_field('our_team_top_title'), 'universityanimalclinic'); ?></h4>
                <?php } ?>
                <?php if( get_field('our_team_title') ) { ?>
                    <h1><?php echo __(get_field('our_team_title'), 'universityanimalclinic'); ?></h1>
                <?php } ?>
                <div class="row">
                    <?php 
                        $our_team = webfx_get_our_team();
                        if( $our_team ) {
                            foreach( $our_team as $team ) {
                    ?>
                            <div class="col-md-4">
                                <div class="team-box">
                                    <div class="team-image">
                                        <?php echo get_the_post_thumbnail( $team->ID, 'full' ); ?>
                                        <div class="team-hover">
                                            <div class="team-h-inner">
                                                <?php if( get_field('icon', $team->ID) ){ ?>
                                                    <div class="comman-icon">
                                                        <span class="<?php echo get_field('icon', $team->ID); ?>"></span>
                                                    </div>
                                                <?php } ?>
                                                <div class="more-div">
                                                    <a class="learn-more yellow-link" href="<?php echo get_permalink( $team->ID ); ?>"><?php echo __(get_field('cta_label',$team->ID),'universityanimalclinic'); ?> <span
                                                            class="icon-arrow-right"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="team-title">
                                        <?php echo __( $team->post_title, 'universityanimalclinic' ); ?>
                                    </div>
                                </div>
                            </div>
                    <?php 
                            }
                        }
                    ?>
                </div>
                <?php if( get_field('our_team_button_label') ) { ?> 
                <div class="meet-button">
                    <a href="<?php echo get_field('our_team_button_link'); ?>" class="btn btn-secondary"><?php echo __( get_field('our_team_button_label'), 'universityanimalclinic' ); ?></a>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<!-- Home Team End -->