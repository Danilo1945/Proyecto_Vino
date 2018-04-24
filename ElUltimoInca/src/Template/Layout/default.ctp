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
            <div class="nav-wrapper Color_primP" >
                  
                <a href="#" class="brand-logo "  >
                    <?= $this->fetch('title') ?>
                </a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a target="_blank" href="https://book.cakephp.org/3.0/">Documentation</a></li>
                    <li><a target="_blank" href="https://api.cakephp.org/3.0/">API</a></li>
                    <li><a href="collapsible.html">JavaScript</a></li>
                </ul>
            </div>
            
            
            
            <div class="row">
                <div class="col s12">
                     <?= $this->Flash->render() ?>
                    </div>
            </div>
           
            
            
        </nav>
        
        <!--/////////////////////////////////////////////////////////////////////////a partir de aqui--> 
        <div class="menu-principal" >
          

        <div class="row" >



        <?= $this->fetch('content') ?>  <!--     ////// aqui aparecera el contenido-->


        </div>

        <!--///////////////////////////////////////////MENU QUE APARECE EN  AL APLASTAR EL BOTON MENU-->
        <ul id="slide-out" class="side-nav">
            <li><div class="user-view">
                    <div class="background">
                        <img src="images/office.jpg">
                    </div>
                    <a href="#!user"><img class="circle" src="images/yuna.jpg"></a>
                    <a href="#!name"><span class="white-text name">John Doe</span></a>
                    <a href="#!email"><span class="white-text email">jdandturk@gmail.com</span></a>
                </div></li>
            <li><a href="#!"><i class="material-icons">cloud</i>First Link With Icon</a></li>
            <li><a href="#!">Second Link</a></li>
            <li><div class="divider"></div></li>
            <li><a class="subheader">Subheader</a></li>
            <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
            <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
            <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
            <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
            <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
            <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
            <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
            <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
            <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
            <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
            <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
            <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>

        </ul>


        <!--///////////////////////////////////////////MENU QUE APARECE EN  AL APLASTAR EL BOTON MENU--> 







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

  <script>

            // Initialize collapse button
            $(".button-collapse").sideNav();
            // Initialize collapsible (uncomment the line below if you use the dropdown variation)
            //$('.collapsible').collapsible();
            
            
  
        </script> 
    </body>
</html>
