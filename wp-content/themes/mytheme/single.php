<?php get_header(); ?>

<?php while (have_posts() ) : the_post(); ?> <!-- Faire boucle pour récupérer les informations -->

    <?php
        foreach((get_the_category()) as $category){
            $cat_name .= $category->cat_name;
        }
    ?>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <?php the_post_thumbnail('thumbnail') ?>
            </div>

            <div class="col-md-6">
                <h1><?php the_title(); ?></h1>

                <?php if (is_category(3)); ?>

                <?php the_time('j F, Y'); ?>
                <?php the_author_posts_link(); ?>
                <?php echo $cat_name ?>  <!-- Récupère la catégorie sans faire de lien -->
                <?php the_content(); ?>
            </div>
        </div>
    </div>

<?php endwhile; ?>

<?php get_footer() ?>