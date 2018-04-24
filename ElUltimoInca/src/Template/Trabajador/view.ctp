<?php
/**
* @var \App\View\AppView $this
* @var \App\Model\Entity\Trabajador $trabajador
*/
?>
<div class="hide">
    <?= $this->layout = "Materialize.materialize"; ?>
</div>
<div class="row">
    <div class="col s12 m3">
        <div class="card darken-1">
            <div class="card-content white-text">
                <span class="card-title green-text"><?= __('Actions') ?></span>
                <div class="card-action">
                    <li class="padding-action"><?= $this->Html->link(__('Edit Trabajador'), ['action' => 'edit', $trabajador->id]) ?> </li>
                    <li class="padding-action"><?= $this->Form->postLink(__('Delete Trabajador'), ['action' => 'delete', $trabajador->id], ['confirm' => __('Are you sure you want to delete # {0}?', $trabajador->id)]) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('List Trabajador'), ['action' => 'index']) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('New Trabajador'), ['action' => 'add']) ?> </li>
                </div>
            </div>
        </div>
    </div>
    <div class="col s12 m9">
        <div class="card darken-1">
            <div class="card-content black-text">
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
