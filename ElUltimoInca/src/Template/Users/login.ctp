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
    
    
    <br>
    <br>
     <br>
    
   
<div class="row">
    <div class="col s12 m3">
        <div class="card darken-1 " id="abajo_menu">
            <div class="card-content white-text">
                <span class="card-title green-text">Acciones</span>
                <div class="card-action">
                  
                
                </div>
            </div>
        </div>
    </div>

    <div class="col s12 m9">
        <div class="card darken-1" id="abajo_menu">
            <div class="card-content black-text">
                <span class="card-title green-text center">Login</span>
                <div class="card-action">
                  <div class="row">
        
     <?= $this->Form->create() ?>
     
      
      <div class="row">
          <div class="input-field">
                    <?= $this->Form->control('Usuario') ?>
                </div>
                <div class="input-field">
                    
                    <?= $this->Form->control('Contraseña') ?>
                </div>
      </div>
     
      
                      <div class="row ">
                          <div class="col s6 m3 center">
                              <?= $this->Form->button(__('Iniciar Sesión'), ['class' => 'btn waves-effect waves-light']) ?>
                              <br>
                              <br>
                               <?=$this->Html->link('Olvide mi contraseña',['controller'=>'Menu','action'=>'index','class'=>'waves-effect'])  ?> 
                          
                          </div>
                          <div class="col s6 m3 center">
                              <?= $this->Form->button(__('Registrarse'), ['class' => 'btn waves-effect waves-light']) ?>
                          </div>
                           <div class="col s6 m6 center">
                              
                          </div>
                         
                      </div>
   
        
   
                    <?= $this->Form->end() ?>
                   </div>
                
                </div>
            </div>
        </div>
       

        
    </div>
</div>

       
    
    
    
    
    
    
 
