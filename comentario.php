<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title> Xeloro - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="MyraStudio" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

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

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="mb-0 font-size-18">FAQs</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                                        <li class="breadcrumb-item active">FAQs</li>
                                    </ol>
                                </div>
                                
                            </div>
                        </div>
                    </div>     
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="text-center mt-4">
                                <h4>Frequently Asked Questions</h4>
                                <p class="text-muted mt-3 mb-4"> Nisi praesentium similique totam odio obcaecati, reprehenderit,
                                    dignissimos rem temporibus ea inventore alias!<br/> Beatae animi nemo ea
                                    tempora, temporibus laborum facilis ut!</p>

                            </div>
                        </div><!-- end col -->
                    </div><!-- end row -->


                    <div class="row mt-5">
                        <div class="col-lg-8">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="mb-3 font-weight-bold text-uppercase">General</h5>
                                    <div id="accordion">
                                        <div class="card mb-1">
                                            <div class="card-header bg-white border-bottom-0 p-3" id="headingOne">
                                                <h5 class="m-0 font-size-16">
                                                    <a href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                                        aria-controls="collapseOne" class="text-dark">
                                                        ¿Qué tipos de panes ofrecen?
                                                    </a>
                                                </h5>
                                            </div>

                                            <div id="collapseOne" class="collapse show"
                                                    aria-labelledby="headingOne" data-parent="#accordion">
                                                <div class="card-body text-muted pt-1">
                                                Ofrecemos una amplia variedad de panes frescos, incluyendo baguettes 
                                                tradicionales, panes integrales, pan de masa madre, pan de centeno, panes
                                                 de cereales y semillas, panes de sabor como ajo y cebolla, y mucho más.
                                                  También tenemos opciones estacionales y panes especiales para ocasiones
                                                  especiales.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mb-1">
                                            <div class="card-header bg-white border-bottom-0 p-3" id="headingTwo">
                                                <h5 class="m-0 font-size-16">
                                                    <a href="#" class="text-dark collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    ¿Cuál es su pan más popular?
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                                <div class="card-body text-muted pt-1">
                                                Nuestro pan más popular es el pan de masa madre, elaborado
                                                 con nuestra receta especial que incluye una fermentación 
                                                 lenta para lograr un sabor y una textura excepcionales. 
                                                 Es perfecto para hacer tostadas en el desayuno o para 
                                                 acompañar cualquier comida.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mb-1">
                                            <div class="card-header bg-white border-bottom-0 p-3" id="headingThree">
                                                <h5 class="m-0 font-size-16">
                                                    <a href="#" class="text-dark collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                    ¿Tienen opciones sin gluten o sin lácteos?
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                                <div class="card-body text-muted pt-1">
                                                Sí, ofrecemos una selección de productos sin gluten 
                                                y sin lácteos para satisfacer las necesidades de nuestros
                                                 clientes con dietas especiales. Nuestros panes sin gluten 
                                                 son elaborados con ingredientes de alta calidad y son igualmente 
                                                 deliciosos. Además, contamos con opciones sin lácteos como pan de 
                                                 batata y pan de aguacate, que son muy populares entre nuestros 
                                                 clientes con alergias o intolerancias alimentarias.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
        
                                </div>
                            </div>


                            <div class="card">
                                <div class="card-body">
                                    <h5 class="mb-3 font-weight-bold text-uppercase">Pagos y Soporte</h5>
                                    <div id="accordion2">
                                        <div class="card mb-1">
                                            <div class="card-header bg-white border-bottom-0 p-3" id="headingFour">
                                                <h5 class="m-0 font-size-16">
                                                    <a href="#" class="text-dark collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                    ¿Cuándo hornean los panes frescos?
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion2">
                                                <div class="card-body text-muted pt-1">
                                                Horneamos nuestros panes frescos todos los días, 
                                                generalmente por la mañana temprano para que estén 
                                                listos para su venta cuando abrimos la tienda. Esto 
                                                asegura que nuestros clientes puedan disfrutar del 
                                                pan más fresco posible
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mb-1">
                                            <div class="card-header bg-white border-bottom-0 p-3" role="tab" id="headingFive">
                                                <h5 class="m-0 font-size-16">
                                                    <a href="#" class="text-dark collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                    ¿Utilizan ingredientes orgánicos o locales?
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion2">
                                                <div class="card-body text-muted pt-1">
                                                Sí, nos esforzamos por utilizar ingredientes de alta calidad, 
                                                y preferimos los ingredientes orgánicos y locales siempre que 
                                                sea posible. Creemos en apoyar a los agricultores locales y en 
                                                ofrecer productos frescos y saludables a nuestros clientes.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mb-0">
                                            <div class="card-header bg-white border-bottom-0 p-3" role="tab" id="headingSix">
                                                <h5 class="m-0 font-size-16">
                                                    <a href="#" class="text-dark collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                                    ¿Tienen opciones para personas con alergias alimentarias?
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion2">
                                                <div class="card-body text-muted pt-1">
                                                Sí, tenemos opciones para personas con alergias alimentarias. 
                                                Ofrecemos una variedad de productos sin gluten y sin lácteos, 
                                                así como opciones veganas. Nuestro objetivo es asegurarnos de 
                                                que todos nuestros clientes puedan encontrar algo delicioso que 
                                                puedan disfrutar sin preocupaciones.
                                            </div>
                                        </div>
                                    </div>
        
                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div>

                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            2020 © Xeloro.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-right d-none d-sm-block">
                                Design & Develop by Myra
                            </div>
                        </div>
                    </div>
                </div>
            </footer>

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