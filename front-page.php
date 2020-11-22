<?php
/*Page accueil */

/* Déclaration header */
get_header(); ?>

<!-- Corps du body -->
<div class="container-fluid mt-5">
    <!-- Demande s'il y a des posts -->
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <div class="post">
                <div id="carte" class="center"></div>

                <!-- Appel le contenu -->
                <div class="post-content">
                    <?php the_content(); ?>
                </div>

            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</div>


<?php 
/* Déclaration footer */

get_footer(); ?>