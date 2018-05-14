<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="hide">
  <?= $this->layout = "login"; ?>
</div>
<div class="row">
    
    <div class="row">
        <div class="col s1 m1 l2 xl4">
            
        </div>
         <div class="col s12 m12 l10 xl4">
           
             
    <div class="col s12 m12 l12 xl12">
        <div class="card darken-1" id="abajo_menu">
            <div class="card-content black-text" id="abajo_menu">
                <?= $this->Form->create($user) ?>
                <span class="card-title green-text" id="abajo_menu"><?= __('Añadir Usuario') ?></span>

                <div class="input-field">
                    <?= $this->Form->control('Cedula') ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('Nombres') ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('Apellidos') ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('Telefono') ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('Direccion') ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('Email') ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('user') ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('password') ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('Rol') ?>
                </div>
                <?= $this->Form->button(__('Enviar Formulario'), ['class' => 'btn waves-effect waves-light']) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>

             
             
        </div>
         <div class="col s1 m1 l1 xl4">
            
        </div>
    </div>
    
    
    