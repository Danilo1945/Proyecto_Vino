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
         <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <?= $this->Html->script('materialize.min.js') ?>
        
        <link href="https://fonts.googleapis.com/css?family=Raleway:500i|Roboto:300,400,700|Roboto+Mono" rel="stylesheet">


        <?= $this->Html->charset() ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            <?= $cakeDescription ?>
        </title>
        <!--        jquery-->


        
        
        
        
        <style>
    
    
</style>

        <script >

          
        </script>
    </head>
    <body style="background-color:#E8F6F3">


        
    <!-- Dropdown Structure -->
   

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
       <div class="row">
           <center><b><h6>Catálogo de productos</h6></b></center>
            <div class="col s12 m12" style=" height: 280px;float:left" >  <!--   inicio del columna-->
                 <div class="slider">
                    <ul class="slides" style="height:200px">
                        <li>
                            <?= $this->Html->image('carucel.jpg', ['alt' => 'CakePHP'],['width' => '100px'],
                                    ['height' => '100px']) ?>
                            <div class="caption">
                                <h4><p>El mejor vino</p>
                                    <p>de mortiño a $6.00</p></h4>
                            </div>
                        </li>
                        <li>
                            <?= $this->Html->image('carucel2.jpg', ['alt' => 'CakePHP']) ?>
                            <div class="caption">
                                <h4><p>El mejor vino</p>
                                    <p>de mortiño a $6.00</p></h4>
                            </div>
                        </li>
                        <li>
                            <?= $this->Html->image('pedido4.jpg', ['alt' => 'CakePHP']) ?>
                            <div class="caption">
                                <h4><p>Deliciosos helados</p>
                                    <p>a $0.30 la unidad</p></h4>
                            </div>
                        </li>
                    </ul>
                    
                </div>
            </div>
       
       </div>
    <div style="margin-left:10px;margin-top:127px">
    <a href="#"><?= $this->Html->image('t.png', ['title' => 'Twiter']) ?></a>
    <a href="#"><?= $this->Html->image('g.png', ['title' => 'Gmail']) ?></a>
    <a href="#"><?= $this->Html->image('y.png', ['title' => 'Youtube']) ?></a>
    <a href="#"><?= $this->Html->image('i.png', ['title' => 'Instagram']) ?></a>
    <a href="#"><?= $this->Html->image('a.png', ['title' => 'Facebook']) ?></a>
    </div>
    <div class="carousel" >
    <a class="carousel-item" href="#one!"><?= $this->Html->image('carucel2.jpg', ['alt' => 'CakePHP']) ?></a>
    <a class="carousel-item" href="#two!"><?= $this->Html->image('carucel.jpg', ['alt' => 'CakePHP']) ?></a>
    <a class="carousel-item" href="#tree!"><?= $this->Html->image('pedido4.jpg', ['alt' => 'CakePHP']) ?></a>
   </div>  
  </div>
    <script>
     $(document).ready(function(){
    $('.carousel').carousel();
  });
    </script>
    
    <footer class="page-footer Color_primP nav-extended" id="abajo_menu" >
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">EL ULTIMO INCA</h5>
                    <p class="grey-text text-lighten-4">puedes ponerte en contacto con nosotros.</p>
                </div>
                <div class="col l4 offset-l2 s12">
                    <h5 class="white-text">Paginas amigas</h5>
                    <ul>
                        <li><a class="grey-text text-lighten-3" href="www.utc.edu.ec">Universidad Técnica de Cotopaxi</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">Gad Sigchos</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">Gad Cotopaxi</a></li>

                    </ul>

                    
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                © 2018 Copyright El Ultimo Inca Todos los derechaos Reserados
                <a class="grey-text text-lighten-4 right" href="Universidad Tecnica De Cotopaxi">www.utc.edu.ec</a>
            </div>
        </div>
    </footer>                   

                
          
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
               

                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
 
    

       