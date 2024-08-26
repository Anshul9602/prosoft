<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Prosoft</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="" rel="icon">
    <link href="" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?php echo base_url(); ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?php echo base_url(); ?>/assets/css/main.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.gsap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.8/ScrollMagic.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.8/plugins/debug.addIndicators.min.js"></script>
   
    <style>
        ul,
        ol {
            list-style-type: none;
        }

        @media (max-width:991px) {
            .navbar .active {
                color: #fff !important;
            }

            .mtt {
                font-size: 24px;
            }
            .header .contact{
                margin: 10px 20px;
            }
        }

        .asds .col-6{
        text-align: center;
        }
    </style>
</head>

<body>

    <!-- ======= Header ======= -->
    <!-- End Top Bar -->

    <header id="header" class="header d-flex align-items-center addclass nav-down" style="   width:100%;">

        <div class="container-fluid container-xl d-flex align-items-center  row "
            style="max-width: 100%;margin: 0 auto;        justify-content: space-around;">
            <a href="<?php echo base_url(); ?>"
                class="logo d-flex align-items-center col-md-2 col-6 justify-content-start">

                <img class="ds" src="<?php echo base_url(); ?>/assets/img/logo.png" style="max-width:270px;" alt="">


            </a>
            <nav id="navbar" class="navbar col-md-9 ">
                <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

                <ul style="width: 100%; justify-content: space-around;">
                    <li><a href="<?php echo base_url(); ?>">Home</a></li>
                    <li><a href="<?php echo base_url('About_Us'); ?>">About</a></li>
                    
                    <li class="dropdown"><a href="<?php echo base_url('Services'); ?>">Services <i
                                class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="<?php echo base_url('Services'); ?>">Service1</a></li>
                            <li><a href="<?php echo base_url('Services'); ?>">Service2</a></li>
                           
                        </ul>
                    </li>
                    <li class="dropdown"><a href="<?php echo base_url('Product'); ?>">Product <i
                                class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="<?php echo base_url('Product'); ?>">Product1</a></li>
                            <li><a href="<?php echo base_url('Product'); ?>">Product2</a></li>
                           
                        </ul>
                    </li>

                    <li><a href="<?php echo base_url('News'); ?>">News</a></li>
                  
                    <li><a href="<?php echo base_url('Contact'); ?>" class="contact"
                            style="color:#000;color:#fff;">Contact</a></li>
              

                </ul>
            </nav><!-- .navbar -->

            <i class="mobile-nav-toggle mobile-nav-show bi bi-list col-6 text-end m-0"></i>


        </div>
    </header><!-- End Header -->
    <!-- End Header -->