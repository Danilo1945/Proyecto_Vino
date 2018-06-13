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
        <?= $this->Html->charset() ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            <?= $cakeDescription ?>:
            <?= $this->fetch('title') ?>
        </title>
        <?= $this->Html->meta('icon') ?>

        <!--PARA IMPLEMENTAR MATERIAL -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <?= $this->Html->script('jquery-3.3.1.min') ?>
        <?= $this->Html->css('bootstrap.min.css') ?>
        <?= $this->Html->script('bootstrap.min.js') ?>
        <?= $this->Html->css('fonts.css') ?>
        <?= $this->Html->css('3D.css') ?>
        
        
         <?= $this->Html->css('thumbelina.css') ?>
         <?= $this->Html->script('thumbelina.js') ?>
         <?= $this->Html->css('shelder.css') ?>
         <?= $this->Html->script('alling.js') ?>
         <?= $this->Html->script('pedidos.js') ?>
      
       
        
        
        
        
        
        
        


        <link href="https://fonts.googleapis.com/css?family=Raleway:500i|Roboto:300,400,700|Roboto+Mono" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            .Color_primP{

                background: black ;


            }
            .Color_dorado{
                color: #AA8100;
            }
            .Color_men{
                background: #839192    ;


            }
            .Color_secundarioP{
                background: yellow  ;


                background: #000;
            }
            .Color_secundarioP{
                background: #E0E0E0;

            }

            nav{
                position:   inherit;
                top: 0;
            }
            .banner_pos{

            }
            .menu-principal{

                position: float;

            }

            #abajo_menu{
                position: static;

            }
            /*stilos de menu*/
            #menu{
                background-color: #000;
                width: 100%;

            }
            #menu ul {
                list-style: none;
            }
            #menu ul li {
                display: inline-block;
            }
            #menu ul li a{
                color: #ffd700;
                display: block;
                padding: 20px;
                text-decoration: none;
            }
            #menu ul li a:hover{
                background-color: #9e9e9e;
            }
            .item-r{
                background-color: black;
                float: right;
            } 

            /*/// para el menu*/

            .color_negro{
                background: #000000;

            }

        </style>


        <style>
            /*    ESTILOS DE CONTACTOS*/


            /*        estilos de las redes sociales    */

            * {
                margin: 0;
                padding: 0;
                -webkit-box-sizing: border-box;
                -moz-box-sizing:border-box;
                box-sizing: border-box;
            }

            .social{
                position: fixed;
                left: 0;
                top: 200px;
                z-index: 2000;
            }

            .social ul{
                list-style: none;
            }

            .social ul li a {
                display: inline-block;
                color: #FFF;
                background: #000;
                padding: 10px 15px;
                text-decoration: none;
                -webkit-transition:all 700ms ease;
                -o-transition:all 700ms ease;
                transition:all 700ms ease;
            }

            .social ul li .icon-facebook{background:#3b5998;}
            .social ul li .icon-twitter{background:#00abf0;}
            .social ul li .icon-youtube{background:#e63117;}
            .social ul li .icon-instagram{background:#833ab4;}
            .social ul li .icon-mail{background: red;}

            .social ul a:hover {
                padding: 10px 30px;
                background: #000;
            }
            /*stilos de menu*/
            #menu{
                background-color: #000;
                width: 100%;

            }
            #menu ul {
                list-style: none;
            }
            #menu ul li {
                display: inline-block;
            }
            #menu ul li a{
                color: #ffd700;
                display: block;
                padding: 20px;
                text-decoration: none;
            }
            #menu ul li a:hover{
                background-color: #9e9e9e;
            }
            .item-r{
                background-color: black;
                float: right;
            }           
        </style>








        <style>
            .red
            {
                color: white;
                background-color: red;
            }
            .green
            {
                color: white;
                background-color: green;
            }
            .blue
            {
                color: white;
                background-color: blue;
            }
        </style>














    </head>
    <body>

        <nav class="navbar navbar-expand-md navbar-dark bg-dark  ">
            <?= $this->Html->image('logo250x64_new.png', ['alt' => 'CakePHP', 'class' => 'navbar-brand']) ?>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
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

                    <?php if ($current_user['roles_id'] === 1): ?>

                        <li>
                            <?= $this->Html->link(__(' Admin'), ['controller' => 'users', 'action' => 'index'], ['class' => 'nav-link  	fa fa-male']) ?>
                        </li>

                        <li>
                            <?= $this->Html->link(__(' Salir'), ['controller' => 'Users', 'action' => 'logout'], ['class' => 'nav-link fa fa-sign-out']) ?>
                        </li>
                        <li>
                            <a class="nav-link" >Bienvenido <?= $current_user['name'] . ' ' . $current_user['lastname'] ?></a>
                        </li>

                    <?php elseif ($current_user['roles_id'] === 3): ?>


                        <li>
                            <?= $this->Html->link(__(' Pedidos'), ['controller' => 'pedidos', 'action' => 'addclientes'], ['class' => 'nav-link fa fa-paper-plane']) ?>
                        </li>

                        <li>
                            <?= $this->Html->link(__(' Salir'), ['controller' => 'Users', 'action' => 'logout'], ['class' => 'nav-link fa fa-sign-out']) ?>
                        </li>
                        <li>
                            <a class=" nav-link " >Bienvenido <?= $current_user['name'] . ' ' . $current_user['lastname'].' '.$current_user['id'] ?></a>
                        </li>

                    <?php else: ?>

                        <li>
                            <?= $this->Html->link(' Registrarse', ['controller' => 'Users', 'action' => 'registrarse'], ['class' => 'nav-link fa fa-pencil-square']) ?> 
                        </li>
                        <li><?= $this->Html->link(__(' Loguin'), ['controller' => 'Users', 'action' => 'login'], ['class' => 'nav-link fa fa-sign-in']) ?>
                        </li>


                    <?php endif; ?>








                </ul>


            </div>
        </nav>
        <!--
                <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top ">
        
                    <button class="navbar-toggler" data-toggle="collapse" data-target="#collapse_targget">
                        <samp class="navbar-torgger-icon"></samp>
                    </button>
        <?= $this->Html->image('logo250x64.png', ['alt' => 'CakePHP', 'class' => 'navbar-brand']) ?>
                    <div class="collapse navbar-collapse" id="collapse_target">
        
        
                           <samp class="navbar-text">El Ultimo Inca</samp>
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
                            
                            
                            
                            bloque de condicion
                            
        <?php if ($current_user['roles_id'] === 1): ?>
                
                                        <li>
            <?= $this->Html->link(__(' Admin'), ['controller' => 'users', 'action' => 'index'], ['class' => 'nav-link  	fa fa-male']) ?>
                                        </li>
                
                                        <li>
            <?= $this->Html->link(__(' Salir'), ['controller' => 'Users', 'action' => 'logout'], ['class' => 'nav-link fa fa-sign-out']) ?>
                                        </li>
                                        <li>
                                            <a class="nav-link" >Bienvenido <?= $current_user['name'] . ' ' . $current_user['lastname'] ?></a>
                                        </li>
                                    
        <?php elseif ($current_user['roles_id'] === 3): ?>
                                    
                
                                        <li>
            <?= $this->Html->link(__(' Pedidos'), ['controller' => 'users', 'action' => 'index'], ['class' => 'nav-link fa fa-paper-plane']) ?>
                                        </li>
                
                                        <li>
            <?= $this->Html->link(__(' Salir'), ['controller' => 'Users', 'action' => 'logout'], ['class' => 'nav-link fa fa-sign-out']) ?>
                                        </li>
                                        <li>
                                            <a class=" nav-link " >Bienvenido <?= $current_user['name'] . ' ' . $current_user['lastname'] ?></a>
                                        </li>
                
        <?php else: ?>
                                        
                                        <li>
            <?= $this->Html->link(' Registrarse', ['controller' => 'Users', 'action' => 'registrarse'], ['class' => 'nav-link fa fa-pencil-square']) ?> 
                                        </li>
                                        <li><?= $this->Html->link(__(' Loguin'), ['controller' => 'Users', 'action' => 'login'], ['class' => 'nav-link fa fa-sign-in']) ?>
                                        </li>
                                        
                
        <?php endif; ?>
        
        
        
        
                             fin de bloque de condicion
        
        
        
        
        
        
        
                        </ul>
        
                    </div>
        
                </nav>-->




        <!--/// fin nav-->

        <!--///////////////////////////////////////////////////////////////inicio del contenido-->
        <!--//////////////////////////////inicio banner-->

       


        <div class="row">
            <div class="col-12 col-sm-12 col-lg-12 col-xl-12">
              <br>
              <br>
            </div>

        </div>



        <!--/////////////////fin banner-->
        <style>
            body {margin:0;height:2000px;}

            .icon-bar {
                position: fixed;
                top: 50%;
                -webkit-transform: translateY(-50%);
                -ms-transform: translateY(-50%);
                transform: translateY(-50%);
            }

            .icon-bar a {
                display: block;
                text-align: center;
                padding: 16px;
                transition: all 0.3s ease;
                color: white;
                font-size: 20px;
            }

            .icon-bar a:hover {
                background-color: #000;
            }

            .facebook {
                background: #3B5998;
                color: white;
            }

            .twitter {
                background: #55ACEE;
                color: white;
            }

            .google {
                background: #dd4b39;
                color: white;
            }

            .linkedin {
                background: #007bb5;
                color: white;
            }

            .youtube {
                background: #bb0000;
                color: white;
            }

            .content {
                margin-left: 75px;
                font-size: 30px;
            }
        </style>












        <div class="row">
            <div class="col-12 col-sm-12 col-lg-12 col-xl-12">
                <?= $this->Flash->render() ?>
            </div>
        </div>


        <!--/////////////////////////////////////////////////////////////////////////a partir de aqui--> 
        <div class="row">
          
            <div class="col-12 col-sm-12 col-lg-12 col-xl-12" >
                <?= $this->fetch('content') ?>
            </div>
        </div>






        <!--////////////////////////////////////////////////////////espacio-->

        <div class=" col-12 col-sm-12 col-lg-12 col-xl-12 Color_primP "> 
            <div class="card-body c_dorado"></div>

        </div>


        <!--////////////////////////////////////////////////////////inicio footer-->




        <footer class="page-footer col-12 col-sm-12 col-lg-12 col-xl-12 Color_primP ">
            <div class="container ">
                <div class="row">
                    <!--inicio baner-->

                    <!--///// redes sociales-->




                    <!--//////////////////////////////////////////////////////// espacio-->






                    <!--//// fin redes sociales-->


                    <!--/////// iniciao mapa-->








                    <div class=" card col-12  col-sm-12  col-md-12 col-lg-12 col-xl-12 Color_primP" >
                        <div class="row">
                            <div class="card-body c_dorado">Como llegar a Quinticusig-Sigchos:</div>
                            <div class="col-12 col-sm-12  col-md-12 col-lg-12 col-xl-12">


                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13589.262514870908!2d-78.8755357812871!3d-0.7141739916636745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMMKwNDInNTEuMCJTIDc4wrA1MicwMC40Ilc!5e1!3m2!1ses-419!2sec!4v1525822446458" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>

                            </div>
                        </div> 
                    </div>  




                    <!-- inicio footer   -->

                    <div class="card col-12 col-sm-12 col-lg-12 col-xl-12 Color_primP "> 
                        <div class="card-body c_dorado"></div>

                    </div>

                    <div class="card col-12 col-sm-12 col-lg-6 col-xl-6 Color_primP">
                        <div class="row Color_primP">
                            <div class="card col-12 col-sm-12 col-lg-7 col-xl-7 Color_primP  "
                                 <!--////////////////////////////////////////////////////////-->
                                 <?= $this->Html->image('logo 300x114.png', ['alt' => 'CakePHP']) ?>
                                 <!--////////////////////////////////////////////////////////-->
                        </div>


                    </div>
                </div>



                <div class="card col-12 col-sm-12 col-lg-6 col-xl-6 Color_primP">
                    <div class="row Color_primP">
                        <div class="card col-0 col-sm-0 col-lg-4 col-xl-4 Color_primP">

                        </div>

                        <div class="card col-12 col-sm-12 col-lg-7 col-xl-7 Color_primP ">
                            <!--////////////////////////////////////////////////////////-->
                            <?= $this->Html->image('UtcSistemas300x114.png', ['alt' => 'CakePHP']) ?>
                            <!--////////////////////////////////////////////////////////-->
                        </div>


                    </div>

                </div>


            </div>
        </div>




    </footer>


    <div class="row">
        <div class="col-12 col-sm-12 col-lg-12 col-xl-12 Color_primP">
            <br>
        </div>

        <div class=" col-12 col-sm-12 col-lg-12 col-xl-12 Color_primP ">

            <div class="row">

                <div class="col-0 col-sm-0 col-lg-1 col-xl-1 Color_primP">

                </div>

                <div class="col-12 col-sm-12 col-lg-5 col-xl-5 Color_primP">
                    © 2018 Copyright El Ultimo Inca: Todos los derechos reservados
                    <br>
                </div>
                <div class="col-0 col-sm-0 col-lg-2 col-xl-2 Color_primP ">

                </div>
                <div class="col-12 col-sm-12 col-lg-4 col-xl-4 Color_primP ">
                    <a class="grey-text text-lighten-4 right" href="">Grupo desarrollo UTC</a>
                </div>


            </div>
        </div>
        <div class="col-12 col-sm-12 col-lg-12 col-xl-12 Color_primP">
            <br>
        </div>
    </div>









</body>
</html>
