<?php
/**
 * Created by Jefferson Vantuir
 * https://jeffersonbehling.github.io/
 * jefferson.behling@gmail.com
 */

$description = 'Login';
?>
<!DOCTYPE html>
<html>
<head>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $description ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <?= $this->Html->css('materialize.min.css') ?>
    <?= $this->Html->css('materialize.css') ?>
    <?= $this->Html->css('custom.css') ?>

    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<!--Import jQuery before materialize.js-->
<?= $this->Html->script('Materialize.jquery-3.2.1.min.js') ?>
<?= $this->Html->script('Materialize.materialize.min.js') ?>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>

<body >

    <?= $this->Flash->render() ?>
       
    <div class="row">
        
     <?= $this->Form->create() ?>
     
      
      <div class="row">
          <div class="input-field">
                    <?= $this->Form->control('user',['placeholder'=>'hola']) ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('password') ?>
                </div>
      </div>
     
      
          <?= $this->Form->button(__('Submit'), ['class' => 'btn waves-effect waves-light']) ?>
     <?= $this->Form->end() ?>
  </div>
    
    
    
    
    
    
    <footer>
    </footer>
</body>
</html>