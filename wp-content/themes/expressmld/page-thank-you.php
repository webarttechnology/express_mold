<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header('inner');?>



 <section class="trusted-company">
        <div class="trusted-company__bg" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/shapes/trust-bg-1-1.png);"></div>
        <!-- /.trusted-company__bg -->
        <div class="container">
            <div class="row">
                <?php if(get_the_post_thumbnail_url(get_the_ID())){ ?>
                <div class="col-lg-6">
                   <img src="<?php echo get_the_post_thumbnail_url(get_the_ID());  ?>">
                </div>
                <div class="col-lg-6">
                   <?php the_content(); ?>

               </div><!-- /.row -->
           <?php }
           else
           {
            ?>
            <div class="col-lg-12">
                  <?php the_content(); ?>
                </div>

         <?php  
           }


            ?>
        </div><!-- /.container -->
    </div>
    </section>

    <?php 
    get_footer('inner');
