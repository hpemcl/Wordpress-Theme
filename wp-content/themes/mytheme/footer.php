<!DOCTYPE html>
<html <?php language_attributes(); ?>> 
<head>
 <meta charset="<?php bloginfo( 'charset' ); ?>">
 <title><?php bloginfo( 'name' ); ?></title>
 <?php wp_head(); ?>
 
</head>
<body <?php body_class(); ?>>


<footer class="site-footer">
    <div class="container">
        <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. Alle rettigheder forbeholdes af Hannah Clausen.</p>
    </div>
</footer>


<?php wp_footer() ?>
</body>
</html>