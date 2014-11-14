<?php get_header() ?>
<!-- Afficher tous les articles d'une catégorie -->

<?php while (have_posts() ) : the_post(); ?>

    <article>
        <h1><?php the_title() ?></h1>
        <?php the_excerpt(); ?>
        <a href="<?php echo get_permalink(); ?>"> Lire la suite...</a>
    </article>

<?php endwhile; ?>

<?php get_footer() ?>