<!-- ======================
    Features Layout 2
    ========================= -->
<section class="features-layout2 pt-130 bg-overlay bg-overlay-primary">
    <div class="bg-img"><img src="<?php echo THEME_URL; ?>/assets/images/backgrounds/2.jpg" alt="background"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-1">
                <div class="heading__layout2 mb-50">
                    <h3 class="heading__title color-white"><?php echo get_field('feature_main_title'); ?></h3>
                </div>
            </div><!-- /col-lg-5 -->
        </div><!-- /.row -->
        <div class="row mb-100">
            <div class="col-sm-3 col-md-3 col-lg-1 offset-lg-5">
                <div class="heading__icon">
                    <i class="icon-insurance"></i>
                </div>
            </div><!-- /.col-lg-5 -->

        </div><!-- /.row -->
        <div class="row">
            <?php while (have_rows('features')): the_row();?>
            <!-- Feature item #1 -->
            <div class="col-sm-6 col-md-6 col-lg-3">
                <div class="feature-item">
                    <div class="feature__img">
                        <img src="<?php echo get_sub_field('feature_image'); ?>" alt="service" loading="lazy">
                    </div><!-- /.feature__img -->
                    <div class="feature__content">
                        <div class="feature__icon">
                            <?php echo get_sub_field('feature_icon'); ?>
                        </div>
                        <h4 class="feature__title"><?php echo get_sub_field('feature_title'); ?></h4>
                    </div><!-- /.feature__content -->
                    <a href="<?php echo get_sub_field('feature_url'); ?>" class="btn__link">
                        <i class="icon-arrow-right icon-outlined"></i>
                    </a>
                </div><!-- /.feature-item -->
            </div><!-- /.col-lg-3 -->
            <?php endwhile;?>
        </div><!-- /.row -->
        <div class="row">
            <div class="col-md-12 col-lg-6 offset-lg-3 text-center">
                <p class="font-weight-bold color-gray mb-0"><?php echo get_field('feature_bottom_title'); ?>
                    <a href="#" class="color-secondary">
                        <span>Contact Us For More Information</span> <i class="icon-arrow-right"></i>
                    </a>
                </p>
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.Features Layout 2 -->