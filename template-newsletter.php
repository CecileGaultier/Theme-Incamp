<?php 

/* Template Name: Newsletter 
 */


/* Déclaration header */


/* Déclaration header */
get_header(); ?>



<div class="container-fluid" id="newsletter-page">
    <div class="row">
        <div class="col-md-9 center mb-5 pb-5">
            <div class="row my-5">
                <?php wpbf_title(); ?>

                <?php if( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <div class="entry-content px-3" itemprop="text">

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
                <div class="col-md-6 ml-md-5 my-md-5">
                    
                    <?php echo do_shortcode("[sibwp_form id=3]"); ?>
                    
                </div>

                <div class="col-md-5">
                        <img src="https://incamp.cecile-gaultier.fr/wp-content/uploads/2020/12/new_message.svg" alt="Newsletter" class="img-fluid">
                </div>
            </div>

        </div>
    </div>

<?php 
/* Déclaration footer */

get_footer(); ?>
