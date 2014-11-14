<!DOCTYPE html>
<html>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/library/style/main.css" type="text/css" media="screen" title="no title" charset="utf-8" />
    <!-- Permet de relier la feuille style.css à index.php -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/library/css/bootstrap.min.css" type="text/css" media="screen" title="no title" charset="utf-8" />

    <title><?php bloginfo('name') ?> - <?php bloginfo('description') ?>    <!-- Récupérer dynamiquement les informations -->

        <?php if(is_home()): ?> <!-- Si index.php -->
            <?php bloginfo('name') ?> - <?php bloginfo('description') ?>    <!-- Récupérer dynamiquement les informations -->
        <?php else: ?> <!-- Sinon -->
            <?php the_title(); ?>
        <?php endif ?>
    </title>

</head>

<body>
<?php if(is_home()): ?>
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">

            <?php $my_query = new WP_Query(array( 'post_type' => 'personnage', 'orderby' => 'title', 'order' => 'ASC', 'post_per_page' => '-1' )); ?>
            <?php $i=0; while ($my_query->have_posts()) : $my_query->the_post(); ?>

                <div class="item <?php if($i==0){echo 'active';} ?>">
                    <?php if (has_post_thumbnail()){ the_post_thumbnail('large'); } ?>
                    <div class="carousel-caption">
                        <?php the_title(); ?>
                    </div>
                </div>
                <?php $i++; endwhile; ?>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
<?php endif; ?>

    <div class="container-fluid">
        <div class="row">
            <?php wp_nav_menu(array('theme_location' => 'main')); ?>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <?php if(is_category()||is_single()): ?>
            <div class="col-md-9">
                <?php else: ?>
                <div class="col-md-12">
                    <?php endif ?>

