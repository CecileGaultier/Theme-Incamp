
<!-- Appel header -->
<?php get_header(); ?>


<div class="main single">
    <!-- Demande s'il y a des posts -->
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <div class="post">
                <!-- Appel le titre de la page -->
                <h1 class="post-title"><?php the_title(); ?></h1>

                <!-- Appel le contenu -->
                <div class="post-content">
                    <?php the_content(); ?>
                </div>

            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</div>

<!-- Appel footer -->
<?php get_footer(); ?>