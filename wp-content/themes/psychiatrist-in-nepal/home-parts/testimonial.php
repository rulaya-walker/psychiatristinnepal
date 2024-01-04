<!-- =========================
      Testimonials layout 2
      =========================  -->
<section class="testimonials-layout2 pt-130 pb-40">
    <div class="container">
        <div class="testimonials-wrapper">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-5">
                    <div class="heading-layout2">
                        <h3 class="heading__title">Inspiring Stories!</h3>
                    </div><!-- /.heading -->
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
	                            </h3>
	                        </div><!-- /. testimonial-item -->
	                        <?php endwhile;
wp_reset_postdata();?>
                    </div><!-- /.slick-carousel -->
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
                </div><!-- /.col-lg-7 -->
            </div><!-- /.row -->
        </div><!-- /.testimonials-wrapper -->
    </div><!-- /.container -->
</section><!-- /.testimonials layout 2 -->