<!-- Exotic Care Start -->
<div class="exotic-care">
    <div class="container">
        <div class="exotic-wrap">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <h4 class="optinal-h4"><?php echo __( get_field('exotic_pet_care_top_title'), 'universityanimalclinic' ); ?></h4>
                    <div class="entry-content">
                        <?php echo apply_filters('acf_the_content',get_field('exotic_pet_care_the_content')); ?>
                    </div>
                    <a href="<?php echo get_field('exotic_pet_care_button_link'); ?>" class="btn btn-primary"><?php echo __( get_field('exotic_pet_care_button_label'), 'universityanimalclinic'); ?></a>
                </div>
                <div class="col-lg-5">
                    <div class="exotic-images">
                        <div class="exotic-image1 team-box">
                            <div class="team-image">
                                <img src="<?php echo get_field('exotic_first_image')['url']; ?>" alt="<?php echo get_field('exotic_first_image')['alt']; ?>" />
                            </div>
                            <div class="team-title"><?php echo get_field('exotic_first_image_caption'); ?></div>
                        </div>
                        <div class="exotic-image2 team-box">
                            <div class="team-image">
                                <img src="<?php echo get_field('exotic_second_image')['url']; ?>" alt="<?php echo get_field('exotic_second_image')['alt']; ?>" />
                            </div>
                            <div class="team-title"><?php echo get_field('exotic_second_image_caption'); ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Exotic Care End -->