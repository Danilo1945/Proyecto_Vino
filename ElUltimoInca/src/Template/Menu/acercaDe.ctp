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
  
 <?= $this->Html->script('jquery-3.3.1.min')?>
    <?= $this->Html->css ('materialize.min.css') ?>
    <?= $this->Html->script('materialize.min.js')?>
    <link href="https://fonts.googleapis.com/css?family=Raleway:500i|Roboto:300,400,700|Roboto+Mono" rel="stylesheet">
    
    
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>
    </title>
    <!--        jquery-->
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
 <script >
          
  $(document).ready(function(){
    
    $(".button-collapse").sideNav();
     $('.carousel.carousel-slider').carousel({fullWidth: true});
  });
  
      </script>
   
    
</head>

    
    
    
    <!-- Menu creado con material designer  fuente http://materializecss.com/navbar.html -->
     
    
      <nav class="nav-extended #880e4f pink darken-3">
    <div class="nav-wrapper ">
      <a href="#" class="brand-logo center">El Ultimo Inca</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
       
           <!-- LO QUE APARECE EN LA S PC-->
          
          <li><a href="sass.html">Inicio</a></li>
        <li><a href="badges.html">Acerca de</a></li>
        <li><a href="../menu">LOG IN</a></li>
      </ul>
      
       <!-- LO QUE APARECE EN LOS MOVILES-->
      <ul class="side-nav" id="mobile-demo">
        <li><a href="sass.html">INICIO</a></li>
        <li><a href="badges.html">ACERCA DE..</a></li>
        <li><a href="../ElUltimoInca/menu">LOG IN</a></li>
      </ul>
    </div>
          
          <!--  LO QUE APARECE EL MENU GENERAL-->
    <div class="nav-content">
      <ul class="tabs tabs-transparent">
        <li class="tab"><a  href="#test1">Inicio</a></li>
        <li class="tab"><a   href="#test2">CONTACTOS</a></li>
        <li class="tab "><a  href="#test3">PEDIDOS</a></li>
         <li class="tab "><a  href="#test3">CATALOGO</a></li>
        <li class="tab"><a class="active" href="#test4">ACERCA DE..</a></li>
      </ul>
    </div>
  </nav
    
    <div class="row" style="height: 1000px">
        
        <div class="col s9">
            
            <div class="row">
    <div class="col s12 m6">
      <div class="card #00695c teal darken-3 darken-1">
        <div class="card-content white-text">
            <center><strong><span class="card-title">MISIÓN</span></strong></>
          <p>Ser una Empresa líder en la producción y distribución de vino de mortiño, con reconocimiento en
             el mercado vinícola local y nacional, ofreciendo un producto del resultado de un proceso con altos
             estándares de calidad, y buenas prácticas de manufactura que satisfaga los paladares de los
             consumidores más exigentes.</p>
        </div>
      </div>
    </div>
              
                
            
            <div class="row">
    <div class="col s10 m6">
      <div class="card #00695c teal darken-3 darken-1">
        <div class="card-content white-text">
            <center><strong><span class="card-title">VISIÓN</span></strong></>
          <p>Posicionar sólidamente a la Empresa Ultimo Inca hasta el año 2020 dentro del mercado local y
nacional como líder y pionera en la producción de vinos de mortiño y caracterizarse por una
producción que cumpla con procesos de estricto control de calidad, teniendo un impacto positivo
en mejorar la calidad de vida de sus integrantes.</p>
        </div>
      </div>
    </div>          
</div>   
</div>  
       
          <div class="row">
    <div class="col s12 m6">
      <div class="card #00695c teal darken-3 darken-1">
        <div class="card-content white-text">
            <center><strong><span class="card-title">UBICACIÓN</span></strong></>
          <p>
La Planta de producción de Vino de Mortiño el Ultimo Inca de la Asociación de Productores y
Comercializadores Agropecuarios de Quinticusig se encuentra ubicada en la Comunidad de
Quinticusig en el cerro Guingopana, a 3000 metros de altura, pertenece al Cantón Sigchos,
Provincia Cotopaxi.</p>
        </div>
      </div>
    </div> 
                
              <div class="col s12 m6">
      <div class="card #00695c teal darken-3 darken-1">
        <div class="card-content white-text">
            <center><strong><span class="card-title">DE DONDE NACE LA FABRICA?</span></strong></>
          <p> La Asociación de Productores y Comercializadores Agropecuarios de Quinticusig nace con la
iniciativa de trabajar asociadamente en búsqueda de mejorar la economía de sus 22 socias/os 12
mujeres y 10 hombres que actualmente trabajan en un emprendimiento innovador como es la
producción de vino de mortiño.</p>
        </div>
      </div>
    </div> 
                
        </div>     
            
         
            <footer class="page-footer #880e4f pink darken-3" id="abajo_menu" >
                <div class="container" >
                    <div class=" #880e4f pink darken-3" >
                    <div class="row">
                        <div class="col l6 s10">
                            <h5 class="white-text">SOMOS:</h5>
                            <p class="grey-text text-lighten-4">Importadores de vino de Mortiño dentro y fuera de la provincia.</p>
                        </div>
                        <div class="col l4 offset-l2 s12">
                            <h5 class="white-text">CONTACTANOS EN:</h5>
                            <ul>
                                <li><a class="grey-text text-lighten-3" href="#!">FACEBOOK</a></li>
                                <li><a class="grey-text text-lighten-3" href="#!">TWITTER</a></li>
                                <li><a class="grey-text text-lighten-3" href="#!">GMAIL</a></li>
                                <li><a class="grey-text text-lighten-3" href="#!">YOUTUBE</a></li>
                            </ul> 
                        </div>
                    </div>
                </div>
                    <div class="footer-copyright">
                    <div class="container">
                        © 2018 Copyright derechos reservados    
                        <a class="grey-text text-lighten-4 right" href="#!">vino de mortiño el ultimo inca</a>
                    </div>
                </div>
                
            </footer>    
             </div>