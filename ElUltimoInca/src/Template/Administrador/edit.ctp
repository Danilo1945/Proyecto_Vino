<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Administrador $administrador
 */
?>
<div class="hide">
   
</div>
<div class="row">
    <div class="col s12 m3">
        <div class="card darken-1">
            <div class="card-content white-text">
                <span class="card-title green-text">ACCIONES</span>
                <div class="card-action">
                    <li class="padding-action"><?= $this->Form->postLink(
                            __('ELIMINAR ADMINISTRADOR'),
                            ['action' => 'delete', $administrador->id],
                            ['confirm' => __('Are you sure you want to delete # {0}?', $administrador->id)]
                            )
                            ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('LISTA DE ADMINISTRADOR'), ['action' => 'index']) ?></li>
                </div>
            </div>
        </div>
    </div>
    <div class="col s12 m9">
        <div class="card darken-1">
            <div class="card-content black-text">
                <?= $this->Form->create($administrador) ?>
                <span class="card-title green-text"><?= __('EDITAR ADMINISTRADOR') ?></span>

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
                <?= $this->Form->button(__('GUARDAR CAMBIOS'), ['class' => 'btn waves-effect waves-light']) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
