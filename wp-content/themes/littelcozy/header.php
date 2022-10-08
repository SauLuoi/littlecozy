<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

<head>

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="profile" href="https://gmpg.org/xfn/11">

    <!--    bootstrap 4-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!--    font awesome-->
    <script src="https://kit.fontawesome.com/c329d52994.js" crossorigin="anonymous"></script>
    <!--    slick-->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/vendor/slick.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/slick.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/scss/index.css">
    <title>Little Cozy</title>

    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<?php
wp_body_open();
?>
<?php
$header_logo = get_field('header_logo', 'option');
$header_logo_text = get_field('header_logo_text', 'option');
$header_logo_image = get_field('header_logo_image', 'option');
?>
<div class="l-header">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <?php if ($header_logo_image || $header_logo_text) { ?>
                <div class="h-logo">
                    <?php if ($header_logo == 'Text') { ?>
                        <a href="index.html"><?php echo $header_logo_text; ?></a>
                    <?php } else { ?>
                        <a href="<?php bloginfo(); ?>">
                            <img src="<?php echo $header_logo_image; ?>" alt="">
                        </a>
                    <?php } ?>
                </div>
            <?php } ?>

            <!--            get menu-->
            <div class="h-menu">
                <?php wp_nav_menu(
                    array(
                        'menu' => 'Header Menu Primary',
                    )
                ); ?>
            </div>
        </div>
    </div>
</div>
