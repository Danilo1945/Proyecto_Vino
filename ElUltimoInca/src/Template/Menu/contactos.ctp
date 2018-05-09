<?php


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
        <?= $this->Html->css('fonts.css') ?>
        <?= $this->Html->css('3D.css') ?>
        
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
                background: #000;

            }
            .Color_secundarioP{
                background: #000;

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
            
            /*        estilos de las redes sociales    */
            
            * {
                margin: 0;
                padding: 0;
                -webkit-box-sizing: border-box;
                -moz-box-sizing:border-box;
                box-sizing: border-box;
            }

            .social{
                position: fixed;
                left: 0;
                top: 200px;
                z-index: 2000;
            }
            
            .social ul{
                list-style: none;
            }
            
            .social ul li a {
                display: inline-block;
                color: #FFF;
                background: #000;
                padding: 10px 15px;
                text-decoration: none;
                -webkit-transition:all 700ms ease;
                -o-transition:all 700ms ease;
                transition:all 700ms ease;
            }
            
            .social ul li .icon-facebook{background:#3b5998;}
            .social ul li .icon-twitter{background:#00abf0;}
            .social ul li .icon-youtube{background:#e63117;}
            .social ul li .icon-instagram{background:#833ab4;}
            .social ul li .icon-mail{background: red;}
            
            .social ul a:hover {
                padding: 10px 30px;
                background: #000;
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

        </script>

    </head  >

    <body>

        <ul id="dropdown1" class="dropdown-content Color_primP">
            <li><?= $this->Html->link('LOGIN', ['controller' => 'Menu', 'action' => 'login']) ?> </li>
            <li class="divider"></li>
            <li><?= $this->Html->link('REGISTRARSE', ['controller' => 'Menu', 'action' => 'login']) ?> </li>

        </ul>
        <br>
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
       
        <div class="content-all">
            <div class="content-carrousel">
                <figure><?= $this->Html->image('vino1.jpg', ['alt' => 'CakePHP']) ?></figure>
                <figure><?= $this->Html->image('vino2.jpg', ['alt' => 'CakePHP']) ?></figure>
                <figure><?= $this->Html->image('vino3.jpg', ['alt' => 'CakePHP']) ?></figure>
                <figure><?= $this->Html->image('vino4.jpg', ['alt' => 'CakePHP']) ?></figure>
                <figure><?= $this->Html->image('vino5.jpg', ['alt' => 'CakePHP']) ?></figure>
                <figure><?= $this->Html->image('vino6.jpg', ['alt' => 'CakePHP']) ?></figure>
                <figure><?= $this->Html->image('vino7.jpg', ['alt' => 'CakePHP']) ?></figure>
                <figure><?= $this->Html->image('vino8.jpg', ['alt' => 'CakePHP']) ?></figure>
                <figure><?= $this->Html->image('vino9.jpg', ['alt' => 'CakePHP']) ?></figure>
                <figure><?= $this->Html->image('vino10.jpg', ['alt' => 'CakePHP']) ?></figure>
            </div>
        </div>

        <br><br><br><br><br><br><br><br><br><br><br><br>
        
        <h1 style="text-align:center;"><em>Contáctenos</em></h1>
        
        <footer class="page-footer #ffffff white" id="abajo_menu" >
            <div class="container">
                <div class="row">
                    <div class="col l6 s12">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14545.081939797094!2d-78.87574277773058!3d-0.7142569916627176!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMMKwNDInNTEuMyJTIDc4wrA1MicwMS4yIlc!5e1!3m2!1ses-419!2sec!4v1524713526700" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                    <div class="col l4 offset-l2 s12">
                        <div class = "widget" style="width: 350px">
                            <div class = "widget-head">Mensaje / Comentarios</div>
                                <div class = "widget-content">
                                    <div class = "padd">
                                        <form class="form-horizontal" action = "add_message.php" method="post">                              
                                                <div class="form-group">
                                                  <label class="col-lg-3 control-label">Nombre Completo</label>
                                                  <div class="col-lg-8">
                                                    <input name = "fullname" type="text" class="form-control" onblur="this.value=this.value.toUpperCase()" placeholder="Por favor escriba su nombre" required >
                                                  </div>
                                                </div>                                
                                                <div class="form-group">
                                                  <label class="col-lg-3 control-label">Email</label>
                                                  <div class="col-lg-8">
                                                    <input type="email"  name = "email" class="form-control" placeholder="Por favor escriba su email" required>
                                                  </div>
                                                </div>
                                                <div class="form-group">
                                                  <label class="col-lg-3 control-label">Tema</label>
                                                  <div class="col-lg-8">
                                                    <input type="text" name = "subject" onblur="this.value=this.value.toUpperCase()" class="form-control" placeholder="Tema" required>
                                                  </div>
                                                </div>
                                                <div class="form-group">
                                                  <label class="col-lg-3 control-label">Comentarios</label>
                                                  <div class="col-lg-8">
                                                    <textarea name = "message" class="form-control" onblur="this.value=this.value.toUpperCase()" rows="5" placeholder="Por favor escriba su Comentario aquí....."required></textarea>
                                                  </div>
                                                </div>
                                                <div class="form-group">
                                                  <div class="col-lg-offset-3 col-lg-8">
                                                    <button  class="btn btn-sm btn-success btn-block">Enviar</button>                                  
                                                  </div>
                                                </div>
                                        </form>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>

        </footer>
   
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
      </body>
</html>
>>>>>>> a3eecf72e2da675c4a4bd5526b1a4b29fe5802b5
