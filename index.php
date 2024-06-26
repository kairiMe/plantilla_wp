<?PHP get_header() ?>


<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">
            <div class="row justify-content-center"> <!-- Agregamos la clase justify-content-center para centrar el contenido -->
                <div class="col-lg-8"> <!-- Modificamos la clase a col-lg-8 para que ocupe 8 columnas en pantallas grandes -->
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">PASTELES</h4>
                            <p class="card-subtitle mb-4">Sección selecta de nuetros mejores pasteles, sabores y diversas precentacion es para su deleite. </p>

                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active">
                                        <img class="d-block img-fluid" src="<?PHP bloginfo('template_url'); ?>/img/pa1.jpg" alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img width="100%" src="<?PHP bloginfo('template_url'); ?>/img/pa2.jpg" alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img width="100%" src="<?PHP bloginfo('template_url'); ?>/img/coco.jpg" alt="Third slide">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div> <!-- end col -->
            </div> <!-- end row -->


            <div class="row">
                <?php
                if (have_posts()) :
                    while (have_posts()) : the_post();

                ?>

                        <div class="col-lg-2 col-md-3 col-sm-6">
                            <!-- Simple card -->
                            <div class="card">
                                <a href="<?php the_permalink(); ?>"><?php
                                // check if the post or page has a Featured Image assigned to it.
                                if (has_post_thumbnail()) {
                                    the_post_thumbnail('thumbnail', array( 'class' => 'card-img-top img-fluid' ));
                                } ?></a>
                                <div class="card-body">
                                    <h5 class="card-title"><?php the_title(); ?></h5>
                                    <p class="card-text">S/. 40.00 - S/. 80.00</p>
                                    <p class="card-tetle"> <?php the_excerpt() ?></p>
                                    <a href="#" class="btn btn-primary waves-effect waves-light">agregar a carrito</a>
                                </div>
                            </div>
                        </div>
                <?php
                    endwhile;
                else :
                    _e('No se encontro productos en la categoria seleccionada.', 'textdomain');
                endif; ?>
            </div>
        </div>
    </div>
    <!-- End Page-content -->


    <?php
    get_footer();
    ?>