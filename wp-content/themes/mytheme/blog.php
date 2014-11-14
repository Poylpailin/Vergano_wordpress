<?php
/*
* Template Name: Blog
*/
?>

<?php get_header(); ?>

<div class="container-fluid">
    <div class="row">

<?php $my_query = new WP_Query(array('post_type' => 'personnage', 'orderby' => 'date', 'posts_per_page' => '1', 'meta_key' => 'age', 'meta_value' => '20' )); ?>
<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
        <div class="col-md-12">
            <h1> VEDETTE </h1>
            <?php if (has_post_thumbnail()){the_post_thumbnail('large'); } ?>
        </div>
<?php endwhile; ?>

<?php $my_query = new WP_Query(array('post_type' => 'post', 'orderby' => 'date', 'order' => 'ASC', 'posts_per_page' => '2')); ?>
<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
           <div class="col-md-6 well">
               <div class="content-post">
               <?php the_title() ?> <?php the_content() ?>
               </div>
           </div>
    <?php endwhile; ?>

<?php $my_query = new WP_Query(array('post_type' => 'post', 'orderby' => 'date', 'order' => 'ASC', 'posts_per_page' => '1', 'offset' => '2')); ?>
<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
        <div class="col-md-12 well">
            <div class="content-post">
            <?php the_title() ?> <?php the_content() ?>
            </div>
        </div>
<?php endwhile; ?>

<?php $my_query = new WP_Query(array('post_type' => 'personnage', 'orderby' => 'date', 'order' => 'ASC', 'posts_per_page' => '-1' )); ?>
<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
    <!-- Trois articles personnalisés -->
        <div class="col-md-4 well">
            <?php the_title() ?> <?php the_content() ?>

        <?php if (get_field('age') < '18'): ?>
            Le personnage n'est pas majeur
        <?php else: ?>
            Le personnage est majeur
        <?php endif; ?>

        <?php if (get_field('image_personnalisee') === true): ?>
            <img src="<?php the_field('choix_de_limage') ?>"/> <!-- Récupérer l'url de l'image grâce à the_field / Puis afficher l'image -->
        <?php else: ?>
            <?php the_post_thumbnail('thumbnail') ?>
        <?php endif; ?>

        </div>
    <?php endwhile; ?>
    </div>
</div>

<?php get_footer(); ?>