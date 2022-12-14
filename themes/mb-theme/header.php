<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>
        Marta Bylewska
    </title>

    <!-- slider stylesheet -->
    <!-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" /> -->

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Raleway:400,700&display=swap" rel="stylesheet" />

    <?php wp_head(); ?>

</head>

<body>
    <div class="hero_area">
        <!-- header section strats -->
        <header class="header_section">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg custom_nav-container ">
                    <a class="" href="#"><img id="logo" src="<?php bloginfo('template_directory'); ?>/images/logoM-white.png" alt="logo"></a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">

                            <?php wp_nav_menu(

                                array(

                                    'theme_location' => 'top-menu',
                                    'container' => 'ul',

                                    'menu_class' => 'navbar-nav  ',


                                )
                            ); ?>

                            <!-- <ul class="navbar-nav  "> -->

                            <!-- <li class="nav-item active">
                                    <a class="nav-link" href="index.html">home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="about.html">
                                        about
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.html">
                                        contact
                                    </a>
                                </li> -->

                            <!-- </ul> -->

                        </div>
                    </div>
                </nav>
            </div>
        </header>