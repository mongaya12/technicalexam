<!-- Home Services Start -->
<div class="home-services line-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="service-content">
                    <?php if( get_field('veterinary_services_top_title') ) { ?>
                    <h4 class="optinal-h4">
                        <?php echo get_field('veterinary_services_top_title'); ?>
                    </h4>
                    <?php } ?>
                    
                    <div class="entry-content">
                        <?php echo apply_filters('acf_the_content', get_field('veterinary_services_contents') ); ?>
                    </div>
                    <a href="<?php echo get_field('veterinary_services_page_link'); ?>" class="btn btn-primary"><?php echo __( get_field('veterinary_services_button_label'), 'universityanimalclinic' ); ?></a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="d-none d-lg-block">
                    <div class="service-owl owl-carousel owl-theme">
                        <div class="item">
                            <div class="row">
                            <?php 
                                $veterinary_services = webfx_get_veterinary_services();
                                if( $veterinary_services ) {
                                    // print_r( $veterinary_services );
                                    foreach( $veterinary_services as $services ) {
                            ?>
                                    <div class="col-md-6">
                                        <div class="service-box">
                                            <div class="service-image">
                                                <?php echo get_the_post_thumbnail( $services->ID, 'full' ); ?>
                                            </div>
                                            <div class="service-info">
                                                <div class="service-inner">
                                                    <div class="service-icon comman-icon">
                                                        <span class="<?php echo get_field('icon',$services->ID); ?>"></span>
                                                    </div>
                                                    <div class="service-title"><?php echo __( $services->post_title, 'universityanimalclinic' ); ?></div>
                                                    <a class="learn-more" href="<?php echo get_permalink( $services->ID ); ?>"><?php echo __( get_field('cta_label',$services->ID) ,'universityanimalclinic'); ?> <span
                                                            class="icon-arrow-right"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            <?php
                                    }
                                }
                            ?>
                            </div>
                        </div>

                        <div class="item">
                            <div class="row">
                            <?php 
                                $veterinary_services_2 = webfx_get_veterinary_services(2);
                                if( $veterinary_services_2 ) {
                                    foreach( $veterinary_services_2 as $services ) {
                            ?>
                                    <div class="col-md-6">
                                        <div class="service-box">
                                            <div class="service-image">
                                                <?php echo get_the_post_thumbnail( $services->ID, 'full' ); ?>
                                            </div>
                                            <div class="service-info">
                                                <div class="service-inner">
                                                    <div class="service-icon comman-icon">
                                                        <span class="<?php echo get_field('icon',$services->ID); ?>"></span>
                                                    </div>
                                                    <div class="service-title"><?php echo __( $services->post_title, 'universityanimalclinic' ); ?></div>
                                                    <a class="learn-more" href="#"><?php echo __( get_field('cta_label',$services->ID) ,'universityanimalclinic'); ?> <span
                                                            class="icon-arrow-right"></span></a>
                                                </div>
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
                <div class="d-lg-none">
                    <div class="service-owl owl-carousel owl-theme">
                    <?php 
                            if( $veterinary_services ) {
                                foreach( $veterinary_services as $services ) {
                        ?>
                                <div class="item">
                                    <div class="service-box">
                                        <div class="service-image">
                                            <?php echo get_the_post_thumbnail( $services->ID, 'full' ); ?>
                                        </div>
                                        <div class="service-info">
                                            <div class="service-inner">
                                                <div class="service-icon comman-icon">
                                                    <span class="<?php echo get_field('icon',$services->ID); ?>"></span>
                                                </div>
                                                <div class="service-title"><?php echo __( $services->post_title, 'universityanimalclinic' ); ?></div>
                                                <a class="learn-more" href="<?php echo get_permalink( $services->ID ); ?>"><?php echo __( get_field('cta_label',$services->ID) ,'universityanimalclinic'); ?> <span
                                                        class="icon-arrow-right"></span></a>
                                            </div>
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
<!-- Home Services End -->