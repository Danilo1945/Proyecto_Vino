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







    <div class="row">
        <div class="col s12 ">

            <!--feature descover-->

            <br>
           
           

    
          





              <div class="slider col s12 " style="position: relative">
                <ul class="slides" >
                    <li >
                        <?= $this->Html->image('img1.jpg', ['alt' => 'CakePHP']) ?> <!-- random image -->
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
    
   
    
    <div class="col s12 m4">
        <div class="card darken-1 center">
            <div class="card-content white-text ">
                <span class="card-title green-text">BIENVENIDOS A NUESTRO SITIO WEB</span>
                <div class="card-action">
                   
                </div>
            </div>
        </div>
    </div>
    
    
    
    
    
    
    
    <div class="row">
        
    <div class="col s12 m4">
        <div class="card darken-1">
            <div class="card-content white-text">
                <span class="card-title green-text">Vino Blanco</span>
                <div class="card-action">
                    
                    
                    
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
                  
                   
                </div>
            </div>
        </div>
    </div>
        <div class="col s12 m4">
        <div class="card darken-1">
            <div class="card-content white-text">
                <span class="card-title green-text">Vino Seco</span>
                <div class="card-action">
                   
                    
                    
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
                  
                    
                    
                    
                    
                    
                    
                    
                </div>
            </div>
        </div>
    </div>
        
        
        
        
         <div class="col s12 m4">
        <div class="card darken-1">
            <div class="card-content white-text">
                <span class="card-title green-text">Vino Tinto</span>
                <div class="card-action">
                    
                    <div class="card-image">
             <?= $this->Html->image('img1.jpg', ['alt' => 'CakePHP']) ?>
              <span class="card-title">Card Title</span>
            </div>
                   <div class="card-content ">
                       <p  style="color: black">El vino tinto​ es un tipo de vino procedente mayormente de mostos de uvas tintas, con la elaboración pertinente para conseguir la difusión de la materia colorante que contienen los hollejos de la uva</p>
            </div>
            <div class="card-action">
              <li><?= $this->Html->link('Hacer Pedido', ['controller' => 'Menu', 'action' => 'pedidos']) ?> </li>
            </div>
                    
                    
                    
                </div>
            </div>
        </div>
    </div>
     
</div>
    
    
    
        
        
        
        
        
        
        
        
    
    
        
        
                  

            
            

        
        
        
        
      

   


    
    
    
    
    
    
    
    
    
    
    
    
    
    
<<<<<<< HEAD
      <nav class="nav-extended #880e4f pink darken-4">
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
        <li class="tab"><a  href="#test2">CONTACTOS</a></li>
        <li class="tab "><a href="#test3">PEDIDOS</a></li>
         <li class="tab "><a href="#test3">CATALOGO</a></li>
        <li class="tab"><a href="#test4">ACERCA DE..</a></li>
      </ul>
    </div>
  </nav>

=======
>>>>>>> 72dd03b19918952e44dab1a02a08a6efbca113e4
    
  
  </div>
             
    
    
    
    
<<<<<<< HEAD
    <div class="row" style="height: 1000px">
     
        <div class="center">
         <img id=imgGeneral width="90px" height="100px" src="img/VINO-EL-ULTIMO-INCA.jpg"></td>
         <table  pre style="background: #21618C;  font-size: 80px;tab-size: 500px" width="70%" height="20%">
              <nav class="nav-extended #c51162 pink accent-4">
   <div class="nav-wrapper ">
      <a href="#" class="brand-logo center">BIENBENIDOS A NUSTRO SITIO WEB</a>
                     
        </div>
                  

   <ul class="tabs tabs-fixed-width tab-demo z-depth-1">
    <li class="tab"><a class="active" href="#test1">$ 1</a></li>
    <li class="tab"><a href="#test2">$ 2</a></li>
    <li class="tab"><a href="#test4">$ 3</a></li>
  </ul>
  <div id="test1" class="col s12"><p>$ 1</p>
   <table border="1">
		<tr align="center">

		<td colspan="8">
		   <img id=imgGeneral width="90px" height="100px" src="imagenes/vino.jpg"></td>
		   <tr>
				<td>Descripcion</td>
				<td>El Ultimo Inca </td>
			</tr>
			<tr>
				<td>Cantidad</td>
				<td>1</td>
			</tr>
                <a class="waves-effect waves-lighten-5 lighten-5btn"><i class="material-icons left">cloud</i>HACER PEDIDO</a>
	
		
		</table>
		<br><br>
  </div>
  <div id="test2" class="col s12"><p>$ 2</p>
       <table border="1">
		<tr align="center">

		<td colspan="8">
		  
		   <tr>
				<td>Descripcion</td>
				<td>El Ultimo Inca </td>
			</tr>
			<tr>
				<td>Cantidad</td>
				<td>1</td>
			</tr>
                <a class="waves-effect waves-lighten-5 lighten-5btn"><i class="material-icons left">cloud</i>HACER PEDIDO</a>
	
		
		</table>
		<br><br>
  </div>
  

  <div id="test4" class="col s12"><p>$ 3</p>
      <table border="1">
		<tr align="center">

		<td colspan="8">
		   <tr>
				<td>Descripcion</td>
				<td>El Ultimo Inca </td>
			</tr>
			<tr>
				<td>Cantidad</td>
				<td>1</td>
			</tr>
                <a class="waves-effect waves-lighten-5 lighten-5btn"><i class="material-icons left">cloud</i>HACER PEDIDO</a>
		</table>
		<br><br>
                
  </div>
         
    </div>
  <div class="center">
<div class="center">
              <nav class="nav-extended #c51162 pink accent-4">
   <div class="nav-wrapper ">
      <a href="#" class="brand-logo center">CONTACTANOS</a>
                     
        </div>
</div>
         <table>
        <thead>
          <tr>
              <th>NOMBRE</th>
              <th>EMAIL</th>
              <th>ASUNTO</th>
              <th>MENSAJE</th>
          </tr>
        </thead>

        <tbody>
          <tr>
           <div class="row">

      <div class="col s3">
        <!-- Grey navigation panel -->
      </div>

      <div class="col s9">
        <!-- Teal page content  -->
      </div>

    </div>
         <td><input  type="text" size="3"></td>
         <td><input  type="text" size="3"></td>
         <td><input  type="text" size="3"></td>
         <td><input  type="text" size="3"></td>
          </tr>
          <tr>
         <td><input  type="text" size="3"></td>
         <td><input  type="text" size="3"></td>
         <td><input  type="text" size="3"></td>
         <td><input  type="text" size="3"></td>
          </tr>
           <tr>
         <td><input  type="text" size="3"></td>
         <td><input  type="text" size="3"></td>
         <td><input  type="text" size="3"></td>
         <td><input  type="text" size="3"></td>
          </tr>
        </tbody>
      </table
  </div>
  <div class="center">
     <div class="card-panel teal lighten-5">
          <i class="large material-icons">location_on</i>
          <i class="large material-icons">find_in_page</i>
          <i class="large material-icons"> ondemand_video</i>
         
     </div>
  </div>
        <footer class="page-footer" id="abajo_menu" >
                <div class="container">
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
 
                        Vino El Ultimo Inca
                        Telefono:(593) 0991868307
                        Email: vinoelultimoinca@hotmail.com
                        Facebook: Vino elultimoinca
                        
                        <a class="grey-text text-lighten-4 right" href="#!">Quinticusig-Sigchos-Ecuador</a>
                    </div>
=======
    
   
    
    <input type="submit" value="" />

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
>>>>>>> 72dd03b19918952e44dab1a02a08a6efbca113e4
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

</body>