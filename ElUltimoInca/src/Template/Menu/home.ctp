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
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = false;

if (!Configure::read('debug')) :
    throw new NotFoundException(
    'Please replace src/Template/Pages/home.ctp with your own version or re-enable debug mode.'
    );
endif;

$cakeDescription = 'CakePHP: the rapid development PHP framework';
?>
<!DOCTYPE html>
<html>
    <head>


        <?= $this->Html->meta('icon') ?>
        <?= $this->Html->css('base.css') ?>
        <?= $this->Html->css('cake.css') ?>
        <?= $this->Html->css('home.css') ?>


        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <?= $this->Html->script('jquery-3.3.1.min') ?>
        <?= $this->Html->css('materialize.min.css') ?>
        <?= $this->Html->script('materialize.min.js') ?>
        <link href="https://fonts.googleapis.com/css?family=Raleway:500i|Roboto:300,400,700|Roboto+Mono" rel="stylesheet">


        <?= $this->Html->charset() ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            <?= $cakeDescription ?>
        </title>
        <!--        jquery-->






















        <style>

            .Color_primP{
                background:black  ;

            }
            .Color_secundarioP{
                background: yellow  ;

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

        </style>
        <script >

            $(document).ready(function () {
                $('.slider').slider();

                $(".button-collapse").sideNav();



                $(".button-collapse").click(function () {

                    $("#asd").css("position", "initial");

                });
              

            });
             $(document).ready(function(){
    $('.carousel').carousel();
  });

        </script>


    </head  >

    <body>


    <!-- Menu creado con material designer  fuente http://materializecss.com/navbar.html -->



    <!-- Dropdown Structure -->
    <ul id="dropdown1" class="dropdown-content Color_primP">
        <li><?= $this->Html->link('LOGIN', ['controller' => 'Menu', 'action' => 'login']) ?> </li>
        <li class="divider"></li>
        <li><?= $this->Html->link('REGISTRARSE', ['controller' => 'Menu', 'action' => 'login']) ?> </li>

    </ul>
 <nav id="asd">
        <div class="nav-wrapper Color_primP">
            <a href="#!" class="brand-logo ">El Ultimo Inca</a>
            <a href="#" data-activates="mobile-demo" class="button-collapse" id="boton_cambio"><i class="material-icons">menu</i></a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><?= $this->Html->link('MENU', ['controller' => 'Menu', 'action' => 'home']) ?> </li>
                <li><?= $this->Html->link('CONTACTOS', ['controller' => 'Menu', 'action' => 'contactos']) ?> </li>
                <li><?= $this->Html->link('CATALOGO', ['controller' => 'Menu', 'action' => 'catalogo']) ?> </li>
                <li><?= $this->Html->link('PEDIDOS', ['controller' => 'Menu', 'action' => 'pedidos']) ?> </li>
                <li><?= $this->Html->link('ACER CADE..', ['controller' => 'Menu', 'action' => 'acercade']) ?> </li>

                <!-- Dropdown Trigger -->
                <li><a class="dropdown-button" href="#!" data-activates="dropdown1">MAS OPCIONES<i class="material-icons right">arrow_drop_down</i></a></li>

            </ul>

            <ul class="side-nav" id="mobile-demo">
                <li><?= $this->Html->link('MENU', ['controller' => 'Menu', 'action' => 'home']) ?> </li>
                <li><?= $this->Html->link('CONTACTOS', ['controller' => 'Menu', 'action' => 'contactos']) ?> </li>
                <li><?= $this->Html->link('CATALOGO', ['controller' => 'Menu', 'action' => 'catalogo']) ?> </li>
                <li><?= $this->Html->link('PEDIDOS', ['controller' => 'Menu', 'action' => 'pedidos']) ?> </li>
                <li><?= $this->Html->link('ACER CADE..', ['controller' => 'Menu', 'action' => 'acercade']) ?> </li>

                <!-- Dropdown Trigger -->
                <li><a class="dropdown-button" href="#!" data-activates="dropdown1">MAS OPCIONES<i class="material-icons right">arrow_drop_down</i></a></li>

            </ul>
        </div>


    </nav>

<div class="row">
        <div class="col s12 ">

            <!--feature descover-->

            <br>
           
           

    
      

              <div class="slider col s14 " style="position: relative">
                <ul class="slides" >
                    <li >
                        <?= $this->Html->image('img1.jpg', ['alt' => 'CakePHP']) ?> <!-- random image -->
                        <div class="caption center-align">
                            <h1>EL ULTIMO INCA</h1>
                            <h5 class="light grey-text text-lighten-6">VINO TINTO</h5>
                        </div>
                    </li>
                    <li>
                        <?= $this->Html->image('img2.jpg', ['alt' => 'CakePHP']) ?> <!-- random image -->
                        <div class="caption left-align">
                            <h1>Vino de Mortiño </h1>
                            <h5 class="light grey-text text-lighten-3"></h5>
                        </div>
                    </li>
                    <li>
                        <?= $this->Html->image('campo.jpeg', ['alt' => 'CakePHP']) ?> <!-- random image -->
                        <div class="caption center-align">
                         <h3 style="color: #000  ">REALIZACION DEL VINO </h3>
                            <h5 class="light grey-text text-lighten-3">
                            El último Inca es la marca artesanal de vino de mortiño que produce un grupo de mujeres 
                            de la comunidad Quinticusig del cantón Sigchos, en Cotopaxi. Hace seis años y medio comercializan este producto que cuenta con 
                            registro sanitario.</h5>
                        </div>
                    </li>
                    <li>
                        <?= $this->Html->image('el inca.jpg', ['alt' => 'CakePHP']) ?> <!-- random image -->
                        <div class="caption center-align">
                            <h3>PERSONAL DE PLANTA</h3>
                            <h5 class="light grey-text text-lighten-3"></h5>
                        </div>
                        
                    </li>
                </ul>
            </div>
        </div>  
    </div>




    
   
    
    <div class="col s13 m4">
        <div class="card darken-1 center">
            <div class="card-content white-text ">
                <span class="card-title #ffd54f amber lighten-2">PRODUCTOS</span>
               
                <div class="card-action">
                   
                </div>
            </div>
        </div>
    </div>
    
    
    
    
    
    
    
    <div class="row">
        
    <div class="col s12 m4">
        <div class="card darken-1">
            <div class="card-content red-text">
               
                <div class="card-action">
                    
                    
       
                      <div class="card-image">
             <?= $this->Html->image('img1.jpg', ['alt' => 'CakePHP']) ?>
              <span class="card-title">VINO TINTO</span>
            </div>
                   <div class="card-content">
                       <p style="color: black">El vino blanco es una variedad de vino que puede oscilar entre las tonalidades amarillo pajizo, amarillo verdoso o amarillo oro.</p>
            </div>

                  
                   
                </div>
                  </div>
  
        </div>
    </div>
        <div class="col s12 m4">
        <div class="card darken-1">
            <div class="card-content white-text">
               
                <div class="card-action">
                      <div class="card-image">
             <?= $this->Html->image('mermelada.jpg', ['alt' => 'CakePHP']) ?>
              <span class="card-title">Mermelada de Mortiño</span>
            </div>
                   <div class="card-content">
                       <p style="color: black; text-justify:distribute "> 
                       Este fruto silvestre es convertido en mermelada y vino. La demanda influye para que se produzcan hasta mil botellas anuales.</p>
            </div>

                  
                    
                    
                    
                    
                    
                    
                    
                </div>
            </div>
        </div>
    </div>
        
        
        
        
         <div class="col s12 m4">
        <div class="card darken-1">
            <div class="card-content white-text">
                <div class="card-action">
                    
                    <div class="card-image">
             <?= $this->Html->image('helado1.jpg', ['alt' => 'CakePHP']) ?>
              <span class="card-title">Helado de Mortiño</span>
            </div>
                   <div class="card-content ">
                       <p  style="color: black">
                           Este producto es elaborado por mortiño es una fruta silvestre que se produce de manera orgánica en los páramos del cantón Sigchos.</p>
            </div>

                    
                    
                    
                </div>
            </div>
        </div>
    </div>
     
</div>
    
   
    
    <input type="submit" value="" />

    <footer class="page-footer Color_primP nav-extended" id="abajo_menu" >
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">EL ULTIMO INCA</h5>
                    <p class="grey-text text-lighten-4">puedes ponerte en contacto con nosotros.</p>
                      <p class="grey-text text-lighten-4">Telefono:(593) 0991868307 </p>
                       <p class="grey-text text-lighten-4"> Email: vinoelultimoinca@hotmail.com</p>
                        <p class="grey-text text-lighten-4">Facebook: Vino elultimoinca</p>
                    
                    </div>
                <div class="caption center-align">
                        
                            <h5 class="white-text">PAGINAS AMIGOS</h5>
                             <ul>
                        <li><a class="grey-text text-lighten-3" href="www.utc.edu.ec">Universidad Técnica de Cotopaxi</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">Gad Sigchos</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">Gad Cotopaxi</a></li>
                        </ul>
                        </div>
                  
                   

                </div> 
                </div>
        
               
    </footer>   
 <div class="col s13 m4">
        <div class="card darken-1 center">
            <div class="card-content white-text ">
                <span class="card-title yellow-text">EL ULTIMO INCA </span>
               
            </div>
        </div>
    </div>
</body>