<!-- ============================
        Slider
    ============================== -->
<section class="slider">
    <div class="slick-carousel m-slides-0"
        data-slick='{"slidesToShow": 1, "arrows": true, "dots": false, "speed": 700,"fade": true,"cssEase": "linear"}'>
        <?php
$args = array('post_type' => 'slider', 'showposts' => 3);
$loop = new WP_Query($args);
while ($loop->have_posts()): $loop->the_post();
    ?>
        <div class="slide-item align-v-h">
            <div class="bg-img"><img src="<?php the_post_thumbnail_url('full');?>" alt="<?php the_title();?>"></div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-7">
                        <div class="slide__content">
                            <h2 class="slide__title"><?php the_title();?></h2>
                            <p class="slide__desc"><?php echo strip_tags(get_the_content()); ?></p>
                            <ul class="features-list list-unstyled mb-0 d-flex flex-wrap">
                                <!-- feature item #1 -->
                                <li class="feature-item">
                                    <div class="feature__icon">
                                        <i class="icon-heart"></i>
                                    </div>
                                    <h2 class="feature__title">Anxiety</h2>
                                </li><!-- /.feature-item-->
                                <!-- feature item #2 -->
                                <li class="feature-item">
                                    <div class="feature__icon">
                                        <i class="icon-medicine"></i>
                                    </div>
                                    <h2 class="feature__title">Depression</h2>
                                </li><!-- /.feature-item-->
                                <!-- feature item #3 -->
                                <li class="feature-item">
                                    <div class="feature__icon">
                                        <i class="icon-heart2"></i>
                                    </div>
                                    <h2 class="feature__title">Disorder</h2>
                                </li><!-- /.feature-item-->
                                <!-- feature item #4 -->
                                <li class="feature-item">
                                    <div class="feature__icon">
                                        <i class="icon-blood-test"></i>
                                    </div>
                                    <h2 class="feature__title">Addiction</h2>
                                </li><!-- /.feature-item-->
                            </ul><!-- /.features-list -->
                        </div><!-- /.slide-content -->
                    </div><!-- /.col-xl-7 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.slide-item -->
        <?php endwhile;
wp_reset_postdata();?>
    </div><!-- /.carousel -->
</section><!-- /.slider -->