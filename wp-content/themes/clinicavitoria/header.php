<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title><?php wp_title(); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#8f0831">
    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/app/images/favicon.png?v=2" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;900&family=Playfair+Display&display=swap" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/css/swiper.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/app/styles/main.min.css">

    <?php wp_head(); ?>
    <style>
        .grecaptcha-badge{display: none !important;}
    </style>

</head>

<body <?php body_class(); ?>>

    <a href="https://api.whatsapp.com/send?phone=69984274389" target="_blank" id="btnzap"> <i class="ion-social-whatsapp-outline"></i> </a>

    <nav class="navMenu">
        <div class="closeNav">
            <i class="ion-android-close"></i>
        </div>
        <ul>
            <li>
                <a href="<?php bloginfo('url'); ?>">home</a>
            </li>
            <li>
                <a href="<?php bloginfo('url'); ?>/?page_id=15">sobre</a>
            </li>
            <li>
                <a href="<?php bloginfo('url'); ?>/?page_id=449">especialidades</a>
            </li>
            <li>
                <a href="<?php bloginfo('url'); ?>/?page_id=451">cases</a>
            </li>
            <li>
                <a href="<?php bloginfo('url'); ?>/?page_id=302">Workshops</a>
            </li>
            <li>
                <a href="<?php bloginfo('url'); ?>/?page_id=21">contato</a>
            </li>
            <li class="tels" data-aos="fade-in">
                <a href="tel:6933222555" target="_blank"><i class="ion-ios-telephone-outline"></i> 69 3322.2555</a>
            </li>
            <li>
                <a href="https://api.whatsapp.com/send?phone=69984274389" target="_blank"><i class="ion-social-whatsapp-outline"></i> 69 98427.4389</a>
            </li>
            <li>
                <a href="https://www.instagram.com/clinicavitoriaodonto/" target="_blank"><i class="ion-social-instagram-outline"></i></a>
                <a href="javascript:void(0);" class="openS"><i class="ion-ios-search-strong"></i></a>
            </li>
        </ul>
    </nav>
    <header id="header">
        <?php get_search_form(); ?>
        <div class="mobilenav btopenMenu">
            <i class="ion-navicon-round"></i>
        </div>
        <div class="container" data-aos="fade-in">
            <div class="row">
                <div class="col-md-3">
                    <div class="logo">
                        <figure>
                            <a href="<?php bloginfo('url'); ?>">
                                <img src="<?php bloginfo('template_directory'); ?>/app/images/logo.svg" class="img-fluid" alt="<?php wp_title(); ?>">
                            </a>
                        </figure>
                    </div>
                </div>
                <div class="col-md-9">
                    <nav class="nav">
                        <ul>
                            <li>
                                <a href="javascript:void(0);" class="openS"><i class="ion-ios-search-strong"></i></a>
                                <a href="https://www.instagram.com/clinicavitoriaodonto/" target="_blank"><i class="ion-social-instagram-outline"></i></a>
                            </li>
                            <li>
                                <a href="https://api.whatsapp.com/send?phone=69984274389" target="_blank" class="btn">Agende sua consuta! <strong>69 98427.4389</strong></a>
                            </li>
                           
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>