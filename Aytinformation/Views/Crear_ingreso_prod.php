<!DOCTYPE html>
<html>

<head>
 <meta charset="UTF-8">
 <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
 <title>Crear productos</title>
 <!-- Favicon-->
 <link rel="icon" href="../favicon.ico" type="image/x-icon">

 <!-- Google Fonts -->
 <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

 <!-- Bootstrap Core Css -->
 <link href="../plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

 <!-- Waves Effect Css -->
 <link href="../plugins/node-waves/waves.css" rel="stylesheet" />

 <!-- Animation Css -->
 <link href="../plugins/animate-css/animate.css" rel="stylesheet" />

 <!-- Custom Css -->
 <link href="../css/style.css" rel="stylesheet">

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
                <a class="navbar-brand" href="../../index.html">Administrador</a>
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
  <div class="row clearfix">
    <div class="block-header">
        <h2>CREAR PRODUCTO</h2>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    CREAR INGRESO
                    <small>En esta parte del modulo es la creacion de ingreso de productos</small>
                </h2>
            
            </div>
            <div class="body">
                <div class="demo-masked-input">
                    <div class="row clearfix">
                        <div class="col-md-3">
                            <b>Id</b>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">edit</i>
                                </span>
                                <div class="form-line">
                                    <input type="text" class="form-control date" placeholder="Descrip. Producto">
                                </div>
                            </div>
                        </div>
                       
                        <div class="col-md-3">
                            <b>Proveedor</b>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">person</i>
                                </span>
                                <div class="form-line">
                                    <input type="text" class="form-control datetime" placeholder="Nombre Proveedor">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <b>Fecha</b>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">date_range</i>
                                </span>
                                <div class="form-line">
                                    <input type="text" class="form-control money-dollar" placeholder="Ex: 00/00/0000 00:00">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <b>Cantidad</b>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">attach_money</i>
                                </span>
                                <div class="form-line">
                                    <input type="text" class="form-control mobile-phone-number" placeholder="#">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <b>Costo</b>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">attach_money</i>
                                </span>
                                <div class="form-line">
                                    <input type="text" class="form-control mobile-phone-number" placeholder="$ ******">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <b>Costo total</b>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">attach_money</i>
                                </span>
                                <div class="form-line">
                                    <input type="text" class="form-control mobile-phone-number" placeholder="$ ******">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <b>Fecha</b>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">date_range</i>
                                </span>
                                <div class="form-line">
                                    <input type="text" class="form-control money-dollar" placeholder="Ex: 00/00/0000 00:00">
                                </div>
                            </div>
                        </div>
                        
                        <button type="button" class="btn btn-link waves-effect" onclick="ventana();"><a href="../../pages/ui/Consultar productos creados.html" style="color: #000000">Guardar</a> </button>
                        <button type="button" class="btn btn-link waves-effect" data-dismiss="modal"><a href="../../pages/ui/Crear_Producto.html" style="color: #000000">Cancelar</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</section>


<!-- SweetAlert Plugin Js -->
<script src="../plugins/sweetalert/sweetalert.min.js"></script>
<!-- Jquery Spinner Plugin Js -->
<script src="../plugins/jquery-spinner/js/jquery.spinner.js"></script>   

<!-- Custom Js -->
<script src="../js/admin.js"></script>
<script src="../js/pages/tables/jquery-datatable.js"></script>
<script src="../js/pages/ui/dialogs.js"></script>
<script src="../js/pages/ui/modals.js"></script>
<script src="../js/pages/ui/modal_cita.js"></script>
<script src="../js/jspdf.debug.js"> </script>
<!-- Jquery Core Js -->
<script src="../plugins/jquery/jquery.min.js"></script>

<!-- Bootstrap Core Js -->
<script src="../plugins/bootstrap/js/bootstrap.js"></script>

<!-- Select Plugin Js -->
<script src="../plugins/bootstrap-select/js/bootstrap-select.js"></script>

<!-- Slimscroll Plugin Js -->
<script src="../plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

<!-- Waves Effect Plugin Js -->
<script src="../plugins/node-waves/waves.js"></script>

<!-- Editable Table Plugin Js -->
<script src="../../plugins/editable-table/mindmup-editabletable.js"></script>

<!-- Custom Js -->
<script src="../../js/admin.js"></script>
<script src="../../js/pages/tables/editable-table.js"></script>

<!-- Demo Js -->
<script src="../../js/demo.js"></script>



</body>

</html>
