<?php get_header();?>


<!-- =========================
            Google Map
    =========================  -->
<section class="google-map py-0">
    <iframe frameborder="0" height="500" width="100%"
        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14134.177529190287!2d85.3221242!3d27.6695648!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1965f8bc9d2d%3A0xcb420de483ec9058!2sExpert%20Clinic!5e0!3m2!1sen!2snp!4v1701251394672!5m2!1sen!2snp&amp;t=m&amp;z=10&amp;output=embed&amp;iwloc=near"></iframe>
</section><!-- /.GoogleMap -->

<!-- ==========================
        contact layout 1
    =========================== -->
<section class="contact-layout1 pt-0 mt--100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="contact-panel d-flex flex-wrap">
                    <form class="contact-panel__form" method="post" action="#" id="contactForm">
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="contact-panel__title">How Can We Help? </h4>
                                <p class="contact-panel__desc mb-30">Please feel welcome to contact our friendly
                                    representative
                                    with any general or mental health enquiry.
                                </p>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <i class="icon-user form-group-icon"></i>
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
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <i class="icon-phone form-group-icon"></i>
                                    <input type="text" class="form-control" placeholder="Phone" id="contact-Phone"
                                        name="contact-phone" required>
                                </div>
                            </div><!-- /.col-lg-6 -->
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <i class="icon-news form-group-icon"></i>
                                    <select class="form-control">
                                        <option value="0">Subject</option>
                                        <option value="1">Subject 1</option>
                                        <option value="2">Subject 1</option>
                                    </select>
                                </div>
                            </div><!-- /.col-lg-6 -->
                            <div class="col-12">
                                <div class="form-group">
                                    <i class="icon-alert form-group-icon"></i>
                                    <textarea class="form-control" placeholder="Message" id="contact-message"
                                        name="contact-message"></textarea>
                                </div>
                                <button type="submit"
                                    class="btn btn__secondary btn__rounded btn__block btn__xhight mt-10">
                                    <span>Submit Request</span> <i class="icon-arrow-right"></i>
                                </button>
                                <div class="contact-result"></div>
                            </div><!-- /.col-lg-12 -->
                        </div><!-- /.row -->
                    </form>
                    <div
                        class="contact-panel__info d-flex flex-column justify-content-between bg-overlay bg-overlay-primary-gradient">
                        <div class="bg-img"><img src="assets/images/banners/1.jpg" alt="banner"></div>
                        <div>
                            <h4 class="contact-panel__title color-white">Quick Contacts</h4>
                            <p class="contact-panel__desc font-weight-bold color-white mb-30">Please feel free to
                                contact our
                                friendly staff with any medical enquiry.
                            </p>
                        </div>
                        <div>
                            <ul class="contact__list list-unstyled mb-30">
                                <li>
                                    <i class="icon-phone"></i><a
                                        href="tel:<?php echo get_field('site_phone', 'option'); ?>">Emergency Line:
                                        <?php echo get_field('site_phone', 'option'); ?></a>
                                </li>
                                <li>
                                    <i class="icon-location"></i><a href="#">Location:
                                        <?php echo get_field('site_address', 'option'); ?></a>
                                </li>
                                <li>
                                    <i class="icon-clock"></i><a
                                        href="#"><?php echo get_field('opening_hours', 'option'); ?></a>
                                </li>
                            </ul>
                            <a href="#" class="btn btn__white btn__rounded btn__outlined">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.contact layout 1 -->



<?php get_footer();?>