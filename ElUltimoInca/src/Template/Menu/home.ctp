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
use Cake\Core\Configure;
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
<<<<<<< HEAD
                background:black  ;
               

            }
             .Color_men{
                background: #839192    ;
               

            }
            .Color_secundarioP{
                background: yellow  ;

=======
                background: #000;
            }
            .Color_secundarioP{
                background: #E0E0E0;
>>>>>>> 4a19444fd33b250acc68fe9f0ae9f1a55f26a281
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
<<<<<<< HEAD
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
            <br>
            <!--feature descover-->
              <div class="slider col s12 " style="position: relative">
                <div class="row ">
                    <div class="col s12 #37474f blue-grey darken-3 " style="height: 460px">
                        <br>
                        </br>
                        <br>
                        </br>
     
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h1 style="color:#FBFCFC  ">BIENVENIDOS </h1>
                    <span class="card-title yellow-text">Registrate en nuestra pagina web </span>
                              
                    <h5 class="light grey-text text-lighten-3"></h5>
                 
                    </div>
            
             </div>
            <a class="waves-effect waves-light #b71c1c red darken-4 btn"  >Registrate</a>
                  
                      </div>   
                  
        
          

                    </div>
         

    </div>
              
            </div>
        </div>  





    
   
    
    <div class="col s13 m4">
        <div class="caption center-align">
                            
                             <h1 style="color: #F1C40F  ">PRODUCTOS </h1>
                            <h5 class="light grey-text text-lighten-3 "></h5>
                        </div>
                <div class="card-action">
                   
                </div>
            </div>
        </div>
    </div>
    
    
    
    
    
    
    
=======
     <div id="menu">
            <ul>
                <li><h4 style="color: #ffd700">El Ultimo Inca</h4></li>
                <li class="item-r"><?= $this->Html->link('ACER CADE..', ['controller' => 'Menu', 'action' => 'acercade']) ?> </li>
                <li class="item-r"><?= $this->Html->link('CATALOGO', ['controller' => 'Menu', 'action' => 'catalogo']) ?></li>
                <li class="item-r"><?= $this->Html->link('PEDIDOS', ['controller' => 'Menu', 'action' => 'pedidos']) ?></li>
                <li class="item-r"><?= $this->Html->link('CONTACTOS', ['controller' => 'Menu', 'action' => 'contactos']) ?></li>
                <li class="item-r"><?= $this->Html->link('MENU', ['controller' => 'Menu', 'action' => 'home']) ?></li>
            </ul>
        </div>

    <div class="row">
        <div class="col s12 "><br>
            <div class="slider col s12 " style="position: relative">
                <ul class="slides" >
                    <li><?= $this->Html->image('img1.jpg', ['alt' => 'CakePHP']) ?> <!-- random image -->
                        <div class="caption center-align">
                            <h3>Este es nuestro gran lema!</h3>
                            <h5 class="light grey-text text-lighten-3">Aqui esta nuestro pequeño lema.</h5>
                        </div>
                    </li>
                    <li>
                        <?= $this->Html->image('img2.jpg', ['alt' => 'CakePHP']) ?> <!-- random image -->
                        <div class="caption left-align">
                            <h3>Aqui esta nuestro mejor producto</h3>
                            <h5 class="light grey-text text-lighten-3">Aqui esta nuestro pequeño lema.</h5>
                        </div>
                    </li>
                    <li>
                        <?= $this->Html->image('img3.jpg', ['alt' => 'CakePHP']) ?> <!-- random image -->
                        <div class="caption right-align">
                            <h3>Right Aligned Caption</h3>
                            <h5 class="light grey-text text-lighten-3">Aqui esta nuestro pequeño lema.</h5>
                        </div>
                    </li>
                    <li>
                        <?= $this->Html->image('img2.jpg', ['alt' => 'CakePHP']) ?> <!-- random image -->
                        <div class="caption center-align">
                            <h3>This is our big Tagline!</h3>
                            <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                        </div>
                        
                    </li>
                </ul>
            </div>
        </div>  
    </div>
>>>>>>> 4a19444fd33b250acc68fe9f0ae9f1a55f26a281
    <div class="row">
    <div class="col s12 m4">
        <div class="card darken-1">
            <div class="card-content red-text">
               
                <div class="card-action">
<<<<<<< HEAD
                    
                    
       
                      <div class="card-image">
             <?= $this->Html->image('img1.jpg', ['alt' => 'CakePHP']) ?>
              <span class="card-title">VINO TINTO</span>
            </div>
                   <div class="card-content">
                       <p style="color: black">El vino blanco es una variedad de vino que puede oscilar entre las tonalidades amarillo pajizo, amarillo verdoso o amarillo oro.</p>
            </div>

                  
                   
=======
                    <div class="card-image">
                        <?= $this->Html->image('img1.jpg', ['alt' => 'CakePHP']) ?>
                        <span class="card-title">Card Title</span>
                    </div>
                    <div class="card-content">
                        <p style="color: black">El vino blanco es una variedad de vino que puede oscilar entre las tonalidades amarillo pajizo, amarillo verdoso o amarillo oro.</p>
                    </div>
                    <div class="card-action">
                       <li><?= $this->Html->link('Hacer Pedido', ['controller' => 'Menu', 'action' => 'pedidos']) ?> </li>
                    </div>
>>>>>>> 4a19444fd33b250acc68fe9f0ae9f1a55f26a281
                </div>
                  </div>
  
        </div>
    </div>
    <div class="col s12 m4">
        <div class="card darken-1">
            <div class="card-content white-text">
               
                <div class="card-action">
<<<<<<< HEAD
                      <div class="card-image">
             <?= $this->Html->image('mermelada.jpg', ['alt' => 'CakePHP']) ?>
              <span class="card-title">Mermelada de Mortiño</span>
            </div>
                   <div class="card-content">
                       <p style="color: black; text-justify:distribute "> 
                       Este fruto silvestre es convertido en mermelada y vino. La demanda influye para que se produzcan hasta mil botellas anuales.</p>
            </div>

                  
                    
                    
                    
                    
                    
                    
                    
=======
                    <div class="card-image">
                        <?= $this->Html->image('img1.jpg', ['alt' => 'CakePHP']) ?>
                        <span class="card-title">Card Title</span>
                    </div>
                    <div class="card-content">
                       <p style="color: black; text-justify:distribute "> El vino seco es también conocido como vino de mesa y se denomina de esta manera porque, al contrario de los vinos dulces, tiene muy poca o nula cantidad de azúcar. Es principalmente determinado por su sabor, aunque factores como la acidez y alcohol también pueden influir en su percepción.</p>
                    </div>
                    <div class="card-action">
                        <li><?= $this->Html->link('Hacer Pedido', ['controller' => 'Menu', 'action' => 'pedidos']) ?> </li>
                    </div>
>>>>>>> 4a19444fd33b250acc68fe9f0ae9f1a55f26a281
                </div>
            </div>
        </div>
    </div>
    <div class="col s12 m4">
        <div class="card darken-1">
            <div class="card-content white-text">
                <div class="card-action">
                    <div class="card-image">
<<<<<<< HEAD
             <?= $this->Html->image('helados.png', ['alt' => 'CakePHP']) ?>
              <span class="card-title">Helado de Mortiño</span>
            </div>
                   <div class="card-content ">
                       <p  style="color: black">
                           Este producto es elaborado por mortiño es una fruta silvestre que se produce de manera orgánica en los páramos del cantón Sigchos.</p>
            </div>

                    
                    
                    
=======
                        <?= $this->Html->image('img1.jpg', ['alt' => 'CakePHP']) ?>
                        <span class="card-title">Card Title</span>
                    </div>
                        <div class="card-content ">
                            <p  style="color: black">El vino tinto es un tipo de vino procedente mayormente de mostos de uvas tintas, con la elaboración pertinente para conseguir la difusión de la materia colorante que contienen los hollejos de la uva</p>
                        </div>
                        <div class="card-action">
                          <li><?= $this->Html->link('Hacer Pedido', ['controller' => 'Menu', 'action' => 'pedidos']) ?> </li>
                        </div>    
>>>>>>> 4a19444fd33b250acc68fe9f0ae9f1a55f26a281
                </div>
            </div>
        </div>
    </div>
<<<<<<< HEAD
     
</div>
    
   
    
    <input type="submit" value="" />
=======
    </div>
>>>>>>> 4a19444fd33b250acc68fe9f0ae9f1a55f26a281

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
<<<<<<< HEAD
                        </ul>
                        </div>
                  
                   

                </div> 
=======
                    </ul>
>>>>>>> 4a19444fd33b250acc68fe9f0ae9f1a55f26a281
                </div>
        
               
    </footer>   
 <div class="col s13 m4">
        <div class="card darken-1 center">
            <div class="card-content white-text ">
                <span class="card-title yellow-text">EL ULTIMO INCA </span>
               
            </div>
        </div>
<<<<<<< HEAD
    </div>
</body>
=======
        <div class="footer-copyright">
            <div class="container">
                © 2018 Copyright El Ultimo Inca Todos los derechaos Reserados
                <a class="grey-text text-lighten-4 right" href="Universidad Tecnica De Cotopaxi">www.utc.edu.ec</a>
            </div>
        </div>
    </footer>   
</body>
>>>>>>> 4a19444fd33b250acc68fe9f0ae9f1a55f26a281
