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
  });
      </script>
   
    
</head>

    
    
    
    <!-- Menu creado con material designer  fuente http://materializecss.com/navbar.html -->
     
    
      <nav class="nav-extended">
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">El Ultimo Inca</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
       
           <!-- LO QUE APARECE EN LA S PC-->
          
          <li><a href="sass.html">Inicio</a></li>
        <li><a href="badges.html">Acerca de</a></li>
        <li><a href="collapsible.html">Iniciar Sesion</a></li>
      </ul>
      
       <!-- LO QUE APARECE EN LOS MOVILES-->
      <ul class="side-nav" id="mobile-demo">
        <li><a href="sass.html">INICIO</a></li>
        <li><a href="badges.html">ACERCA DE..</a></li>
        <li><a href="collapsible.html">LOG IN</a></li>
      </ul>
    </div>
          
          <!--  LO QUE APARECE EL MENU GENERAL-->
    <div class="nav-content">
      <ul class="tabs tabs-transparent">
        <li class="tab"><a href="#test1">Inicio</a></li>
        <li class="tab"><a class="active" href="#test2">CONTACTOS</a></li>
        <li class="tab disabled"><a href="#test3">PEDIDOS</a></li>
        <li class="tab"><a href="#test4">ACERCA DE..</a></li>
      </ul>
    </div>
  </nav>
 
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
        
    
     <button type="button" class="btn">Basic</button>
<button type="button" class="btn btn-default" id="su">Default</button>
<button type="button" class="btn btn-primary">Primary</button>
<button type="button" class="btn btn-success">Success</button>
<button type="button" class="btn btn-info">Info</button>
<button type="button" class="btn btn-warning">Warning</button>
<button type="button" class="btn btn-danger">Danger</button>
<button type="button" class="btn btn-link">Link</button> 
    
    
<a class="waves-effect waves-light btn">button</a>
<a class="waves-effect waves-light btn"><i class="material-icons left">cloud</i>button</a>
<a class="waves-effect waves-light btn"><i class="material-icons right">cloud</i>button</a>
        
    
     <a class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">add</i></a>
     
    
    
    
    
    
    
    <div class="row">
    <form class="col s12">
      <div class="row">
        
        <div class="input-field col s6">
          <input id="num1" type="text" class="validate">
          <label for="last_name">Numero 1</label>
        </div>
          
      </div>
        
        
        <div class="row">
         <div class="input-field col s6">
          <input id="num2" type="text" class="validate">
          <label for="last_name">numero 2</label>
        </div>
        </div>
        
       
       
        <input type="submit" class="waves-effect waves-light btn" value="Sumar" name="as" id="asd" />
    
    </form>
  </div>
    
    
    
   <div class="slider">
    <ul class="slides">
      <li>
        <img src="https://lorempixel.com/580/250/nature/1">  random image 
        <div class="caption center-align">
          <h3>This is our big Tagline!</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="https://lorempixel.com/580/250/nature/2">  random image 
        <div class="caption left-align">
          <h3>Left Aligned Caption</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="https://lorempixel.com/580/250/nature/3">  random image 
        <div class="caption right-align">
          <h3>Right Aligned Caption</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="https://lorempixel.com/580/250/nature/4">  random image 
        <div class="caption center-align">
          <h3>This is our big Tagline!</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
    </ul>
  </div>  
    
    
    
    
    
    
           
      
      
<a class="waves-effect waves-light btn">button</a>
<a class="waves-effect waves-light btn"><i class="material-icons left">cloud</i>button</a>
<a class="waves-effect waves-light btn"><i class="material-icons right">cloud</i>button</a>





<div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <input placeholder="Placeholder" id="first_name" type="text" class="validate">
          <label for="first_name">First Name</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" type="text" class="validate">
          <label for="last_name">Last Name</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input disabled value="I am not editable" id="disabled" type="text" class="validate">
          <label for="disabled">Disabled</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate">
          <label for="email">Email</label>
        </div>
      </div>
      <div class="row">
        <div class="col s12">
          This is an inline input field:
          <div class="input-field inline">
            <input id="email" type="email" class="validate">
            <label for="email" data-error="wrong" data-success="right">Email</label>
          </div>
        </div>
      </div>
    </form>
  </div>


      <i class="material-icons">accessibility</i>
      
      <div class="card-panel">
      <span class="blue-text text-darken-2">This is a card panel with dark blue text</span>
    </div>
            
<div class="card-panel purple darken-2">This is a card panel with a teal lighten-2 class</div>




<a class="btn btn-floating pulse"><i class="material-icons">menu</i></a>
<a class="btn btn-floating btn-large pulse"><i class="material-icons">cloud</i></a>
<a class="btn btn-floating btn-large cyan pulse"><i class="material-icons">edit</i></a>


<table>
        <thead>
          <tr>
              <th>Name</th>
              <th>Item Name</th>
              <th>Item Price</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>Alvin</td>
            <td>Eclair</td>
            <td>$0.87</td>
          </tr>
          <tr>
            <td>Alan</td>
            <td>Jellybean</td>
            <td>$3.76</td>
          </tr>
          <tr>
            <td>Jonathan</td>
            <td>Lollipop</td>
            <td>$7.00</td>
          </tr>
        </tbody>
      </table>




 <a id="scale-demo" href="#!" class="btn-floating btn-large scale-transition">
    <i class="material-icons">add</i>
  </a>

   Scaled out 
  <a id="scale-demo" href="#!" class="btn-floating btn-large scale-transition scale-out">
    <i class="material-icons">add</i>
  </a>
  
  
  
  
  
  
  
<nav>
  <div class="nav-wrapper">
    <a href="" class="brand-logo">Logo</a>
    <ul id="nav-mobile" class="right hide-on-med-and-down">
      <li><a href="">sass</a></li>
      <li><a href="">sass <span class="new badge">4</span></a></li>
      <li><a href="">sass</a></li>
    </ul>
  </div>
</nav>
  
  
<ul class="collapsible" data-collapsible="accordion">
  <li>
    <div class="collapsible-header">
      <i class="material-icons">filter_drama</i>
      First
      <span class="new badge">4</span></div>
    <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
  </li>
  <li>
    <div class="collapsible-header">
      <i class="material-icons">place</i>
      Second
      <span class="badge">1</span></div>
    <div class="collapsible-body"><p>Lorem ipsum dolor sit amet.</p></div>
  </li>
</ul>
        
      
  
  
  
  <div class="row">
    <div class="col s12 m6">
      <div class="card">
        <div class="card-image">
          <img src="images/sample-1.jpg">
          <span class="card-title">Card Title</span>
          <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
        </div>
        <div class="card-content">
          <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
        </div>
      </div>
    </div>
  </div>m





