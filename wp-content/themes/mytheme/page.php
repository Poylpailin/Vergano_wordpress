<?php get_header() ?>

<?php while (have_posts() ) : the_post(); ?> <!-- Faire boucle pour récupérer les informations -->

    <h1><?php the_title(); ?></h1>

    <?php the_content(); ?>
    <?php the_time('j F, Y'); ?>
    <?php the_author_posts_link(); ?>

<?php endwhile; ?>

<?php get_footer() ?>