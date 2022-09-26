    <?php get_header(); ?>

    <?php $hero = get_field('hero'); ?>
    <!-- slider section -->
    <section class=" slider_section position-relative">
        <div id="carouselExampleControls" class="carousel slide " data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container">
                        <div class="detail-box">
                            <h1><?php echo $hero['title']; ?><br>
                                <?php echo $hero['title_second']; ?>

                            </h1>
                            <div class="row">
                                <div class="col-lg-6 col-md-8">
                                    <p><?php echo $hero['text']; ?>
                                    </p>
                                </div>
                            </div>
                            <div class="btn-box">
                                <a href="<?php echo $hero['link']; ?>" class="btn1">
                                    <?php echo $hero['link_text']; ?>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="sr-only">Next</span>
        </a>
        </div>
    </section>
    <!-- end slider section -->
    </div>
    <!-- end hero area -->

    <!-- service section -->

    <?php

    $info = get_field('info');
    $left = $info['left_group'];
    $right = $info['right_group'];
    $l_icon = $left['l_icon'];
    $r_icon = $right['r_icon'];
    $mid = $info['middle_group'];
    $m_icon = $mid['m_icon'];

    ?>




    <section class="service_section layout_padding ">
        <div class="container">
            <div class="heading_container">
                <h2>
                    <?php echo $info['title']; ?>

                </h2>
                <p>
                    <?php echo $info['text']; ?>
                </p>
            </div>
        </div>


        <div class="service_bg">
            <div class="container">
                <div class="service_container">


                    <div class="box">
                        <div class="img-box">
                            <img src="<?php echo esc_url($l_icon['url']); ?>" alt="">
                        </div>
                        <div class="detail-box">
                            <h4>
                                <?php echo $left['l_title']; ?>
                            </h4>
                            <p>
                                <?php echo $left['l_text']; ?>
                            </p>
                        </div>
                    </div>


                    <div class="box">
                        <div class="img-box">
                            <img src="<?php echo esc_url($m_icon['url']); ?>" alt="">
                        </div>
                        <div class="detail-box">
                            <h4>
                                <?php echo $mid['m_title']; ?>
                            </h4>
                            <p>
                                <?php echo $mid['m_text']; ?>
                            </p>
                        </div>
                    </div>


                    <div class="box">
                        <div class="img-box">
                            <img src="<?php echo esc_url($r_icon['url']); ?>" alt="">
                        </div>
                        <div class="detail-box">
                            <h4>
                                <?php echo $right['r_title']; ?>
                            </h4>
                            <p>
                                <?php echo $right['r_text']; ?>
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="container">
            <div class="d-flex justify-content-center">
                <a href="<?php echo $info['link']; ?>">
                    <?php echo $info['link_text']; ?>
                </a>
            </div>
        </div>
    </section>

    <!-- end service section -->

    <!-- do section -->

    <?php

    $do_section = get_field('do_section');
    $do1 = get_field('do_1');
    $do_left = $do1['left_side'];
    $do2 = get_field('do_2');
    $do_right = $do2['right_side'];

    ?>


    <section class="do_section">
        <div class="container">
            <div class="heading_container">
                <h2>
                    <?php echo $do_section['title']; ?>
                </h2>
                <p>
                    <?php echo $do_section['text']; ?>
                </p>
            </div>
        </div>
        <div class="container do_container">
            <div class="row">
                <div class="col-md-6">
                    <div class="detail-box">
                        <h4>
                            <?php echo $do_left['title']; ?>
                        </h4>
                        <p>
                            <?php echo $do_left['text']; ?>
                        </p>
                        <a href="<?php echo $do_left['link']; ?>">
                            <?php echo $do_left['link_text']; ?>
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="img-box mt-5 mt-md-0">
                        <img src="<?php bloginfo('template_directory'); ?>/images/do-img1.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="container do_container">
            <div class="row">
                <div class="col-md-6">
                    <div class="img-box">
                        <img src="<?php bloginfo('template_directory'); ?>/images/do-img2.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="detail-box  mt-5 mt-md-0">
                        <h4>
                            <?php echo $do_right['title']; ?>
                        </h4>
                        <p>
                            <?php echo $do_right['text']; ?>
                        </p>
                        <a href="<?php echo $do_right['link']; ?>">
                            <?php echo $do_right['link_text']; ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- end do section -->

    <!-- template section -->

    <section class="template_section layout_padding">
        <div class="container">
            <div class="heading_container">
                <h2>
                    See Our Templates
                </h2>
                <p>
                    consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                </p>
            </div>
            <div class="template_container">
                <div class="box">
                    <img src="<?php bloginfo('template_directory'); ?>/images/t-1.jpg" alt="">
                    <h6>
                        Email
                    </h6>
                </div>
                <div class="box">
                    <img src="<?php bloginfo('template_directory'); ?>/images/t-2.jpg" alt="">
                    <h6>
                        Newsletter
                    </h6>
                </div>
                <div class="box">
                    <img src="<?php bloginfo('template_directory'); ?>/images/t-3.jpg" alt="">
                    <h6>
                        Business
                    </h6>
                </div>
                <div class="box">
                    <img src="<?php bloginfo('template_directory'); ?>/images/t-4.jpg" alt="">
                    <h6>
                        website
                    </h6>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <a href="">
                    See More
                </a>
            </div>
        </div>
    </section>

    <!-- end template section -->




    <?php get_footer(); ?>