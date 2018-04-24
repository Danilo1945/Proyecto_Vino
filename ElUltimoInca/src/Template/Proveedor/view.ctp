<?php
/**
* @var \App\View\AppView $this
* @var \App\Model\Entity\Proveedor $proveedor
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
                    <li class="padding-action"><?= $this->Html->link(__('Edit Proveedor'), ['action' => 'edit', $proveedor->id]) ?> </li>
                    <li class="padding-action"><?= $this->Form->postLink(__('Delete Proveedor'), ['action' => 'delete', $proveedor->id], ['confirm' => __('Are you sure you want to delete # {0}?', $proveedor->id)]) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('List Proveedor'), ['action' => 'index']) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('New Proveedor'), ['action' => 'add']) ?> </li>
                </div>
            </div>
        </div>
    </div>
    <div class="col s12 m9">
        <div class="card darken-1">
            <div class="card-content black-text">
                <ul class="collection with-header">
                    <li class="collection-header">
                        <h4><?= h($proveedor->id) ?></h4>
                    </li>
                    <li class="collection-item">
                        <?= __('Cedula') ?>
                        <div class="secondary-content">
                            <?= h($proveedor->cedula) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Nombres Pro') ?>
                        <div class="secondary-content">
                            <?= h($proveedor->nombres_pro) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Apellidos Pro') ?>
                        <div class="secondary-content">
                            <?= h($proveedor->apellidos_pro) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Telefono Pro') ?>
                        <div class="secondary-content">
                            <?= h($proveedor->telefono_pro) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Email Pro') ?>
                        <div class="secondary-content">
                            <?= h($proveedor->email_pro) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Id') ?>
                        <div class="secondary-content">
                            <?= $this->Number->format($proveedor->id) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Id Emp') ?>
                        <div class="secondary-content">
                            <?= $this->Number->format($proveedor->id_emp) ?>
                        </div>
                    </li>
                </ul>
        </div>
    </div>
</div>
