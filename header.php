<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/71d3d31d68.js" crossorigin="anonymous"></script>
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anek+Latin:wght@200;300;400;500;600;800&family=League+Gothic&family=Montserrat:wght@300;400;500;600;700;900&family=Titan+One&display=swap" rel="stylesheet">
    <!--CSS boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- owl carrusel -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/plugins/owl/OwlCarousel2-2.3.4/dist/assets/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/plugins/owl/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.css">
    <!-- fancy box -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css"/>
    <!-- Css personal -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
    
    <?php wp_head(); ?>
</head>
<body onload="reloj();">


<?php $custom_logo = wp_get_attachment_image( get_theme_mod( 'custom_logo' ), 'medium' ); ?>

<nav class="navbar navbar-expand-lg bg-transparent px-4">

    <div class="logo">
        <a href="<?php echo home_url() ?>"><?php echo $custom_logo ?></a>
    </div>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>">
        <span class="navbar-toggler-icon"></span>
    </button>

    <?php
        wp_nav_menu( array(
        'theme_location'  => 'menu',
        'depth'           => 2,
        'container'       => 'div',
        'container_id'    => 'navbarSupportedContent',
        'container_class' => 'collapse navbar-collapse',
        'menu_class'      => 'nav navbar-nav ms-auto',
        'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
        'walker'          => new WP_Bootstrap_Navwalker()
        ) );
    ?>

</nav>