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
    
    <div>
        <style type="text/css" data-styleid="theme_fonts">
            .font_0 {font: normal normal bold 22px/1.4em 'open sans',sans-serif ;color:#891519;} 
            .font_1 {font: normal normal normal 16px/1.4em din-next-w01-light,din-next-w02-light,din-next-w10-light,sans-serif ;color:#605E5E;} 
            .font_2 {font: normal normal bold 28px/1.4em avenir-lt-w01_35-light1475496,sans-serif ;color:#2F2E2E;} 
            .font_3 {font: normal normal normal 60px/1.4em din-next-w01-light,din-next-w02-light,din-next-w10-light,sans-serif ;color:#605E5E;} 
            .font_4 {font: normal normal normal 40px/1.4em din-next-w01-light,din-next-w02-light,din-next-w10-light,sans-serif ;color:#605E5E;} 
            .font_5 {font: normal normal bold 28px/1.4em avenir-lt-w01_35-light1475496,sans-serif ;color:#2F2E2E;} 
            .font_6 {font: normal normal normal 18px/1.4em avenir-lt-w01_35-light1475496,sans-serif ;color:#2F2E2E;} 
            .font_7 {font: normal normal normal 16px/1.4em avenir-lt-w01_35-light1475496,sans-serif ;color:#605E5E;} 
            .font_8 {font: normal normal normal 14px/1.4em avenir-lt-w01_35-light1475496,sans-serif ;color:#605E5E;} 
            .font_9 {font: normal normal normal 14px/1.4em din-next-w01-light,din-next-w02-light,din-next-w10-light,sans-serif ;color:#605E5E;} 
            .font_10 {font: normal normal normal 12px/1.4em din-next-w01-light,din-next-w02-light,din-next-w10-light,sans-serif ;color:#605E5E;} 
        </style>
        <style type="text/css" data-styleid="theme_colors">
            .color_0 {color: #FFFFFF;}            .backcolor_0 {background-color: #FFFFFF;}
            .color_1 {color: #FFFFFF;}            .backcolor_1 {background-color: #FFFFFF;}
            .color_2 {color: #000000;}            .backcolor_2 {background-color: #000000;}
            .color_3 {color: #ED1C24;}            .backcolor_3 {background-color: #ED1C24;}
            .color_4 {color: #0088CB;}            .backcolor_4 {background-color: #0088CB;}
            .color_5 {color: #FFCB05;}            .backcolor_5 {background-color: #FFCB05;}
            .color_6 {color: #727272;}            .backcolor_6 {background-color: #727272;}
            .color_7 {color: #B0B0B0;}            .backcolor_7 {background-color: #B0B0B0;}
            .color_8 {color: #FFFFFF;}            .backcolor_8 {background-color: #FFFFFF;}
            .color_9 {color: #727272;}            .backcolor_9 {background-color: #727272;}
            .color_10 {color: #B0B0B0;}            .backcolor_10 {background-color: #B0B0B0;}
            .color_11 {color: #FFFFFF;}            .backcolor_11 {background-color: #FFFFFF;}
            .color_12 {color: #CCCCCC;}            .backcolor_12 {background-color: #CCCCCC;}
            .color_13 {color: #A0A09F;}            .backcolor_13 {background-color: #A0A09F;}
            .color_14 {color: #605E5E;}            .backcolor_14 {background-color: #605E5E;}
            .color_15 {color: #2F2E2E;}            .backcolor_15 {background-color: #2F2E2E;}
            .color_16 {color: #EFABAE;}            .backcolor_16 {background-color: #EFABAE;}
            .color_17 {color: #DE8084;}            .backcolor_17 {background-color: #DE8084;}
            .color_18 {color: #CE2026;}            .backcolor_18 {background-color: #CE2026;}
            .color_19 {color: #891519;}            .backcolor_19 {background-color: #891519;}
            .color_20 {color: #450B0D;}            .backcolor_20 {background-color: #450B0D;}
            .color_21 {color: #E0B1B2;}            .backcolor_21 {background-color: #E0B1B2;}
            .color_22 {color: #C18B8C;}            .backcolor_22 {background-color: #C18B8C;}
            .color_23 {color: #A25E5F;}            .backcolor_23 {background-color: #A25E5F;}
            .color_24 {color: #831517;}            .backcolor_24 {background-color: #831517;}
            .color_25 {color: #420A0C;}            .backcolor_25 {background-color: #420A0C;}
            .color_26 {color: #B1C9E6;}            .backcolor_26 {background-color: #B1C9E6;}
            .color_27 {color: #8EABCE;}            .backcolor_27 {background-color: #8EABCE;}
            .color_28 {color: #6187B5;}            .backcolor_28 {background-color: #6187B5;}
            .color_29 {color: #0C4D9C;}            .backcolor_29 {background-color: #0C4D9C;}
            .color_30 {color: #06274E;}            .backcolor_30 {background-color: #06274E;}
            .color_31 {color: #EEF0E4;}            .backcolor_31 {background-color: #EEF0E4;}
            .color_32 {color: #BEC0B6;}            .backcolor_32 {background-color: #BEC0B6;}
            .color_33 {color: #8F9089;}            .backcolor_33 {background-color: #8F9089;}
            .color_34 {color: #5F605B;}            .backcolor_34 {background-color: #5F605B;}
            .color_35 {color: #30302E;}            .backcolor_35 {background-color: #30302E;}
        </style>
      
        <style type="text/css" data-styleid="txtNew">
            .txtNew {word-wrap:break-word;text-align:start;pointer-events:none;}
            .txtNew_override-left * {text-align:left !important;}
            .txtNew_override-right * {text-align:right !important;}
            .txtNew_override-center * {text-align:center !important;}
            .txtNew_override-justify * {text-align:justify !important;}
            .txtNew > * {pointer-events:auto;}
            .txtNew li {font-style:inherit;font-weight:inherit;line-height:inherit;letter-spacing:normal;}
            .txtNew ol,
            .txtNew ul {padding-left:1.3em;padding-right:0;margin-left:0.5em;margin-right:0;line-height:normal;letter-spacing:normal;}
            .txtNew ul {list-style-type:disc;}
            .txtNew ol {list-style-type:decimal;}
            .txtNew ul ul,.txtNew ol ul {list-style-type:circle;}
            .txtNew ul ul ul,.txtNew ol ul ul {list-style-type:square;}
            .txtNew ul ol ul,.txtNew ol ol ul {list-style-type:square;}
            .txtNew ul[dir="rtl"],.txtNew ol[dir="rtl"] {padding-left:0;padding-right:1.3em;margin-left:0;margin-right:0.5em;}
            .txtNew ul[dir="rtl"] ul,.txtNew ul[dir="rtl"] ol,.txtNew ol[dir="rtl"] ul,.txtNew ol[dir="rtl"] ol {padding-left:0;padding-right:1.3em;margin-left:0;margin-right:0.5em;}
            .txtNew p {margin:0;line-height:normal;letter-spacing:normal;}
            .txtNew h1 {margin:0;line-height:normal;letter-spacing:normal;}
            .txtNew h2 {margin:0;line-height:normal;letter-spacing:normal;}
            .txtNew h3 {margin:0;line-height:normal;letter-spacing:normal;}
            .txtNew h4 {margin:0;line-height:normal;letter-spacing:normal;}
            .txtNew h5 {margin:0;line-height:normal;letter-spacing:normal;}
            .txtNew h6 {margin:0;line-height:normal;letter-spacing:normal;}
            .txtNew a {color:inherit;}</style>
        <style type="text/css" data-styleid="lb1">
            .lb1itemsContainer {position:absolute;width:100%;height:100%;white-space:nowrap;}
            .lb1itemsContainer > li:last-child {margin:0 !important;}
            .lb1[data-state~="mobileView"] 
            .lb1itemsContainer {position:absolute;width:100%;height:100%;white-space:normal;}
            .lb1 a {display:block;height:100%;}
            .lb1imageItemlink {cursor:pointer;}
            .lb1imageItemimageimage {position:static;box-shadow:#000 0 0 0;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;}</style>
        <style type="text/css" data-styleid="s_VOwPageGroupSkin"></style>
        <style type="text/css" data-styleid="wp2">.wp2_zoomedin {cursor:url(https://static.parastorage.com/services/skins/2.1229.80/images/wysiwyg/core/themes/base/cursor_zoom_out.png), url(https://static.parastorage.com/services/skins/2.1229.80/images/wysiwyg/core/themes/base/cursor_zoom_out.cur), auto;overflow:hidden;display:block;}
            .wp2_zoomedout {cursor:url(https://static.parastorage.com/services/skins/2.1229.80/images/wysiwyg/core/themes/base/cursor_zoom_in.png), url(https://static.parastorage.com/services/skins/2.1229.80/images/wysiwyg/core/themes/base/cursor_zoom_in.cur), auto;}
            .wp2link {display:block;overflow:hidden;}
            .wp2img {overflow:hidden;}
            .wp2imgimage {position:static;box-shadow:#000 0 0 0;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;}</style>
        <style type="text/css" data-styleid="ddm3">.ddm3itemsContainer {width:calc(100% - 0px);height:calc(100% - 0px);white-space:nowrap;display:inline-block;overflow:visible;position:relative;}
            .ddm3moreContainer {overflow:visible;display:inherit;white-space:nowrap;width:auto;background-color:rgba(255, 255, 255, 1);border-radius:0 0 20px 20px;  }
            .ddm3dropWrapper {z-index:99999;display:block;opacity:1;visibility:hidden;position:absolute;margin-top:7px;}
            .ddm3dropWrapper[data-dropMode="dropUp"] {margin-top:0;margin-bottom:7px;}
            .ddm3repeaterButton {height:100%;position:relative;box-sizing:border-box;display:inline-block;cursor:pointer;font:normal normal normal 14px/1.4em avenir-lt-w01_35-light1475496,sans-serif;}
            .ddm3repeaterButton[data-state~="header"] a,.ddm3repeaterButton[data-state~="header"] div {cursor:default !important;}
            .ddm3repeaterButtonlinkElement {display:inline-block;height:100%;width:100%;}
            .ddm3repeaterButton_gapper {padding:0 5px;}
            .ddm3repeaterButtonlabel {display:inline-block;padding:0 10px;color:#2F2E2E;transition:color 0.4s ease 0s;}
            .ddm3repeaterButton[data-state~="drop"] {width:100%;display:block;}
            .ddm3repeaterButton[data-state~="drop"] .ddm3repeaterButtonlabel {padding:0 .5em;}
            .ddm3repeaterButton[data-state~="over"] .ddm3repeaterButtonlabel,.ddm3repeaterButton[data-preview~="hover"] .ddm3repeaterButtonlabel {color:#0C4D9C;transition:color 0.4s ease 0s;}
            .ddm3repeaterButton[data-state~="selected"] .ddm3repeaterButtonlabel,.ddm3repeaterButton[data-preview~="active"] .ddm3repeaterButtonlabel {color:#CE2026;transition:color 0.4s ease 0s;}</style>
        <style type="text/css" data-styleid="style-illkwy24">.style-illkwy24link,.style-illkwy24svg {position:absolute;top:0;right:0;bottom:0;left:0;}
            .style-illkwy24 svg {position:absolute;top:0;right:0;bottom:0;left:0;width:100%;height:100%;margin:auto;}
            .style-illkwy24_non-scaling-stroke * {vector-effect:non-scaling-stroke;}</style>
        <style type="text/css" data-styleid="style-illkx568">.style-illkx568link,.style-illkx568svg {position:absolute;top:0;right:0;bottom:0;left:0;}
            .style-illkx568 svg {position:absolute;top:0;right:0;bottom:0;left:0;width:100%;height:100%;margin:auto;}
            .style-illkx568_non-scaling-stroke * {vector-effect:non-scaling-stroke;}</style>
   
        <style type="text/css" data-styleid="style-iltapvdh">.style-iltapvdhwrapper {min-width:180px;max-width:980px;position:absolute;width:100%;}
            .style-iltapvdh_hiddenField {display:none !important;}
            .style-iltapvdh span {color:#605E5E;float:left;font:normal 14px 'Helvetica Neue', Helvetica, sans-serif;max-width:60%;}
            .style-iltapvdh span.style-iltapvdh_success {color:#BADA55;}
            .style-iltapvdh span.style-iltapvdh_error {color:#8B0000;}
            .style-iltapvdh button,.style-iltapvdh input,.style-iltapvdh textarea {border-radius:0;    padding:5px;}
            .style-iltapvdh input,.style-iltapvdh textarea {font:normal normal normal 14px/1.4em avenir-lt-w01_35-light1475496,sans-serif;  background-color:rgba(255, 255, 255, 1);-webkit-appearance:none;-moz-appearance:none;border:1px solid rgba(160, 160, 159, 1);color:#605E5E;margin:0 0 5px;width:100%;}
            .style-iltapvdh input.style-iltapvdh_error,.style-iltapvdh textarea.style-iltapvdh_error {font:normal normal normal 14px/1.4em avenir-lt-w01_35-light1475496,sans-serif;    border:1px solid #8B0000;color:#8B0000;}
            .style-iltapvdh input::-webkit-input-placeholder,.style-iltapvdh textarea::-webkit-input-placeholder {color:#605E5E;}
            .style-iltapvdh input:-ms-input-placeholder,.style-iltapvdh textarea:-ms-input-placeholder {color:#605E5E;}
            .style-iltapvdh input::-ms-input-placeholder,.style-iltapvdh textarea::-ms-input-placeholder {color:#605E5E;}
            .style-iltapvdh input::placeholder,.style-iltapvdh textarea::placeholder {color:#605E5E;}
            .style-iltapvdh button {background-color:rgba(206, 32, 38, 1);font:normal normal normal 16px/1.4em avenir-lt-w01_35-light1475496,sans-serif ;  border:0;color:#FFFFFF;cursor:pointer;float:right;margin:0;max-width:35%;}
            .style-iltapvdh textarea {min-height:130px;resize:none;}
            .style-iltapvdh[data-state~="mobile"] input {color:#605E5E;font-size:16px;height:45px;line-height:45px;margin:0 0 15px;padding:0 5px;}
            .style-iltapvdh[data-state~="mobile"] input::-webkit-input-placeholder {color:#605E5E;font-size:16px;}
            .style-iltapvdh[data-state~="mobile"] input:-ms-input-placeholder {color:#605E5E;font-size:16px;}
            .style-iltapvdh[data-state~="mobile"] input::-ms-input-placeholder {color:#605E5E;font-size:16px;}
            .style-iltapvdh[data-state~="mobile"] input::placeholder {color:#605E5E;font-size:16px;}
            .style-iltapvdh[data-state~="mobile"] textarea {color:#605E5E;font-size:16px;height:150px;margin:0 0 10px;}
            .style-iltapvdh[data-state~="mobile"]::-webkit-input-placeholder {color:#605E5E;font-size:16px;}
            .style-iltapvdh[data-state~="mobile"]:-ms-input-placeholder {color:#605E5E;font-size:16px;}
            .style-iltapvdh[data-state~="mobile"]::-ms-input-placeholder {color:#605E5E;font-size:16px;}
            .style-iltapvdh[data-state~="mobile"]::placeholder {color:#605E5E;font-size:16px;}
            .style-iltapvdh[data-state~="right"] {direction:rtl;text-align:right;}
            .style-iltapvdh[data-state~="right"] span {float:right;}
            .style-iltapvdh[data-state~="right"] button {float:left;}
            .style-iltapvdh[data-state~="left"] {direction:ltr;text-align:left;}
            .style-iltapvdh[data-state~="left"] span {float:left;}
            .style-iltapvdh[data-state~="left"] button {float:right;}</style>
       
        <style type="text/css">.testStyles {position:absolute; display: none; z-index: 1}</style>
        <div class="testStyles"></div>
         
    </div>
   
 <script >
          
  $(document).ready(function(){
    
    $(".button-collapse").sideNav();
     $('.carousel.carousel-slider').carousel({fullWidth: true});
  });
  
      </script>
 
</head>
 
    <!-- Menu creado con material designer  fuente http://materializecss.com/navbar.html -->
<<<<<<< HEAD
        
      <nav class="nav-extended #01579b light-blue darken-4">
        <div class="nav-wrapper ">
        <a href="#" class="brand-logo center">El Ultimo Inca</a>
        <a href="#" data-activates="mobile-demo" class="button-collapse">
            <i class="material-icons">menu</i></a>
=======
     
    
      <nav class="nav-extended #880e4f pink darken-3">
          
    <div class="nav-wrapper ">
      <a href="#" class="brand-logo center">El Ultimo Inca</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
>>>>>>> 3eb5ea5d4fc1cfd8ab1d7fcb28ed74be62d852f1
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
     
  </nav>

    <div class="row" style="height: 1000px">

        <section class="strc1" id="comp-il58sepc" style="width: 980px; position: absolute; min-width: 980px; 
                 margin-left: 250px; top: 180px; height: 521px; left: 0px;">
            <div data-enable-video="true" data-bg-effect-name="" class="strc1balata" id="comp-il58sepcbalata" 
                 style="top: 0px; bottom: 0px; left: calc(0px); right: calc(980px); width: calc(980px); 
                 position: absolute; height: 100%; overflow: hidden; pointer-events: auto; 
                 clip: rect(0px, 980px, 521px, 0px);">
                <div class="bgColor" id="comp-il58sepcbalatabgcolor" style="width: 100%; height: 100%;
                     background-color: transparent; position: absolute;">
                    <div id="comp-il58sepcbalatabgcoloroverlay" class="bgColoroverlay" style="width: 00%;
                         height: 100%; position: absolute;">   
                    </div>      
                </div>
            </div>
                <div id="comp-il58sepcinlineContent" class="strc1inlineContent">
                    <div class="strc1" id="mediait2pzfvs1" style="left: calc(0px); width: 980px; 
                         position: absolute; top: 0px; height: 521px;">
                        <div data-enable-video="true" data-bg-effect-name="" class="strc1balata" id="mediait2pzfvs1balata" 
                             style="position: absolute; width: calc(980px); left: calc(0px); top: 0px; 
                             bottom: 0px; height: 100%; overflow: hidden; pointer-events: auto; 
                             clip: rect(0px, 980px, 521px, 0px);">
                            <div class="bgColor" id="mediait2pzfvs1balatabgcolor" style="width: 100%; 
                                 height: 100%; background-color: rgb(255, 255, 255); position: absolute;">
                                <div id="mediait2pzfvs1balatabgcoloroverlay" class="bgColoroverlay" 
                                     style="width: 100%; height: 100%; position: absolute;"> 
                                </div>  
                            </div>
                        </div>
                        <div id="mediait2pzfvs1inlineContent" class="strc1inlineContent" style="position: absolute;
                             width: 980px; top: 0px; bottom: 0px; left: calc((100% - 980px) * 0.5);">
                            <div data-packed="true" class="txtNew" id="comp-il58sepf" style="left: 46px; 
                                 width: 887px; position: absolute; top: 20px;">
                                <h2 class="font_2" style="line-height:1em; text-align:center;">
                                    <span style="letter-spacing:0.05em;">¡PÓNGASE EN CONTACTO CON NOSOTROS HOY!</span>
                                </h2>
                            </div>
                            <div class="style-iltapvdh" data-state="  field3Hidden field4Hidden field5Hidden  desktop left" 
                                 id="comp-il59534o" style="left: 377px; width: 556px; position: absolute; 
                                 top: 100px; height: 241px;" data-dcf-columns="4">
                                <form role="form" aria-label="contact form" novalidate="" id="comp-il59534oform-wrapper" 
                                      class="style-iltapvdhform-wrapper">
                                    <div id="comp-il59534owrapper" class="style-iltapvdhwrapper">
                                        <div>
                                            <input type="text" id="field1" required="" aria-invalid="false" name="Nombre" 
                                                   value="" class="style-iltapvdh_required" placeholder="Nombre" 
                                                   data-aid="nameField">
                                            <input type="text" id="field2" required="" aria-invalid="false" name="Email" value=""
                                                   class="style-iltapvdh_required" placeholder="Email" data-aid="emailField">
                                                   
                                            <input type="tel" id="field3" 
                                                   aria-invalid="false" name="Teléfono" value="" 
                                                   class="style-iltapvdh_hidden style-iltapvdh_hiddenField" 
                                                   placeholder="Teléfono" data-aid="phoneField">
                                            <input type="text" id="field4" aria-invalid="false" name="Dirección" 
                                                   value="" class="style-iltapvdh_hidden style-iltapvdh_hiddenField" 
                                                   placeholder="Dirección" data-aid="addressField">
                                            <input type="text" id="field5" aria-invalid="false" name="Asunto" 
                                                   value="" class="style-iltapvdh_hidden style-iltapvdh_hiddenField" 
                                                   placeholder="Asunto" data-aid="subjectField">
                                        </div>
                                        <textarea name="Mensaje" class="style-iltapvdhfieldMessage" 
                                                  placeholder="Mensaje" data-aid="messageField" 
                                                  id="comp-il59534ofieldMessage">
                                                      
                                        </textarea>
                                        <button type="submit" id="comp-il59534osubmit" class="style-iltapvdhsubmit">Send</button>
                                        <span aria-live="polite" 
                                              class="style-iltapvdh_success style-iltapvdhnotifications" 
                                              id="comp-il59534onotifications">
                                        </span>
                                    </div>
                                </form>
                            </div>
                            <div data-packed="true" class="txtNew" id="comp-it9ter4s" 
                                 style="left: 129px; width: 239px; position: absolute; top: 100px;">
                                <p class="font_7">
                                    <span class="color_18">Teléfonos</span>
                                </p>
                                <p class="font_7">Tel: 0991868307</p>
                                <p class="font_7">Fax: 032-810-555</p>
                                <p class="font_7">&nbsp;</p>
                                <p class="font_7"><span class="color_18">Email</span></p>
                                <p class="font_7"><object height="0">
                                        <a class="auto-generated-link" data-auto-recognition="true" 
                                           data-content="elultimo-inca@gmail.com" 
                                           href="mailto:elultimo-inca@gmail.com" 
                                           data-type="mail">elultimo-inca@gmail.com</a></object></p>
                                <p class="font_7">&nbsp;</p>
                                <p class="font_7"><span class="color_18">Horas de Atención</span></p>
                                <p class="font_7">Lunes - Viernes: 7,30am - 8pm
                                    <br>Sabados: 8am - 5pm
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
        </section>   
        
        <section class="strc1" id="comp-il597903" style="width: 980px; position: absolute; min-width: 980px; 
                 margin-left: 280px; top: 670px; height: 586px; left: 0px;">
            <div data-enable-video="true" data-bg-effect-name="" class="strc1balata" 
                 id="comp-il597903balata" style="top: 0px; bottom: 0px; left: calc(0px); 
                 right: calc(980px); width: calc(980px); position: absolute; height: 100%; 
                 overflow: hidden; pointer-events: auto; clip: rect(0px, 980px, 586px, 0px);">
                <div class="bgColor" id="comp-il597903balatabgcolor" style="width: 100%; height: 100%; 
                     
                     background-color: transparent; position: absolute;">
                    <div id="comp-il597903balatabgcoloroverlay" class="bgColoroverlay" 
                         style="width: 100%; height: 100%; position: absolute;">
                             
                    </div>
                       
                </div>
                    
            </div>
            <div id="comp-il597903inlineContent" class="strc1inlineContent">
                <div class="strc1" id="mediait2pzfvs13" 
                     style="left: calc(0px); width: 980px; position: absolute; top: 0px; height: 586px;">
                    <div data-enable-video="true" data-bg-effect-name="" 
                         class="strc1balata" id="mediait2pzfvs13balata" 
                         style="position: absolute; width: calc(980px); left: calc(0px); top: 0px; 
                         bottom: 0px; height: 100%; overflow: hidden; pointer-events: auto; 
                         clip: rect(0px, 980px, 586px, 0px);">
                        
                            
                    </div>
                   
                </div>
            </div>
        </section> 
                    
    </div>
    
    <div style="width: 980px; position: absolute; min-width: 980px; 
                 margin-left: 400px; top: 670px; height: 586px; left: 0px;">
   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14545.081939797094!2d-78.87574277773058!3d-0.7142569916627176!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMMKwNDInNTEuMyJTIDc4wrA1MicwMS4yIlc!5e1!3m2!1ses-419!2sec!4v1524713526700" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
   
    </div>
       
                <footer class="page-footer #01579b light-blue darken-4" id="abajo_menu" >
                <div class="container" >
                    <div class=" #01579b light-blue darken-3" >
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
    