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
 var instance = M.Carousel.init({
    fullWidth: true,
    indicators: true
  });

  // Or with jQuery

  $('.carousel.carousel-slider').carousel({
    fullWidth: true,
    indicators: true
  });
  
  
        </script>
    </head  >

    <body>
    <!-- Menu creado con material designer  fuente http://materializecss.com/navbar.html -->
    <!-- Dropdown Structure -->
    
     <div id="menu">
            <ul>
                <li><?= $this->Html->image('100.png', ['alt' => 'CakePHP']) ?></li>
                <li class="item-r"><?= $this->Html->link('ACER CADE..', ['controller' => 'Menu', 'action' => 'acercade']) ?> </li>
                <li class="item-r"><?= $this->Html->link('CATALOGO', ['controller' => 'Menu', 'action' => 'catalogo']) ?></li>
                <li class="item-r"><?= $this->Html->link('PEDIDOS', ['controller' => 'Menu', 'action' => 'pedidos']) ?></li>
                <li class="item-r"><?= $this->Html->link('CONTACTOS', ['controller' => 'Menu', 'action' => 'contactos']) ?></li>
                <li class="item-r"><?= $this->Html->link('MENU', ['controller' => 'Menu', 'action' => 'home']) ?></li>
            </ul>
        </div>
            
        <div class="social">
            <ul>
                <li><a href="https://www.facebook.com/vino.ultimo.inca/" target="_blank" class="icon-facebook"></a></li>
                <li><a href="http://www.twitter.com" target="_blank" class="icon-twitter"></a></li>
                <li><a href="https://www.youtube.com/watch?v=KLNCAFlpQPk" target="_blank" class="icon-youtube"></a></li>
                <li><a href="https://www.instagram.com" target="_blank" class="icon-instagram"></a></li>
                <li><a href="mailto:juan.topa63@gmail.com" class="icon-mail"></a></li>
            </ul>
        </div>


 
 <div class="col s12 m4">
  <div class="row" >
      
            <div class="col s12 m12" style=" height: 425px" >  <!--   inicio del columna-->
                <div class="slider">
                    <ul class="slides" style="height:800px">
                        <li>
                            <?= $this->Html->image('vin.jpg', ['alt' => 'CakePHP'],['width' => '100px'],
                                    ['height' => '100px']) ?>
                            <div class="caption">
                                <h3 >BIENVENIDOS</h3>
                                  <span class="card-title yellow-text">Registrate en nuestra pagina web </span>
                                  <br>
                                  <br>
                                  <a class="waves-effect waves-light #b71c1c red darken-4 btn" >Registrate</a>
                                <div class="caption left-align">
                   
                            <h5 class="light grey-text text-lighten-3"></h5>
                        </div>
                     
                    
                            </div>
                        </li>
                        <li>
                            <?= $this->Html->image('vinot.jpg', ['alt' => 'CakePHP'], ['width' => '100px'],
                        ['height' => '100px']) ?>
                            <div class="caption">
                                <h3>Vinos de Mortiño</h3>
                            </div>
        </li>
                        <li>
                            <?= $this->Html->image('socios.jpg', ['alt' => 'CakePHP'], ['width' => '100px'],
                        ['height' => '100px']) ?>
                            <div class="caption">
                                <h3>Socios</h3>
                            </div>
                                    </li>
                        
                    </ul>
                    
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
                       <p style="color: black">El vino blanco es una variedad de vino que puede oscilar entre las tonalidades amarillo pajizo de amarillo y oro.</p>
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

             <?= $this->Html->image('helados.png', ['alt' => 'CakePHP']) ?>
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

               
    </footer>   
 <div class="col s13 m4">
        <div class="card darken-1 center">
            <div class="card-content white-text ">
                <span class="card-title yellow-text">EL ULTIMO INCA </span>
               
            </div>
        </div>
    </div>
</body>
<div class="footer-copyright">
            <div class="container">
              
                <a class="grey-text text-lighten-4 right" href="Universidad Tecnica De Cotopaxi">www.utc.edu.ec</a>
            </div>
        </div>
    </footer>   
</body>

