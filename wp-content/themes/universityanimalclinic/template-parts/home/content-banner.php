<?php 
    $banner = get_field('home_banner');
    if( $banner ) { 
?>
    <!-- Home Slider Start -->
    <div class="home-slider owl-carousel owl-theme">
        <?php foreach( $banner as $item ) { ?>
        <div class="item">
            <div class="slide-image">
                <img src="<?php echo $item['banner_image']['url']; ?>" alt="<?php echo __( $item['banner_image']['alt'], '' ); ?>" />
            </div>
            <div class="container">
            
                <div class="slide-content">
                    <h4 class="optinal-h4"><?php echo __( $item['top_label'], '' ); ?></h4>
                    <h3><?php echo __( $item['banner_title'], '' ); ?></h3>
                    
                    <a href="<?php echo webfx_are_external_internal_link($item)['link']; ?>" target="<?php echo webfx_are_external_internal_link($item)['target']; ?>" class="btn btn-primary"><?php echo __( $item['button_label'], '' ); ?></a>
                </div>
            
            </div>
        </div>
        <?php } ?>
    </div>
    <!-- Home Slider End -->
<?php     
    } 
?>