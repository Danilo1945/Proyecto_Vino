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

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>
    

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
    
    <!--PARA IMPLEMENTAR MATERIAL -->
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <?= $this->Html->script('jquery-3.3.1.min')?>
   
    <?= $this->Html->script('materialize.min.js')?>
    <link href="https://fonts.googleapis.com/css?family=Raleway:500i|Roboto:300,400,700|Roboto+Mono" rel="stylesheet">
    
    

    
    
    
    
</head>
<body>
     
    
    <nav class="top-bar expanded" data-topbar role="navigation">
        
        
        
        <ul class="title-area large-3 medium-4 columns">
            <li class="name">
                <!--LINEA QUE CAMBIA EL NOMBRE DE LA TABLA QUE APARECE en la pri-->
                <h1><a href=""><?= $this->fetch('title') ?></a></h1>
                
                
                
                
            </li>
        </ul>
        
        
        
        
        
        
        
        <!--PARA EL MENU QUE APARECE EN LA PARTE DERECHA-->
        <div class="top-bar-section">
            <ul class="right">
                <li><a target="_blank" href="https://book.cakephp.org/3.0/">Documentation</a></li>
                <li><a target="_blank" href="https://api.cakephp.org/3.0/">API</a></li>
            </ul>
            
        </div>
        
        
        
        
        
        
    </nav>
    
    
    <!--PARA TODO EL CONTENIDO CONECTA ENTRE LAS--> 
    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
    <footer>
        
    </footer>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
</body>
</html>
