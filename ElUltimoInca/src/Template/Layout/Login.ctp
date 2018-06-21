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
       <!--PARA IMPLEMENTAR MATERIAL -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <?= $this->Html->script('jquery-3.3.1.min') ?>
        <?= $this->Html->css('bootstrap.min.css') ?>
        <?= $this->Html->script('bootstrap.min.js') ?>
  


        <link href="https://fonts.googleapis.com/css?family=Raleway:500i|Roboto:300,400,700|Roboto+Mono" rel="stylesheet">

       <?= $this->Html->css('my-login.css') ?>
      

    </head>
    <body class="my-login-page">
  








        <div class="row">
            <div class="col-12 col-sm-12 col-lg-12 col-xl-12">
                <?= $this->Flash->render() ?>
            </div>
        </div>


        <!--/////////////////////////////////////////////////////////////////////////a partir de aqui--> 
     


            <div class="row" >
                <div class="col-12 col-sm-12 col-lg-12 col-xl-12">
                    <?= $this->fetch('content') ?>  <!--     ////// aqui aparecera el contenido--> 
                </div>
                <!--<a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>-->
               
            </div>



            <!--</div>  fin container-->








  <!--////////////////////////////////////////////////////////inicio footer-->

<?= $this->Html->script('my-login.js') ?>


    </body>
</html>
