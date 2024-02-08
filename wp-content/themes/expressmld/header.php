
    <!doctype html>
<html lang="en">

<head>
    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- bootstrap-icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <!-- font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <!-- aos -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- font -->
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;800;900&display=swap" rel="stylesheet">
    <!-- css -->
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/style.css" rel="stylesheet" type="text/css">
    <!-- responsive -->
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/responsive.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- stellarnav -->
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/stellarnav.min.css" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <!-- header -->
    <?php $generalid = get_id_by_slug('site-general-settings'); ?>
    <header class="header-part" id="scroll-bar">
        <div class="top-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="logo">
                            <!--<a href="<?php //echo get_site_url(); ?>"><?php //echo get_field('temporary_logo_text',$generalid); ?></a> -->
                              <a href="tel:<?php echo get_field('phone_number',$generalid); ?>"><?php echo get_field('temporary_logo_text',$generalid); ?></a> 
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="home-contact">
   <a href="tel:<?php echo get_field('phone_number',$generalid); ?>"><span><i class="bi bi-telephone-forward"></i></span><?php echo get_field('phone_number_label',$generalid); ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-3">
                        <div class="logo">
                            <a href="<?php echo get_site_url(); ?>"><?php echo get_field('temporary_logo_text',$generalid); ?></a>
                        </div>
                    </div>
                    <div class="col-md-9 col-9">
                   
               <?php wp_nav_menu( array('menu' => 'main menu', 'items_wrap' => '<ul>%3$s</ul>','container_class'=>'stellarnav' )); ?>


                    </div>
                </div>
            </div>
        </div>
    </header>