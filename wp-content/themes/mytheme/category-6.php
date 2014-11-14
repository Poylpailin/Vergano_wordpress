<?php get_header() ?>

    <!-- Permet de faire une requête personnalisée pour pouvoir récupérer les customs post field -->

<?php $query = new WP_Query(array('post_type' => 'post')) ; ?>
<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>

    <div class="col-md-5">
        <?php if (has_post_thumbnail()){ the_post_thumbnail('thumbnail'); } ?>
    </div>

    <div class="col-md-7">
        <h1><?php the_title() ?></h1>
        <?php the_content() ?>
    </div>

<?php endwhile; ?>

<?php get_footer() ?>