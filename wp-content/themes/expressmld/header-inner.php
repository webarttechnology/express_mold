
    <!doctype html>
<html lang="en">

<head>
    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- google-font -->
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700;900&family=Rajdhani:wght@500;700&display=swap"
        rel="stylesheet">
    <!-- font-awsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- bootstrap-icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <!-- aos -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- owl-carousel -->
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/stellarnav.css" rel="stylesheet">
    <!-- custom-css -->
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" rel="stylesheet" type="text/css">
    <!-- responsive-css -->
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/responsive.css" rel="stylesheet">
     <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>



    <header class="top-header fixed-top">
        <div class="container">
            <div class="header-part">
                <div class="row">
                    <div class="col-md-6">
                        <div class="logo-image">
                            <a href="<?php echo get_site_url(); ?>">Logo Here</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="stellarnav">
                            <ul class="top-menu">
                                <li><a href="#">Loan</a></li>
                                <li><a href="#">Amount</a></li>
                                <li><span><a href="#">Sign in</a></span></li>
                                <li><span><a href="#">Apply Now</a></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>