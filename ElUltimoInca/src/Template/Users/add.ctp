<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="hide">
 
</div>
<div class="row">
    <div class="col s12 m3">
        <div class="card darken-1" id="abajo_menu">
            <div class="card-content white-text" id="abajo_menu">
                <span class="card-title green-text" id="abajo_menu">Acciones</span>
                <div class="card-action" id="abajo_menu">
                    <li class="padding-action"><?= $this->Html->link(__('Lista de Usuarios'), ['action' => 'index']) ?></li>
                </div>
            </div>
        </div>
    </div>
    <div class="col s12 m9">
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
                <?= $this->Form->button(__('Enviar'), ['class' => 'btn waves-effect waves-light']) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
