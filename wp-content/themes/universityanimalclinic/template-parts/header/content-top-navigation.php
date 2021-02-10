<div class="container">
    <div class="header-wrap">
        <div class="header-logo">
            <?php the_custom_logo(); ?>	
        </div>
        <div class="header-right">
            <div class="header-content">
                <div class="call-us">
                    <?php if( webfx_cta_top_header('label') ) { ?>
                        <span><?php echo webfx_cta_top_header('label'); ?></span>
                    <?php } ?> 
                    <?php if( webfx_cta_top_header('pnumber') ) { ?>
                        <a href="tel:<?php echo webfx_cta_top_header('telpnumber'); ?>">
                        <?php echo webfx_cta_top_header('pnumber'); ?></a>
                    <?php } ?>
                </div>
                <div class="online-request">
                    <?php if( webfx_cta_top_header('online-pharmacy') ) { ?>
                    <a href="<?php echo webfx_cta_top_header('pharmacy-link') ?>" class="btn btn-secondary"><?php echo webfx_cta_top_header('online-pharmacy') ?></a>
                    <?php } ?>

                    <?php if( webfx_cta_top_header('request-appointment') ) { ?>
                    <a href="<?php echo webfx_cta_top_header('request-appointment-link') ?>" class="btn btn-primary"><?php echo webfx_cta_top_header('request-appointment') ?></a>
                    <?php } ?>
                </div>
            </div>
            <div class="header-bottom">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                        <span class="menu-text">Menu</span>
                    </button>
                    <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'menu-1',
                                'depth'           => 3, // 1 = no dropdowns, 2 = with dropdowns.
                                'container'       => 'div',
                                'container_class' => 'collapse navbar-collapse',
                                'container_id'    => 'navbarSupportedContent',
                                'menu_class'      => 'navbar-nav',
                                'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                                'walker'          => new WP_Bootstrap_Navwalker(),
                            )
                        )
                    ?>
                </nav>
                <div class="header-search">
                    <a href="javascript:void(0);" class="icon-search"></a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="searchbar">
    <div class="container">
        <div class="searchbar-inner">
            <?php get_search_form(); ?>
        </div>
    </div>
</div>

<div class="mobile-bottom-header">
    <div class="call-us">
        <span>call us </span>
        <a href="tel:<?php echo webfx_cta_top_header('telpnumber'); ?>"><?php echo webfx_cta_top_header('pnumber'); ?></a>
    </div>
</div>