<?php get_header();
$bi = get_field('banner_image') ?: BI;
?>
<!-- ========================
     <!--========================
       page title
    =========================== -->
<section class="page-title page-title-layout5">
    <div class="bg-img"><img src="<?php echo $bi; ?>" alt="background"></div>
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-between flex-wrap align-items-center">
                <h1 class="pagetitle__heading my-3">About Us</h1>
                <nav>
                    <ol class="breadcrumb my-3">
                        <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">About Us</li>
                    </ol>
                </nav>
            </div><!-- /.col-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.page-title -->


<!-- ========================
      About Layout 1
    =========================== -->
<section class="about-layout1 pb-0">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6">
                <div class="heading-layout2">
                    <h3 class="heading__title mb-40">About us</h3>
                </div><!-- /heading -->
            </div><!-- /.col-12 -->
        </div><!-- /.row -->
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6">
                <div class="about__Text">
                    <?php the_content();?>


                </div>
            </div><!-- /.col-lg-6 -->
            <div class="col-sm-12 col-md-12 col-lg-6">
                <div class="video-banner">
                    <img src="<?php the_post_thumbnail_url('full');?>" alt="about">
                    <a class="video__btn video__btn-white popup-video" href="#">
                        <div class="video__player">
                            <i class="fa fa-play"></i>
                        </div>
                    </a>
                </div><!-- /.video-banner -->
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.About Layout 1 -->



<!-- =========================
      Testimonials layout 1
      =========================  -->
<section class="testimonials-layout1 pt-130 pb-80">
    <div class="container">
        <div class="testimonials-wrapper">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-7 offset-lg-5">
                    <div class="heading-layout2">
                        <h3 class="heading__title">Inspiring Stories!</h3>
                    </div><!-- /.heading -->
                </div><!-- /.col-lg-7 -->
                <div class="col-sm-12 col-md-12 col-lg-5">
                    <div class="slider-nav mb-60">
                        <?php
$args = array('post_type' => 'testimonial', 'showposts' => 10);
$loop = new WP_Query($args);
while ($loop->have_posts()): $loop->the_post();
    ?>
	                        <div class="testimonial__meta">
	                            <div class="testimonial__thmb">
	                                <img src="<?php the_post_thumbnail_url('full');?>" alt="author thumb">
	                            </div><!-- /.testimonial-thumb -->
	                            <div>
	                                <h4 class="testimonial__meta-title"><?php the_title();?></h4>
	                                <p class="testimonial__meta-desc"><?php echo get_field('company'); ?></p>
	                            </div>
	                        </div><!-- /.testimonial-meta -->
	                        <?php endwhile;
wp_reset_postdata();?>
                    </div><!-- /.slider-nav -->
                </div><!-- /.col-lg-5 -->
                <div class="col-sm-12 col-md-12 col-lg-7">
                    <div class="slider-with-navs">
                        <?php
$args = array('post_type' => 'testimonial', 'showposts' => 10);
$loop = new WP_Query($args);
while ($loop->have_posts()): $loop->the_post();
    ?>
	                        <!-- Testimonial #1 -->
	                        <div class="testimonial-item">
	                            <h3 class="testimonial__title">“<?php echo strip_tags(get_the_content()); ?>”
	                                ”
	                            </h3>
	                        </div><!-- /. testimonial-item -->
	                        <?php endwhile;
wp_reset_postdata();?>
                    </div><!-- /.slick-carousel -->
                    <div class="testimonials__rating">
                        <div class="testimonials__rating-inner d-flex align-items-center">
                            <span class="total__rate">4.9</span>
                            <div>
                                <span class="overall__rate">Google My Business</span>
                                <span>, based on 541 reviews.</span>
                            </div>
                        </div><!-- /.testimonials__rating-inner -->
                    </div><!-- /.testimonials__rating -->
                </div><!-- /.col-lg-7 -->
            </div><!-- /.row -->
        </div><!-- /.testimonials-wrapper -->
    </div><!-- /.container -->
</section><!-- /.testimonials layout 1 -->

<?php get_footer();?>