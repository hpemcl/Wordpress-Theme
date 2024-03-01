<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <title>Document</title>
</head>
<body>

    <?php get_header(); ?>

    <div class="container">
        <!-- Main Loop -->
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <h2><a href=”<?php the_permalink() ?>”><?php the_title() ?></as></h2>
            <?php the_content(); ?>
        <?php endwhile; endif; ?>
    </div>


    <section class="main-content">
        <div class="content">
            <h1>Welcome to Covent Garden</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut metus nec eros malesuada vestibulum. Mauris condimentum semper nulla, nec pellentesque nunc vehicula nec.</p>
            <a href="#" class="btn">Learn More</a>
        </div>
    </section>

    <?php get_footer(); ?>
</body>
</html>
