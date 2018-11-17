<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="apple-touch-icon" sizes="180x180" href="assets/img/carwash.png">
        <link rel="icon" type="image/png" sizes="32x32" href="assets/img/carwash.png">
        <link rel="icon" type="image/png" sizes="16x16" href="assets/img/carwash.png">
        <!-- Stylesheet -->
        <link rel="stylesheet" href="assets/vendors/css/base/bootstrap.min.css">
        <link rel="stylesheet" href="assets/vendors/css/base/elisyam-1.5.min.css">
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    </head>
    <body>
        <!-- Begin Preloader -->
        
        <div class="page">
            
            <!-- End Header -->
            <!-- Begin Page Content -->
            <div class="page-content d-flex align-items-stretch">
                <div class="default-sidebar">
                    <!-- Begin Side Navbar -->
                    <nav class="side-navbar box-scroll sidebar-scroll">
        
        <ul class="list-unstyled">
            <li><a href="/registrarUsuario" ><i class="la la-circle"></i><span>Registrar Usuario</span></a>
            </li>
            <li><a href="/registrarPremio" ><i class="la la-circle"></i><span>Registrar Premio</span></a>
            </li>
            <li><a href="/usuariosRegistrados" ><i class="la la-circle"></i><span>Lista de Usuarios</span></a>
            </li>
            <li><a href="/premiosRegistrados" ><i class="la la-circle"></i><span>Lista de Premios</span></a>
            </li>
            <li><a href="/graficaUsuarios" ><i class="la la-circle"></i><span>Grafica Usuarios</span></a>
            </li>
            <li><a href="/graficaPremios" ><i class="la la-circle"></i><span>Grafica Premios</span></a>
            </li>
        </ul>

        </nav>
                    <!-- End Side Navbar -->
                </div>
                <!-- End Left Sidebar -->
                <div class="content-inner">
                    <div class="container-fluid">
                    <!-- Begin Page Header-->
                        <!-- Line Chart 01 -->
                        <div class="widget has-shadow">
                            <div class="widget-header bordered no-actions d-flex align-items-center">
                                <h4>Usuarios Registrados</h4>
                            </div>
                            <br>
                                <canvas id="line-chart-01"></canvas>
                        </div>
                        <!-- End Line Chart 01 -->
                        
                    </div>
                    <!-- End Container -->
                    
                </div>
            </div>
            <!-- End Page Content -->
        </div>
        <!-- Begin Vendor Js -->
        <script src="assets/vendors/js/base/jquery.min.js"></script>
        <script src="assets/vendors/js/base/core.min.js"></script>
        <!-- End Vendor Js -->
        <!-- Begin Page Vendor Js -->
        <script src="assets/vendors/js/nicescroll/nicescroll.min.js"></script>
        <script src="assets/vendors/js/chart/chart.min.js"></script>
        <script src="assets/vendors/js/app/app.min.js"></script>
        <!-- End Page Vendor Js -->
        <!-- Begin Page Snippets -->
        <script src="assets/js/components/chartjs/chartjs.min.js"></script>
</html>