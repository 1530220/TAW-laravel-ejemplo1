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
        
<div class="page-content d-flex align-items-stretch">
    <div class="default-sidebar">
        <nav class="side-navbar box-scroll sidebar-scroll">
        <!-- Begin Main Navigation -->
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
    </div>

    <div class="content-inner">
    <div class="container-fluid">
        <div class="row">
    <div class="col-xl-12">
        <div class="widget has-shadow">
            <div class="widget-header bordered no-actions d-flex align-items-center">
                <h4>Completa el siguiente formulario para registrar un premio</h4>
            </div>
            <div class="widget-body">
                <br>
                <form class="form-horizontal" method="post">
                    <div class="form-group row d-flex align-items-center mb-4">
                        <label class="col-lg-3 form-control-label">Nombre:</label>
                        <div class="col-lg-9">
                            <input type="text" placeholder="Ingresar nombre" class="form-control" name="nombre" required>
                        </div>
                    </div>
                    <div class="form-group row d-flex align-items-center mb-4">
                        <label class="col-lg-3 form-control-label">Descripcion:</label>
                        <div class="col-lg-9">
                            <input type="text" placeholder="Ingresar descripcion" class="form-control" name="descripcion" required>
                        </div>
                    </div>
                    <div class="form-group row d-flex align-items-center mb-4">
                        <label class="col-lg-3 form-control-label">Puntos:</label>
                        <div class="col-lg-9">
                            <input type="number" placeholder="Ingresar puntos requeridos" class="form-control" name="puntos" min="0" required>
                        </div>
                    </div><br>
                    <div class="form-group row d-flex align-items-center mb-4">
                        <div class="col-lg-5"></div>
                        <div class="col-lg-6">
                            <a href="#" class="btn btn-primary col-lg-9">Guardar</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


</div>
</div>
</div>
        <script src="assets/vendors/js/base/jquery.min.js"></script>
        <script src="assets/vendors/js/base/core.min.js"></script>
        <!-- End Vendor Js -->
        <!-- Begin Page Vendor Js -->
        <script src="assets/vendors/js/app/app.min.js"></script>
    </body>
</html>
