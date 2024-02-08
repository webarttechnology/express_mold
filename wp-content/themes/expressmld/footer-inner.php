<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */


$generalid = get_id_by_slug('site-general-settings');
?>			

  <footer class="footer-part">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="top-footer">
                        <div class="logos">
                            <a href="<?php bloginfo('url'); ?>">Logo Here</a>
                        </div>
                        <div class="footer-text">
                           <?php echo get_field('below_logo_text',$generalid); ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="middel-footer">
                        <article><?php echo get_field('menu_bar_title',$generalid); ?></article>
                       <!-- <ul>
                            <li><a href="#">LOAN</a></li>
                            <li><a href="#">AMOUNT</a></li>
                           
                        </ul> -->
                        <?php wp_nav_menu('menu'); ?>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="contact">
                        <article><?php echo get_field('footer_contact_title',$generalid); ?></article>
                        <ul>
                            <li> <span><i class="fa fa-map-marker" aria-hidden="true"></i></span><?php echo get_field('address',$generalid); ?></li>
                            <li><span><i class="fa fa-phone" aria-hidden="true"></i></span><?php echo get_field('phone',$generalid); ?></li>
                            <li><span><i class="fa fa-envelope-o" aria-hidden="true"></i></span><?php echo get_field('email',$generalid); ?>/li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="bootom-footer">
                        <article>Links</article>
                        <nav>
                            <a href="<?php echo get_field('facebook',$generalid); ?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="<?php echo get_field('instagram',$generalid); ?>" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            <a href="<?php echo get_field('youtube',$generalid); ?>" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                            <a href="<?php echo get_field('linkedin',$generalid); ?>" target="_blank"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="bottom-fotter-content text-center">
                <P>Copyright <?php echo date('Y'); ?>. All Rights Reserved.</P>
            </div>
        </div>
    </footer>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>


    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/script.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/stellarnav.js"></script>
    <script type="text/javascript">

        jQuery(document).ready(function ($) {
            jQuery('.stellarnav').stellarNav({
                breakpoint: 960,
                position: 'right',
            });
        });
    </script>
    <?php wp_footer(); ?>
</body>

</html>