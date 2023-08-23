<!-- Footer Start -->

<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <div class="f_site_logo footer-widget">
                    <a class="f-logo" href="<?php echo site_url(); ?>">
                        <img class="w-100" src="<?php the_field('footer_logo', 'option'); ?>" alt="" />
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-3">
                <div class="footer-widget footer-content">
                    <h6><?php the_field('f_about_us_title', 'option'); ?></h6>
                    <!-- <img src="<?php the_field('f_about_us_image', 'option'); ?>" alt="" /> -->
                    <p><?php the_field('f_about_us_content', 'option'); ?></p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3">
                <div class="footer-widget footer-links quick-links">
                    <h6>QUICK LINKS</h6>
                    <?php
                    $args = array(
                        'theme_location' => 'primary',
                        'container' => 'ul',
                        'menu_class' => 'list-unstyled'
                    );
                    ?>
                    <?php wp_nav_menu($args); ?>
                    <!-- <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Services </a></li>
                        <li><a href="#">Advantages</a></li>
                        <li><a href="#">Testimonials</a></li>
                        <li><a href="#">Inquiries</a></li>
                        <li><a href="#">Support</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul> -->
                </div>
            </div>
            <div class="col-lg-3 col-md-3">
                <div class="footer-widget">
                    <h6>SOCIAL LINKS</h6>
                    <ul class="social-links d-flex list-unstyled ">
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
            </div>
            <!-- <div class="col-lg-5">
               
            </div> -->
        </div>
    </div>
    <div class="copyright-text">
        <div class="container">
            <p><?php the_field('copyright_text','option'); ?></p>
        </div>
    </div>
</footer>

<!-- Footer End -->



<script type="text/javascript" src="<?php bloginfo('template_directory') ?>/assets/js/theme-lib.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory') ?>/assets/js/theme-fun.js"></script>
<?php wp_footer(); ?>

</body>

</html>