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
        <?= $this->Html->css('materialize.min.css') ?>
        <?= $this->Html->script('materialize.min.js') ?>


        <link href="https://fonts.googleapis.com/css?family=Raleway:500i|Roboto:300,400,700|Roboto+Mono" rel="stylesheet">
        
        <style>
            .Color_primP{

                background:black  ;


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
        <script >

            $(document).ready(function () {
                $('.slider').slider();

                $(".button-collapse").sideNav();

                $(".button-collapse").click(function () {

                    $("#asd").css("position", "initial");
                });
   //// para el baner
                $('.carousel.carousel-slider').carousel({
                    fullWidth: true,
                    indicators: true
                });

            });


        </script>
        <script>
            /// para el carrouser banner


        </script>

    </head>
    <body>
   <ul id="dropdown1" class="dropdown-content #212121 grey darken-4">
            <li><?= $this->Html->link('LOGIN', ['controller' => 'Menu', 'action' => 'login']) ?> </li>
            <li class="divider"></li>
            <li><?= $this->Html->link('REGISTRARSE', ['controller' => 'Menu', 'action' => 'login']) ?> </li>

        </ul>



        <!--inicio nav-->  
        <nav id="asd">
            <div class="nav-wrapper #212121 grey darken-4 ">
                <?= $this->Html->image('logo250x64.png', ['alt' => 'CakePHP']) ?>
                <a href="#" data-activates="mobile-demo" class="button-collapse" id="boton_cambio"><i class="material-icons">menu</i></a>

                <!--para el escritorio-->
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><?= $this->Html->link('Inicio', ['controller' => 'Menu', 'action' => 'home'], ['class' => 'cc']) ?> </li>
                    <li><?= $this->Html->link('Nosotros', ['controller' => 'Menu', 'action' => 'acercade']) ?> </li>
                    <li><?= $this->Html->link('Pedidos', ['controller' => 'Menu', 'action' => 'pedidos']) ?> </li>
                    <li><?= $this->Html->link('Contactos', ['controller' => 'Menu', 'action' => 'contactos']) ?> </li>
                    <li><?= $this->Html->link('Registrarse', ['controller' => 'Menu', 'action' => 'contactos']) ?> </li>
                    <li><?= $this->Html->link('Login', ['controller' => 'users', 'action' => 'login']) ?> </li>

                    <!-- Dropdown Trigger -->


                </ul>


                <!--para el movile-->
                <ul class="side-nav" id="mobile-demo">
                    <li><?= $this->Html->link('Inicio', ['controller' => 'Menu', 'action' => 'home'], ['class' => 'cc']) ?> </li>
                    <li><?= $this->Html->link('Nosotros', ['controller' => 'Menu', 'action' => 'acercade']) ?> </li>
                    <li><?= $this->Html->link('Pedidos', ['controller' => 'Menu', 'action' => 'catalogo']) ?> </li>
                    <li><?= $this->Html->link('Contactos', ['controller' => 'Menu', 'action' => 'contactos']) ?> </li>
                    <li><?= $this->Html->link('Registrarse', ['controller' => 'Menu', 'action' => 'contactos']) ?> </li>
                    <li><?= $this->Html->link('Login', ['controller' => 'Menu', 'action' => 'contactos']) ?> </li>

                    <!-- Dropdown Trigger -->
                    <li><a class="dropdown-button" href="#!" data-activates="dropdown1">MAS OPCIONES<i class="material-icons right">arrow_drop_down</i></a></li>

                </ul>
            </div>


        </nav> 
        <!--/// fin nav-->

        <!--///////////////////////////////////////////////////////////////inicio del contenido-->
        <!--//////////////////////////////inicio banner-->
        <div class="row ">




            <div class="carousel carousel-slider center">
                <div class="carousel-fixed-item center">
                    <a class="btn waves-effect white grey-text darken-text-2">button</a>
                </div>
                <div class="carousel-item red white-text" href="#one!">

                    <?= $this->Html->image('imgBanner1000x530.png', ['alt' => 'CakePHP']) ?>
                </div>
                <div class="carousel-item amber white-text" href="#two!">
                    
                    <?= $this->Html->image('2imgBanner1000x530.jpg', ['alt' => 'CakePHP']) ?>
                    <p class="white-text">This is your second panel</p>
                </div>
                <div class="carousel-item green white-text" href="#three!">
                     <?= $this->Html->image('3imgBanner1000x530.jpg', ['alt' => 'CakePHP']) ?>
                    <p class="white-text">This is your third panel</p>
                </div>
                <div class="carousel-item blue white-text" href="#four!">
                     <?= $this->Html->image('4imgBanner1000x530.jpg', ['alt' => 'CakePHP']) ?>
                    <p class="white-text">This is your fourth panel</p>
                </div>
            </div>


        </div>


        <!--/////////////////fin banner-->







        <div class="row">
            <div class="col s12 m12 l12 xl12">
                <?= $this->Flash->render() ?>
            </div>
        </div>


        <!--/////////////////////////////////////////////////////////////////////////a partir de aqui--> 
        <div class="menu-principal" >


            <div class="row" >
                <!--<a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>-->
                <?= $this->fetch('content') ?>  <!--     ////// aqui aparecera el contenido-->
            </div>



            <!--</div>  fin container-->





        </div>  <!-- fin contenedor principal-->


  <!--////////////////////////////////////////////////////////inicio footer-->



        <footer class="page-footer Color_primP">
            <div class="container">
                <div class="row">
                    <!--inicio baner-->

                    <!--///// redes sociales-->

                    <div class="row " >
                        <div class="col  s12  m12 l12 xl12 " >
                            <div class="card darken-1 Color_primP" id="abajo_menu">

                                <div class="card-content white-text">
                                    <span class="card-title c_dorado">Siguenos en:</span>
                                    <div class="card-action" id="abajo_menu"> 


                                        <div class="col s3 m3 l3 xl3">
                                            <a class="btn-floating btn-large waves-effect waves-light red "><i class="material-icons ">add</i></a>
                                        </div>

                                        <div class="col s3 m3 l3 xl3">
                                            <a class="btn-floating btn-large waves-effect waves-light red "><i class="material-icons ">add</i></a>
                                        </div>

                                        <div class="col s3 m3 l3 xl3">
                                            <a class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">add</i></a>
                                        </div>

                                        <div class="col s3 m3 l3 xl3">
                                            <a class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">add</i></a>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>  
                    </div>

                    <!--//// fin redes sociales-->


                    <!--/////// iniciao mapa-->

                    <div class="row " >
                        <div class="col  s12  m12 l12 xl12 " >
                            <div class="card darken-1 Color_primP" id="abajo_menu">

                                <div class="card-content white-text">
                                    <span class="card-title c_dorado ">Como Llegar a Quinticusig-Sigchos</span>
                                    <div class="card-action" id="abajo_menu"> 
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13589.262514870908!2d-78.8755357812871!3d-0.7141739916636745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMMKwNDInNTEuMCJTIDc4wrA1MicwMC40Ilc!5e1!3m2!1ses-419!2sec!4v1525822446458" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>  
                    </div>
                    <!--///// fin mapa-->
                    <!--para los contactos-->
                    <div class="row " >
                        <div class="col  s12  m12 l12 xl12 " >
                            <div class="card darken-1 Color_primP" id="abajo_menu">

                                <div class="card-content white-text">
                                    <span class="card-title c_dorado">CONTACTOS</span>
                                    <div class="card-action" id="abajo_menu"> 
                                        <!--////////////////////////////////////////////////////////-->

                                        <div class="row">
                                            <form class="col s12">
                                                <div class="row">
                                                    <div class="input-field col s12 m6 l6 xl6">
                                                        <i class="material-icons prefix  ">account_circle</i>
                                                        <input id="icon_prefix" type="text" class="validate ">
                                                        <label for="icon_prefix" >Nombre:</label>
                                                    </div>
                                                    <div class="input-field col s12 m6 l6 xl6">
                                                        <i class="material-icons prefix">email</i>
                                                        <input id="icon_prefix" type="text" class="validate">
                                                        <label for="icon_prefix">Email:</label>
                                                    </div>

                                                </div>

                                                <div class="row">
                                                    <div class="input-field col s12 m12 l12 xl12">
                                                        <i class="material-icons prefix " >insert_comment</i>
                                                        <input id="icon_prefix" type="text" class="validate ">
                                                        <label for="icon_prefix">Asunto:</label>
                                                    </div>
                                                </div>

                                                <div class="row">

                                                    <div class="input-field col s12 m12 l12 xl12">
                                                        <i class="material-icons prefix">mode_edit</i>
                                                        <textarea id="icon_prefix2" class="materialize-textarea"></textarea>
                                                        <label for="icon_prefix2">Mensaje</label>

                                                    </div>
                                                </div>
                                                <button class="btn waves-effect " type="submit" name="action" style=" background:#AA8100; ">Enviar
                                                    <i class="material-icons right">send</i>
                                                </button>

                                            </form>
                                        </div>
                                        <!--////////////////////////////////////////////////////////-->

                                    </div>
                                </div>

                            </div>
                        </div>  
                    </div>

                    <!--fin contactos-->

                    <!--para los contactos-->



                    <!--fin contactos-->







                    <div class="col l6 s12 ">
                        <!--                            <h5 class="white-text">Footer Content</h5>-->
                        <!--inicio imagen-->
                        <div class="row " >
                            <div class="col  s12  m12 l12 xl12 " >
                                <div class="card darken-1 Color_primP" id="abajo_menu">

                                    <div class="card-content white-text">
    <!--                                            <span class="card-title green-text">CONTACTOS</span>-->
                                        <div class="card-action" id="abajo_menu"> 
                                            <!--////////////////////////////////////////////////////////-->
                                            <?= $this->Html->image('logo 300x114.png', ['alt' => 'CakePHP']) ?>
                                            <!--////////////////////////////////////////////////////////-->

                                        </div>
                                    </div>

                                </div>
                            </div>  
                        </div>
                        <!--fin imagen-->
                    </div>


                    <div class="col l4 offset-l2 s12">
                        <!--                            <h5 class="white-text">Links</h5>-->
                        <!--inicio logos utc-->
                        <div class="row " >
                            <div class="col  s12  m12 l12 xl12 " >
                                <div class="card darken-1 Color_primP" id="abajo_menu">

                                    <div class="card-content white-text">
                                        <!--<span class="card-title green-text">CONTACTOS</span>-->
                                        <div class="card-action" id="abajo_menu"> 
                                            <!--////////////////////////////////////////////////////////-->
                                            <?= $this->Html->image('UtcSistemas300x114.png', ['alt' => 'CakePHP']) ?>
                                            <!--////////////////////////////////////////////////////////-->

                                        </div>
                                    </div>

                                </div>
                            </div>  
                        </div>
                        <!--fin logos utc-->

                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    © 2018 Copyright El Ultimo Inca: Todos los derechos reservados
                    <a class="grey-text text-lighten-4 right" href="">Grupo desarrollo UTC</a>
                </div>
            </div>
        </footer>









    </body>
</html>
