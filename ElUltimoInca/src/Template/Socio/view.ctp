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
                <span class="card-title green-text"><?= __('Actions') ?></span>
                <div class="card-action" id="abajo_menu">
                    <li class="padding-action"><?= $this->Html->link(__('Edit Socio'), ['action' => 'edit', $socio->id]) ?> </li>
                    <li class="padding-action"><?= $this->Form->postLink(__('Delete Socio'), ['action' => 'delete', $socio->id], ['confirm' => __('Are you sure you want to delete # {0}?', $socio->id)]) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('List Socio'), ['action' => 'index']) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('New Socio'), ['action' => 'add']) ?> </li>
                </div>
            </div>
        </div>
    </div>
    <div class="col s12 m9">
        <div class="card darken-1" id="abajo_menu">
            <div class="card-content black-text" id="abajo_menu">
                <ul class="collection with-header" id="abajo_menu">
                    <li class="collection-header">
                        <h4><?= h($socio->id) ?></h4>
                    </li>
                    <li class="collection-item">
                        <?= __('Cedula') ?>
                        <div class="secondary-content">
                            <?= h($socio->cedula) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Nombres') ?>
                        <div class="secondary-content">
                            <?= h($socio->Nombres) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Apellidos') ?>
                        <div class="secondary-content">
                            <?= h($socio->Apellidos) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Telefono') ?>
                        <div class="secondary-content">
                            <?= h($socio->Telefono) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Direccion') ?>
                        <div class="secondary-content">
                            <?= h($socio->Direccion) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Email') ?>
                        <div class="secondary-content">
                            <?= h($socio->Email) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Id') ?>
                        <div class="secondary-content">
                            <?= $this->Number->format($socio->id) ?>
                        </div>
                    </li>
                </ul>
        </div>
    </div>
</div>
