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
        <style type="text/css" data-styleid="hc1">
            .hc1screenWidthBackground {position:absolute;top:0;right:0;bottom:0;left:0;}
            .hc1[data-state~="fixedPosition"] {position:fixed !important;left:auto !important;z-index:50;}
            .hc1[data-state~="fixedPosition"].hc1_footer {top:auto;bottom:0;}
            .hc1bg {position:absolute;top:0;right:0;bottom:0;left:0;}
            .hc1inlineContent {position:absolute;top:0;right:0;bottom:0;left:0;}
            .hc1centeredContent {position:absolute;top:0;right:0;bottom:0;left:0;}</style>
        <style type="text/css" data-styleid="style-il43hcll">.style-il43hcllscreenWidthBackground {position:absolute;top:0;right:0;bottom:0;left:0;}
            .style-il43hcll[data-state~="fixedPosition"] {position:fixed !important;left:auto !important;z-index:50;}
            .style-il43hcll[data-state~="fixedPosition"].style-il43hcll_footer {top:auto;bottom:0;}
            .style-il43hcll_bg {position:absolute;top:0;right:0;bottom:0;left:0;background-color:rgba(47, 46, 46, 1);box-shadow:0 0 5px rgba(0, 0, 0, 0.7);  border-top:0px solid rgba(47, 46, 46, 1);border-bottom:0px solid rgba(47, 46, 46, 1);}
            .style-il43hcll[data-state~="mobileView"] .style-il43hcllbg {left:10px;right:10px;}
            .style-il43hcllbg {position:absolute;top:0px;right:0;bottom:0px;left:0;background-color:rgba(47, 46, 46, 1);border-radius:0;}
            .style-il43hcllinlineContent {position:absolute;top:0;right:0;bottom:0;left:0;}
            .style-il43hcllcenteredContent {position:absolute;top:0;right:0;bottom:0;left:0;}</style>
        <style type="text/css" data-styleid="pc1">.pc1screenWidthBackground {position:absolute;top:0;right:0;bottom:0;left:0;}
            .pc1[data-state~="fixedPosition"] {position:fixed !important;left:auto !important;z-index:50;}
            .pc1[data-state~="fixedPosition"].pc1_footer {top:auto;bottom:0;}
            .pc1bg {position:absolute;top:0;right:0;bottom:0;left:0;}
            .pc1inlineContent {position:absolute;top:0;right:0;bottom:0;left:0;}
            .pc1centeredContent {position:absolute;top:0;right:0;bottom:0;left:0;}</style>
        <style type="text/css" data-styleid="strc1">.strc1inlineContent {position:absolute;top:0;right:0;bottom:0;left:0;}
            .strc1[data-responsive] {display:-ms-grid;display:grid;-webkit-box-pack:center;-webkit-justify-content:center;justify-content:center;grid-template-columns:1fr;-ms-grid-columns:1fr;}
            .strc1[data-responsive] > .strc1inlineContent {display:-webkit-box;display:-webkit-flex;display:flex;}
            .strc1[data-responsive] > * {position:relative;grid-row-start:1;grid-column-start:1;grid-row-end:2;grid-column-end:2;-ms-grid-row-span:1;-ms-grid-column-span:1;margin:0 auto;}</style><style type="text/css" data-styleid="txtNew">.txtNew {word-wrap:break-word;text-align:start;pointer-events:none;}
            .txtNew_override-left * {text-align:left !important;}
            .txtNew_override-right * {text-align:right !important;}
            .txtNew_override-center * {text-align:center !important;}
            .txtNew_override-justify * {text-align:justify !important;}
            .txtNew > * {pointer-events:auto;}
            .txtNew li {font-style:inherit;font-weight:inherit;line-height:inherit;letter-spacing:normal;}
            .txtNew ol,.txtNew ul {padding-left:1.3em;padding-right:0;margin-left:0.5em;margin-right:0;line-height:normal;letter-spacing:normal;}
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
            .txtNew a {color:inherit;}</style><style type="text/css" data-styleid="lb1">.lb1itemsContainer {position:absolute;width:100%;height:100%;white-space:nowrap;}
            .lb1itemsContainer > li:last-child {margin:0 !important;}
            .lb1[data-state~="mobileView"] .lb1itemsContainer {position:absolute;width:100%;height:100%;white-space:normal;}
            .lb1 a {display:block;height:100%;}
            .lb1imageItemlink {cursor:pointer;}
            .lb1imageItemimageimage {position:static;box-shadow:#000 0 0 0;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;}</style><style type="text/css" data-styleid="s_VOwPageGroupSkin"></style><style type="text/css" data-styleid="wp2">.wp2_zoomedin {cursor:url(https://static.parastorage.com/services/skins/2.1229.80/images/wysiwyg/core/themes/base/cursor_zoom_out.png), url(https://static.parastorage.com/services/skins/2.1229.80/images/wysiwyg/core/themes/base/cursor_zoom_out.cur), auto;overflow:hidden;display:block;}
            .wp2_zoomedout {cursor:url(https://static.parastorage.com/services/skins/2.1229.80/images/wysiwyg/core/themes/base/cursor_zoom_in.png), url(https://static.parastorage.com/services/skins/2.1229.80/images/wysiwyg/core/themes/base/cursor_zoom_in.cur), auto;}
            .wp2link {display:block;overflow:hidden;}
            .wp2img {overflow:hidden;}
            .wp2imgimage {position:static;box-shadow:#000 0 0 0;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;}</style><style type="text/css" data-styleid="ddm3">.ddm3itemsContainer {width:calc(100% - 0px);height:calc(100% - 0px);white-space:nowrap;display:inline-block;overflow:visible;position:relative;}
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
            .ddm3repeaterButton[data-state~="selected"] .ddm3repeaterButtonlabel,.ddm3repeaterButton[data-preview~="active"] .ddm3repeaterButtonlabel {color:#CE2026;transition:color 0.4s ease 0s;}</style><style type="text/css" data-styleid="style-illkwy24">.style-illkwy24link,.style-illkwy24svg {position:absolute;top:0;right:0;bottom:0;left:0;}
            .style-illkwy24 svg {position:absolute;top:0;right:0;bottom:0;left:0;width:100%;height:100%;margin:auto;}
            .style-illkwy24_non-scaling-stroke * {vector-effect:non-scaling-stroke;}</style><style type="text/css" data-styleid="style-illkx568">.style-illkx568link,.style-illkx568svg {position:absolute;top:0;right:0;bottom:0;left:0;}
            .style-illkx568 svg {position:absolute;top:0;right:0;bottom:0;left:0;width:100%;height:100%;margin:auto;}
            .style-illkx568_non-scaling-stroke * {vector-effect:non-scaling-stroke;}</style><style type="text/css" data-styleid="style-iltdw64n">.style-iltdw64nlink,.style-iltdw64nsvg {position:absolute;top:0;right:0;bottom:0;left:0;}
            .style-iltdw64n svg {position:absolute;top:0;right:0;bottom:0;left:0;width:100%;height:100%;margin:auto;}
            .style-iltdw64n_non-scaling-stroke * {vector-effect:non-scaling-stroke;}</style><style type="text/css" data-styleid="style-il43cksw">.style-il43cksw {max-height:2000px;width:0 !important;min-width:0 !important;}
            .style-il43ckswline {border-left:1px solid rgba(255, 255, 255, 1);margin-left:-0.5px;width:100%;height:100%;}</style><style type="text/css" data-styleid="p1">.p1bg {position:absolute;top:0;right:0;bottom:0;left:0;}
            .p1[data-state~="mobileView"] .p1bg {left:10px;right:10px;}
            .p1inlineContent {position:absolute;top:0;right:0;bottom:0;left:0;}</style><style type="text/css" data-styleid="Anchor_1">.Anchor_1 {visibility:hidden;pointer-events:none;width:0 !important;}</style><style type="text/css" data-styleid="style-iltapvdh">.style-iltapvdhwrapper {min-width:180px;max-width:980px;position:absolute;width:100%;}
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
            .style-iltapvdh[data-state~="left"] button {float:right;}</style><style type="text/css" data-styleid="gm1">.gm1[data-state~="squared"],.gm1[data-state~="squared"] .gm1mapContainer {border-radius:0;}
            .gm1mapContainer {position:absolute;top:0;right:0;bottom:0;left:0;}</style><style type="text/css" data-styleid="siteBackground">.siteBackground {width:100%;position:absolute;}
            .siteBackgroundbgBeforeTransition {position:absolute;top:0;}
            .siteBackgroundbgAfterTransition {position:absolute;top:0;}</style><style type="text/css" data-styleid="loginDialog">.loginDialog {position:fixed;width:100%;height:100%;z-index:99;font-family:Arial, sans-serif;font-size:1em;color:#9C9C9C;}
            .loginDialogblockingLayer {background-color:rgba(85, 85, 85, 0.75);position:fixed;top:0;right:0;bottom:0;left:0;visibility:visible;zoom:1;overflow:auto;}
            .loginDialogdialog {background-color:rgba(170, 170, 170, 0.7);width:455px;position:fixed;padding:20px;}
            .loginDialog_wrapper {background-color:rgba(255, 255, 255, 1);padding:45px 40px 0 40px;}
            .loginDialogxButton {position:absolute;top:-14px;right:-14px;cursor:pointer;background:transparent url(https://static.parastorage.com/services/skins/2.1229.80/images/wysiwyg/core/themes/base/viewer_login_sprite.png) no-repeat right top;height:30px;width:30px;}
            .loginDialogxButton:hover {background-position:right -80px;}
            .loginDialogheader {padding-bottom:25px;line-height:30px;}
            .loginDialogfavIcon {float:left;margin:7px 7px 0 0;width:16px;height:16px;}
            .loginDialogtitle {font-size:20px;font-weight:bold;color:#555555;}
            .loginDialog[data-state~="mobile"] {position:absolute;width:100%;height:100%;z-index:99;font-family:Arial, sans-serif;font-size:1em;color:#9C9C9C;top:0;}
            .loginDialog[data-state~="mobile"] .loginDialogheader {padding-bottom:10px;line-height:30px;}
            .loginDialog[data-state~="mobile"] .loginDialogfavIcon {display:none;}
            .loginDialog[data-state~="mobile"] .loginDialogtitle {font-size:14px;}
            .loginDialog[data-state~="mobile"] .loginDialogdialog {width:260px;padding:10px;position:absolute;}
            .loginDialog[data-state~="mobile"] .loginDialog_footer {margin-top:0;padding-bottom:10px;}
            .loginDialog[data-state~="mobile"] .loginDialogcancel {font-size:14px;line-height:30px;}
            .loginDialog[data-state~="mobile"] .loginDialog_wrapper {padding:14px 12px 0 12px;}
            .loginDialog[data-state~="mobile"] .loginDialogsubmitButton {height:30px;width:100px;font-size:14px;}
            .loginDialog_forgot {text-align:left;font-size:12px;}
            .loginDialog_forgot a {color:#0198ff;border-bottom:1px solid #0198ff;}
            .loginDialog_forgot a:hover {color:#0044ff;border-bottom:1px solid #0044ff;}
            .loginDialog_error {font-size:12px;color:#d74401;text-align:right;}
            .loginDialog_footer {width:100%;margin-top:27px;padding-bottom:40px;}
            .loginDialogcancel {color:#9C9C9C;font-size:18px;text-decoration:underline;line-height:36px;}
            .loginDialogcancel:hover {color:#9c3c3c;}
            .loginDialogpasswordInput label {font-size:14px;}
            .loginDialogpasswordInput label[data-type="password"] {font-size:14px;line-height:30px;height:30px;}
            .loginDialogsubmitButton {float:right;cursor:pointer;border:solid 2px #0064a8;height:36px;width:143px;background:transparent url(https://static.parastorage.com/services/skins/2.1229.80/images/wysiwyg/core/themes/base/viewer_login_sprite.png) repeat-x right -252px;color:#ffffff;font-size:24px;font-weight:bold;box-shadow:0 1px 3px rgba(0, 0, 0, 0.5);}
            .loginDialogsubmitButton:hover {background-position:right -352px;border-color:#004286;}
            .loginDialog[data-state="normal"] .loginDialogerror {display:none;}
            .loginDialog[data-state="error"] .loginDialogerror {display:block;font-size:12px;color:#d74401;text-align:right;}
            .loginDialog[data-state="error"] .loginDialogpasswordInput {border-color:#d74401;}
            .loginDialogpasswordInput {font-size:1em;}
            .loginDialogpasswordInput label {float:none;font-size:17px;line-height:25px;color:#585858;}
            .loginDialogpasswordInput[data-state~="mobile"] label {float:none;font-size:14px;line-height:20px;color:#585858;}
            .loginDialogpasswordInputinput {padding:0 15px;width:100%;height:42px;font-size:19px;line-height:42px;color:#0198ff;margin:0 -3px;background:transparent url(https://static.parastorage.com/services/skins/2.1229.80/images/wysiwyg/core/themes/base/viewer_login_sprite.png) repeat-x right -170px;border:solid 1px #a1a1a1;box-sizing:border-box;}
            .loginDialogpasswordInput[data-state~="mobile"] .loginDialogpasswordInputinput {padding:0 15px;width:100%;height:30px;font-size:14px;line-height:30px;color:#0198ff;margin:0 -3px;background:transparent url(https://static.parastorage.com/services/skins/2.1229.80/images/wysiwyg/core/themes/base/viewer_login_sprite.png) repeat-x right -170px;border:solid 1px #a1a1a1;box-sizing:border-box;}
            .loginDialogpasswordInputinput[data-type="password"] {font-size:38px;}
            .loginDialogpasswordInput[data-state~="mobile"] .loginDialogpasswordInputinput[data-type="password"] {font-size:14px;}
            .loginDialogpasswordInputerrorMessage {display:block;font-size:12px;color:#d74401;text-align:right;height:15px;}
            .loginDialogpasswordInput:not([data-state~="invalid"]) .loginDialogpasswordInputerrorMessage {visibility:hidden;}
            .loginDialogpasswordInput[data-state~="invalid"] .loginDialogpasswordInputerrorMessage {visibility:visible;}
            .loginDialogpasswordInput[data-state~="invalid"] input {border-color:#d74401;}
            .loginDialogpasswordInput[data-state~="invalid"] .loginDialogpasswordInputinput {border-color:#ff0000;}</style><style type="text/css">.testStyles {position:absolute; display: none; z-index: 1}</style><div class="testStyles"></div></div>

    
    
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
     
  </nav>

    
    
    
    
    
    <div class="row" style="height: 1200px">
                    </br>                    </br>


        <section class="strc1" id="comp-il58sepc" style="width: 980px; position: absolute; min-width: 980px; 
                 margin-left: 280px; top: 180px; height: 521px; left: 0px;">
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
                                                   data-aid="nameField"><input type="text" id="field2" 
                                                   required="" aria-invalid="false" name="Email" value="" 
                                                   class="style-iltapvdh_required" placeholder="Email" 
                                                   data-aid="emailField"><input type="tel" id="field3" 
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
                                <p class="font_7">Tel: 032-806-668</p>
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
                        <div class="bgColor" id="mediait2pzfvs13balatabgcolor" 
                             style="width: 100%; height: 100%; background-color: rgb(238, 240, 228); position: absolute;">
                            <div id="mediait2pzfvs13balatabgcoloroverlay" class="bgColoroverlay" 
                                 style="width: 100%; height: 100%; position: absolute;">
                                     
                            </div>
                                
                        </div>
                            
                    </div>
                    <div id="mediait2pzfvs13inlineContent" class="strc1inlineContent" 
                         style="position: absolute; width: 980px; top: 0px; bottom: 0px; 
                         left: calc((100% - 980px) * 0.5);">
                        <div data-packed="true" class="txtNew" id="comp-il597lhq" 
                             style="left: 46px; width: 887px; position: absolute; top: 116px;">
                            <h6 class="font_6" style="line-height:1em; text-align:center;">
                                <span style="color:rgb(47, 46, 46);">ENCUENTRANOS:</span>
                            </h6>
                        </div>
                        <div tabindex="0" title="Google Maps" aria-label="Google Maps" 
                             class="gm1" id="comp-il598lwn" style="left: 76px; width: 827px; position: 
                             absolute; top: 232px; height: 233px;">
                            <div id="comp-il598lwnmapContainer" class="gm1mapContainer">
                                <iframe width="100%" height="100%" frameborder="0" scrolling="no" 
                                        title="Google Maps" aria-label="Google Maps" 
                                        src="https://static.parastorage.com/services/santa/1.3141.40/static/external/googleMap.html?language=pt-BR">
                                </iframe>
                            </div>
                        </div>
                        <div data-packed="true" class="txtNew" id="comp-il5bh34u" 
                             style="left: 43px; width: 890px; position: absolute; top: 180px;">
                            <p class="font_7" style="text-align:center;">SIGCHOS-QUINTICUSIG.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>          
                                      
        <div class="col s12">
             
        </div>
                
    </div>
    
    <footer class="style-il43hcll_footer style-il43hcll" data-sitewidth="980" data-fixedposition="false" 
            data-isrunninginmobile="false" data-state=" " id="SITE_FOOTER" 
            style="bottom: auto; left: 0px; width: 980px; position: absolute; min-width: 980px; 
            margin-left: 280px; top: 1238px; height: 395px;">
        <div id="SITE_FOOTERscreenWidthBackground" class="style-il43hcllscreenWidthBackground" 
             style="width: 714px; left: 0px;">
            <div class="style-il43hcll_bg">
                
            </div>
                
        </div>
        <div id="SITE_FOOTERcenteredContent" class="style-il43hcllcenteredContent" 
             style="width: 100%;"><div id="SITE_FOOTERbg" class="style-il43hcllbg">
                 
            </div>
            <div id="SITE_FOOTERinlineContent" class="style-il43hcllinlineContent">
                <div data-packed="true" class="txtNew" id="comp-il5cnn5z" 
                     style="left: 47px; width: 217px; position: absolute; top: 196px;">
                    <p class="font_8">
                        <span class="color_13">
                            Tenemos mas de 30 años d servicio con nuestro personal capacitados en el exterior.
                        </span>
                    </p>
                </div>
                <div data-packed="true" class="txtNew" id="comp-il5cp0hs" 
                     style="left: 683px; width: 252px; position: absolute; top: 146px;">
                    <h6 class="font_6"><span style="color:rgb(160, 160, 159); letter-spacing:0.05em;">VISÍTANOS</span></h6>
                </div>
                <div data-packed="true" class="txtNew" id="comp-il5cr9td" 
                     style="left: 47px; width: 252px; position: absolute; top: 146px;">
                    <h6 class="font_6">
                        <span style="color:rgb(160, 160, 159); letter-spacing:0.05em;">
                            MÁS DE 30 AÑOS DE EXPERIENCIA
                        </span>
                    </h6>
                </div>
                <div data-packed="true" class="txtNew" id="comp-il5csysb" 
                     style="left: 368px; width: 251px; position: absolute; top: 146px;">
                    <h6 class="font_6">
                        <span class="color_13">
                            <span style="letter-spacing:0.05em;">
                                NUESTROS SERVICIOS
                            </span>
                                
                        </span>
                    </h6>
                </div>
                <div data-packed="true" class="txtNew" id="comp-il5csysr" 
                     style="left: 368px; width: 251px; position: absolute; top: 174px;">
                    <p class="font_8">- Vinos</p>

                    <p class="font_8">- Mermelada</p>   
                </div>
                <div data-hide-prejs="true" class="lb1" id="comp-il5d17p8" 
                     style="left: 46px; width: 174px; position: absolute; top: 292px; height: 24px;">
                    <ul aria-label="Social bar" id="comp-il5d17p8itemsContainer" class="lb1itemsContainer">
                        <li class="lb1imageItem" id="comp-il5d17p80image" 
                            style="width: 24px; height: 24px; margin-bottom: 0px; margin-right: 6px; display: inline-block;">
                            <a href="https://www.facebook.com/wix" target="_blank" data-content="https://www.facebook.com/wix" 
                               data-type="external" rel="nofollow" id="comp-il5d17p80imagelink" class="lb1imageItemlink">
                                <div data-image-info="{&quot;imageData&quot;:{&quot;link&quot;:{
                                     &quot;type&quot;:&quot;ExternalLink&quot;,&quot;id&quot;:&quot;dataItem-il5d17pr1&quot;,
                                     &quot;metaData&quot;:{&quot;isPreset&quot;:true,&quot;schemaVersion&quot;:&quot;1.0&quot;,
                                     &quot;isHidden&quot;:false},&quot;url&quot;:&quot;https://www.facebook.com/wix&quot;,&quot;target&quot;:
                                     &quot;_blank&quot;},&quot;type&quot;:&quot;Image&quot;,&quot;id&quot;:&quot;dataItem-il5d17pr&quot;,
                                     &quot;metaData&quot;:{&quot;isPreset&quot;:true,&quot;schemaVersion&quot;:&quot;2.0&quot;,
                                     &quot;isHidden&quot;:false},&quot;title&quot;:&quot;Facebook Social Icon&quot;,&quot;uri&quot;:
                                     &quot;e316f544f9094143b9eac01f1f19e697.png&quot;,&quot;description&quot;:&quot;&quot;,
                                     &quot;width&quot;:200,&quot;height&quot;:200,&quot;alt&quot;:&quot;Facebook Social Icon&quot;},
                                     &quot;displayMode&quot;:&quot;fill&quot;}" data-style="position:absolute;width:24;height:24" 
                                     class="lb1imageItemimage" id="comp-il5d17p80imageimage" 
                                     style="width: 24px; height: 24px; position: absolute;">
                                    <img id="comp-il5d17p80imageimageimage" alt="Facebook Social Icon" data-type="image" 
                                         src="https://static.wixstatic.com/media/e316f544f9094143b9eac01f1f19e697.png/v1/fill/w_24,h_24,al_c,usm_0.66_1.00_0.01/e316f544f9094143b9eac01f1f19e697.png" 
                                         style="width: 24px; height: 24px; object-fit: cover;">
                                </div>
                            </a>
                        </li>
                        <li class="lb1imageItem" id="comp-il5d17p81image" style="width: 24px; height: 24px; margin-bottom: 0px; margin-right: 6px; display: 
                            inline-block;"><a href="https://twitter.com/wix" target="_blank" data-content="https://twitter.com/wix" 
                             data-type="external" rel="nofollow" id="comp-il5d17p81imagelink" class="lb1imageItemlink">
                                <div data-image-info="{&quot;imageData&quot;:{&quot;link&quot;:{&quot;type&quot;:&quot;ExternalLink&quot;,
                                     &quot;id&quot;:&quot;dataItem-il5d17py1&quot;,&quot;metaData&quot;:{&quot;isPreset&quot;:true,
                                     &quot;schemaVersion&quot;:&quot;1.0&quot;,&quot;isHidden&quot;:false},&quot;url&quot;:&quot;
                                     https://twitter.com/wix&quot;,&quot;target&quot;:&quot;_blank&quot;},&quot;type&quot;:&quot;
                                     Image&quot;,&quot;id&quot;:&quot;dataItem-il5d17py&quot;,&quot;metaData&quot;:{&quot;isPreset&quot;:
                                     true,&quot;schemaVersion&quot;:&quot;2.0&quot;,&quot;isHidden&quot;:false},&quot;title&quot;:&quot;
                                     Twitter Social Icon&quot;,&quot;uri&quot;:&quot;9c4b521dd2404cd5a05ed6115f3a0dc8.png&quot;,&quot;
                                     description&quot;:&quot;&quot;,&quot;width&quot;:200,&quot;height&quot;:200,&quot;alt&quot;:&quot;
                                     Twitter Social Icon&quot;},&quot;displayMode&quot;:&quot;fill&quot;}" data-style="position:absolute;
                                     width:24;height:24" class="lb1imageItemimage" id="comp-il5d17p81imageimage" 
                                     style="width: 24px; height: 24px; position: absolute;">
                                    <img id="comp-il5d17p81imageimageimage" alt="Twitter Social Icon" data-type="image" 
                                         src="https://static.wixstatic.com/media/9c4b521dd2404cd5a05ed6115f3a0dc8.png/v1/fill/w_24,h_24,al_c,usm_0.66_1.00_0.01/9c4b521dd2404cd5a05ed6115f3a0dc8.png" 
                                         style="width: 24px; height: 24px; object-fit: cover;">
                                </div>
                            </a>
                        </li>
                        <li class="lb1imageItem" id="comp-il5d17p82image" 
                            style="width: 24px; height: 24px; margin-bottom: 0px; margin-right: 6px; display: inline-block;">
                            <a href="https://plus.google.com/+Wix" target="_blank" data-content="https://plus.google.com/+Wix" 
                               data-type="external" rel="nofollow" id="comp-il5d17p82imagelink" class="lb1imageItemlink">
                                <div data-image-info="{&quot;imageData&quot;:{&quot;link&quot;:{&quot;type&quot;:&quot;ExternalLink&quot;,
                                     &quot;id&quot;:&quot;dataItem-im0d6g2g&quot;,&quot;metaData&quot;:{&quot;isPreset&quot;:true,
                                     &quot;schemaVersion&quot;:&quot;1.0&quot;,&quot;isHidden&quot;:false},&quot;url&quot;:&quot;
                                     https://plus.google.com/+Wix&quot;,&quot;target&quot;:&quot;_blank&quot;},&quot;type&quot;:&quot;
                                     Image&quot;,&quot;id&quot;:&quot;dataItem-il5d17py2&quot;,&quot;metaData&quot;:{&quot;isPreset&quot;:
                                     true,&quot;schemaVersion&quot;:&quot;2.0&quot;,&quot;isHidden&quot;:false},&quot;title&quot;:&quot;
                                     Google+ Social Icon&quot;,&quot;uri&quot;:&quot;74d327d3628e4f14800301f1c61013b0.png&quot;,&quot;
                                     width&quot;:200,&quot;height&quot;:201,&quot;alt&quot;:&quot;Google+ Social Icon&quot;},&quot;
                                     displayMode&quot;:&quot;fill&quot;}" data-style="position:absolute;width:24;height:24" 
                                     class="lb1imageItemimage" id="comp-il5d17p82imageimage" 
                                     style="width: 24px; height: 24px; position: absolute;">
                                    <img id="comp-il5d17p82imageimageimage" alt="Google+ Social Icon" data-type="image" 
                                         src="https://static.wixstatic.com/media/74d327d3628e4f14800301f1c61013b0.png/v1/fill/w_24,h_24,al_c,usm_0.66_1.00_0.01/74d327d3628e4f14800301f1c61013b0.png" 
                                         style="width: 24px; height: 24px; object-fit: cover;">
                                </div>
                            </a>
                        </li>
                        <li class="lb1imageItem" id="comp-il5d17p83image" 
                            style="width: 24px; height: 24px; margin-bottom: 0px; margin-right: 6px; display: inline-block;">
                            <a href="https://www.youtube.com/user/Wix" target="_blank" 
                               data-content="https://www.youtube.com/user/Wix" 
                               data-type="external" rel="nofollow" id="comp-il5d17p83imagelink" class="lb1imageItemlink">
                                <div data-image-info="{&quot;imageData&quot;:{&quot;link&quot;:{&quot;type&quot;:
                                     &quot;ExternalLink&quot;,&quot;id&quot;:&quot;dataItem-il5d17pz1&quot;,&quot;metaData&quot;:{
                                     &quot;isPreset&quot;:true,&quot;schemaVersion&quot;:&quot;1.0&quot;,&quot;isHidden&quot;:false},
                                     &quot;url&quot;:&quot;https://www.youtube.com/user/Wix&quot;,&quot;target&quot;:&quot;_blank&quot;},
                                     &quot;type&quot;:&quot;Image&quot;,&quot;id&quot;:&quot;dataItem-il5d17pz&quot;,&quot;metaData&quot;:{
                                     &quot;isPreset&quot;:true,&quot;schemaVersion&quot;:&quot;1.0&quot;,&quot;isHidden&quot;:false},
                                     &quot;title&quot;:&quot;YouTube Social  Icon&quot;,&quot;uri&quot;:&quot;a1b09fe8b7f04378a9fe076748ad4a6a.png&quot;,
                                     &quot;description&quot;:&quot;&quot;,&quot;width&quot;:200,&quot;height&quot;:200,&quot;alt&quot;:
                                     &quot;YouTube Social  Icon&quot;},&quot;displayMode&quot;:&quot;fill&quot;}" 
                                     data-style="position:absolute;width:24;height:24" class="lb1imageItemimage" id="comp-il5d17p83imageimage" 
                                     style="width: 24px; height: 24px; position: absolute;"><img id="comp-il5d17p83imageimageimage" 
                                     alt="YouTube Social  Icon" data-type="image" src="https://static.wixstatic.com/media/a1b09fe8b7f04378a9fe076748ad4a6a.png/v1/fill/w_24,h_24,al_c,usm_0.66_1.00_0.01/a1b09fe8b7f04378a9fe076748ad4a6a.png" 
                                     style="width: 24px; height: 24px; object-fit: cover;">
                                </div>
                            </a>
                        </li>
                        <li class="lb1imageItem" id="comp-il5d17p84image" 
                            style="width: 24px; height: 24px; margin-bottom: 0px; margin-right: 6px; display: inline-block;">
                            <a href="https://www.pinterest.com/wixcom/" target="_blank" data-content="https://www.pinterest.com/wixcom/" 
                               data-type="external" rel="nofollow" id="comp-il5d17p84imagelink" class="lb1imageItemlink">
                                <div data-image-info="{&quot;imageData&quot;:{&quot;link&quot;:{&quot;type&quot;:&quot;ExternalLink&quot;,
                                    &quot;id&quot;:&quot;dataItem-il5d17q01&quot;,&quot;metaData&quot;:{&quot;isPreset&quot;:true,
                                    &quot;schemaVersion&quot;:&quot;1.0&quot;,&quot;isHidden&quot;:false},&quot;url&quot;:&quot;
                                    https://www.pinterest.com/wixcom/&quot;,&quot;target&quot;:&quot;_blank&quot;},
                                    &quot;type&quot;:&quot;Image&quot;,&quot;id&quot;:&quot;dataItem-il5d17q0&quot;,&quot;metaData&quot;:{
                                    &quot;isPreset&quot;:true,&quot;schemaVersion&quot;:&quot;1.0&quot;,&quot;isHidden&quot;:false},
                                    &quot;title&quot;:&quot;Pinterest Social Icon&quot;,&quot;uri&quot;:&quot;28e77d0b179d4121891d847ed43de6cc.png&quot;,
                                    &quot;description&quot;:&quot;&quot;,&quot;width&quot;:200,&quot;height&quot;:200,&quot;alt&quot;:&quot;
                                    Pinterest Social Icon&quot;},&quot;displayMode&quot;:&quot;fill&quot;}" 
                                    data-style="position:absolute;width:24;height:24" class="lb1imageItemimage" id="comp-il5d17p84imageimage" 
                                    style="width: 24px; height: 24px; position: absolute;">
                                    <img id="comp-il5d17p84imageimageimage" alt="Pinterest Social Icon" data-type="image" 
                                         src="https://static.wixstatic.com/media/28e77d0b179d4121891d847ed43de6cc.png/v1/fill/w_24,h_24,al_c,usm_0.66_1.00_0.01/28e77d0b179d4121891d847ed43de6cc.png" 
                                         style="width: 24px; height: 24px; object-fit: cover;">
                                </div>
                            </a>
                        </li>
                        <li class="lb1imageItem" id="comp-il5d17p85image" 
                            style="width: 24px; height: 24px; margin-bottom: 0px; margin-right: 6px; display: inline-block;">
                            <a href="https://instagram.com/wix/" target="_blank" data-content="https://instagram.com/wix/" 
                               data-type="external" rel="nofollow" id="comp-il5d17p85imagelink" class="lb1imageItemlink">
                                <div data-image-info="{&quot;imageData&quot;:{&quot;link&quot;:{&quot;type&quot;:&quot;ExternalLink&quot;,
                                     &quot;id&quot;:&quot;dataItem-il5d17q03&quot;,&quot;metaData&quot;:{&quot;isPreset&quot;:true,
                                     &quot;schemaVersion&quot;:&quot;1.0&quot;,&quot;isHidden&quot;:false},&quot;url&quot;:&quot;
                                     https://instagram.com/wix/&quot;,&quot;target&quot;:&quot;_blank&quot;},&quot;type&quot;:&quot;
                                     Image&quot;,&quot;id&quot;:&quot;dataItem-il5d17q02&quot;,&quot;metaData&quot;:{&quot;isPreset&quot;:
                                     true,&quot;schemaVersion&quot;:&quot;1.0&quot;,&quot;isHidden&quot;:false},&quot;title&quot;:&quot;
                                     Instagram Social Icon&quot;,&quot;uri&quot;:&quot;fb5d18fdfff64a56a7e136d2016a1b7b.png&quot;,
                                     &quot;description&quot;:&quot;&quot;,&quot;width&quot;:200,&quot;height&quot;:200,&quot;alt&quot;:
                                     &quot;Instagram Social Icon&quot;},&quot;displayMode&quot;:&quot;fill&quot;}" 
                                     data-style="position:absolute;width:24;height:24" class="lb1imageItemimage" id="comp-il5d17p85imageimage" 
                                     style="width: 24px; height: 24px; position: absolute;">
                                    <img id="comp-il5d17p85imageimageimage" alt="Instagram Social Icon" data-type="image" 
                                         src="https://static.wixstatic.com/media/fb5d18fdfff64a56a7e136d2016a1b7b.png/v1/fill/w_24,h_24,al_c,usm_0.66_1.00_0.01/fb5d18fdfff64a56a7e136d2016a1b7b.png" 
                                         style="width: 24px; height: 24px; object-fit: cover;">
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <section class="strc1" id="comp-il5d4tq2" 
                         style="width: 980px; position: absolute; min-width: 980px; margin-left: 0px; top: 353px; height: 42px; left: 0px;">
                    <div data-enable-video="true" data-bg-effect-name="" class="strc1balata" id="comp-il5d4tq2balata" 
                         style="top: 0px; bottom: 0px; left: calc(0px); right: calc(980px); width: calc(980px); position: absolute; height: 100%; overflow: hidden; pointer-events: auto; clip: rect(0px, 980px, 42px, 0px);">
                        <div class="bgColor" id="comp-il5d4tq2balatabgcolor" style="width: 100%; height: 100%; 
                             background-color: transparent; position: absolute;">
                            <div id="comp-il5d4tq2balatabgcoloroverlay" 
                                 class="bgColoroverlay" style="width: 100%; height: 100%; position: absolute;">
                                     
                            </div>
                                
                        </div>
                            
                    </div>
                    <div id="comp-il5d4tq2inlineContent" class="strc1inlineContent">
                        <div class="strc1" id="mediait2pzfvm7" 
                             style="left: calc(0px); width: 980px; position: absolute; top: 0px; height: 42px;">
                            <div data-enable-video="true" data-bg-effect-name="" class="strc1balata" id="mediait2pzfvm7balata" 
                                 style="position: absolute; width: calc(980px); left: calc(0px); top: 0px; bottom: 0px; height: 
                                 100%; overflow: hidden; pointer-events: auto; clip: rect(0px, 980px, 42px, 0px);">
                                <div class="bgColor" id="mediait2pzfvm7balatabgcolor" style="width: 100%; height: 100%; 
                                     background-color: rgb(36, 35, 35); position: absolute;">
                                    <div id="mediait2pzfvm7balatabgcoloroverlay" class="bgColoroverlay" 
                                         style="width: 100%; height: 100%; position: absolute;">
                                             
                                    </div>
                                        
                                </div>
                                    
                            </div>
                            <div id="mediait2pzfvm7inlineContent" class="strc1inlineContent" 
                                 style="position: absolute; width: 980px; top: 0px; bottom: 0px; left: calc((100% - 980px) * 0.5);">
                                <div data-packed="true" class="txtNew" id="comp-il5d5xvj" 
                                     style="left: 156px; width: 688px; position: absolute; top: 12px;">
                                    <p class="font_8" style="text-align:center;">
                                        <span class="color_13">© 2018&nbsp;by El-Ultimo-Inca</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="strc1" id="comp-il9hw1uv" 
                         style="width: 980px; position: absolute; min-width: 980px; margin-left: 0px; top: 0px; height: 100px; left: 0px;">
                    <div data-enable-video="true" data-bg-effect-name="" class="strc1balata" id="comp-il9hw1uvbalata" 
                         style="top: 0px; bottom: 0px; left: calc(0px); right: calc(980px); width: calc(980px); position: absolute; 
                         height: 100%; overflow: hidden; pointer-events: auto; clip: rect(0px, 980px, 100px, 0px);">
                        <div class="bgColor" id="comp-il9hw1uvbalatabgcolor" style="width: 100%; height: 100%; 
                             background-color: transparent; position: absolute;">
                            <div id="comp-il9hw1uvbalatabgcoloroverlay" class="bgColoroverlay" 
                                 style="width: 100%; height: 100%; position: absolute;">
                                     
                            </div>
                                
                        </div>
                            
                    </div>
                    <div id="comp-il9hw1uvinlineContent" class="strc1inlineContent">
                        <div class="strc1" id="mediait2pzfvn5" 
                             style="left: calc(0px); width: 980px; position: absolute; top: 0px; height: 100px;">
                            <div data-enable-video="true" data-bg-effect-name="" class="strc1balata" id="mediait2pzfvn5balata" 
                                 style="position: absolute; width: calc(980px); left: calc(0px); top: 0px; bottom: 0px; 
                                 height: 100%; overflow: hidden; pointer-events: auto; clip: rect(0px, 980px, 100px, 0px);">
                                <div class="bgColor" id="mediait2pzfvn5balatabgcolor" style="width: 100%; height: 100%; 
                                     background-color: rgb(206, 32, 38); position: absolute;">
                                    <div id="mediait2pzfvn5balatabgcoloroverlay" class="bgColoroverlay" 
                                         style="width: 100%; height: 100%; position: absolute;">
                                             
                                    </div>
                                        
                                </div>
                                    
                            </div>
                            <div id="mediait2pzfvn5inlineContent" class="strc1inlineContent" 
                                 style="position: absolute; width: 980px; top: 0px; bottom: 0px; left: calc((100% - 980px) * 0.5);">
                                <div data-svg-id="9f511d107e9040fcb86c5ad358aeaf8a.svg" 
                                     data-svg-type="shape" 
                                     data-display-mode="legacyFit" 
                                     data-strokewidth="1" 
                                     data-viewbox="0 0 200 200" 
                                     data-preserve-viewbox="ignore" 
                                     class="style-illkwy24" id="comp-il9hxvz8" style="left: 46px; width: 18px; position: absolute; top: 31px; height: 18px;">
                                    <div class="style-illkwy24_comp-il9hxvz8 style-illkwy24_non-scaling-stroke style-illkwy24svg" id="comp-il9hxvz8svg" 
                                         style="fill-opacity: 0; stroke-width: 1; stroke: rgb(255, 255, 255); stroke-opacity: 1; fill: rgb(206, 32, 38);">
                                        <svg xmlns="http://www.w3.org/2000/svg" 
                               viewBox="-68.05626813103171 -355.9209837072036 144.02723963120405 144.02723963120405" 
                               role="img" preserveAspectRatio="xMidYMid meet" style="stroke-width: 1px;">
                        <g>
                            <path d="M71.3-243.6l-.7-2c-1.6-4.8-6.9-9.7-11.7-11L41-261.5c-4.8-1.3-11.8.5-15.3 4l-6.5 6.5c-23.5-6.3-41.9-24.8-
                                  48.2-48.2l6.5-6.5c3.5-3.5 5.3-10.4 4-15.3l-4.9-17.9c-1.3-4.8-6.3-10.1-11-11.7l-2-.7c-4.8-1.6-11.6 0-15.1 
                                  3.6l-9.7 9.7c-1.7 1.7-2.8 6.6-2.8 6.7-.3 30.7 11.7 60.3 33.4 82 21.7 21.7 51.1 33.7 81.7 33.4.2 0 5.2-1.1 
                                  6.9-2.8l9.7-9.7c3.6-3.7 5.2-10.5 3.6-15.2z">
                                      
                            </path>
                        </g>
                        </svg>
                                        </div>
                                        <div id="comp-il9hxvz8link" class="style-illkwy24link">
                                            
                                        </div>
                                            
                                    </div>
                                    <div data-packed="true" class="txtNew" id="comp-il9hykbl4" 
                                         style="left: 71px; width: 225px; position: absolute; top: 29px;">
                                        <h6 class="font_6">
                                            <span style="color:rgb(255, 255, 255); letter-spacing:0.05em;">Llámanos</span>
                                        </h6>
                                    </div>
                                    <div data-packed="true" class="txtNew" id="comp-il9hykbk" 
                                         style="left: 47px; width: 264px; position: absolute; top: 56px;">
                                        <p class="font_8">
                                            <span class="color_16">Tel: 032-806-668 | Fax: 032-810-555</span>
                                        </p>
                                    </div>
                                    <div data-svg-id="680a748941d54105aec1c00186931f30.svg" data-svg-type="shape" data-display-mode="legacyFit" data-strokewidth="1" data-viewbox="0 0 200 200" data-preserve-viewbox="ignore" class="style-illkx568" id="comp-il9hxvzr" style="left: 362px; width: 18px; position: absolute; top: 31px; height: 18px;"><div class="style-illkx568_comp-il9hxvzr style-illkx568_non-scaling-stroke style-illkx568svg" id="comp-il9hxvzrsvg" style="fill-opacity: 0; stroke-width: 1; stroke: rgb(255, 255, 255); stroke-opacity: 1; fill: rgb(206, 32, 38);"><svg xmlns="http://www.w3.org/2000/svg" viewBox="24.463759927188647 22.1847567838781 152.07249540441177 152.07249540441177" role="img" preserveAspectRatio="xMidYMid meet" style="stroke-width: 1px;">
                                <g>
                                    <path d="M100.491 100.909l71.821-33.113V53.338a2.99 2.99 0 0 0-2.992-2.992H31.68a2.99 2.99 0 0 0-2.992 2.992v14.681l71.803 32.89z"></path>
                                    <path d="M101.754 106.923a2.987 2.987 0 0 1-1.251.275h-.006c-.415 0-.838-.087-1.245-.269L28.688 74.6v68.504a2.99 2.99 0 0 0 2.992 2.992h137.64a2.99 2.99 0 0 0 2.992-2.992V74.389l-70.558 32.534z"></path>
                                </g>
                            </svg>
                            </div>
                                        <div id="comp-il9hxvzrlink" class="style-illkx568link"></div>
                                            
                                    </div>
                                <div data-packed="true" class="txtNew" id="comp-il9hykbl3" 
                                     style="left: 391px; width: 208px; position: absolute; top: 29px;">
                                    <h6 class="font_6">
                                        <span style="color:rgb(255, 255, 255); letter-spacing:0.05em;">EMAIL</span>
                                    </h6>
                                </div>
                                <div data-packed="true" class="txtNew" id="comp-il9hykbl" 
                                     style="left: 363px; width: 264px; position: absolute; top: 56px;">
                                    <p class="font_8">
                                        <span class="color_16">
                                            <object height="0">
                                                <a class="auto-generated-link" data-auto-recognition="true" 
                                                   data-content="elultimo-inca@gmail.com" href="mailto:magdiesel-latacunga@gmail.com" 
                                                   data-type="mail">Vinos-elultimo-inca@gmail.com</a>
                                            </object>
                                        </span>
                                    </p>
                                </div>
                                <div data-svg-id="2e1f098e46f140f78fbfaba56cba650d.svg" data-svg-type="shape" data-display-mode="legacyFit" 
                                     data-strokewidth="1" data-viewbox="0 0 200 200" 
                                     data-preserve-viewbox="ignore" class="style-iltdw64n" id="comp-il9hxvzr1" 
                                     style="left: 672px; width: 18px; position: absolute; top: 31px; height: 18px;">
                                    <div class="style-iltdw64n_comp-il9hxvzr1 style-iltdw64n_non-scaling-stroke style-iltdw64nsvg" 
                                         id="comp-il9hxvzr1svg" style="fill-opacity: 0; stroke-width: 1; stroke: rgb(255, 255, 255); 
                                         stroke-opacity: 1; fill: rgb(255, 255, 255);">
                                        <svg xmlns="http://www.w3.org/2000/svg" 
                                             viewBox="8.940110150505518 8.940116826225733 182.11977969898896 182.11977969898896" 
                                             role="img" preserveAspectRatio="xMidYMid meet" style="stroke-width: 1px;">
                                <g>
                                    <path d="M100 13.999c-47.496 0-86 38.504-86 86.001s38.504 86.001 86 86.001 86-38.504 86-86.001-38.504-86.001-86-86.001zM148 114H98a4 4 0 0 1-4-4V48a4 4 0 0 1 8 0v58h46a4 4 0 0 1 0 8z"></path>
                                </g>
                            </svg>
                        </div>
                                            <div id="comp-il9hxvzr1link" class="style-iltdw64nlink"></div>
                                                
                                        </div>
                                        <div data-packed="true" class="txtNew" id="comp-il9hykbl2" style="left: 700px; width: 233px; position: absolute; top: 29px;">
                                            <h6 class="font_6">
                                                <span style="color:rgb(255, 255, 255); letter-spacing:0.05em;">HORARIO DE ATENCIÓN</span>
                                            </h6>
                                        </div>
                                        <div data-packed="true" class="txtNew" id="comp-il9hykbl1" 
                                             style="left: 672px; width: 263px; position: absolute; top: 56px;">
                                            <p class="font_8" style="font-size:14px;">
                                                <span class="color_16">Lunes-Viernes: 7,30 am - 8 pm</span>
                                            </p>
                                        </div>
                                <div class="style-il43cksw" id="comp-il9hykbc" 
                                     style="left: 327px; width: 5px; position: absolute; top: 26px; height: 56px;">
                                    <div id="comp-il9hykbcline" class="style-il43ckswline"></div>
                                        
                                </div>
                                <div class="style-il43cksw" id="comp-il9hykbl5" 
                                     style="left: 646px; width: 5px; position: absolute; top: 26px; height: 56px;">
                                    <div id="comp-il9hykbl5line" class="style-il43ckswline"></div>
                                        
                                </div>
                                    
                            </div>
                                
                        </div>
                            
                    </div>
                </section>
                <div data-packed="true" class="txtNew" id="comp-il9idbvr" 
                     style="left: 681px; width: 252px; position: absolute; top: 174px;">
                    <p class="font_8"><span class="color_13">Barrio Quinticusig</span></p>

                        <p class="font_8"><span class="color_13">Sigchos-Ecuador.</span></p>

                        <p class="font_8"><span class="color_13">22222.</span></p></div></div></div></footer>

        
                
            </footer>       