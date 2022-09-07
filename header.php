<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
    <div class="wrapper">
        <header class="header">
            <div class="header__head">
                <h1 class="header__head-title">You&#x2019;re in good company</h1>
                <p class="header__head-subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore</p>
            </div>
            <div class="header__images">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/SmallRectangle.jpg" alt="Rectangle" class="header__images-img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/SmallRectangle.jpg" alt="Rectangle" class="header__images-img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/SmallRectangle.jpg" alt="Rectangle" class="header__images-img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/SmallRectangle.jpg" alt="Rectangle" class="header__images-img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/SmallRectangle.jpg" alt="Rectangle" class="header__images-img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/SmallRectangle.jpg" alt="Rectangle" class="header__images-img">
            </div>
        </header>