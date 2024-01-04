<!-- ========================
      Footer
    ========================== -->
<footer class="footer">
    <div class="footer-primary">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-3">
                    <div class="footer-widget-about">
                        <img src="<?php echo THEME_URL; ?>/assets/images/logo/logo-light.png" alt="logo" class="mb-30">
                        <p class="color-gray"><?php echo get_field('footer_text', 'option'); ?>
                        </p>
                        <a href="<?php echo get_page_link(112); ?>"
                            class="btn btn__primary btn__primary-style2 btn__link">
                            <span>Make Appointment</span> <i class="icon-arrow-right"></i>
                        </a>
                    </div><!-- /.footer-widget__content -->
                </div><!-- /.col-xl-2 -->
                <div class="col-sm-6 col-md-6 col-lg-2 offset-lg-1">
                    <div class="footer-widget-nav">
                        <h6 class="footer-widget__title">Mental Health</h6>
                        <nav>
                            <?php gd_menu('menu-3', 'menu-3', 'list-unstyled', '');?>
                        </nav>
                    </div><!-- /.footer-widget__content -->
                </div><!-- /.col-lg-2 -->
                <div class="col-sm-6 col-md-6 col-lg-2">
                    <div class="footer-widget-nav">
                        <h6 class="footer-widget__title">Links</h6>
                        <nav>
                            <?php gd_menu('menu-2', 'menu-2', 'list-unstyled', '');?>
                        </nav>
                    </div><!-- /.footer-widget__content -->
                </div><!-- /.col-lg-2 -->
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="footer-widget-contact">
                        <h6 class="footer-widget__title color-heading">Quick Contacts</h6>
                        <ul class="contact-list list-unstyled">
                            <li>If you have any questions or need help, feel free to contact with our team.</li>
                            <li>
                                <a href="tel:<?php echo get_field('site_phone', 'option'); ?>" class="phone__number">
                                    <i class="icon-phone"></i>
                                    <span><?php echo get_field('site_phone', 'option'); ?></span>
                                </a>
                            </li>
                            <li class="color-body"><?php echo get_field('site_address', 'option'); ?> (Opposite to Patan
                                Hospital)</li>
                        </ul>
                        <div class="d-flex align-items-center">
                            <a href="#" class="btn btn__primary btn__link mr-30">
                                <i class="icon-arrow-right"></i> <span>Get Directions</span>
                            </a>
                            <ul class="social-icons list-unstyled mb-0">
                                <li><a href="<?php echo get_field('facebook', 'option'); ?>" target="_blank"><i
                                            class="fab fa-facebook-f"></i></a></li>
                                <li><a href="<?php echo get_field('instagram', 'option'); ?>" target="_blank"><i
                                            class="fab fa-instagram"></i></a></li>
                                <li><a href="<?php echo get_field('twitter', 'option'); ?>" target="_blank"><i
                                            class="fab fa-twitter"></i></a></li>
                            </ul><!-- /.social-icons -->
                        </div>
                    </div><!-- /.footer-widget__content -->
                </div><!-- /.col-lg-2 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.footer-primary -->
    <div class="footer-secondary">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <span class="fz-14">&copy; <?php echo date('Y'); ?> Psychiatrist in Nepal, All Rights Reserved. With
                        Love
                        by</span>
                    <a class="fz-14 color-primary" href="#">Suga</a>
                </div><!-- /.col-lg-6 -->
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <nav>
                        <ul class="list-unstyled footer__copyright-links d-flex flex-wrap justify-content-end mb-0">
                            <li><a href="#">Terms & Conditions</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Cookies</a></li>
                        </ul>
                    </nav>
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.footer-secondary -->
</footer><!-- /.Footer -->
<button id="scrollTopBtn"><i class="fas fa-long-arrow-alt-up"></i></button>
</div><!-- /.wrapper -->

<?php wp_footer();?>
</body>



</html>