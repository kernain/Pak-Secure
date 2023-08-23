<!-- 
Home Page 
-->

<?php get_header(); ?>

<!-- Banner Section Start -->

<section class="banner-sec">
    <div class="banner-image-container">
        <div class="  banner-image-slider">
            
                <?php
                $args = array(
                    'post_type' => 'main-slider',
                    'posts_per_page' => -1,
                    'order' => 'ASC',
                );
                $loop = new WP_Query($args);
                while ($loop->have_posts()) : $loop->the_post();
                ?>

                    <div class="mainbox">

                        <?php if (get_field('banner_image_video')) {
                        ?>
                            <video width="100%" height="100%" autoplay muted>
                                <source src="<?php the_field('banner_image_video'); ?>">
                            </video>

                        <?php } else { ?>
                            <img class="sec-bg w-100" src="<?php the_post_thumbnail_url('full'); ?>" alt="" />
                        <?php } ?>


                    </div>
                <?php endwhile;
                wp_reset_postdata(); ?>
            
        </div>
<!--         <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div> -->
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-10">
                <div class="banner-contentbox  banner-slider">
                    
                        <?php
                        $args = array(
                            'post_type' => 'main-slider',
                            'posts_per_page' => -1,
                            'order' => 'ASC',
                        );
                        $loop = new WP_Query($args);
                        while ($loop->have_posts()) : $loop->the_post(); ?>
                            <div class="main-container">
                                <div class="mainbox">
                                    <div class="contentbox">
                                        <div class="container">
                                            <div class="content">
                                                <span><?php the_title(); ?></span>
                                                <h1><?php the_content(); ?></h1>
                                                <a href="<?php
                                                            if (get_field('banner_button_link')) {
                                                                the_field('banner_button_link');
                                                            } else {
                                                                echo "#";
                                                            };

                                                            ?>" class="btn-style1"><?php the_field('banner_action_button'); ?>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile;
                        wp_reset_postdata(); ?>
                   

                </div>
                <!-- <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div> -->
                <!-- </div> -->

            </div>
<!--             <div class="col-lg-6">
                <div class="contact-form-main">
                    <div class="banner-contact-form">
                        <h5>BOOK CONSULTATION</h5>
                        <?php echo do_shortcode('[contact-form-7 id="193" title="Banner Form"]'); ?>
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
                                // Sorry, no Content found
                            <?php endif;
                            ?>
                        </ul>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</section>

<!-- Banner Section End -->

<!-- About Us Section Start -->

<section class="about-us-sec" >
    <div class="container">
        <div class="news-container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<div class="sec-title">
						<h2><?php the_field('news_title'); ?></h2>
					</div>
					<div class="contentbox new-main">
						<div class=" swiper news-slider">
							<div class="swiper-wrapper">
								 <?php
								if (have_rows('our_news')) :
									while (have_rows('our_news')) : the_row(); ?>
										<div class="swiper-slide">
											<h3><?php the_sub_field('our_news_title'); ?></h3>
											<p><?php the_sub_field('our_news_content'); ?></p>
											<a target="_blank" href="<?php the_sub_field('news_link'); ?>" >Read More</a>
										</div>
									<?php endwhile; ?>
								<?php else : ?>
								<?php endif;
								?>

							</div>
						<div class="swiper-pagination"></div>
						</div>
						
<!-- 						<div class="swiper-button-next"></div>
						<div class="swiper-button-prev"></div> -->
					</div>

				   <!--   <div class="contentbox">
						<h3><?php the_field('about_us_title'); ?></h3>
						<p><?php the_field('about_us_content'); ?></p>
					</div>-->
				</div>
				<div class="col-lg-6">
					<div class="imgbox">
						<video width="100%" height="100%" autoplay loop muted>
							<source src="<?php the_field('about_us_video'); ?>">
						</video>
					</div>
				</div>
			</div>
		</div>
    </div>
</section>

<!-- About Us Section End -->

<!-- Loved ones section Start -->

<section class="loved-one-sec" id="aboutUs">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="sec-title">
					<h2><?php the_field('loved_ones_title'); ?></h2>
				</div>
				<div class="contentbox">
					<?php the_field('loved_ones_description'); ?>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Loved ones section End -->

<!-- About Us Counter Section Start -->

<!-- <section class="about-us-sec about-us-counter-sec" >
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="contentbox">
                    
                </div>
            </div>
        </div>
    </div>
</section> -->

<!-- About Us Counter Section End -->

<!-- Why choose Us Section Start -->

<section class="why-choose-sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="content-col">
                    <div class="sec-title">
                        <h2><?php the_field('why_choose_us_title'); ?></h2>
                        <p><?php the_field('why_choose_us_content'); ?></p>
                    </div>
<!--                     <div class="why-choose-cards">
                        <?php
                        if (have_rows('choose_us_cards')) :
                            while (have_rows('choose_us_cards')) : the_row(); ?>
                                <div class="why-choose-card">
                                    <div class="mainbox">
                                        <div class="iconbox">
                                            <i class="<?php the_sub_field('cu_card_icon'); ?>"></i>
                                        </div>
                                        <div class="contentbox">
                                            <h5><?php the_sub_field('cu_card_title'); ?></h5>
                                            <p><?php the_sub_field('cu_card_content'); ?></p>
                                        </div>
                                    </div>
                                </div>

                            <?php endwhile; ?>
                        <?php else : ?>
                            // Sorry, no Content found
                        <?php endif;
                        ?>
                    </div> -->
					<div class="about-us-counters">
                        <?php
                        if (have_rows('about_us_counter')) :
                            while (have_rows('about_us_counter')) : the_row(); ?>
                                <div class="about-us-counter">
                                    <div class="iconbox">
                                        <i class="<?php the_sub_field('ab_counter_icon'); ?>"></i>
                                    </div>
                                    <div class="content">
                                        <?php if(get_sub_field('ab_counter_title')){ ?>
											<span class="counter"><?php the_sub_field('ab_counter_title'); ?></span>
										<?php } ?>
										<?php if(get_sub_field('ab_counter_title')){ ?>
										    <p><?php the_sub_field('ab_counter_description'); ?></p>
                                    	<?php } else{ ?>
										<span class="counter"><?php the_sub_field('ab_counter_description'); ?></span>
										<?php } ?>
										
									</div>
                                </div>

                            <?php endwhile; ?>
                        <?php else : ?>
                            // Sorry, no Content found
                        <?php endif;
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="fact-counter">
                    <img src="<?php the_field('choose_us_bg'); ?>" alt="" />
<!--                     <div class="fact-counter-cards">
                        <?php
                        if (have_rows('choose_us_counter')) :
                            while (have_rows('choose_us_counter')) : the_row(); ?>
                                <div class="fact-counter-card">
                                    <span class="counter"><?php the_sub_field('cu_counter_number'); ?></span>
                                    <p><?php the_sub_field('cu_counter_title'); ?></p>
                                </div>
                            <?php endwhile; ?>
                        <?php else : ?>
                        <?php endif;
                        ?>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why choose Us Section End -->

<!-- Mission vission Section Start -->

<!-- <section class="mission-vision-sec">
    <div class="container">
        <div class="mission-vision-main">
            <div class="row">
                <?php
                if (have_rows('mission_vision')) :
                    while (have_rows('mission_vision')) : the_row(); ?>
                        <div class="col-lg-6">
							<div class="mainbox">
								<div class="iconbox">
									<img src="<?php the_sub_field('card_title_icon'); ?>" alt="" /> 
								</div>
								<div class="contentbox">
									<h2><?php the_sub_field('card_title'); ?></h2>
									<p><?php the_sub_field('card_content'); ?></p>
								</div>
							</div>
                        </div>

                    <?php endwhile; ?>
                <?php else : ?>
                <?php endif;
                ?>
            </div>
        </div>
    </div>
</section> -->

<!-- Mission vission Section End -->

<!-- Pricing Section Start -->

<section class="pricing-sec" id="Packages">
    <div class="container">
        <div class="sec-title">
            <h2>Our Packages</h2>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="mainbox">
                    <div class="p-top">
                        <i class="fas fa-shield-alt"></i>
                        <span class="p-label">Patrol Vehicle Escort</span>
                        <h2 class="s-price">$85</h2>
                        <p class="s-content">Patrol Vehicle with Armed Guards escorts you from or to the airport. </p>
                    </div>
                    <ul>
                        <li><i class="fas fa-check"></i><span>$85 within city limits* </span></li>
                        <li><i class="fas fa-check"></i><span>$150 with return flight when booked together</span></li>
                        <li><i class="fas fa-check"></i><span>Patrol vehicle escort</span></li>
                        <li><i class="fas fa-check"></i><span>Highly-trained security guards</span></li>
                        <li><i class="fas fa-check"></i><span>Secure escort</span></li>
                    </ul>
					<p class="not-included-area">*(Gulshan-e-Maymar/Bahria Town/SITE/Port Qasim / Steel Town not included) </p>
                    <div class="p-bottom">
                        <a class="btn-style1" href="#contactUs">Get Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="mainbox">
                    <div class="p-top">
                        <i class="fas fa-shield-alt"></i>
                        <span class="p-label">Patrol Vehicle Escort With Passenger Car</span>
                        <h2 class="s-price">$150</h2>
<!--                         <p class="s-content">A 4-passenger vehicle rental with a driver</p> -->
						<p class="s-content">Patrol Vehicle Escort and a 4x4 (SUV) passenger car with driver.</p>
                    </div>
                    <ul>
                        <li><i class="fas fa-check"></i><span>$150 within city limits*</span></li>
                        <li><i class="fas fa-check"></i><span>$250 with return flight when booked together</span></li>
                        <li><i class="fas fa-check"></i><span>4x4 Passenger vehicle with professional driver</span></li>
						<li><i class="fas fa-check"></i><span>Patrol Vehicle  escort</span></li>
						<li><i class="fas fa-check"></i><span>Highly- trained security guards</span></li>
                    </ul>
					<p class="not-included-area">*(Gulshan-e-Maymar/Bahria Town/SITE/Port Qasim/ Steel Town not included) </p>
                    <div class="p-bottom">
                        <a class="btn-style1" href="#contactUs">Get Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Pricing Section End -->

<!-- Inquiry form Start -->

<section class="inquiry-form-sec" id="contactUs">
    <div class="container">
		<div class="sec-title">
			<h2>Book Our Service</h2>
			<p>
				Enter up-to-date information below to make a booking.
			</p>
		</div>
<!--         <div class="inquiry-form-title">
            <span>BOOK NOW</span>
        </div> -->
        <?php echo do_shortcode('[contact-form-7 id="201" title="Inquiry Form New"]'); ?>

    </div>
</section>

<!-- Inquiry form End -->

<!-- Best Services Section Start -->

<section class="best-services-sec">
    <div class="container">
        <div class="sec-title">
            <h2><?php the_field('advantage_title'); ?></h2>
            <p><?php the_field('advantage_content'); ?></p>
        </div>
        <div class="row">
            <div class="left-col col-lg-4">
                <?php
                if (have_rows('advantages_left_box')) :
                    while (have_rows('advantages_left_box')) : the_row(); ?>
                        <div class="mainbox">
                            <div class="contentbox">
                                <h5><?php the_sub_field('l_advantage_title'); ?></h5>
                                <p><?php the_sub_field('l_advantage_content'); ?></p>
                            </div>
                            <div class="iconbox">
                                <i class="<?php the_sub_field('l_advantage_icon'); ?>"></i>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php else : ?>
                    // Sorry, no Content found
                <?php endif;
                ?>
            </div>
            <div class="img-col col-lg-4">
                <figure class="imgbox">
                    <img src="<?php the_field('advantage_image'); ?>" alt="" />
                </figure>
            </div>
            <div class="right-col col-lg-4">
                <?php
                if (have_rows('advantages_right_box')) :
                    while (have_rows('advantages_right_box')) : the_row(); ?>
                        <div class="mainbox">
                            <div class="contentbox">
                                <h5><?php the_sub_field('r_advantage_title'); ?></h5>
                                <p><?php the_sub_field('r_advantage_content'); ?></p>
                            </div>
                            <div class="iconbox">
                                <i class="<?php the_sub_field('r_advantage_icon'); ?>"></i>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php else : ?>
                    // Sorry, no Content found
                <?php endif;
                ?>
            </div>
        </div>
    </div>
</section>

<!-- Best Services Section End -->

<!-- Our Advantages Section Start -->

<!-- <section class="our-advantages-sec" id="services">
    <div class="container">
        <div class="sec-title">
            <h2><?php the_field('our_service_title'); ?></h2>
            <p><?php the_field('our_service_short_description'); ?></p>
        </div>
        <div class="row">
            <?php
            $args = array(
                'post_type' => 'our-service',
                'posts_per_page' => -1,
                'order' => 'ASC'
            );
            $loop = new WP_Query($args);
            while ($loop->have_posts()) : $loop->the_post();
            ?>
                <div class="col-lg-4">
                    <div class="mainbox">
                        <div class="imgbox">
                            <a href="#">
                                <img src="<?php the_post_thumbnail_url('full'); ?>" alt="" />
                            </a>
                            <div class="iconbox">
                                <i class="<?php the_field('service_icon'); ?>"></i>
                            </div>
                        </div>
                        <div class="contentbox">
                            <a href="#">
                                <h5><?php the_title(); ?></h5>
                            </a>
                            <div class="content">
                                <?php the_content(); ?>
                            </div>
                             <a href="#">Read More <i class="fa fa-arrow-right"></i> </a> 
                        </div>
                    </div>
                </div>
            <?php endwhile;
            wp_reset_postdata(); ?>
        </div>
    </div>
</section> -->

<!-- Our Advantages Section End -->

<!-- Our Guards Section Start -->

<section class="our-guards-sec">
    <div class="container">
        <div class="sec-title">
            <h2><?php the_field('our_guard_title'); ?></h2>
            <p><?php the_field('our_guard_content'); ?></p>
        </div>
        
    </div>
<!--             <?php
            $args = array(
                'post_type' => 'our-guard',
                'posts_per_page' => -1
            );
            $loop = new WP_Query($args);
            while ($loop->have_posts()) : $loop->the_post();
            ?>

                <div class="col-lg-4">
                    <div class="mainbox">
                        <div class="imgbox">
                            <img class="w-100" src="<?php the_post_thumbnail_url('full'); ?>" alt="" />
                        </div>
                        <div class="contentbox">
                            <div class="content">
                                <h6><?php the_title(); ?></h6>
                                <span class="designation"><?php the_field('guard_designation'); ?></span>
                                <div class="g-social-icons">
                                    <?php
                                    if (have_rows('guard_social_profiles')) :
                                        while (have_rows('guard_social_profiles')) : the_row(); ?>
                                            <a href="<?php the_sub_field('social_link'); ?>"><i class="<?php the_sub_field('g_social_icon'); ?>"></i></a>
                                        <?php endwhile; ?>
                                    <?php else : ?>
                                    <?php endif;
                                    ?>
                                </div>
                                <div class="left-arrow"></div>
                                <div class="right-arrow"></div>
                            </div>
                        </div>
                    </div>
                </div>

            <?php endwhile;
            wp_reset_postdata(); ?> -->
			
		<div class="imgbox">
			<img class="w-100" src="<?php the_field('our_guards_image'); ?>" />
		</div>
</section>

<!-- Our Guards Section End -->

<!-- Cta Section Start -->

<section class="cta-sec" style="background-image: url(<?php the_field('cta_background_image'); ?>);">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="contentbox">
<!--                     <div class="iconbox">
                        <i class="<?php the_field('cta_icon'); ?>"></i>
                    </div> -->
                    <div class="content">
                        <h5><?php the_field('cta_title'); ?></h5>
                        <p><?php the_field('cta_content'); ?></p>
						<div class="cta-btn">
							<a target="_blank" href="<?php the_field('cta_button_link'); ?>" class="btn-style1"><?php the_field('cta_button_text'); ?></a>
						</div>
                    </div>
                </div>
            </div>
<!--             <div class="col-lg-3">
                
            </div> -->
        </div>
    </div>
</section>

<!-- Cta Section End -->



<!-- Inquiry form Start -->

<!-- <section class="inquiry-form-sec" id="contactUs">
    <div class="container">
        <div class="inquiry-form-title">
            <span>CONTACT US FOR INQUIRY</span>
        </div>
        <? //php// echo do_shortcode('[contact-form-7 id="194" title="Inquiry Form"]'); 
        ?>
    </div>
</section> -->

<!-- Inquiry form End -->





<!-- Our Client Says Section Start -->

<section class="our-clients-sec">
    <div class="container">
        <div class="sec-title">
            <h2><?php the_field('our_clients_title'); ?></h2>
        </div>
        <div class="swipper-main">
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper clients-slider">
                <div class="swiper-wrapper">
                    <?php
                    $args = array(
                        'post_type' => 'our-client',
                        'posts_per_page' => -1
                    );
                    $loop = new WP_Query($args);
                    while ($loop->have_posts()) : $loop->the_post();
                    ?>
                        <div class="swiper-slide">
                            <div class="mainbox">
                                <div class="contentbox">
                                    <span class="quote-icon"><i class="fas fa-quote-left"></i></span>
                                    <div class="content">
                                        <?php the_content(); ?>
                                    </div>
                                    <div class="author-info">
                                        <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                                        <div class="author-bio">
                                            <h6><?php the_title(); ?></h6>
                                            <span class="designation"><?php the_field('guard_designation'); ?></span>
                                            <div class="rating-stars">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    <?php endwhile;
                    wp_reset_postdata(); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Client Says Section End -->


<!-- Pricing Section Start -->

<!-- <section class="pricing-sec-v2">
    <div class="container">
        <div class="sec-title">
            <h2>Our Packages</h2>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="mainbox">
                    <div class="p-top">
                        <span class="p-label">Patrol vehicle escort</span>
                        <h2 class="s-price">$65</h2>
                    </div>
                    <p class="s-content">Patrol vehicle escort with armed guards from/to the airport</p>
                    <ul>
                        <li><i class="fas fa-check"></i><span>Lorem ipsum dolor</span></li>
                        <li><i class="fas fa-check"></i><span>Lorem ipsum dolor</span></li>
                        <li><i class="fas fa-check"></i><span>Lorem ipsum dolor</span></li>
                        <li><i class="fas fa-check"></i><span>Lorem ipsum dolor</span></li>
                        <li><i class="fas fa-check"></i><span>Lorem ipsum dolor</span></li>
                        <li><i class="fas fa-check"></i><span>Lorem ipsum dolor</span></li>
                    </ul>
                    <div class="p-bottom">
                        <a class="btn-style1" href="#">Get Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="mainbox">
                    <div class="p-top">
                        <span class="p-label">4 Passenger vehicle</span>
                        <h2 class="s-price">$50</h2>
                    </div>
                    <p class="s-content">4 Passenger vehicle rental with driver (optional)</p>
                    <ul>
                        <li><i class="fas fa-check"></i><span>Lorem ipsum dolor</span></li>
                        <li><i class="fas fa-check"></i><span>Lorem ipsum dolor</span></li>
                        <li><i class="fas fa-check"></i><span>Lorem ipsum dolor</span></li>
                        <li><i class="fas fa-check"></i><span>Lorem ipsum dolor</span></li>
                        <li><i class="fas fa-check"></i><span>Lorem ipsum dolor</span></li>
                        <li><i class="fas fa-check"></i><span>Lorem ipsum dolor</span></li>
                    </ul>
                    <div class="p-bottom">
                        <a class="btn-style1" href="#">Get Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="mainbox">
                    <div class="p-top">
                        <span class="p-label">Expedited immigration</span>
                        <h2 class="s-price">$10</h2>
                    </div>
                    <p class="s-content">Expedited immigration service (optional) this does not include custom clearance</p>
                    <ul>
                        <li><i class="fas fa-check"></i><span>Lorem ipsum dolor</span></li>
                        <li><i class="fas fa-check"></i><span>Lorem ipsum dolor</span></li>
                        <li><i class="fas fa-check"></i><span>Lorem ipsum dolor</span></li>
                        <li><i class="fas fa-check"></i><span>Lorem ipsum dolor</span></li>
                        <li><i class="fas fa-check"></i><span>Lorem ipsum dolor</span></li>
                        <li><i class="fas fa-check"></i><span>Lorem ipsum dolor</span></li>
                    </ul>
                    <div class="p-bottom">
                        <a class="btn-style1" href="#">Get Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->


<!-- Pricing Section End -->


<!-- Our Partners Section Start -->

<section class="our-partners-sec">
    <div class="container">
        <div class="swiper partners-slider">
            <div class="swiper-wrapper">
                <?php
                if (have_rows('our_partner')) :
                    while (have_rows('our_partner')) : the_row(); ?>
                        <div class="swiper-slide">
                            <div class="imgbox">
                                <img src="<?php the_sub_field('partner_logo'); ?>" alt="" />
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php else : ?>
                <?php endif;
                ?>

            </div>
        </div>
    </div>
</section>

<!-- Our Partners Section End -->



<?php get_footer(); ?>