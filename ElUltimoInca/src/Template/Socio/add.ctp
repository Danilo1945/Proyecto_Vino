<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Socio $socio
 */
?>
<div class="hide">
  
</div>
<div class="row">
    <div class="col s12 m3">
        <div class="card darken-1" id="abajo_menu">
            <div class="card-content white-text" id="abajo_menu">

<<<<<<< HEAD
                <span class="card-title black-text">Actions</span>
=======
                <span class="card-title black-text">Acciones</span>
>>>>>>> d85fcc0e43cb5ec7bbcd034ece12b2338e51618c
                <div class="card-action" id="abajo_menu">
                    <li class="padding-action"><?= $this->Html->link(__('List Socio'), ['action' => 'index']) ?></li>

                </div>
            </div>
        </div>
    </div>
    <div class="col s12 m9">
        <div class="card darken-1" id="abajo_menu">
            <div class="card-content black-text" id="abajo_menu">
                <?= $this->Form->create($socio) ?>
                <span class="card-title black-text"><?= __('Añadir Socios') ?></span>

                <div class="input-field">
                    <?= $this->Form->control('cedula') ?>
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
                <?= $this->Form->button(__('Enviar'), ['class' => 'btn waves-effect waves-light']) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
