<div class="footer-bottom">
    <div class="container">
        <div class="bottom-wrap">
            <div class="footer-left">
                <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'footer-menu',
                            'menu_class'      => 'footer-menu',
                        )
                    )
                ?>
                <div class="copyright">
                    Copyright © <?php echo get_the_date('Y'); ?>. All Rights Reserved
                </div>
            </div>
            <div class="back-top">
                <a class="learn-more yellow-link" href="#">Back to Top <span class="icon-arrow-up"></span></a>
            </div>
        </div>
    </div>
</div>