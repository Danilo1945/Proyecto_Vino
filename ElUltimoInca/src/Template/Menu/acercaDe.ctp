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
    
    
    
    
    
    
    <style>

            .Color_primP{
                background: #009688;

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

        </style>
        <script >

            $(document).ready(function () {
                $('.slider').slider();

                $(".button-collapse").sideNav();



                $(".button-collapse").click(function () {

                    $("#asd").css("position", "initial");

                });
              

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

    <section class="portafolio">
		<h1>ASOCIACIÓN DE COMERCIALIZADORES AGROPECUARIOS DE QUINTICUSIG</h1>
		<div class="portafolio-container">
			<section class="portafolio-item">
				  <figure><?= $this->Html->image('vino1.jpg', ['alt' => 'CakePHP']) ?></figure>
				<section class="portafolio-text">
					<h2>MISIÓN</h2>
					<p> Ser una Empresa líder en la producción y distribución de vino de mortiño, con reconocimiento en
                                            el mercado vinícola local y nacional, ofreciendo un producto del resultado de un proceso con altos
                                            estándares de calidad, y buenas prácticas de manufactura que satisfaga los paladares de los
                                            consumidores más exigentes</p>
				</section>
			</section>
                    
			<section class="portafolio-item">
				<figure><?= $this->Html->image('vino2.jpg', ['alt' => 'CakePHP']) ?></figure>
				<section class="portafolio-text">
					<h2>VISIÓN</h2>
					<p> Posicionar sólidamente a la Empresa Ultimo Inca hasta el año 2020 dentro del mercado local y
                                            nacional como líder y pionera en la producción de vinos de mortiño y caracterizarse por una
                                            producción que cumpla con procesos de estricto control de calidad, teniendo un impacto positivo
                                            en mejorar la calidad de vida de sus integrantes.</p>
				</section>
			</section>
                    
			<section class="portafolio-item">
				<figure><?= $this->Html->image('vino3.jpg', ['alt' => 'CakePHP']) ?></figure>
				<section class="portafolio-text">
					<h2>UBICACIÓN</h2>
					<p> La Planta de producción de Vino de Mortiño el Ultimo Inca de la Asociación de Productores y
                                            Comercializadores Agropecuarios de Quinticusig se encuentra ubicada en la Comunidad de
                                            Quinticusig en el cerro Guingopana, a 3000 metros de altura, pertenece al Cantón Sigchos,
                                            Provincia Cotopaxi.</p>
				</section>
			</section>
                 
                </div>
                <center><section class="portafolio-item">
				<figure><?= $this->Html->image('vino4.jpg', ['alt' => 'CakePHP']) ?></figure>
				<section class="portafolio-text">
					<h2>LA FABRICA?</h2>
					<p> La Asociación de Productores y Comercializadores Agropecuarios de Quinticusig nace con la
                                            iniciativa de trabajar asociadamente en búsqueda de mejorar la economía de sus 22 socias/os 12
                                            mujeres y 10 hombres que actualmente trabajan en un emprendimiento innovador como es la
                                            producción de vino de mortiño.</p>
				</section>
			</section>
                    </center>
		</div>
	</section>

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
                © 2018 Copyright El Ultimo Inca
                <a class="grey-text text-lighten-4 right" href="Universidad Tecnica De Cotopaxi">www.utc.edu.ec</a>
            </div>
        </div>
    </footer>   

</body>