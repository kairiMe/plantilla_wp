<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>DESTRIVUIDOROR CERO</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="MyraStudio" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="plantilla/Admin/vertical/assets/images/favicon.ico">

    <!-- App css -->
    <link href="plantilla/Admin/vertical/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="plantilla/Admin/vertical/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="plantilla/Admin/vertical/assets/css/theme.min.css" rel="stylesheet" type="text/css" />

</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">
        <div class="header-border"></div>

        <?php
        include("include/menu.php");
        ?>



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
                                <h4 class="card-title">PANES</h4>
                                    <p class="card-subtitle mb-4">Sección selecta de nuestros mejores panes artesanales y tradicionales.</p>

                                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                        <ol class="carousel-indicators">
                                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                        </ol>
                                        <div class="carousel-inner" role="listbox">
                                            <div class="carousel-item active">
                                                <img class="d-block img-fluid" src="img/002.jpg" alt="First slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img width="100%" src="img/00.jpg" alt="Second slide">
                                            </div>
                                            <div class="carousel-item">
                                                <img width="100%" src="img/001.jpg" alt="Third slide">
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
                        <?php for ($i = 0; $i < 12; $i++) { ?>
                            <div class="col-lg-2 col-md-3 col-sm-6">
                                <!-- Simple card -->
                                <div class="card">
                                    <img class="card-img-top img-fluid" src="img/pzn.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Pan artesanal de trigo</h5>
                                        <p class="card-text">S/. 4.00</p>
                                        <p class="card-title">Contiene 10 panes</p>
                                        <a href="#" class="btn btn-primary waves-effect waves-light">agregar a carrito</a>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>

        <?php
        include("include/comentario.php");
        ?>

        <!-- End Page-content -->

        <?php
        include("include/pie_pagina.php");
        ?>

    </div>
    <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!-- Overlay-->
    <div class="menu-overlay"></div>


    <!-- jQuery  -->
    <script src="plantilla/Admin/vertical/assets/js/jquery.min.js"></script>
    <script src="plantilla/Admin/vertical/assets/js/bootstrap.bundle.min.js"></script>
    <script src="plantilla/Admin/vertical/assets/js/metismenu.min.js"></script>
    <script src="plantilla/Admin/vertical/assets/js/waves.js"></script>
    <script src="plantilla/Admin/vertical/assets/js/simplebar.min.js"></script>

    <!-- App js -->
    <script src="plantilla/Admin/vertical/assets/js/theme.js"></script>

</body>

</html>