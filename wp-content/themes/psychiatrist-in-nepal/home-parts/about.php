<!-- ========================
      About Layout 3
    =========================== -->
<section class="about-layout3 pb-0">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-7 offset-lg-1">
                <div class="heading-layout2">
                    <h2 class="heading__subtitle color-primary"><?php echo get_field('about_top_title'); ?></h2>
                    <h3 class="heading__title mb-60"><?php echo get_field('about_title'); ?> </h3>
                </div><!-- /heading -->
            </div><!-- /.col-12 -->
        </div><!-- /.row -->
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-2">
                <div class="experience">
                    <h2 class="experience__years"><?php echo get_field('year'); ?></h2>
                    <h3 class="experience__text">Years of Experience</h3>
                    <p><?php echo get_field('year_description'); ?></p>
                </div><!-- /.experience -->
            </div><!-- /.col-lg-2 -->
            <div class="col-sm-12 col-md-12 col-lg-5">
                <div class="video-banner-layout2 bg-overlay">
                    <img src="<?php the_post_thumbnail_url('full');?>" alt="about" class="w-100">
                    <a class="video__btn video__btn-white popup-video" href="#">
                        <div class="video__player">
                            <i class="fa fa-play"></i>
                        </div>
                        <span class="video__btn-title color-white">Watch My Video!</span>
                    </a>
                </div><!-- /.video-banner -->
            </div><!-- /.col-lg-5 -->
            <div class="col-sm-12 col-md-12 col-lg-5">
                <div class="about__text">
                    <div class="text__icon">
                        <i class="icon-doctor"></i>
                    </div>
                    <p class="heading__desc font-weight-bold color-secondary mb-30">
                        <?php the_field('about_heading_description');?>
                    </p>
                    <p class="heading__desc"><?php the_field('about_description');?></p>
                    <a href="<?php echo get_page_link(13); ?>" class="btn btn__secondary btn__rounded mt-40">
                        <span>Find A Doctor</span> <i class="icon-arrow-right"></i>
                    </a>
                </div><!-- /.about__text -->
            </div><!-- /.col-lg-5 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.About Layout 3 -->