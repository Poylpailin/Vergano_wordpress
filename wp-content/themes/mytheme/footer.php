
    </div><!-- Fin col-md-9 -->


    <?php if(is_category() || get_post()): ?>
    <div class="col-md-3" id="sidebar">

            <?php get_sidebar(); ?>

    </div><!-- Fin col-md-3 -->
        <?php else: ?>
            Lol
        <?php endif ?>

        </div><!-- Fin row -->
            </div> <!-- Fin container -->

<footer>
    <?php wp_nav_menu(array('theme_location' => 'secondary')); ?> <!-- Récupérer le second menu dans functions -->
</footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="<?php bloginfo('template_directory');?>/library/js/bootstrap.min.js"></script>

</body>
</html>
