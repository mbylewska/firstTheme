<?php get_header(); ?>



<section class=" slider_section position-relative" style="background-image: url(<?php the_post_thumbnail_url(); ?>)">

    <?php $hero = get_field('hero'); ?>
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




</section>
<!-- end slider section -->





<?php get_footer(); ?>