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

<!-- footer -->
<footer class="footer-part">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
            <?php echo get_field('footer_call_now_button_text',$generalid); ?>
                <div class="footer__area-widget-menu three">
        
                      <?php wp_nav_menu( array('menu' => 'Footer menu', 'items_wrap' => '<ul>%3$s</ul>' )); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="bottom-footer-content text-center">
                        <p>All Rights Reserve to <?php echo date('Y'); ?> Express Mold Test</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/hammer.js/2.0.8/hammer.min.js"></script>
<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/stellarnav.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/script.js"></script>

<script type="text/javascript">
    jQuery(document).ready(function ($) {
        jQuery('.stellarnav').stellarNav({
            breakpoint: 960,
            position: 'right',
            phoneBtn: '18009997788',
            locationBtn: 'https://www.google.com/maps'
        });

        //function scroll() {
  //$('#scrolltext').css('left', $('#scrollcontainer').width());
  //$('#scrolltext').animate({
    //left: '-='+($('#scrollcontainer').width()+$('#scrolltext').width())
  //}, 10000, function() {
    //scroll();
  //});
//}

//scroll();
    });
</script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>
 <?php wp_footer(); ?>
</body>

</html>