<!DOCTYPE html>
<html <?php language_attributes(); ?>> 
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php bloginfo( 'name' ); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="site-header">
    <div class="container">
        <div class="logo">
            <a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a>
        </div>
        <nav class="main-nav">
            <ul>
                <li><a href="<?php echo home_url(); ?>">Hjem</a></li>
                <li><a href="<?php echo site_url('/about'); ?>">Om os</a></li>
                <li><a href="<?php echo site_url('/contact'); ?>">Kontakt</a></li>
            </ul>
        </nav>
    </div>
</header>
