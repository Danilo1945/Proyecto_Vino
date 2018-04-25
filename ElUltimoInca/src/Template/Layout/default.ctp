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
                background: #009688;

            }
            .Color_secundarioP{
                background: #E0E0E0;

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

        </style>









    </head>
    <body>

        <nav>
            <nav>
    <div class="nav-wrapper Color_primP" >
      <a href="" class="brand-logo"  class=""><i data-activates="slide-out" class="medium-8 material-icons button-collapse center">menu</i> <?= $this->fetch('title') ?></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="sass.html"><i class="material-icons">search</i></a></li>
        <li><a href="badges.html"><i class="material-icons">view_module</i></a></li>
        <li><a href="collapsible.html"><i class="material-icons">refresh</i></a></li>
        <li><a href="mobile.html"><i class="material-icons">more_vert</i></a></li>
      </ul>
    </div>
  </nav>

            

            <div class="row">
                <div class="col s12">
                    <?= $this->Flash->render() ?>
                </div>
            </div>
        </nav>

        
        
        
        <!--/////////////////////////////////////////////////////////////////////////a partir de aqui--> 
        <div class="menu-principal" >


            <div class="row" >
                <!--<a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>-->
                <?= $this->fetch('content') ?>  <!--     ////// aqui aparecera el contenido-->
            </div>




            <!--MENU  DE ABAJO-->



            <div class="pie_pagina_p">
                <footer class="page-footer " id="abajo_menu" style=" background: #009688" >
                    <div class="container" >
                        <div class="row">
                            <div class="col l6 s12">
                                <h5 class="white-text">Footer Content</h5>
                                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
                            </div>
                            <div class="col l4 offset-l2 s12">
                                <h5 class="white-text">Links</h5>
                                <ul>
                                    <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                                    <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                                    <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                                    <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="footer-copyright">
                        <div class="container">
                            © 2014 Copyright Text
                            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
                        </div>
                    </div>
                </footer>         

            </div>


            <!--</div>  fin container-->

        </div>  <!-- fin contenedor principal-->

        
        
        
  <ul id="slide-out" class="side-nav">
    <li><div class="user-view">
         
    <?=$this -> Html -> image ( 'logo250x250.png' , [ 'alt' => 'CakePHP' ])?>
        
      </div>
      <!--<a href="#"><img class="circle" src="images/yuna.jpg"></a>-->
      <!--      <a href="#!name"><span class="white-text name">El Ultimo Inca</span></a>
      <a href="#!email"><span class="white-text email">elultimoinca@hotmail.com</span></a>-->
    </div></li>
    <li><div class="divider"></div></li>
     <li><a class="subheader center">Home</a></li>
   
    <li><?=$this->Html->link('Inicio',['controller'=>''])  ?> </li>
    <li><div class="divider"></div></li>
     <li><a class="subheader center">PERSONAS</a></li>
   
    
     <li><?=$this->Html->link('Socio',['controller'=>'Socio','action'=>'index','class'=>'waves-effect'])  ?> </li>
     <li><?=$this->Html->link('Cliente',['controller'=>'Cliente','action'=>'index','class'=>'waves-effect'])  ?> </li>
      <li><?=$this->Html->link('Usuarios',['controller'=>'Users','action'=>'index','class'=>'waves-effect'])  ?> </li>
      <li><?=$this->Html->link('Trabajador',['controller'=>'Trabajador','action'=>'index','class'=>'waves-effect'])  ?> </li>
      <li><?=$this->Html->link('Proveedor',['controller'=>'Proveedor','action'=>'index','class'=>'waves-effect'])  ?> </li>
      <li><div class="divider"></div></li>
       <li><a class="subheader center">GESTIÓN</a></li>
    
    
      <li><?=$this->Html->link('Pedidos',['controller'=>'Pedido','action'=>'index','class'=>'waves-effect'])  ?> </li>
      <li><?=$this->Html->link('Ventas',['controller'=>'Venta','action'=>'index','class'=>'waves-effect'])  ?> </li>
        <li><?=$this->Html->link('Area de producción',['controller'=>'AreaProduccion','action'=>'index','class'=>'waves-effect'])  ?> </li>
      <li><?=$this->Html->link('Hojas de producción de vino',['controller'=>'HojaProduccionVino','action'=>'index','class'=>'waves-effect'])  ?> </li>
       <li><?=$this->Html->link('Jestión de la contabilidad',['controller'=>'Salidas','action'=>'index','class'=>'waves-effect'])  ?> </li>
      <li><div class="divider"></div></li>
       <li><a class="subheader center">INVENTARIO</a></li>
 
    
     <li><?=$this->Html->link('Materia prima',['controller'=>'MateriaPrima','action'=>'index','class'=>'waves-effect'])  ?> </li>
       <li><?=$this->Html->link('Inventario de la Empresa',['controller'=>'InventarioEmpresa','action'=>'index','class'=>'waves-effect'])  ?> </li>
       <li><?=$this->Html->link('Producto terminado',['controller'=>'ProductoTerminado','action'=>'index','class'=>'waves-effect'])  ?> </li>
       <li><?=$this->Html->link('Empresa',['controller'=>'Socio','Empresa'=>'index','class'=>'waves-effect'])  ?> </li>
      
    <li><div class="divider"></div></li>
       <li><a class="subheader center">CONFIGURACIONES</a></li>
    
     <li><?=$this->Html->link('Categoria del artículo(items)',['controller'=>'Item','action'=>'index','class'=>'waves-effect'])  ?> </li>
       <li><?=$this->Html->link('Unidad de Medida',['controller'=>'UnidadMedida','action'=>'index','class'=>'waves-effect'])  ?> </li>
       <li><?=$this->Html->link('Home',['controller'=>''])  ?> </li>
       <li><?=$this->Html->link('',['controller'=>''])  ?> </li>
      <li><?=$this->Html->link('',['controller'=>''])  ?> </li>
       <li><?=$this->Html->link('',['controller'=>''])  ?> </li>
      
  </ul>
<!--  <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
        
        -->
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        <script>

            // Initialize collapse button
            $(".button-collapse").sideNav();
           


        </script> 
    </body>
</html>
