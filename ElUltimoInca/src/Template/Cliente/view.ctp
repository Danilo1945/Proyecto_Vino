<?php
/**
* @var \App\View\AppView $this
* @var \App\Model\Entity\Cliente $cliente
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
                    <li class="padding-action"><?= $this->Html->link(__('Edit Cliente'), ['action' => 'edit', $cliente->id]) ?> </li>
                    <li class="padding-action"><?= $this->Form->postLink(__('Delete Cliente'), ['action' => 'delete', $cliente->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cliente->id)]) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('List Cliente'), ['action' => 'index']) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('New Cliente'), ['action' => 'add']) ?> </li>
                </div>
            </div>
        </div>
    </div>
    <div class="col s12 m9">
        <div class="card darken-1">
            <div class="card-content black-text">
                <ul class="collection with-header">
                    <li class="collection-header">
                        <h4><?= h($cliente->id) ?></h4>
                    </li>
                    <li class="collection-item">
                        <?= __('Cedula') ?>
                        <div class="secondary-content">
                            <?= h($cliente->Cedula) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Nombres') ?>
                        <div class="secondary-content">
                            <?= h($cliente->Nombres) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Apellidos') ?>
                        <div class="secondary-content">
                            <?= h($cliente->Apellidos) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Telefono') ?>
                        <div class="secondary-content">
                            <?= h($cliente->Telefono) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Direccion') ?>
                        <div class="secondary-content">
                            <?= h($cliente->Direccion) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Email') ?>
                        <div class="secondary-content">
                            <?= h($cliente->Email) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('User') ?>
                        <div class="secondary-content">
                            <?= h($cliente->user) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Password') ?>
                        <div class="secondary-content">
                            <?= h($cliente->password) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Id') ?>
                        <div class="secondary-content">
                            <?= $this->Number->format($cliente->id) ?>
                        </div>
                    </li>
                </ul>
        </div>
    </div>
</div>
