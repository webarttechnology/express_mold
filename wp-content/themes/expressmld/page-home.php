<?php /* Template Name: Home */

get_header();

$generalid = get_id_by_slug('site-general-settings');
 ?>

   <section class="inner-banner" style="background-image: url(<?php echo get_field('home_page_banner_background_image'); ?>);">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="banner-content">
                    <h6><?php echo get_field('header_first_heading'); ?></h6>
                    <h1 div data-aos="fade-down" data-aos-duration="1500"><?php echo get_field('header_second_heading'); ?></h1>
                    <p><?php echo get_field('header_text'); ?></p>
                    <div class="call-button">
                        <a href="tel:<?php echo get_field('phone_number',$generalid); ?>" class="call"><?php echo get_field('call_now_text'); ?></a>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="form-section" div data-aos="fade-left" data-aos-duration="1000">
                    <div class="row">
                        <div class="form-col no-padding">
                            <h3 class="text-center"><?php get_field('free_expression_title'); ?></h3>
<?php echo do_shortcode('[contact-form-7 id="994a90e" title="Home free inspection"]'); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about -->
<section class="about-page">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="about__five-left">
                    <img class="about__five-left-shape" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/about-5 (1).png" alt="about-shape">
                    <div class="about__five-left-image">
                        <div class="about__five-left-image-left image-overlay" div data-aos="fade-up"
                            data-aos-duration="1000">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/64fdccbbe5028769a052026a_mold-remover.jpg" alt="about-image">
                        </div>
                        <div class="about__five-left-image-right" data-aos="fade-left" data-aos-duration="1000">
                            <div class="image-overlay">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/64fdccbcd4610bed954d519b_union-team-p-800.jpg" alt="about-image">
                            </div>
                            <div class="image-overlay">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/64f21bd13fcc46e507a95c85_plumbing-p-800.jpg" alt="about-image">
                            </div>
                        </div>
                        <div class="about__five-left-image-experience" data-aos="zoom-out" data-aos-duration="1500">
                            <h2><span class="counter">20</span>+</h2>
                            <h6>Years Experience Our Company</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                <div class="about__five-right">
                    <div class="about__five-right-title">
                        <?php the_field('about_us_text'); ?>
                    </div>
            
                    <div class="call-button">
                        <a class="call" href="tel:<?php echo get_field('phone_number',$generalid); ?>"><?php echo get_field('talk_to_an_expert_text'); ?></a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- service -->

<section class="service-page1">

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="service-head text-center">
                    <h2 data-aos="fade-down" data-aos-duration="1500"><?php echo get_field('our_services_title'); ?></h2>
                    <?php echo get_field('our_services_text'); ?>
                </div>
            </div>
        </div>
        <div class="card__container">
            <?php $allserv = new WP_Query(array('post_type'=>'our_services','posts_per_page'=>-1,'post_status'=>'publish'));
                while($allserv->have_posts()):$allserv->the_post();
             ?>

            <div class="card__bx" style="--clr: #89ec5b">
                <div class="card__data">
                    <?php if(get_the_post_thumbnail_url(get_the_ID()))
                    { ?>
                    <div class="card__icon">
                        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID());  ?>">
                    </div>
                    <div class="card__content">
                        <h3><?php the_title(); ?></h3>
                        <?php the_content(); ?>
                        <a href="tel:<?php echo get_field('phone_number',$generalid); ?>">Call Now</a>
                    </div>
                <?php }
                else{
                    ?>
                      <div class="card__content">
                        <h3><?php the_title(); ?></h3>
                        <?php the_content(); ?>
                        <a href="tel:<?php echo get_field('phone_number',$generalid); ?>">Call Now</a>
                     </div>

              <?php   }


                 ?>
                </div>
            </div>
        <?php endwhile;wp_reset_query(); ?>

   
        </div>
    </div>
</section>




<!-- faq -->
<section class="faq-page">
    <div class="container">
        <div class="row">
            <div class="col-md-6" data-aos="fade-up" data-aos-duration="1500">
                <div class="faq-text">
                    <p> <?php echo get_field('team_commitment_heading_text'); ?>
                    <ul>
                         <?php $allserv = new WP_Query(array('post_type'=>'our_services','posts_per_page'=>-1,'post_status'=>'publish'));
                while($allserv->have_posts()):$allserv->the_post();
                  ?>
                        <li><a href="#"><span><i class="bi bi-patch-check-fill"></i></span><?php the_title(); ?></a></li>
                       
                    <?php endwhile;wp_reset_query(); ?>

                    </ul>
                </div>
                </p>
            </div>
          <?php   CFS()->get( 'first_name' );  ?>
            <div class="col-md-6" data-aos="fade-down" data-aos-duration="1500">
                <div class="accordion">
                    <h2><?php echo CFS()->get('faq_section_title'); ?></h2>
                    <?php $allfaqs = CFS()->get('faq_repeat'); 
                    $faqcount = 0;

                     foreach($allfaqs as $eachfaq){
                        $faqcount++;

                    ?>
                    <div class="accordion-item">
                        <input type="checkbox" id="accordion<?php echo $faqcount; ?>">
       <label for="accordion<?php echo $faqcount; ?>" class="accordion-item-title"><span class="icon"></span><?php echo $eachfaq['question']; ?></label>
                        <div class="accordion-item-desc">
                            <?php echo $eachfaq['answer']; ?> 
                        </div>

                    </div>
                <?php } ?>

             

                </div>
            </div>

        </div>
    </div>
</section>

<!-- call-to-action -->
<section class="call-to-actions">
    <div class="container">
        <div class="row call-banner">
            <div class="col-md-6">
                <div class="call-content">
                  <?php echo get_field('emergency_main_text'); ?>
                </div>
            </div>
            <div class="col-md-6">
                <div class="number">
                    <div class="shaking"><i class="bi bi-telephone-forward"></i> </div>
                    <a href="tel:<?php echo get_field('phone_number',$generalid); ?>"><?php echo get_field('phone_number',$generalid); ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

 <?php get_footer(); ?>