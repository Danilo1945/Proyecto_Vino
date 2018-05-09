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
                background: #000000;

            }
            .Color_secundarioP{
                background: #000000;

            }

            nav{
                position: fixed;
                top: 0;


            }
            .menu-principal{
                margin-top: 60px;
                position: float;
            }

            #abajo_menu{
                position: static;

            }
            #menu_estatico{
                position: fixed;
                top: 0;
            }
            .c_dorado{
                color: #AA8100;
                
            
            }
            
            
            .blanco_color{
                color: #f5f5f5;
            }

/*para cambiar color bo*/
 /* label color */
   .input-field label {
       /*color del texto*/
     color: #000;   
   }
     .input-field input[type=text]:focus + label {
     color: #AA8100;
   }
   /* icon prefix focus color */
   .input-field .prefix.active {
     color: #000;
   }
         
      
            
            
        </style>









    </head>
    <body>


        <div class="row  Color_primP center"   >
            <div class="col s1 m2 l1  xl1" >
                <a href="" class="brand-logo"  class=""><i data-activates="slide-out" class="medium material-icons button-collapse center" style=" color: #AA8100">menu</i></a>
            </div>

            <div class="col s12 m1 l2 xl1">
                <?= $this->Html->image('logo250x64.png', ['alt' => 'CakePHP']) ?>

            </div>
            <div class="col m9 l9  xl10" >

            </div>

        </div>
        <!--
                <nav>
                    <nav>
            <div class="nav-wrapper Color_primP" >
              <a href="" class="brand-logo"  class=""><i data-activates="slide-out" class="medium-8 material-icons button-collapse center">menu</i><?= $this->Html->image('logo250x64.png', ['alt' => 'CakePHP']) ?></a>
              <ul class="right hide-on-med-and-down">
                <li><a href="sass.html"><i class="material-icons">search</i></a></li>
                <li><a href="badges.html"><i class="material-icons">view_module</i></a></li>
                <li><a href="collapsible.html"><i class="material-icons">refresh</i></a></li>
                <li><a href="mobile.html"><i class="material-icons">more_vert</i></a></li>
              </ul>
            </div>
          </nav>-->






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










            <!--MENU  DE ABAJO-->








        </div>  <!-- fin contenedor principal-->








        <ul id="slide-out" class="side-nav">
            <li><div class="user-view">
                    <div class="background">
                        <?= $this->Html->image('logo250x250.png', ['alt' => 'CakePHP']) ?>
                    </div>
                    <a href="#!user"><img class="circle" src="images/yuna.jpg"></a>
                    <a href="#!name"><span class="white-text name">El Ultimo Inca</span></a>
                    <a href="#!email"><span class="white-text email">elultimoinca@hotmail.com</span></a>
                </div>
            </li>


            <li><div class="divider"></div></li>
            <li><a class="subheader center">Home</a></li>

            <li><?= $this->Html->link('Inicio', ['controller' => '/']) ?> </li>
            <li><div class="divider"></div></li>
            <li><a class="subheader center">PERSONAS</a></li>


            <li><?= $this->Html->link('Socio', ['controller' => 'Socio', 'action' => 'index', 'class' => 'waves-effect']) ?> </li>
            <li><?= $this->Html->link('Cliente', ['controller' => 'Cliente', 'action' => 'index', 'class' => 'waves-effect']) ?> </li>
            <li><?= $this->Html->link('Usuarios', ['controller' => 'Users', 'action' => 'index', 'class' => 'waves-effect']) ?> </li>
            <li><?= $this->Html->link('Trabajador', ['controller' => 'Trabajador', 'action' => 'index', 'class' => 'waves-effect']) ?> </li>
            <li><?= $this->Html->link('Proveedor', ['controller' => 'Proveedor', 'action' => 'index', 'class' => 'waves-effect']) ?> </li>
            <li><div class="divider"></div></li>
            <li><a class="subheader center">GESTIÓN</a></li>


            <li><?= $this->Html->link('Pedidos', ['controller' => 'Pedido', 'action' => 'index', 'class' => 'waves-effect']) ?> </li>
            <li><?= $this->Html->link('Ventas', ['controller' => 'Venta', 'action' => 'index', 'class' => 'waves-effect']) ?> </li>
            <li><?= $this->Html->link('Area de producción', ['controller' => 'AreaProduccion', 'action' => 'index', 'class' => 'waves-effect']) ?> </li>
            <li><?= $this->Html->link('Hojas de producción de vino', ['controller' => 'HojaProduccionVino', 'action' => 'index', 'class' => 'waves-effect']) ?> </li>
            <li><?= $this->Html->link('Gestión de la contabilidad', ['controller' => 'Salidas', 'action' => 'index', 'class' => 'waves-effect']) ?> </li>
            <li><div class="divider"></div></li>
            <li><a class="subheader center">INVENTARIO</a></li>


            <li><?= $this->Html->link('Materia prima', ['controller' => 'MateriaPrima', 'action' => 'index', 'class' => 'waves-effect']) ?> </li>
            <li><?= $this->Html->link('Inventario de la Empresa', ['controller' => 'InventarioEmpresa', 'action' => 'index', 'class' => 'waves-effect']) ?> </li>
            <li><?= $this->Html->link('Producto terminado', ['controller' => 'ProductoTerminado', 'action' => 'index', 'class' => 'waves-effect']) ?> </li>
            <li><?= $this->Html->link('Empresa', ['controller' => 'Socio', 'Empresa' => 'index', 'class' => 'waves-effect']) ?> </li>

            <li><div class="divider"></div></li>
            <li><a class="subheader center">CONFIGURACIONES</a></li>

            <li><?= $this->Html->link('Categoria del artículo(items)', ['controller' => 'Item', 'action' => 'index', 'class' => 'waves-effect']) ?> </li>
            <li><?= $this->Html->link('Unidad de Medida', ['controller' => 'UnidadMedida', 'action' => 'index', 'class' => 'waves-effect']) ?> </li>
            <li><?= $this->Html->link('Home', ['controller' => '']) ?> </li>
            <li><?= $this->Html->link('', ['controller' => '']) ?> </li>
            <li><?= $this->Html->link('', ['controller' => '']) ?> </li>
            <li><?= $this->Html->link('', ['controller' => '']) ?> </li>



        </ul>




        <ul id="slide-out" class="side-nav">
            <li><div class="user-view">

                    <?= $this->Html->image('logo250x250.png', ['alt' => 'CakePHP']) ?>

                </div>
                <!--/<a href="#"><img class="circle" src="images/yuna.jpg"></a>-->
                <a href="#!name"><span class="white-text name" style="color: black">El Ultimo Inca</span></a>
                <a href="#!email"><span class="white-text email" style="color: black">elultimoinca@hotmail.com</span></a>
                </div></li>


        </ul>
        <!--<a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>-->

















        <script>

            // Initialize collapse button
            $(".button-collapse").sideNav();

 

        </script> 
    </body>
</html>
