

<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
$cakeDescription = 'CakePHP: the rapid development php framework';
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>AdminLTE 3 | Dashboard</title>




        <?= $this->Html->charset() ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            <?= $cakeDescription ?>:
            <?= $this->fetch('title') ?>
        </title>
        <?= $this->Html->meta('icon') ?>


        <?= $this->Html->script('jquery-3.3.1.min') ?>

        <?= $this->Html->css('bootstrap.min.css') ?>
        <?= $this->Html->script('bootstrap.min.js') ?>
        <?= $this->Html->css('simple-sidebar.css') ?>

        <?= $this->fetch('meta') ?>
        <?= $this->fetch('css') ?>
        <?= $this->fetch('script') ?>






        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Font Awesome -->


        <?= $this->Html->css('font-awesome.min.css') ?>

        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Theme style -->


        <?= $this->Html->css('adminlte.min.css') ?>

        <!-- iCheck -->

        <?= $this->Html->css('blue.css') ?>

        <!-- Morris chart -->
        <?= $this->Html->css('morris.css') ?>


        <!-- jvectormap -->

        <?= $this->Html->css('jvectormap-1.2.2.css') ?>
        <!-- Date Picker -->
        <?= $this->Html->css('datepicker3.css') ?>

        <!-- Daterange picker -->
        <?= $this->Html->css('daterangepicker-bs3.css') ?>

        <!-- bootstrap wysihtml5 - text editor -->
        <?= $this->Html->css('bootstrap3-wysihtml5.min.css') ?>

        <!-- Google Font: Source Sans Pro -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">





        <!-- importante para todos los iconos podemos ver ejemplos https://www.w3schools.com/icons/icons_reference.asp-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <style>
            /* Rules for icon sizes: */
            .material-icons.md-18 { font-size: 18px; }
            .material-icons.md-24 { font-size: 24px; } /* Default */
            .material-icons.md-36 { font-size: 36px; }
            .material-icons.md-48 { font-size: 48px; }
        </style>




    </head>
    <body class="hold-transition sidebar-mini" >




        <div class="wrapper">

            <!-- Navbar -->
             <!--navbar-dark bg-dark fixed-top-->
            <nav class="main-header navbar navbar-expand-md bg-dark navbar-dark  fixed-top ">
                <!-- Left navbar links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
                    </li>

                </ul>




                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li>
                            <?= $this->Html->link(' Inicio', ['controller' => 'Menu', 'action' => 'home'], ['class' => ' nav-link active fa fa-home ']) ?>
                        </li>

                        



                        <!--bloque de condicion-->

                       
                            <li>
                                <?= $this->Html->link(__(' Salir'), ['controller' => 'Users', 'action' => 'logout'], ['class' => 'nav-link fa fa-sign-out']) ?>
                            </li>
                            
                            <li>
                                <a class=" nav-link " >Bienvenido <?= $current_user['name'] . ' ' . $current_user['lastname'] ?></a>
                            </li>

                       







                    </ul>

                    <!-- FIN MENU -->

                </div>



            </nav>
            <!-- /.navbar -->

            <!-- Main Sidebar Container -->






            <aside class="main-sidebar sidebar-dark-primary elevation-4">
                <!--para colocar el logo -->
                <a href="index3.html" class="brand-link">
                    <?= $this->Html->image('logo250x64_new.png', ['alt' => 'CakePHP', 'class' => 'brand-image ', 'style' => 'opacity: .8']) ?>




                    <span class="brand-text font-weight-light " style=" color: darkslategray">.</span>
                </a>
                <!--  FIn  para colocar el logo -->


                <!-- Sidebar -->
                <div class="sidebar">
                    <!-- Sidebar user panel (optional) -->








                    <div class="user-panel mt-3 pb-3 mb-3 d-flex">

                        <div class="info">
                            <a class="nav-link" ><?= $current_user['name'] . ' ' . $current_user['lastname'] ?></a>
                        </div>
                    </div>
                    <!--encabezado del menu-->
                    <div class="row" style=" width: 5px">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-x1-12"  >
                            <ul class="sidebar-nav">






                                <li class="sidebar-brand">
                                    <a href="#">
                                        Menú
                                    </a>

                                </li>
                                <li>
                                    <a href="#">
                                        Personas
                                    </a>
                                </li>
                                <li>
                                    <a  class="fa fa-street-view" style="font-size:26px">
                                    </a>
                                    <?= $this->Html->link('   Clientes', ['controller' => 'users', 'action' => 'index'], ['style' => 'font-size:18px;font-style: normal;']) ?>
                                </li>
                                <li>
                                    <a  class="fa fa-male" style="font-size:26px">
                                    </a>
                                    <?= $this->Html->link('   Trabajadores', ['controller' => 'trabajador', 'action' => 'index'], ['style' => 'font-size:18px;font-style: normal;']) ?>
                                </li>
                                <li>
                                    <a  class="fa fa-handshake-o" style="font-size:26px">
                                    </a>
                                    <?= $this->Html->link('   Socios', ['controller' => 'socio', 'action' => 'index'], ['style' => 'font-size:18px;font-style: normal;']) ?>
                                </li>
                                <li>
                                    <a  class="fa fa-truck" style="font-size:26px">
                                    </a>
                                    <?= $this->Html->link('   Proveedores', ['controller' => 'proveedor', 'action' => 'index'], ['style' => 'font-size:18px;font-style: normal;']) ?>
                                </li>

                                <li>
                                    <a href="#">
                                        Gestión
                                    </a>
                                </li>
                                <li>
                                    <a  class="fa fa-briefcase" style="font-size:26px">
                                    </a>
                                    <?= $this->Html->link('   Empresa', ['controller' => 'empresa', 'action' => 'index'], ['style' => 'font-size:18px;font-style: normal;']) ?>
                                </li>
                                <li>
                                    <a  class="fa fa-cubes" style="font-size:26px">
                                    </a>
                                    <?= $this->Html->link('   Materia Prima', ['controller' => 'MateriaPrima', 'action' => 'index'], ['style' => 'font-size:18px;font-style: normal;']) ?>
                                </li>
                                <li>
                                    <a  class="fa fa-sitemap" style="font-size:26px">
                                    </a>
                                    <?= $this->Html->link('   Categoria-Inventario', ['controller' => 'ItemInventario', 'action' => 'index'], ['style' => 'font-size:18px;font-style: normal;']) ?>
                                </li>
                                <li>
                                    <a  class="fa fa-thermometer-2" style="font-size:26px">
                                    </a>
                                    <?= $this->Html->link('   Unidades de Medida', ['controller' => 'UnidadMedida', 'action' => 'index'], ['style' => 'font-size:18px;font-style: normal;']) ?>
                                </li>
                                <li>
                                    <a  class="fa fa-square" style="font-size:26px">
                                    </a>
                                    <?= $this->Html->link('   Producción Total', ['controller' => 'ProduccionTotal', 'action' => 'index'], ['style' => 'font-size:18px;font-style: normal;']) ?>
                                </li>


                            </ul>
                        </div>

                    </div>
                    <!--fin menu-->
                    <!-- /#sidebar-wrapper -->

                    <!-- Page Content -->



                    <!-- /#page-content-wrapper -->




                    <!-- menu izquierda -->
                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                            <!-- Add icons to the links using the .nav-icon class
                                 with font-awesome or any other icon font library -->







                            <!-- primer bloque -->







                            <!-- segundo bloque -->






                            <!-- tercer bloque -->





                            <!-- tercer bloque -->











                        </ul>
                    </nav>
                    <!-- /.sidebar-menu -->
                </div>
                <!-- /.sidebar -->
            </aside>

            <!-- Content Wrapper. Contains page content -->














            <div class="content-wrapper" style="padding-left: 30px; padding-right: 30px">
                <!-- Content Header (Page header) -->
                <!--                <div class="content-header">
                
                                </div>-->
                <!-- /.content-header -->

                <!-- Main content -->

                <!-- contenido  ////////////////////////////////////////////////////////////////////////// -->






                <div class="row centered-text " style=" align-items: center">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-x1-12">
                        <br>  
                        <br> 
                        <br> 
                    </div>


                    <div class=" card col-12 col-sm-12 col-md-12 col-lg-12 col-x1-12" style=" background: white; ">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-lg-12 col-xl-12">
                                <?= $this->Flash->render() ?>
                            </div>
                        </div>
                        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-x1-10">
                            <br>
                            <br>
                        </div>



                        <?= $this->fetch('content') ?>
                        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-x1-10">
                            <br>
                            <br>
                        </div>
                    </div>



                </div>






                <!-- /.content  Fin contenido ////////////////////////////////////////////////////////////// -->
            </div>













            <!-- foooter pie de pagina     ///////////////////////////////////// -->
            <footer class="main-footer bg-dark ">
                <strong>© 2018 Copyright El Ultimo Inca: Todos los derechos reservados      <a href="www.utc.edu.ec">   Grupo de desarrollo UTC</a>.</strong>

                <div class="float-right d-none d-sm-inline-block">
                    <b>Version</b> 1.0
                </div>
            </footer>

            <!-- Fin                      foooter pie de pagina     ///////////////////////////////////// -->




            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->
        </div>

        <!-- fin contenido principal////////////////////////////////////////////////////////////////////////////////// -->











        <!-- ./wrapper -->



        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>

        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
            $.widget.bridge('uibutton', $.ui.button)
        </script>


        <!-- Bootstrap 4 -->
        <?= $this->Html->script('bootstrap.bundle.min.js') ?>

        <!-- Morris.js charts -->

        <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <?= $this->Html->script('morris.min.js') ?>

        <!-- Sparkline -->

        <?= $this->Html->script('jquery.sparkline.min.js') ?>
        <!-- jvectormap -->
        <?= $this->Html->script('jquery-jvectormap-1.2.2.min.js') ?>
        <?= $this->Html->script('jquery-jvectormap-world-mill-en.js') ?>

        <!-- jQuery Knob Chart -->
        <?= $this->Html->script('jquery.knob.js') ?>

        <!-- daterangepicker -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
        <?= $this->Html->script('daterangepicker.js') ?>

        <!-- datepicker -->
        <?= $this->Html->script('bootstrap-datepickerjs') ?>

        <!-- Bootstrap WYSIHTML5 -->
        <?= $this->Html->script('bootstrap-datepicker') ?>
        <?= $this->Html->script('bootstrap3-wysihtml5.all.min.js') ?>

        <!-- Slimscroll -->
        <?= $this->Html->script('jquery.slimscroll.min.js') ?>

        <!-- FastClick -->
        <?= $this->Html->script('fastclick.js') ?>

        <!-- AdminLTE App -->

        <?= $this->Html->script('adminlte.js') ?>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->

        <?= $this->Html->script('dashboard.js') ?>
        <!-- AdminLTE for demo purposes -->

        <?= $this->Html->script('demo.js') ?>




















    </body>
</html>
