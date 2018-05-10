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

    <body style="background-color:#E8F6F3">


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
    
    <div class="row" >
         <center><b><h6></h6></b></center>
            <div class="col s12 m12" style=" height: 425px" >  <!--   inicio del columna-->
                <div class="slider">
                    <ul class="slides" style="height:200px">
                        <li>
                            <?= $this->Html->image('carucel.jpg', ['alt' => 'CakePHP'],['width' => '100px'],
                                    ['height' => '100px']) ?>
                            <div class="caption">
                                <h3>Los mejores vinos</h3>
                            </div>
                        </li>
                        <li>
                            <?= $this->Html->image('carucel2.jpg', ['alt' => 'CakePHP'], ['width' => '100px'],
                        ['height' => '100px']) ?>
                            <div class="caption">
                                <h3>Vinos Inca El Mejor</h3>
                            </div>
        </li>
                        <li>
                            <?= $this->Html->image('pedido4.jpg', ['alt' => 'CakePHP'], ['width' => '100px'],
                        ['height' => '100px']) ?>
                            <div class="caption">
                                <h3>Helados Quinticusig</h3>
                            </div>
                                    </li>
                        
                    </ul>
                    
                </div>
            </div>
    </div>
    <div class="row">
        <div class="col s12 m4">
        <div class="card darken-1">
            <div class="card-content white-text">
                <center><span class="card-title green-text">Botella de vino</span></center>
                <div class="card-action">
                      <div class="card-image">
             <?= $this->Html->image('pedido6.jpg', ['alt' => 'CakePHP']) ?>
              
            </div>
                   <div class="card-content">
                       <p style="color: black">Valor unitario: $6.00</p>
                       <p style="color: black" align="justify">Descripción: Delicioso vino procesado con selectivos frutos de calidad.</p>
            </div>
            <div class="card-action">
                <center><a class="waves-effect waves-light btn modal-trigger" href="#modal1">Hacer Pedido</a></center>
                <!-- Modal Structure -->
                <div id="modal1" class="modal bottom-sheet">
                  <div class="modal-content">
                      <form>
                          <table class="striped" style="color:black">
                              <thead>
                              
                              </thead>
                              <tbody>
                                  <tr>
                                      <td><strong>Producto</strontg></td>
                                      <td><strong>Fecha</strong></td>
                                      <td><strong>Cantidad</strong></td>
                                      <td><strong>Unidad de medida</strong></td>
                                      <td><strong>Cliente</strong></td>
                                      <td><strong>Total+iva<strong></td>
                                  </tr>
                                  <tr>
                                      <td>Botella de vino</td>
                                      <td><input placeholder="aqui va la fecha" type="date"></td>
                                      <td><input type="number" placeholder="aqui va la cantidad"></td>
                                      <td><input type="text" placeholder="unidad de medida"></td>
                                      <td><input type="text" placeholder="cliente"></td>
                                      <td><input type="text" placeholder="totalPedido"></td>
                                  </tr>
                              </tbody>
                          </table>
                          <center><button class="btn" type="submit" onclick="confirm('Esta seguro de realizar el pedido?');">Guardar</button>
                          <a href="#!" class="modal-close btn waves-effect waves-green btn-flat">Cerrar</a></center>
                      </form>
                  </div>                
                </div>
               
            </div>
           <script><!--script para modal-->
            $(document).ready(function(){
            $('.modal').modal();
            $('#modal2').modal();
            $('#modal3').modal();
            });
      </script>       
                   
                </div>
            </div>
        </div>
    </div>
         <div class="col s12 m4">
        <div class="card darken-1">
            <div class="card-content white-text">
                <center><span class="card-title green-text">Mermelada</span></center>
                <div class="card-action">
                      <div class="card-image" style="height:221px">
                          <?= $this->Html->image('pedido3.jpg', ['alt' => 'CakePHP']) ?>
               
            </div>
                   <div class="card-content">
                       <p style="color: black">Valor unitario: $2.00</p>
                       <p style="color: black;size:10px" align="justify">Descripción:Pulpa</p>
            </div>
            <div class="card-action">
                <center><a class="waves-effect waves-light btn modal-trigger" href="#modal2">Hacer Pedido</a></center>
                <!-- Modal Structure -->
                <div id="modal2" class="modal bottom-sheet">
                  <div class="modal-content">
                      <form>
                          <table class="striped" style="color:black">
                              <thead>
                                
                              </thead>
                              <tbody>
                                  <tr>
                                      <td><strong>Producto</strontg></td>
                                      <td><strong>Fecha</strong></td>
                                      <td><strong>Cantidad</strong></td>
                                      <td><strong>Unidad de medida</strong></td>
                                      <td><strong>Cliente</strong></td>
                                      <td><strong>Total+iva<strong></td>
                                  </tr>
                                  <tr>
                                      <td>Mermelada</td>
                                      <td><input placeholder="aqui va la fecha" type="date"></td>
                                      <td><input type="number" placeholder="aqui va la cantidad"></td>
                                      <td><input type="text" placeholder="unidad de medida"></td>
                                      <td><input type="text" placeholder="cliente"></td>
                                      <td><input type="text" placeholder="totalPedido"></td>
                                  </tr>
                              </tbody>
                          </table>
                          <center><button class="btn" type="submit" onclick="confirm('Esta seguro de realizar el pedido?');">Guardar</button>
                          <a href="#!" class="modal-close btn waves-effect waves-green btn-flat">Cerrar</a></center>
                      </form>
                  </div>               
                </div>
            </div>
                </div>
            </div>
        </div>
    </div>
         <div class="col s12 m4">
            <div class="card darken-1">
                <div class="card-content white-text">
                    <center><span class="card-title green-text">Helados</span></center>
                    <div class="card-action">
                          <div class="card-image" style="height:178px">
                              <?= $this->Html->image('pedido4.jpg', ['alt' => 'CakePHP']) ?>

                </div>
                       <div class="card-content">
                           <p style="color: black">Valor unitario: $0.30</p>
                           <p style="color: black;size:10px" align="justify">Descripción:Exquistos helados a base de mortiños de calidad</p>
                </div>
                    <div class="card-action">
                        <center><a class="waves-effect waves-light btn modal-trigger" href="#modal3">Hacer Pedido</a></center>
                <!-- Modal Structure -->
                <div id="modal3" class="modal bottom-sheet">
                  <div class="modal-content">
                      <form>
                          <table class="striped" style="color:black">
                              <thead>
                                  
                              </thead>
                              <tbody>
                                  <tr>
                                      <td><strong>Producto</strontg></td>
                                      <td><strong>Fecha</strong></td>
                                      <td><strong>Cantidad</strong></td>
                                      <td><strong>Unidad de medida</strong></td>
                                      <td><strong>Cliente</strong></td>
                                      <td><strong>Total+iva<strong></td>
                                  </tr>
                                  <tr>
                                      <td>Helados</td>
                                      <td><input placeholder="aqui va la fecha" type="date"></td>
                                      <td><input type="number" placeholder="aqui va la cantidad"></td>
                                      <td><input type="text" placeholder="unidad de medida"></td>
                                      <td><input type="text" placeholder="cliente"></td>
                                      <td><input type="text" placeholder="totalPedido"></td>
                                  </tr>
                              </tbody>
                          </table>
                          <center><button class="btn" type="submit" onclick="confirm('Esta seguro de realizar el pedido?');">Guardar</button>
                          <a href="#!" class="modal-close btn waves-effect waves-green btn-flat">Cerrar</a></center>
                      </form>
                  </div>               
                </div>
                    </div>
                    </div>
                </div>
            </div>
    </div>  
    </div>  
    <div class="row">
        <div class="col s12 m4">
            <div class="card darken-1">
                <div class="card-content white-text">
                    <center><span class="card-title green-text">Helados</span></center>
                    <div class="card-action">
                          <div class="card-image" style="height:178px">
                              <?= $this->Html->image('pedido4.jpg', ['alt' => 'CakePHP']) ?>

                </div>
                       <div class="card-content">
                           <p style="color: black">Valor unitario: $0.30</p>
                           <p style="color: black;size:10px" align="justify">Descripción:Exquistos helados a base de mortiños de calidad</p>
                </div>
                    <div class="card-action">
                        <center><a class="waves-effect waves-light btn modal-trigger" href="#modal3">Hacer Pedido</a></center>
                <!-- Modal Structure -->
                <div id="modal3" class="modal bottom-sheet">
                  <div class="modal-content">
                      <form>
                          <table class="striped" style="color:black">
                              <thead>
                                  
                              </thead>
                              <tbody>
                                  <tr>
                                      <td><strong>Producto</strontg></td>
                                      <td><strong>Fecha</strong></td>
                                      <td><strong>Cantidad</strong></td>
                                      <td><strong>Unidad de medida</strong></td>
                                      <td><strong>Cliente</strong></td>
                                      <td><strong>Total+iva<strong></td>
                                  </tr>
                                  <tr>
                                      <td>Helados</td>
                                      <td><input placeholder="aqui va la fecha" type="date"></td>
                                      <td><input type="number" placeholder="aqui va la cantidad"></td>
                                      <td><input type="text" placeholder="unidad de medida"></td>
                                      <td><input type="text" placeholder="cliente"></td>
                                      <td><input type="text" placeholder="totalPedido"></td>
                                  </tr>
                              </tbody>
                          </table>
                          <center><button class="btn" type="submit" onclick="confirm('Esta seguro de realizar el pedido?');">Guardar</button>
                          <a href="#!" class="modal-close btn waves-effect waves-green btn-flat">Cerrar</a></center>
                      </form>
                  </div>               
                </div>
                    </div>
                    </div>
                </div>
            </div>
    </div>
        <div class="col s12 m4">
            <div class="card darken-1">
                <div class="card-content white-text">
                    <center><span class="card-title green-text">Helados</span></center>
                    <div class="card-action">
                          <div class="card-image" style="height:178px">
                              <?= $this->Html->image('pedido4.jpg', ['alt' => 'CakePHP']) ?>

                </div>
                       <div class="card-content">
                           <p style="color: black">Valor unitario: $0.30</p>
                           <p style="color: black;size:10px" align="justify">Descripción:Exquistos helados a base de mortiños de calidad</p>
                </div>
                    <div class="card-action">
                        <center><a class="waves-effect waves-light btn modal-trigger" href="#modal3">Hacer Pedido</a></center>
                <!-- Modal Structure -->
                <div id="modal3" class="modal bottom-sheet">
                  <div class="modal-content">
                      <form>
                          <table class="striped" style="color:black">
                              <thead>
                                  
                              </thead>
                              <tbody>
                                  <tr>
                                      <td><strong>Producto</strontg></td>
                                      <td><strong>Fecha</strong></td>
                                      <td><strong>Cantidad</strong></td>
                                      <td><strong>Unidad de medida</strong></td>
                                      <td><strong>Cliente</strong></td>
                                      <td><strong>Total+iva<strong></td>
                                  </tr>
                                  <tr>
                                      <td>Helados</td>
                                      <td><input placeholder="aqui va la fecha" type="date"></td>
                                      <td><input type="number" placeholder="aqui va la cantidad"></td>
                                      <td><input type="text" placeholder="unidad de medida"></td>
                                      <td><input type="text" placeholder="cliente"></td>
                                      <td><input type="text" placeholder="totalPedido"></td>
                                  </tr>
                              </tbody>
                          </table>
                          <center><button class="btn" type="submit" onclick="confirm('Esta seguro de realizar el pedido?');">Guardar</button>
                          <a href="#!" class="modal-close btn waves-effect waves-green btn-flat">Cerrar</a></center>
                      </form>
                  </div>               
                </div>
                    </div>
                    </div>
                </div>
            </div>
    </div>
        <div class="col s12 m4">
            <div class="card darken-1">
                <div class="card-content white-text">
                    <center><span class="card-title green-text">Helados</span></center>
                    <div class="card-action">
                          <div class="card-image" style="height:178px">
                              <?= $this->Html->image('pedido4.jpg', ['alt' => 'CakePHP']) ?>

                </div>
                       <div class="card-content">
                           <p style="color: black">Valor unitario: $0.30</p>
                           <p style="color: black;size:10px" align="justify">Descripción:Exquistos helados a base de mortiños de calidad</p>
                </div>
                    <div class="card-action">
                        <center><a class="waves-effect waves-light btn modal-trigger" href="#modal3">Hacer Pedido</a></center>
                <!-- Modal Structure -->
                <div id="modal3" class="modal bottom-sheet">
                  <div class="modal-content">
                      <form>
                          <table class="striped" style="color:black">
                              <thead>
                                  
                              </thead>
                              <tbody>
                                  <tr>
                                      <td><strong>Producto</strontg></td>
                                      <td><strong>Fecha</strong></td>
                                      <td><strong>Cantidad</strong></td>
                                      <td><strong>Unidad de medida</strong></td>
                                      <td><strong>Cliente</strong></td>
                                      <td><strong>Total+iva<strong></td>
                                  </tr>
                                  <tr>
                                      <td>Helados</td>
                                      <td><input placeholder="aqui va la fecha" type="date"></td>
                                      <td><input type="number" placeholder="aqui va la cantidad"></td>
                                      <td><input type="text" placeholder="unidad de medida"></td>
                                      <td><input type="text" placeholder="cliente"></td>
                                      <td><input type="text" placeholder="totalPedido"></td>
                                  </tr>
                              </tbody>
                          </table>
                          <center><button class="btn" type="submit" onclick="confirm('Esta seguro de realizar el pedido?');">Guardar</button>
                          <a href="#!" class="modal-close btn waves-effect waves-green btn-flat">Cerrar</a></center>
                      </form>
                  </div>               
                </div>
                    </div>
                    </div>
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
    </div>

 
        
        
        
 <br>
        <footer class="page-footer Color_primP nav-extended" id="abajo_menu" >
            <div class="container">
                <div class="row">
                    <div class="col l6 s12">
                        <h5 class="white-text">EL ULTIMO INCA</h5>
                        <p class="grey-text text-lighten-4">Puedes ponerte en contacto con nosotros.</p>
                        <p class="grey-text text-lighten-4">Celular: 0991868307-0995259342</p>
                        <p class="grey-text text-lighten-4" href="mailto:aso.quinticusig@hotmail.es">E-Mail: aso.quinticusig@hotmail.es</p>
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
        <br>
                