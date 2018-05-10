<<<<<<< HEAD
<div class="hide">
    <?= $this->layout = "publico"; ?>
</div>
=======
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
       
>>>>>>> 5d185cf7f15bef57e6a1e9b59806060acfc04649












<<<<<<< HEAD
        <!--//////////////////////////////////////////////////////fin bannner-->
=======
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

            /*/// para el menu*/

            .color_negro{
                background: #000000;

            }

        </style>
        <script >

            $(document).ready(function () {
                $('.slider').slider();

                $(".button-collapse").sideNav();

                $(".button-collapse").click(function () {

                    $("#asd").css("position", "initial");
                });

               $('.carousel.carousel-slider').carousel({
    fullWidth: true,
    indicators: true
  });
 var instance = M.Carousel.init({
    fullWidth: true,
    indicators: true
  });

  // Or with jQuery

<<<<<<< HEAD
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
=======
  $('.carousel.carousel-slider').carousel({
    fullWidth: true,
    indicators: true
  });
  
  
    });
>>>>>>> 9ce97b012d05c31edb1387486bc7ce7720d9b4b0



        </script>
        <script>
           


        </script>

<<<<<<< HEAD
    </nav>

<div class="row">
            <br>
            <!--feature descover-->
              <div class="slider col s12 " style="position: relative">
                <div class="row ">
                    <div class="col s12 #37474f blue-grey darken-3 " style="height: 430px">
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
                  
        
          
=======
>>>>>>> 9ce97b012d05c31edb1387486bc7ce7720d9b4b0





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
    
    
    
    
    
    
    

    

<<<<<<< HEAD

=======
>>>>>>> 9ce97b012d05c31edb1387486bc7ce7720d9b4b0
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
<<<<<<< HEAD
                       <p style="color: black">El vino blanco es una variedad de vino que puede oscilar entre las tonalidades amarillo pajizo.</p>
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

                  
                    
                    
                    
                    
                    
                    
                    
<<<<<<< HEAD
=======
                    <div class="card-image">
                        <?= $this->Html->image('img1.jpg', ['alt' => 'CakePHP']) ?>
                        <span class="card-title">Card Title</span>
=======
                       <p style="color: black">El vino blanco es una variedad de vino que puede oscilar entre las tonalidades amarillo pajizo de amarillo y oro.</p>
            </div>

        <ul id="dropdown1" class="dropdown-content #212121 grey darken-4">
            <li><?= $this->Html->link('LOGIN', ['controller' => 'Menu', 'action' => 'login']) ?> </li>
            <li class="divider"></li>
            <li><?= $this->Html->link('REGISTRARSE', ['controller' => 'Menu', 'action' => 'login']) ?> </li>
>>>>>>> 5d185cf7f15bef57e6a1e9b59806060acfc04649




<<<<<<< HEAD



=======
         
        <nav id="asd">
            <div class="nav-wrapper #212121 grey darken-4 ">
                <?= $this->Html->image('logo250x64.png', ['alt' => 'CakePHP']) ?>
                <a href="#" data-activates="mobile-demo" class="button-collapse" id="boton_cambio"><i class="material-icons">menu</i></a>

             
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><?= $this->Html->link('Inicio', ['controller' => 'Menu', 'action' => 'home'], ['class' => 'cc']) ?> </li>
                    <li><?= $this->Html->link('Nosotros', ['controller' => 'Menu', 'action' => 'acercade']) ?> </li>
                    <li><?= $this->Html->link('Pedidos', ['controller' => 'Menu', 'action' => 'catalogo']) ?> </li>
                    <li><?= $this->Html->link('Contactos', ['controller' => 'Menu', 'action' => 'contactos']) ?> </li>
                    <li><?= $this->Html->link('Registrarse', ['controller' => 'Menu', 'action' => 'contactos']) ?> </li>
                    <li><?= $this->Html->link('Login', ['controller' => 'Menu', 'action' => 'contactos']) ?> </li>

                   
>>>>>>> 5d185cf7f15bef57e6a1e9b59806060acfc04649



<<<<<<< HEAD

        <div class="col s12 m12 ">
            <div class="caption center-align">
=======

               
                <ul class="side-nav" id="mobile-demo">
                    <li><?= $this->Html->link('Inicio', ['controller' => 'Menu', 'action' => 'home'], ['class' => 'cc']) ?> </li>
                    <li><?= $this->Html->link('Nosotros', ['controller' => 'Menu', 'action' => 'acercade']) ?> </li>
                    <li><?= $this->Html->link('Pedidos', ['controller' => 'Menu', 'action' => 'catalogo']) ?> </li>
                    <li><?= $this->Html->link('Contactos', ['controller' => 'Menu', 'action' => 'contactos']) ?> </li>
                    <li><?= $this->Html->link('Registrarse', ['controller' => 'Menu', 'action' => 'contactos']) ?> </li>
                    <li><?= $this->Html->link('Login', ['controller' => 'Menu', 'action' => 'contactos']) ?> </li>

                 
                    <li><a class="dropdown-button" href="#!" data-activates="dropdown1">MAS OPCIONES<i class="material-icons right">arrow_drop_down</i></a></li>
>>>>>>> 5d185cf7f15bef57e6a1e9b59806060acfc04649

                <h1 style="color: #F1C40F  ">PRODUCTOS </h1>
                <h5 class="light grey-text text-lighten-3 "></h5>
            </div>
<<<<<<< HEAD
            <div class="card-action">
=======


        </nav> 
 
        <div class="row ">
          
            <div class="col s12 " style=" width:1150px; height: auto;">


                <div class="carousel carousel-slider center">
                    <div class="carousel-fixed-item center">
                        <a class="btn waves-effect white grey-text darken-text-2">button</a>
>>>>>>> 9ce97b012d05c31edb1387486bc7ce7720d9b4b0
                    </div>
                    <div class="carousel-item red white-text" href="#one!">
                       
                        <?= $this->Html->image('imgBanner1000x530.png', ['alt' => 'CakePHP']) ?>
                    </div>
                    <div class="carousel-item amber white-text" href="#two!">
                        <h2>Second Panel</h2>
                        <p class="white-text">This is your second panel</p>
                    </div>
                    <div class="carousel-item green white-text" href="#three!">
                        <h2>Third Panel</h2>
                        <p class="white-text">This is your third panel</p>
                    </div>
                    <div class="carousel-item blue white-text" href="#four!">
                        <h2>Fourth Panel</h2>
                        <p class="white-text">This is your fourth panel</p>
                    </div>
<<<<<<< HEAD
=======
                  
>>>>>>> ad873fa49c24656d0fb17813f67fae6aa6e9f81d

=======
>>>>>>> 9ce97b012d05c31edb1387486bc7ce7720d9b4b0
                </div>


>>>>>>> 5d185cf7f15bef57e6a1e9b59806060acfc04649

            </div>
        </div>


<<<<<<< HEAD
                    
                    
                    

                          

=======








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
                                <p style="color: black">El vino blanco es una variedad de vino que puede oscilar entre las tonalidades amarillo pajizo de amarillo y oro, es el mejor producto.</p>
                            </div>





<<<<<<< HEAD
=======


       





    
        
        
        

        
                <div class="col s12 m12 ">
                    <div class="caption center-align">
        
                        <h1 style="color: #F1C40F  ">PRODUCTOS </h1>
                        <h5 class="light grey-text text-lighten-3 "></h5>
                    </div>
                    <div class="card-action">
        
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
                                    <p style="color: black">El vino blanco es una variedad de vino que puede oscilar entre las tonalidades amarillo pajizo de amarillo y oro, es el mejor producto.</p>
                                </div>
        
        
        
        
        
                            </div>
>>>>>>> 5d185cf7f15bef57e6a1e9b59806060acfc04649
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
<<<<<<< HEAD
                            <div class="card-content">
                                <p style="color: black; text-justify:distribute "> 
                                    Este fruto silvestre es convertido en mermelada y vino. La demanda influye para que se produzcan hasta mil botellas anuales.</p>
                            </div>
=======
                        </div>
                    </div>
>>>>>>> 9ce97b012d05c31edb1387486bc7ce7720d9b4b0
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
<<<<<<< HEAD
        </div>
    </div>

     
</div>
    
   
    
    
>>>>>>> 5d185cf7f15bef57e6a1e9b59806060acfc04649

=======
       
>>>>>>> 9ce97b012d05c31edb1387486bc7ce7720d9b4b0




<<<<<<< HEAD

=======
        <footer class="page-footer Color_primP">
            <div class="container">
                <div class="row">
                   
>>>>>>> 5d185cf7f15bef57e6a1e9b59806060acfc04649





                        </div>
                    </div>
<<<<<<< HEAD
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
=======

                   

                    <div class="row " >
                        <div class="col  s12  m12 l12 xl12 " >
                            <div class="card darken-1 Color_primP" id="abajo_menu">

                                <div class="card-content white-text">
                                    <span class="card-title c_dorado ">Como Llegar a Quinticusig-Sigchos</span>
                                    <div class="card-action" id="abajo_menu"> 
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13589.262514870908!2d-78.8755357812871!3d-0.7141739916636745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMMKwNDInNTEuMCJTIDc4wrA1MicwMC40Ilc!5e1!3m2!1ses-419!2sec!4v1525822446458" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>  
                    </div>
                    <!--///// fin mapa-->
                    <!--para los contactos-->
                    <div class="row " >
                        <div class="col  s12  m12 l12 xl12 " >
                            <div class="card darken-1 Color_primP" id="abajo_menu">

                                <div class="card-content white-text">
                                    <span class="card-title c_dorado">CONTACTOS</span>
                                    <div class="card-action" id="abajo_menu"> 
                                        

                                        <div class="row">
                                            <form class="col s12">
                                                <div class="row">
                                                    <div class="input-field col s12 m6 l6 xl6">
                                                        <i class="material-icons prefix  ">account_circle</i>
                                                        <input id="icon_prefix" type="text" class="validate ">
                                                        <label for="icon_prefix" >Nombre:</label>
                                                    </div>
                                                    <div class="input-field col s12 m6 l6 xl6">
                                                        <i class="material-icons prefix">email</i>
                                                        <input id="icon_prefix" type="text" class="validate">
                                                        <label for="icon_prefix">Email:</label>
                                                    </div>

                                                </div>

                                                <div class="row">
                                                    <div class="input-field col s12 m12 l12 xl12">
                                                        <i class="material-icons prefix " >insert_comment</i>
                                                        <input id="icon_prefix" type="text" class="validate ">
                                                        <label for="icon_prefix">Asunto:</label>
                                                    </div>
                                                </div>

                                                <div class="row">

                                                    <div class="input-field col s12 m12 l12 xl12">
                                                        <i class="material-icons prefix">mode_edit</i>
                                                        <textarea id="icon_prefix2" class="materialize-textarea"></textarea>
                                                        <label for="icon_prefix2">Mensaje</label>

                                                    </div>
                                                </div>
                                                <button class="btn waves-effect " type="submit" name="action" style=" background:#AA8100; ">Enviar
                                                    <i class="material-icons right">send</i>
                                                </button>

                                            </form>
                                        </div>
                                      

                                    </div>
                                </div>

                            </div>
                        </div>  
                    </div>

                   



>>>>>>> 5d185cf7f15bef57e6a1e9b59806060acfc04649




<<<<<<< HEAD



                        </div>
=======
                    <div class="col l6 s12 ">
                                           <h5 class="white-text">Footer Content</h5>
                        
<<<<<<< HEAD
                            <h5 class="white-text">PAGINAS AMIGOS</h5>
                             <ul>
                        <li><a class="grey-text text-lighten-3" href="www.utc.edu.ec">Universidad Técnica de Cotopaxi</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">Gad Sigchos</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">Gad Cotopaxi</a></li>
                        </ul>
=======
                        <div class="row " >
                            <div class="col  s12  m12 l12 xl12 " >
                                <div class="card darken-1 Color_primP" id="abajo_menu">

                                    <div class="card-content white-text">
                                             <span class="card-title green-text">CONTACTOS</span>-->
                                        <div class="card-action" id="abajo_menu"> 
                                           
                                            <?= $this->Html->image('logo 300x114.png', ['alt' => 'CakePHP']) ?>
                                          
                                        </div>
                                    </div>

                                </div>
                            </div>  
>>>>>>> 9ce97b012d05c31edb1387486bc7ce7720d9b4b0
                        </div>
                     
>>>>>>> 5d185cf7f15bef57e6a1e9b59806060acfc04649
                    </div>
                </div>
            </div>

<<<<<<< HEAD
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
=======

<<<<<<< HEAD
        </div>

=======
                    <div class="col l4 offset-l2 s12">
                                             <h5 class="white-text">Links</h5>-->
                       
                        <div class="row " >
                            <div class="col  s12  m12 l12 xl12 " >
                                <div class="card darken-1 Color_primP" id="abajo_menu">

                                    <div class="card-content white-text">
                                        <span class="card-title green-text">CONTACTOS</span>
                                        <div class="card-action" id="abajo_menu"> 
                                         
                                            <?= $this->Html->image('UtcSistemas300x114.png', ['alt' => 'CakePHP']) ?>
                                           
                                        </div>
                                    </div>

                                </div>
                            </div>  
                        </div>
                       
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    © 2018 Copyright El Ultimo Inca: Todos los derechos reservados
                    <a class="grey-text text-lighten-4 right" href="">Grupo desarrollo UTC</a>
                </div>
            </div>
        </footer>
>>>>>>> 5d185cf7f15bef57e6a1e9b59806060acfc04649


      




    </div>  





>>>>>>> 9ce97b012d05c31edb1387486bc7ce7720d9b4b0

