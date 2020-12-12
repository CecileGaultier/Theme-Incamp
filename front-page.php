<?php 



/* Déclaration header */
get_header(); ?>


<div class="container-fluid md-w-100 md-mb-3 pt-5" id="accueil">
    <div class="row pt-5">
        <div class="presentation col-md-5 text-center p-5" id="accueil-center">
            <img src="http://incamp.cecile-gaultier.fr/wp-content/uploads/2020/11/logo.png" alt="Image logo Incamp" class="img-fluid" style="max-width: 100px">
            <h1 class="h1">CAMPUS DE MONTBÉLIARD</h1>
            <p>Territoire à énergie positive pour la croissance verte</p>
            <button class="btn" id="btn-accueil"><a href="https://incamp.cecile-gaultier.fr/presentation-des-initiatives/">DÉCOUVRIR</a></button>
        </div>
    </div>
    <img src="https://incamp.cecile-gaultier.fr/wp-content/uploads/2020/12/label-tepcv.png" class="img-fluid float-right" alt="Label TEPCV" style="max-width: 200px;">
</div>



<div class="container-fluid mt-5">
    <div class="row">
        <div class=" center col-md-10  col-lg-11 col-xl-10">


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
<div class="container-fluid">
    <div class=" md-mx-5 mt-5">
        <div class="row">
            <div class="col-md-10 col-lg-11 col-xl-8 shadow-sm mb-5 bg-white center" >
                <div class="row carousel p-5" data-interval="2000" id="monCarousel">

                    <ol class="carousel-indicators">
                        <li data-target="#monCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#monCarousel" data-slide-to="1"></li>
                    </ol>

                    <div class="col-2">
                        <a href="#monCarousel"
                           class="carousel-control-prev"
                           data-slide="prev">
                            <img src="https://incamp.cecile-gaultier.fr/wp-content/uploads/2020/12/icone-fleche-carroussel-gauche.svg" alt="flèche gauche carroussel" class="img-fluid">
                        </a>
                    </div>
                    <div class="carousel-inner col-8">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-md-7">
                                    <a href="http://www.agglo-montbeliard.fr/">
                                        <img src="http://incamp.cecile-gaultier.fr/wp-content/uploads/2020/11/unnamed.png" alt="Logo PMA" class="img-fluid">
                                    </a>
                                    <a href="http://www.tepcv.developpement-durable.gouv.fr/">
                                        <img src="http://incamp.cecile-gaultier.fr/wp-content/uploads/2020/11/tepcv.png" alt="Label TEPCV" class="img-fluid">
                                    </a>
                                </div>
                                <div class="col-md-5">
                                    <a href="https://www.ecologie.gouv.fr/">
                                        <img src="http://incamp.cecile-gaultier.fr/wp-content/uploads/2020/11/1200px-Ministere_de_la_Transition_Ecologique_et_Solidaire_depuis_2017.svg_.png" alt="Logo Ministère de la Transition Écologique et Solidaire" class="img-fluid">
                                    </a>
                                </div>
                            </div>

                        </div>

                        <div class="carousel-item ">
                            <div class="row">
                                <div class="col-md-6">
                                    <a href="http://www.iut-bm.univ-fcomte.fr/">
                                        <img src="http://incamp.cecile-gaultier.fr/wp-content/uploads/2020/11/Logo-IUT.png" alt="Logo IUT" class="img-fluid">
                                    </a>
                                    <a href="https://www.ubfc.fr/">
                                        <img src="http://incamp.cecile-gaultier.fr/wp-content/uploads/2020/11/Utbm.svg_.png" alt="Logo UBFC" class="img-fluid">
                                    </a>
                                    <a href="https://m.facebook.com/assomemo2/?locale2=fr_FR">
                                        <img src="http://incamp.cecile-gaultier.fr/wp-content/uploads/2020/11/memo.jpg" alt="Logo MÉMO" class="img-fluid">
                                    </a>

                                </div>
                                <div class="col-md-6">
                                    <a href="http://stgi.univ-fcomte.fr/">
                                        <img src="http://incamp.cecile-gaultier.fr/wp-content/uploads/2020/11/4hyjctv6.png" alt="Logo STGI" class="img-fluid">
                                    </a>
                                    <a href="https://www.utbm.fr/">
                                        <img src="http://incamp.cecile-gaultier.fr/wp-content/uploads/2020/11/logo_ubfc.png" alt="Logo UTBM" class="img-fluid">
                                    </a>
                                    <a href="http://www.hnfc.fr/formation-soins-infirmiers,208,243.html">
                                        <img src="http://incamp.cecile-gaultier.fr/wp-content/uploads/2020/11/ifms.png" alt="Logo IFMS" class="img-fluid">
                                    </a>
                                </div>
                            </div>
                        </div>


                    </div>

                    <div class="col-2 carroussel" >
                        <a href="#monCarousel"
                           class="carousel-control-next"
                           data-slide="next">
                            <img src="https://incamp.cecile-gaultier.fr/wp-content/uploads/2020/12/icone-fleche-carroussel-droite.svg" alt="flèche droite carroussel" class="img-fluid">

                        </a>
                    </div>
                </div>

            </div>

        </div>
    </div>


</div>

<?php 
/* Déclaration footer */

get_footer(); ?>