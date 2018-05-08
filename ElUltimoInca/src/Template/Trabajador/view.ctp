<?php
/**
* @var \App\View\AppView $this
* @var \App\Model\Entity\Trabajador $trabajador
*/
?>
<div class="hide">
  
</div>
<div class="row">
    <div class="col s12 m3">
        <div class="card darken-1" id="abajo_menu">
            <div class="card-content white-text" id="abajo_menu">
                <span class="card-title green-text" id="abajo_menu"id="abajo_menu"><?= __('Acciones') ?></span>
                <div class="card-action" id="abajo_menu">
                    <li class="padding-action"><?= $this->Html->link(__('Editar Trabajador'), ['action' => 'edit', $trabajador->id]) ?> </li>
                    <li class="padding-action"><?= $this->Form->postLink(__('Eliminar Trabajador'), ['action' => 'delete', $trabajador->id], ['confirm' => __('Esta seguro que quiere borrarlo # {0}?', $trabajador->id)]) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('Lista de Trabajadores'), ['action' => 'index']) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('Nuevo Trabajador'), ['action' => 'add']) ?> </li>
                </div>
            </div>
        </div>
    </div>
    <div class="col s12 m9">
        <div class="card darken-1" id="abajo_menu">
            <div class="card-content black-text" id="abajo_menu">
                <ul class="collection with-header">
                    <li class="collection-header">
                        <h4><?= h($trabajador->id) ?></h4>
                    </li>
                    <li class="collection-item">
                        <?= __('Cedula') ?>
                        <div class="secondary-content">
                            <?= h($trabajador->cedula) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Nombres Tra') ?>
                        <div class="secondary-content">
                            <?= h($trabajador->Nombres_tra) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Apellidos Tra') ?>
                        <div class="secondary-content">
                            <?= h($trabajador->Apellidos_tra) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Telefono Tra') ?>
                        <div class="secondary-content">
                            <?= h($trabajador->Telefono_tra) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Direccion Tra') ?>
                        <div class="secondary-content">
                            <?= h($trabajador->Direccion_tra) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Email Tra') ?>
                        <div class="secondary-content">
                            <?= h($trabajador->Email_tra) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Id') ?>
                        <div class="secondary-content">
                            <?= $this->Number->format($trabajador->id) ?>
                        </div>
                    </li>
                </ul>
        </div>
    </div>
</div>
