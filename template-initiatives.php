<?php 
/* Template Name: Initiatives
 */


/* Déclaration header */
get_header(); ?>

<div id="initiative-bottom">
    <div class="container-fluid" id="initiative-top">
        <div class="row">
            <div class="col-md-8 col-lg-10 col-xl-8 center">


                <?php wpbf_title(); ?>

                <?php if( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <div class="entry-content" itemprop="text">

                    <?php do_action( 'wpbf_entry_content_open' ); ?>

                    <?php the_content(); ?>

                    <?php
                    wp_link_pages( array(
                        'before' => '<div class="page-links">' . __( 'Pages:', 'page-builder-framework' ),
                        'after'  => '</div>',
                    ) );
                    ?>

                    <?php do_action( 'wpbf_entry_content_close' ); ?>

                </div>

                <?php endwhile; endif; ?>


            </div>

        </div>
    </div>
</div>
<?php 
/* Déclaration footer */

get_footer(); ?>