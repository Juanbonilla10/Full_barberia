<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Usuarios</title>
    <!-- Favicon-->
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="../plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="../plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Colorpicker Css -->
    <link href="../plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css" rel="stylesheet" />

    <!-- Dropzone Css -->
    <link href="../plugins/dropzone/dropzone.css" rel="stylesheet">

    <!-- Multi Select Css -->
    <link href="../plugins/multi-select/css/multi-select.css" rel="stylesheet">

    <!-- Bootstrap Spinner Css -->
    <link href="../plugins/jquery-spinner/css/bootstrap-spinner.css" rel="stylesheet">

    <!-- Bootstrap Tagsinput Css -->
    <link href="../plugins/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet">

    <!-- Bootstrap Select Css -->
    <link href="../plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

    <!-- noUISlider Css -->
    <link href="../plugins/nouislider/nouislider.min.css" rel="stylesheet">

    <!-- Animation Css -->
    <link href="../plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Sweetalert Css -->
    <link href="../plugins/sweetalert/sweetalert.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="../css/style.css" rel="stylesheet">

    <!-- JQuery DataTable Css -->
    <link href="../plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="../css/themes/all-themes.css" rel="stylesheet" />

    <!--Sweetalert2!-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>

    <!--jsPDF!-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>

</head>

<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Espere un momento</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="Escribe algo...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="../../index.html">A Y T Information</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Call Search -->
                    <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
                    <!-- #END# Call Search -->
                    <!-- Notifications -->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="material-icons">notifications</i>
                            <span class="label-count">3</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">NOTIFICACIONES</li>
                            <li class="body">
                                <ul class="menu">
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-light-green">
                                                <i class="material-icons">person_add</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4>12 personas registraron una PQRS</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 14 mins ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-cyan">
                                                <i class="material-icons">add_shopping_cart</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4>Se realizaron 4 ventas</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 22 mins ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-red">
                                                <i class="material-icons">delete_forever</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4>Se elminaron 3 ordenes de compra</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 3 hours ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="javascript:void(0);">Ver todas las notificaciones</a>
                            </li>
                        </ul>
                    </li>
                    <!-- #END# Notifications -->
                    <!-- Tasks -->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="material-icons">flag</i>
                            <span class="label-count">3</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">Reportes</li>
                            <li class="body">
                                <ul class="menu tasks">
                                    <li>
                                        <a href="javascript:void(0);">
                                            <h4>
                                                Venta de productos
                                                <small>32%</small>
                                            </h4>
                                            <div class="progress">
                                                <div class="progress-bar bg-pink" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 32%">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <h4>
                                                Citas reservadas
                                                <small>45%</small>
                                            </h4>
                                            <div class="progress">
                                                <div class="progress-bar bg-cyan" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <h4>
                                                Eliminación de O.C
                                                <small>54%</small>
                                            </h4>
                                            <div class="progress">
                                                <div class="progress-bar bg-teal" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 54%">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="javascript:void(0);">Ver todas las notificaciones</a>
                            </li>
                        </ul>
                    </li>
                    <!-- #END# Tasks -->
                    <!--<li class="pull-right"><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="material-icons">more_vert</i></a></li>!-->
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="https://www.mcgilltribune.com/wp-content/uploads/2020/02/hacker.png" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Juan Carlos</div>
                    <div class="email">jccoronado29@misena.edu.co</div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);"><i class="material-icons">person</i>Usuario</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">input</i>Salir</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
             <div class="menu">
            <ul class="list">
              <li class="header">Menu de navegación</li>
              <li>
                <a href="home.html">
                  <i class="material-icons">home</i>
                  <span>Home</span>
              </a>
          </li>
          <li>
                       <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">markunread_mailbox</i>
                        <span>Inventario</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="javascript:void(0);" class="menu-toggle">
                                <span>Productos</span>
                            </a>
                            <ul class="ml-menu">
                                <li>
                                    <a href="javascript:void(0);">
                                        <span><a href="../../pages/ui/Crear_Producto.html">Registrar Nuevos Productos</a></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <span><a href="../../pages/ui/Consultar%20productos%20creados.html">Consultar Productos</a></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <span><a href="../../pages/ui/Ingreso_Productos.html">Ingresar Productos</a></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <span><a href="../../pages/ui/Consulta_Ingreso.html">Consultar Ingresos</a></span>
                                    </a>
                                </li>
                            </ul>
                            <a href="javascript:void(0);" class="menu-toggle">
                                <span>Inventario</span>
                            </a>
                            <ul class="ml-menu">
                                <li>
                                    <a href="javascript:void(0);">
                                        <span><a href="../../pages/ui/Inventario.html">Consultar Inventario</a></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <span><a href="../../pages/ui/Consulta_mod.html">Consultar Modificaciones</a></span>
                                    </a>
                                </li>
                                
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="menu-toggle">
                                <span>Proveedor</span>
                            </a>
                            <ul class="ml-menu">
                                <li>
                                    <a href="javascript:void(0);">
                                        <span><a href="../../pages/ui/Pro.html">Registrar Nuevo Proveedor</a></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <span><a href="../../pages/ui/Consulta_proveedor.html">Consultar Provedor</a></span>
                                    </a>
                                </li>
                                
                            </ul>
                        </ul>
          <ul class="ml-menu">
              <li>
                <a href="Ingreso_Productos.html">Productos</a>
            </li>
            <li>
                <a href="pages/medias/carousel.html">Inventario</a>
            </li>
            <li>
                <a href="pages/medias/image-gallery.html">Proveedores</a>
            </li>
            <li>
                <a href="pages/medias/carousel.html">Orden de cmopra (O.C)</a>
            </li>
        </ul>
    </li>
    <li>
        <a href="javascript:void(0);" class="menu-toggle">
          <i class="material-icons">swap_calls</i>
          <span>Gestión humana</span>
      </a>
      <ul class="ml-menu">
          <li>
            <a href="Registro_Nuevo_Personal.html">Registro de personal</a>
        </li>
        <li>
            <a href="cliente.html">Clientes</a>
        </li>
        <li>
            <a href="Pago_Servicio.html">Pagos</a>
        </li>
        <li>
            <a href="Nuevo_Servicio.html">Nuevo servicio</a>
        </li>
    </ul>
</li>
<li>
    <a href="javascript:void(0);" class="menu-toggle">
      <i class="material-icons">accessibility</i>
      <span>Clientes</span>
  </a>
  <ul class="ml-menu">
      <li>
        <a href="ventas.html">Ventas</a>
    </li>
    <li>
        <a href="productos.html">Productos</a>
    </li>
    <li>
        <a href="cronograma.html">Cronograma</a>
    </li>
    <li>
        <a href="citas.html">Citas</a>
    </li>
</ul>
</li>
<li>
    <a href="javascript:void(0);" class="menu-toggle">
      <i class="material-icons">view_list</i>
      <span>PQRS</span>
  </a>
  <ul class="ml-menu">
    <li>
        <a href="Pqrs.html">Crear PQRS</a>
    </li>
    <li>
        <a href="Gestionar PQRS.html">Gestion PQRS</a>
    </li>
</ul>
</li>
</div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2020 <a href="javascript:void(0);">A Y T Information</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.0.6
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        <aside id="rightsidebar" class="right-sidebar">
            <ul class="nav nav-tabs tab-nav-right" role="tablist">
                <li role="presentation" class="active"><a href="#skins" data-toggle="tab">SKINS</a></li>
                <li role="presentation"><a href="#settings" data-toggle="tab">SETTINGS</a></li>
            </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active in active" id="skins">
                    <ul class="demo-choose-skin">
                        <li data-theme="red" class="active">
                            <div class="red"></div>
                            <span>Red</span>
                        </li>
                        <li data-theme="pink">
                            <div class="pink"></div>
                            <span>Pink</span>
                        </li>
                        <li data-theme="purple">
                            <div class="purple"></div>
                            <span>Purple</span>
                        </li>
                        <li data-theme="deep-purple">
                            <div class="deep-purple"></div>
                            <span>Deep Purple</span>
                        </li>
                        <li data-theme="indigo">
                            <div class="indigo"></div>
                            <span>Indigo</span>
                        </li>
                        <li data-theme="blue">
                            <div class="blue"></div>
                            <span>Blue</span>
                        </li>
                        <li data-theme="light-blue">
                            <div class="light-blue"></div>
                            <span>Light Blue</span>
                        </li>
                        <li data-theme="cyan">
                            <div class="cyan"></div>
                            <span>Cyan</span>
                        </li>
                        <li data-theme="teal">
                            <div class="teal"></div>
                            <span>Teal</span>
                        </li>
                        <li data-theme="green">
                            <div class="green"></div>
                            <span>Green</span>
                        </li>
                        <li data-theme="light-green">
                            <div class="light-green"></div>
                            <span>Light Green</span>
                        </li>
                        <li data-theme="lime">
                            <div class="lime"></div>
                            <span>Lime</span>
                        </li>
                        <li data-theme="yellow">
                            <div class="yellow"></div>
                            <span>Yellow</span>
                        </li>
                        <li data-theme="amber">
                            <div class="amber"></div>
                            <span>Amber</span>
                        </li>
                        <li data-theme="orange">
                            <div class="orange"></div>
                            <span>Orange</span>
                        </li>
                        <li data-theme="deep-orange">
                            <div class="deep-orange"></div>
                            <span>Deep Orange</span>
                        </li>
                        <li data-theme="brown">
                            <div class="brown"></div>
                            <span>Brown</span>
                        </li>
                        <li data-theme="grey">
                            <div class="grey"></div>
                            <span>Grey</span>
                        </li>
                        <li data-theme="blue-grey">
                            <div class="blue-grey"></div>
                            <span>Blue Grey</span>
                        </li>
                        <li data-theme="black">
                            <div class="black"></div>
                            <span>Black</span>
                        </li>
                    </ul>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="settings">
                    <div class="demo-settings">
                        <p>GENERAL SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Report Panel Usage</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Email Redirect</span>
                                <div class="switch">
                                    <label><input type="checkbox"><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                        <p>SYSTEM SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Notifications</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Auto Updates</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                        <p>ACCOUNT SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Offline</span>
                                <div class="switch">
                                    <label><input type="checkbox"><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Location Permission</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </aside>
        <!-- #END# Right Sidebar -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>REGISTRO DE NUEVO USUARIOS</h2>
            </div>
            <!-- Bootstrap Default Buttons -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                REGISTRO USUARIOS
                                <small>En este modulo se puede registrar los nuevos usuarios de la empresa </small>
                            </h2>
                        </div>
                        <div class="body">                          
                            <div class="row clearfix js-sweetalert">
                                <button type="button" class="btn btn-primary waves-effect" data-toggle="modal" data-target="#defaultModal" style="width: 100px; ">Crear</button>
                                <button type="button" class="btn btn-success waves-effect" data-toggle="modal" data-target="#defaultModala" style="width: 100px; ">Modificar</button>
                                <button type="button" class="btn btn-primary waves-effect" data-toggle="modal" data-target="#defaultModalaa" style="width: 140px; ">Actualizar contraseña </button>
                                <button type="button" class="btn bg-red waves-effect mover">
                                    <i class="material-icons">print</i>
                                    <span>Imprimir</span>
                                </button>
                                <button type="button" class="btn bg-red waves-effect mover" onclick="descargar();">
                                    <i class="material-icons">save</i>
                                    <span>Guardar</span>
                                </button>
                            </div>
                        </div>
                        <div class="modal fade" id="defaultModalaa" tabindex="-1" role="dialog">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                       <h4 class="modal-title" id="defaultModalLabel">¿Quieres actualizar la contraseña?</h4>
                                    </div>
                                    <div class="modal-body">
                                       <div class="demo-masked-input">
                                            <div class="row clearfix">
                                                <div class="col-md-6">
                                                    <b>Nombre de usuario</b>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="material-icons">person</i>
                                                        </span>
                                                        <div class="form-line">
                                                            <input type="text" class="form-control date" placeholder="User name">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <b>Nueva Contraseña</b>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="material-icons"></i>
                                                        </span>
                                                        <div class="form-line">
                                                            <input type="GENERAL" class="form-control document" placeholder="Contraseña">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal fade" id="defaultModalaa2" tabindex="-1" role="dialog">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                             <h4 class="modal-title" id="defaultModalLabel">¡Contraseña actualizada con exito!</h4>
                                                            </div>
                                                        </div>
                                                     </div>
                                                </div>
                                                <div class="modal-footer">
                                        <button type="button" class="btn btn-primary waves-effect" data-dismiss="modal">Cancelar</button>
                                        <button type="button" class="btn btn-primary waves-effect" data-toggle="modal" data-target="#defaultModalaa2" style="width: 140px; ">Actualizar contraseña</button>
                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="defaultModalLabel">Crear Nuevo Registro</h4>
                                    </div>
                                    <div class="modal-body">
                                       <div class="demo-masked-input">
                                            <div class="row clearfix">
                                                <div class="col-md-6">
                                                    <b>Empleado</b>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="material-icons">person</i>
                                                        </span>
                                                        <div class="form-line">
                                                            <input type="text" class="form-control date" placeholder="User name">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <b>Documento</b>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="material-icons">edit</i>
                                                        </span>
                                                        <div class="form-line">
                                                            <input type="number" class="form-control document" placeholder="Numero de identificacion">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <b>Numero de telefono</b>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="material-icons">phone</i>
                                                        </span>
                                                        <div class="form-line">
                                                            <input type="tel" class="form-control mobile-phone-number" placeholder="Ex: +57 (317) 289-07-63">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <b>Dirección</b>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="material-icons"></i>
                                                        </span>
                                                        <div class="form-line">
                                                            <input type="text" class="form-control" placeholder="Dirección">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <b>Fecha de nacimiento</b>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="material-icons">date_range</i>
                                                        </span>
                                                        <div class="form-line">
                                                            <input type="date" class="form-control date" placeholder="Ex: 30/07/2016">
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-link waves-effect">Guardar</button>
                                        <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">Cerrar</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="defaultModala" tabindex="-1" role="dialog">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="defaultModalLabel">Modificar Registro</h4>
                                    </div>
                                    <div class="modal-body">
                                       <div class="demo-masked-input">
                                            <div class="row clearfix unicos">
                                                <div class="col-md-6">
                                                    <b>Codigo Registro</b>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="material-icons">bookmark</i>
                                                        </span>
                                                        <div class="form-line">
                                                            <select class="form-control show-tick">
                                                                <option>RN0001</option>
                                                                <option>RN0002</option>
                                                                <option>RN0003</option>
                                                                <option>RN0004</option>
                                                                <option>RN0005</option>
                                                                <option>RN0006</option>
                                                                <option>RN0007</option>
                                                                <option>RN0008</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 bloqueo t">
                                                    <b>Empleado</b>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="material-icons">person</i>
                                                        </span>
                                                        <div class="form-line">
                                                            <input type="text" class="form-control date" placeholder="Airi Satou" >
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 bloqueo t">
                                                    <b>Documento</b>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="material-icons">edit</i>
                                                        </span>
                                                        <div class="form-line">
                                                            <input type="number" class="form-control document" placeholder="1007400892" >
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 bloqueo t">
                                                    <b>Numero de telefono</b>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="material-icons">phone</i>
                                                        </span>
                                                        <div class="form-line">
                                                            <input type="tel" class="form-control mobile-phone-number" placeholder="Ex: 3107520474" >
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 bloqueo t">
                                                    <b>Dirección</b>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="material-icons">attach_money</i>
                                                        </span>
                                                        <div class="form-line">
                                                            <input type="text" class="form-control money" placeholder="Dirección" >
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 bloqueo t">
                                                    <b>Fecha de nacimiento</b>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="material-icons">date_range</i>
                                                        </span>
                                                        <div class="form-line">
                                                            <input type="date" class="form-control date" placeholder="02/07/2020" >
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-link waves-effect ter" onclick="poner();">Buscar</button>
                                        <button type="button" class="btn btn-link waves-effect" onclick="ventana();">Guardar</button>
                                        <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">Cerrar</button>
                                    </div>
                                </div>
                            </div>
                        </div>




                    </div>
                    <div class="card">
                     <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable" id="basic-table">
                                <thead>
                                    <tr>
                                        <th>Cedula</th>
                                        <th>Nombre y apellido</th>
                                        <th>Teléfono</th>
                                        <th>Fecha de nacimiento</th>
                                        <th>Dirección</th>
                                        <th>Genero</th>
                                        <th>Email</th>
                                        <th>Contraseña</th>

                                        <!--<th>Opción</th>!-->
                                    </tr>
                                </thead>
                                <?php foreach($data as $item) {
                                        echo "<tr>";
                                        echo "<td>". $item['Num_Identificacion']. "</td>";
                                        echo "<td>". $item['Nombres_y_apellido']. "</td>";
                                        echo "<td>". $item['Telefono']. "</td>";
                                        echo "<td>". $item['Fecha_de_nacimiento']. "</td>";
                                        echo "<td>". $item['Direccion']. "</td>";
                                        echo "<td>". $item['Genero']. "</td>";
                                        echo "<td>". $item['Email']. "</td>";
                                        echo "<td>". $item['Contraseña']. "</td>";
                                    echo "</tr>";
                                    }
                                ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</section>

<!-- Jquery Core Js -->
<script src="../plugins/jquery/jquery.min.js"></script>

<!-- Bootstrap Core Js -->
<script src="../plugins/bootstrap/js/bootstrap.js"></script>

<!-- Select Plugin Js -->
<script src="../plugins/bootstrap-select/js/bootstrap-select.js"></script>

<!-- Slimscroll Plugin Js -->
<script src="../plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

<!-- Bootstrap Notify Plugin Js -->
<script src="../plugins/bootstrap-notify/bootstrap-notify.js"></script>

<!-- Waves Effect Plugin Js -->
<script src="../plugins/node-waves/waves.js"></script>

<!-- Dropzone Plugin Js -->
<script src="../plugins/dropzone/dropzone.js"></script>

<!-- Input Mask Plugin Js -->
<script src="../plugins/jquery-inputmask/jquery.inputmask.bundle.js"></script>

<!-- Multi Select Plugin Js -->
<script src="../plugins/multi-select/js/jquery.multi-select.js"></script>

<!-- Jquery Spinner Plugin Js -->
<script src="../plugins/jquery-spinner/js/jquery.spinner.js"></script>

<!-- Bootstrap Tags Input Plugin Js -->
<script src="../plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>

<!-- noUISlider Plugin Js -->
<script src="../plugins/nouislider/nouislider.js"></script>

<!-- Jquery DataTable Plugin Js -->
<script src="../plugins/jquery-datatable/jquery.dataTables.js"></script>
<script src="../plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
<script src="../plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
<script src="../plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
<script src="../plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
<script src="../plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
<script src="../plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
<script src="../plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
<script src="../plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

<!-- SweetAlert Plugin Js -->
<script src="../plugins/sweetalert/sweetalert.min.js"></script>

<!-- Custom Js -->
<script src="../js/admin.js"></script>
<script src="../js/pages/tables/jquery-datatable.js"></script>
<script src="../js/pages/ui/modals.js"></script>
<script src="../js/pages/ui/modal_cita.js"></script>
<script src="../js/jspdf.debug.js"> </script>

<!-- Demo Js -->
<script src="../js/demo.js"></script>
</body>

</html>
