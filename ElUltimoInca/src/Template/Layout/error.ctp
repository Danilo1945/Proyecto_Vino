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
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <title>
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>

    <div class="row" style="width: 100px; height: 100px"  ">
        
        <div class="col s12 m12 l12 xl12">
            <h1><?= __('Error') ?></h1>
        </div>
    </div>
    
    
    <div class="row" style="width: 100px; height: 100px" >
        <div class="col s12 m12 l12 xl12"  style="color: blue;">
            <h1> <script>  <?= __('Error') ?>  </script>       </h1>
         
          <?= $this->Flash->render() ?>

            <?= $this->fetch('content') ?>
         <?= $this->Html->link(__('Back'), 'javascript:history.back()') ?> 
        </div>
       
        
    </div>
    
    
</body>
</html>
