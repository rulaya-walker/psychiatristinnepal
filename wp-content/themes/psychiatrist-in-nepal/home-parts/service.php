<!-- ========================
        Services Layout 1
    =========================== -->
<section class="services-layout1 services-carousel">
    <div class="bg-img"><img src="assets/images/backgrounds/2.jpg" alt="background"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                <div class="heading text-center mb-60">
                    <h2 class="heading__subtitle"> We Provide you Best Care!</h2>
                    <h3 class="heading__title">Mental Health Conditions</h3>
                </div><!-- /.heading -->
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row">
            <div class="col-12">
                <div class="slick-carousel"
                    data-slick='{"slidesToShow": 3, "slidesToScroll": 1, "autoplay": true, "arrows": false, "dots": true, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 2}}, {"breakpoint": 767, "settings": {"slidesToShow": 1}}, {"breakpoint": 480, "settings": {"slidesToShow": 1}}]}'>
                    <?php
$args = array('post_type' => 'service', 'showposts' => -1);
$loop = new WP_Query($args);
while ($loop->have_posts()): $loop->the_post();
    ?>
	                    <!-- service item #1 -->
	                    <div class="service-item">
	                        <div class="service__icon">
	                            <?php echo get_field('service_icon'); ?>
	                            <?php echo get_field('service_icon'); ?>
	                        </div><!-- /.service__icon -->
	                        <div class="service__content">
	                            <h4 class="service__title"><?php the_title();?></h4>
	                            <p class="service__desc"><?php echo strip_tags(get_the_excerpt()); ?>
	                            </p>

	                            <a href="<?php the_permalink();?>" class="btn btn__secondary btn__outlined btn__rounded">
	                                <span>Read More</span>
	                                <i class="icon-arrow-right"></i>
	                            </a>
	                        </div><!-- /.service__content -->
	                    </div><!-- /.service-item -->
	                    <?php endwhile;
wp_reset_postdata();?>
                </div>
            </div><!-- /.col-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.Services Layout 1 -->