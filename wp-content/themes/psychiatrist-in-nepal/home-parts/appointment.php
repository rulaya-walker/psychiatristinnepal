<section class="contact-layout3 bg-overlay bg-overlay-primary-gradient pb-60">
    <div class="bg-img"><img src="<?php echo THEME_URL; ?>/assets/images/banners/3.jpg" alt="banner"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-7">
                <div class="contact-panel mb-50">
                    <form class="contact-panel__form" method="post"
                        action="https://7oroof.com/demos/medcity/assets/php/contact.php" id="contactForm">
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="contact-panel__title">Book An Appointment</h4>
                                <p class="contact-panel__desc mb-30">Please feel welcome to contact our friendly
                                    reception staff
                                    with any general or medical enquiry. Our representative will receive or
                                    return any urgent calls.
                                </p>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <i class="icon-widget form-group-icon"></i>
                                    <select class="form-control">
                                        <option value="0">Choose Clinic</option>
                                        <option value="1">Expert Clinic</option>
                                        <option value="2">Clinic One</option>
                                    </select>
                                </div>
                            </div><!-- /.col-lg-6 -->
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <i class="icon-user form-group-icon"></i>
                                    <select class="form-control">
                                        <option value="0">Choose Doctor</option>
                                        <option value="1">Kenison Shrestha</option>
                                        <option value="2">Arun Lamsal</option>
                                    </select>
                                </div>
                            </div><!-- /.col-lg-6 -->
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <i class="icon-news form-group-icon"></i>
                                    <input type="text" class="form-control" placeholder="Name" id="contact-name"
                                        name="contact-name" required>
                                </div>
                            </div><!-- /.col-lg-6 -->
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <i class="icon-email form-group-icon"></i>
                                    <input type="email" class="form-control" placeholder="Email" id="contact-email"
                                        name="contact-email" required>
                                </div>
                            </div><!-- /.col-lg-6 -->
                            <div class="col-sm-4 col-md-4 col-lg-4">
                                <div class="form-group">
                                    <i class="icon-phone form-group-icon"></i>
                                    <input type="text" class="form-control" placeholder="Phone" id="contact-Phone"
                                        name="contact-phone" required>
                                </div>
                            </div><!-- /.col-lg-4 -->
                            <div class="col-sm-4 col-md-4 col-lg-4">
                                <div class="form-group form-group-date">
                                    <i class="icon-calendar form-group-icon"></i>
                                    <input type="date" class="form-control" id="contact-date" name="contact-date"
                                        required>
                                </div>
                            </div><!-- /.col-lg-4 -->
                            <div class="col-sm-4 col-md-4 col-lg-4">
                                <div class="form-group form-group-date">
                                    <i class="icon-clock form-group-icon"></i>
                                    <input type="time" class="form-control" id="contact-time" name="contact-time"
                                        required>
                                </div>
                            </div><!-- /.col-lg-4 -->
                            <div class="col-12">
                                <button type="submit"
                                    class="btn btn__secondary btn__rounded btn__block btn__xhight mt-10">
                                    <span>Book Appointment</span> <i class="icon-arrow-right"></i>
                                </button>
                                <div class="contact-result"></div>
                            </div><!-- /.col-lg-12 -->
                        </div><!-- /.row -->
                    </form>
                </div>
            </div><!-- /.col-lg-7 -->
            <div class="col-sm-12 col-md-12 col-lg-5">
                <div class="heading heading-light mb-30">
                    <h3 class="heading__title mb-30">Helping Patients From Around the Nepal!!</h3>
                    <p class="heading__desc">Our staff strives to make each interaction with patients clear,
                        concise, and
                        inviting.
                    </p>
                </div>

                <div class="text__block">
                    <p class="text__block-desc color-white font-weight-bold">We value your relationship with the
                        psychiatrist in Nepal, and we are here to make the process of reaching out as easy as we
                        can. We are there to support you along the journey of mental well being.</p>
                    <div class="sinature color-white">
                        <span class="font-weight-bold">Psychiatrist </span><span>Dr. Kenion Shretha</span>
                    </div>
                </div><!-- /.text__block -->
                <div class="slick-carousel clients-light mt-20"
                    data-slick='{"slidesToShow": 3, "arrows": false, "dots": false, "autoplay": true,"autoplaySpeed": 2000, "infinite": true, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 3}}, {"breakpoint": 767, "settings": {"slidesToShow": 2}}, {"breakpoint": 480, "settings": {"slidesToShow": 2}}]}'>
                    <?php
$args = array('post_type' => 'client', 'showposts' => -1);
$loop = new WP_Query($args);
while ($loop->have_posts()): $loop->the_post();
    ?>
                    <div class="client">
                        <img src="<?php the_post_thumbnail_url('full');?>" alt="client">
                        <img src="<?php the_post_thumbnail_url('full');?>" alt="client">
                    </div><!-- /.client -->
                    <?php endwhile;
wp_reset_postdata();?>
                </div><!-- /.carousel -->
            </div><!-- /.col-lg-5 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.contact layout 3 -->