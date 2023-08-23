<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js" lang="">

<head>
    <title>Patrol Vehicle Escort Services in Pakistan - <?php bloginfo(); ?> </title>
	 <meta name="robots" content="noindex,nofollow">
    <meta name="description" content="PAK Security Services has been a reliable security service provider for three decades. We deliver the finest security solutions for ex-pats and foreign returns via patrol vehicle escort with armed guards, vehicle rental with a driver, expedited immigration service, etc.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css">
    <?php wp_head(); ?>
</head>

<body <?php body_class('class-name'); ?>>


    <!-- Header Start -->

    <header>
        <!-- <div class="topbar">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <ul class="social-links d-flex list-unstyled">
                            <?php
                            if (have_rows('social_links', 'option')) :
                                while (have_rows('social_links', 'option')) : the_row(); ?>
                                    <?php if (get_sub_field('social_icon')) { ?>
                                        <li>
                                            <a href="<?php the_sub_field('social_link'); ?>"><i class="<?php the_sub_field('social_icon'); ?>"></i></a>
                                        </li>
                                    <?php
                                    } ?>

                                <?php endwhile; ?>
                            <?php else : ?>
                            <?php endif;
                            ?>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <ul class="topbar-links d-flex list-unstyled justify-content-end">
                            <li><a href="#">Support</a></li>
                            <li><a href="#">Support</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> -->
<!--         <div class="middle-bar">
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-lg-12">

                    </div>
                </div>
            </div>
        </div> -->
        <div class="bottom-bar">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-2 col-6">
                        <?php the_custom_logo(); ?>
                    </div>
                    <div class="col-lg-6 col-6">
                        <nav class="d-flex justify-content-center">

                            <?php
                            $args = array(
                                'theme_location' => 'primary',
                                'container' => 'ul',
                                'menu_class' => 'd-flex list-unstyled'
                            );
                            ?>
                            <?php wp_nav_menu($args); ?>

                            <!-- <ul class=" ">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">Gallery</a></li>
                                <li><a href="#">blog</a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul> -->
                            <!-- <div class="mb-btn">
                                <a href="<? //php echo site_url(); 
                                            ?>/#contactUs">
                                    GET FREE CONSULTATION
                                </a>
                            </div> -->
                            <div class="mobile-nav-btn">
                                <i class="fa fa-bars"></i>
                            </div>
                        </nav>
                    </div>
                    <div class="col-lg-4">
                        <div class="info-boxes d-lg-flex d-none align-items-center justify-content-end">
                            <?php
                            if (have_rows('header_info_bar', 'option')) :
                                while (have_rows('header_info_bar', 'option')) : the_row(); ?>
                                    <?php if (get_sub_field('info_bar_icon')) { ?>
                                        <div class="info-box d-flex align-items-center ">
                                            <div class="iconbox">
                                                <i class="<?php the_sub_field('info_bar_icon'); ?>"></i>
                                            </div>
                                            <div class="contentbox">
                                                <p><?php the_sub_field('info_bar_title'); ?>
                                                </p>
                                                <span><?php the_sub_field('info_bar_descrip'); ?></span>
                                            </div>
                                        </div>
                                    <?php
                                    } ?>

                                <?php endwhile; ?>
                            <?php else : ?>
                                // Sorry, no Content found
                            <?php endif;
                            ?>
                        </div>
						<div class="social-links d-flex list-unstyled justify-content-end">
                            <?php
                            if (have_rows('social_links', 'option')) :
                                while (have_rows('social_links', 'option')) : the_row(); ?>
                                    <?php if (get_sub_field('social_icon')) { ?>
										<a href="<?php the_sub_field('social_link'); ?>"><i class="<?php the_sub_field('social_icon'); ?>"></i></a>
                                    <?php
                                    } ?>

                                <?php endwhile; ?>
                            <?php else : ?>
                            <?php endif;
                            ?>
                        </div>
					</div>
                </div>
            </div>
        </div>
    </header>

    <!-- Header End -->

    <!-- Mobile Navbar Start -->

    <div class="mobile-navbar-main">
        <div class="mobile-navbar">
            <div class="close-btn">
                <i class="fa fa-times"></i>
            </div>
            <?php the_custom_logo(); ?>
            <?php
            $args = array(
                'theme_location' => 'primary',
                'container' => 'ul',
                'menu_class' => 'list-unstyled'
            );
            ?>
            <?php wp_nav_menu($args); ?>
        </div>
    </div>

    <!-- Mobile Navbar End -->