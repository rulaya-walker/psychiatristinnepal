<!DOCTYPE html>
<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />


    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600;700&amp;family=Roboto:wght@400;700&amp;display=swap">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <?php wp_head();?>
</head>

<body>
    <div class="wrapper">
        <div class="preloader">
            <div class="loading"><span></span><span></span><span></span><span></span></div>
        </div><!-- /.preloader -->

        <!-- =========================
        Header
    =========================== -->
        <header class="header header-layout1">
            <div class="header-topbar">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <div class="d-flex align-items-center justify-content-between">
                                <ul class="contact__list d-flex flex-wrap align-items-center list-unstyled mb-0">
                                    <li>
                                        <button class="miniPopup-emergency-trigger" type="button">24/7
                                            Emergency</button>
                                        <div id="miniPopup-emergency" class="miniPopup miniPopup-emergency text-center">
                                            <div class="emergency__icon">
                                                <i class="icon-call3"></i>
                                            </div>
                                            <a href="tel:<?php echo get_field('site_phone', 'option'); ?>"
                                                class="phone__number">
                                                <i class="icon-phone"></i>
                                                <span><?php echo get_field('site_phone', 'option'); ?></span>
                                            </a>
                                            <p>Please feel free to contact our friendly reception staff with any general
                                                or medical enquiry.
                                            </p>
                                            <a href="appointment.html" class="btn btn__secondary btn__link btn__block">
                                                <span>Make Appointment</span> <i class="icon-arrow-right"></i>
                                            </a>
                                        </div><!-- /.miniPopup-emergency -->
                                    </li>
                                    <li>
                                        <i class="icon-phone"></i><a
                                            href="tel:<?php echo get_field('site_phone', 'option'); ?>">Emergency Line:
                                            <?php echo get_field('site_phone', 'option'); ?></a>
                                    </li>
                                    <li>
                                        <i class="icon-location"></i><a
                                            href="#"><?php echo get_field('site_address', 'option'); ?></a>
                                    </li>
                                    <li>
                                        <i class="icon-clock"></i><a
                                            href="#"><?php echo get_field('opening_hours', 'option'); ?></a>
                                    </li>
                                </ul><!-- /.contact__list -->
                                <div class="d-flex">
                                    <ul class="social-icons list-unstyled mb-0 mr-30">
                                        <li><a href="<?php echo get_field('facebook', 'option'); ?>" target="_blank"><i
                                                    class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="<?php echo get_field('instagram', 'option'); ?>" target="_blank"><i
                                                    class="fab fa-instagram"></i></a></li>
                                        <li><a href="<?php echo get_field('twitter', 'option'); ?>" target="_blank"><i
                                                    class="fab fa-twitter"></i></a></li>
                                    </ul><!-- /.social-icons -->
                                    <form class="header-topbar__search">
                                        <input type="text" class="form-control" placeholder="Search...">
                                        <button class="header-topbar__search-btn"><i class="fa fa-search"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div><!-- /.col-12 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.header-top -->
            <nav class="navbar navbar-expand-lg sticky-navbar">
                <div class="container-fluid">
                    <a class="navbar-brand" href="<?php echo home_url(); ?>">
                        <img src="<?php echo THEME_URL; ?>/assets/images/logo/logo-light.png" class="logo-light"
                            alt="logo">
                        <img src="<?php echo THEME_URL; ?>/assets/images/logo/logo-dark.png" class="logo-dark"
                            alt="logo">
                    </a>
                    <button class="navbar-toggler" type="button">
                        <span class="menu-lines"><span></span></span>
                    </button>
                    <div class="collapse navbar-collapse" id="mainNavigation">
                        <?php gd_custom_dd_menu();?>
                        <button class="close-mobile-menu d-block d-lg-none"><i class="fas fa-times"></i></button>
                    </div><!-- /.navbar-collapse -->
                    <div class="d-none d-xl-flex align-items-center position-relative ml-30">
                        <div class="miniPopup-departments-trigger">
                            <span class="menu-lines" id="miniPopup-departments-trigger-icon"><span></span></span>
                            <a href="departments.html">Quick Links</a>
                        </div>
                        <ul id="miniPopup-departments" class="miniPopup miniPopup-departments dropdown-menu">
                            <?php
$args = array('post_type' => 'service', 'showposts' => -1);
$loop = new WP_Query($args);
while ($loop->have_posts()): $loop->the_post();
    ?>
	                            <li class="nav__item">
	                                <a href="<?php the_permalink();?>" class="nav__item-link"><?php the_title();?></a>
	                            </li><!-- /.nav-item -->
	                            <?php endwhile;
wp_reset_postdata();?>

                        </ul> <!-- /.miniPopup-departments -->
                        <a href="<?php echo get_page_link(112); ?>" class="btn btn__primary btn__rounded ml-30">
                            <i class="icon-calendar"></i>
                            <span>Appointment</span>
                        </a>
                    </div>
                </div><!-- /.container -->
            </nav><!-- /.navabr -->
        </header><!-- /.Header -->