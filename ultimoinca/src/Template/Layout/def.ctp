

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




    </head>
    <body  >
         <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">

            <button class="navbar-toggler" data-toggle="collapse" data-target="#collapse_targget">
                <samp class="navbar-torgger-icon"></samp>
            </button>
            <?= $this->Html->image('logo250x64.png', ['alt' => 'CakePHP', 'class' => 'navbar-brand']) ?>
            <div class="collapse navbar-collapse" id="collapse_target">


                   <!--<samp class="navbar-text">El Ultimo Inca</samp>-->
                <ul class="navbar-nav ml-auto">

                    <li>
                        <?= $this->Html->link(' Inicio', ['controller' => 'Menu', 'action' => 'home'], ['class' => ' nav-link active fa fa-home ']) ?>
                    </li>

                    <li>
                        <?= $this->Html->link(' Nosotros', ['controller' => 'Menu', 'action' => 'acercade'], ['class' => 'nav-link fa fa-address-book-o']) ?> 
                    </li>

                    <li>
                        <?= $this->Html->link(' Contactos', ['controller' => 'Menu', 'action' => 'contactos'], ['class' => 'nav-link fa fa-at']) ?>
                    </li>
                    
                    
                    
                    <!--bloque de condicion-->
                    
                    <?php if ($current_user['roles_id']===1): ?>

                        <li>
                            <?= $this->Html->link(__(' Admin'), ['controller' => 'users', 'action' => 'index'], ['class' => 'nav-link  	fa fa-male']) ?>
                        </li>

                        <li>
                            <?= $this->Html->link(__(' Salir'), ['controller' => 'Users', 'action' => 'logout'], ['class' => 'nav-link fa fa-sign-out']) ?>
                        </li>
                        <li>
                            <a class="nav-link" >Bienvenido <?= $current_user['name'] . ' ' . $current_user['lastname'] ?></a>
                        </li>
                    
                     <?php elseif($current_user['roles_id']===3 ): ?>
                    

                        <li>
                            <?= $this->Html->link(__(' Pedidos'), ['controller' => 'users', 'action' => 'index'], ['class' => 'nav-link fa fa-paper-plane']) ?>
                        </li>

                        <li>
                            <?= $this->Html->link(__(' Salir'), ['controller' => 'Users', 'action' => 'logout'], ['class' => 'nav-link fa fa-sign-out']) ?>
                        </li>
                        <li>
                            <a class=" nav-link " >Bienvenido <?= $current_user['name'] . ' ' . $current_user['lastname']?></a>
                        </li>

                    <?php else: ?>
                        
                        <li>
                            <?= $this->Html->link(' Registrarse', ['controller' => 'Users', 'action' => 'registrarse'], ['class' => 'nav-link fa fa-pencil-square']) ?> 
                        </li>
                        <li><?= $this->Html->link(__(' Loguin'), ['controller' => 'Users', 'action' => 'login'], ['class' => 'nav-link fa fa-sign-in']) ?>
                        </li>
                        

                    <?php endif; ?>




                     <!--fin de bloque de condicion-->







                </ul>

            </div>

        </nav>

 <div id="wrapper">
     

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
          
            <ul class="sidebar-nav">
                  <br>
            <br>
            <br>
            <br>
          
          
                <li class="sidebar-brand">
                    <a href="#">
                       
                    </a>
                </li>
                <li>
                    <a href="#">Dashboard</a>
                </li>
                <li>
                    <a href="#">Shortcuts</a>
                </li>
                <li>
                    <a href="#">Overview</a>
                </li>
                <li>
                    <a href="#">Events</a>
                </li>
                <li>
                    <a href="#">About</a>
                </li>
                <li>
                    <a href="#">Services</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            
            
            <div class="container-fluid">
                <h1>Simple Sidebar</h1>
                <p>This template has a responsive menu toggling system. The menu will appear collapsed on smaller screens, and will appear non-collapsed on larger screens. When toggled using the button below, the menu will appear/disappear. On small screens, the page content will be pushed off canvas.</p>
                <p>Make sure to keep all page content within the <code>#page-content-wrapper</code>.</p>
                <a href="#menu-toggle" class="btn btn-secondary" id="menu-toggle">Toggle Menu</a>
            </div>
            
              <?= $this->Flash->render() ?>




                <div class="row centered-text " style="background: white; align-items: center">
                  <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-x1-12">
                      <br>  
                      <br> 
                      <br> 
                       <br> 
                      <br> 
                    </div>
                    
                  <div class="col-1 col-sm-1 col-md-1 col-lg-1 col-x1-1">
                      <br>  
                       
                 
                    </div>
                    <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-x1-10">
                         <?= $this->fetch('content') ?>
                    </div>
                   

                </div>






                <!-- /.content  Fin contenido ////////////////////////////////////////////////////////////// -->
            </div>

            
            
            
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>


    </body>
</html>
