<?php get_header();?>

<!-- ========================
           page title
    =========================== -->
<section class="page-title page-title-layout5">
    <div class="bg-img"><img src="<?php echo THEME_URL; ?>/assets/images/backgrounds/6.jpg" alt="background"></div>
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-between flex-wrap align-items-center">
                <h1 class="pagetitle__heading my-3">Services</h1>
                <nav>
                    <ol class="breadcrumb my-3">
                        <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Services</li>
                    </ol>
                </nav>
            </div><!-- /.col-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.page-title -->

<!-- ========================
        Services Layout 2
    =========================== -->
<section class="services-layout2 pt-130 pb-40">
    <div class="bg-img"><img src="assets/images/backgrounds/2.jpg" alt="background"></div>
    <div class="container">
        <div class="row heading-layout2">
            <div class="col-12">
                <h2 class="heading__subtitle">We Care About You</h2>
            </div><!-- /.col-12 -->
            <div class="col-sm-12 col-md-12 col-lg-5">
                <h3 class="heading__title">We Offer Various Services</h3>
            </div><!-- /.col-lg-5 -->
            <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-1">
                <p class="heading__desc mb-30">Here, we understand that mental health is extremely sensitive and deeply
                    personal journey. Our services are designed to address the various needs of individuals seeking
                    support and guidance. Here’s how we can assist you on your journey to mental well-being.</p>
                <div class="d-flex flex-wrap align-items-center mt-30 mb-60">
                    <a href="#" class="btn btn__primary btn__rounded mr-30">
                        <span>Make Appointment</span>
                        <i class="icon-arrow-right"></i>
                    </a>
                    <a href="#" class="btn btn__secondary btn__link">
                        <i class="icon-arrow-right icon-filled"></i>
                        <span>Our Core Values</span>
                    </a>
                </div>
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row">
            <?php while (have_posts()): the_post();?>
	            <!-- service item #1 -->
	            <div class="col-sm-12 col-md-6 col-lg-4">
	                <div class="service-item">
	                    <div class="service__img">
	                        <img src="<?php the_post_thumbnail_url('full');?>" alt="img" loading="lazy">
	                    </div><!-- /.service__img -->
	                    <div class="service__content">
	                        <h4 class="service__title"><?php the_title();?></h4>
	                        <p class="service__desc"><?php strip_tags(get_the_excerpt());?>
	                        </p>
	                        <a href="<?php the_permalink();?>" class="btn btn__secondary btn__outlined btn__rounded">
	                            <span>Read More</span>
	                            <i class="icon-arrow-right"></i>
	                        </a>
	                    </div><!-- /.service__content -->
	                </div><!-- /.service-item -->
	            </div><!-- /.col-lg-4 -->
	            <?php endwhile;?>
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.Services Layout 2 -->



<?php get_footer();?>