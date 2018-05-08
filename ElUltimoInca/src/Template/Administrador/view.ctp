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
        <div class="card darken-1" id="abajo_menu">
            <div class="card-content white-text">
                <span class="card-title green-text"><?= __('ACCIONES') ?></span>
                <div class="card-action">
                    <li class="padding-action"><?= $this->Html->link(__('EDITAR ADMINISTRADOR'), ['action' => 'edit', $administrador->id]) ?> </li>
                    <li class="padding-action"><?= $this->Form->postLink(__('ELIMINAR ADMINISTRADOR'), ['action' => 'delete', $administrador->id], ['confirm' => __('Are you sure you want to delete # {0}?', $administrador->id)]) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('LISTA DE ADMINISTRADORES'), ['action' => 'index']) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('NUEVO ADMINISTRADOR'), ['action' => 'add']) ?> </li>
                </div>
            </div>
        </div>
    </div>
    <div class="col s12 m9">
        <div class="card darken-1" id="abajo_menu">
            <div class="card-content black-text">
                <ul class="collection with-header">
                    <li class="collection-header">
                        <h4><?= h($administrador->id) ?></h4>
                    </li>
                    <li class="collection-item">
                        <?= __('CEDULA') ?>
                        <div class="secondary-content">
                            <?= h($administrador->Cedula) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('NOMBRES') ?>
                        <div class="secondary-content">
                            <?= h($administrador->Nombres) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('APELLIDOS') ?>
                        <div class="secondary-content">
                            <?= h($administrador->Apellidos) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('TELEFONO') ?>
                        <div class="secondary-content">
                            <?= h($administrador->Telefono) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('DIRECCION') ?>
                        <div class="secondary-content">
                            <?= h($administrador->Direccion) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('EMAIL') ?>
                        <div class="secondary-content">
                            <?= h($administrador->Email) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('USUARIO') ?>
                        <div class="secondary-content">
                            <?= h($administrador->user) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('PASSWORD') ?>
                        <div class="secondary-content">
                            <?= h($administrador->password) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('ROL') ?>
                        <div class="secondary-content">
                            <?= h($administrador->Rol) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('ID') ?>
                        <div class="secondary-content">
                            <?= $this->Number->format($administrador->id) ?>
                        </div>
                    </li>
                </ul>
        </div>
    </div>
</div>
