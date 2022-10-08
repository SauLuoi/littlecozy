<?php
/*
 * Template Name: Home Page
 */
?>

<?php get_header(); ?>

<?php
$picture_preview = get_field('picture_preview');
$picture = get_field('picture');
$background_color = get_field('background_color');
$introduce = get_field('introduce');
?>

<style>
    .home-banner::before {
        background-image: url("<?php echo $picture; ?>");
    }

    .home-banner::after {
        background-color: <?php echo $background_color; ?>;
    }
</style>

<div class="l-body">
    <div class="home">
        <div class="home-banner">
            <div class="container">
                <div class="row align-items-md-end align-items-center">
                    <?php if ($picture_preview) { ?>
                        <div class="col-md-6">
                            <img class="preview-image"
                                 alt="<?php echo $picture_preview['alt']; ?>"
                                 src="<?php echo $picture_preview['url'] ?>"
                                 title="<?php echo $picture_preview['title']; ?>">
                        </div>
                    <?php } ?>
                    <div class="col-md-6">
                        <?php if ($introduce) { ?>
                            <div class="pb-4 mt-5 mt-md-0 home-banner_text">
                                <?php echo $introduce; ?>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="home-only-title bg-second d-flex py-3 py-md-5 align-items-center justify-content-center">
            <h2 class="heading-sacramento">
                A sassy look with soft
                neutrals and a timeless feel.
            </h2>
        </div>
        <div class="home-overview bg-second-right">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="home-overview_galley pr-4">
                            <p class="title">quick overview</p>
                            <p class="time">2022/09/30</p>
                            <div class="galley">
                                <figure><img src="<?php bloginfo('template_url'); ?>/assets/images/overview.png" alt="">
                                </figure>
                                <figure><img src="<?php bloginfo('template_url'); ?>/assets/images/overview2.png"
                                             alt=""></figure>
                                <figure><img src="<?php bloginfo('template_url'); ?>/assets/images/overview.png" alt="">
                                </figure>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="home-overview_text pl-4">
                            <b>Fully customizable Showit website template</b><br>
                            Wordpress blog design<br>
                            <b>Perfect on all devices</b><br>
                            Free website check<br>
                            <b>Free content checklist</b><br>
                            Free website checklist<br>
                            <b>Personal tutorials</b><br>
                            Website confidence<br>
                            <b>Easily edit every detail and enjoy total creative freedom.</b><br>
                            Content power of Wordpress with stunning design of Showit.<br>
                            <b>Fully customizable Showit website template</b><br>
                            Wordpress blog design<br>
                            <b>Personal tutorials</b><br>
                            Website confidence<br>
                            <b>Easily edit every detail and enjoy total creative freedom.</b><br>
                            Content power of Wordpress with stunning design of Showit.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="home-overview bg-second-left">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 order-2">
                        <div class="home-overview_galley pl-4">
                            <p class="title">quick overview</p>
                            <p class="time">2022/09/30</p>
                            <div class="galley">
                                <figure><img src="<?php bloginfo('template_url'); ?>/assets/images/overview.png" alt="">
                                </figure>
                                <figure><img src="<?php bloginfo('template_url'); ?>/assets/images/overview.png" alt="">
                                </figure>
                                <figure><img src="<?php bloginfo('template_url'); ?>/assets/images/overview.png" alt="">
                                </figure>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 order-1 pr-4">
                        <div class="home-overview_text">
                            <b>Fully customizable Showit website template</b><br>
                            Wordpress blog design<br>
                            <b>Perfect on all devices</b><br>
                            Free website check<br>
                            <b>Free content checklist</b><br>
                            Free website checklist<br>
                            <b>Personal tutorials</b><br>
                            Website confidence<br>
                            <b>Easily edit every detail and enjoy total creative freedom.</b><br>
                            Content power of Wordpress with stunning design of Showit.<br>
                            <b>Fully customizable Showit website template</b><br>
                            Wordpress blog design<br>
                            <b>Personal tutorials</b><br>
                            Website confidence<br>
                            <b>Easily edit every detail and enjoy total creative freedom.</b><br>
                            Content power of Wordpress with stunning design of Showit.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="home-area d-flex align-items-center justify-content-center">
            <div class="text-center">
                <h2 class="heading-sacramento text-center">Stay in the loop</h2>
                <div class="py-4 home-area_content">Kate is designed with influencers in mind but totally works great
                    for photographers and
                    creative
                    freelancers alike. Beautiful photography in all the right places and a refined cool girl look. Kate
                    has an editorial vibe and a polished blog layout. Easily edit every detail and be ready to welcome
                    all your dream clients when you launch this timeless website!
                </div>
                <a class="btn btn-primary" href="#">Sign in</a>
            </div>
        </div>
        <div class="home-slide bg-third">
            <div class="container">
                <div class="home-slide_list">
                    <div class="item">
                        <a href="#">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/slider-img.png" alt="">
                        </a>
                    </div>
                    <div class="item">
                        <a href="#">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/slider-img2.png" alt="">
                        </a>
                    </div>
                    <div class="item">
                        <a href="#">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/slider-img3.png" alt="">
                        </a>
                    </div>
                    <div class="item">
                        <a href="#">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/slider-img.png" alt="">
                        </a>
                    </div>
                </div>
                <a href="" class="btn btn-primary mt-5">view more</a>
            </div>
        </div>
        <div class="home-video">
            <video class="home-video_background" playsinline autoplay muted loop>
                <source src="https://res.cloudinary.com/dn4nxz7f0/video/upload/v1594348575/Pexels_Videos_1093655_pr26ax.mp4"
                        type="video/mp4">
            </video>
            <div class="container">
                <div class="d-flex align-items-center justify-content-center">
                    <div class="home-video_content text-center">
                        <h2 class="heading-sacramento">Do You Like This ?</h2>
                        <div class="py-5">
                            Kate is designed with influencers in mind but totally works great for photographers and
                            creative freelancers alike. Beautiful photography in all the right places and a refined cool
                            girl look. Kate has an editorial vibe and a polished blog layout. Easily edit every detail
                            and be ready to welcome all your dream clients when you launch this timeless website!
                        </div>
                        <a href="" class="btn btn-primary">Sign in</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
