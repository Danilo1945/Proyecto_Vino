<?php
/**
* @var \App\View\AppView $this
* @var \App\Model\Entity\Empresa $empresa
*/
?>
<div class="hide">
</div>
<div class="row">
    <div class="col s12 m3">
        <div class="card darken-1">
            <div class="card-content white-text">
                <span class="card-title green-text"><?= __('ACCIONES') ?></span>
                <div class="card-action">
                    <li class="padding-action"><?= $this->Html->link(__('EDITAR EMPRESA'), ['action' => 'edit', $empresa->id]) ?> </li>
                    <li class="padding-action"><?= $this->Form->postLink(__('ELIMINAR EMPRESA'), ['action' => 'delete', $empresa->id], ['confirm' => __('Are you sure you want to delete # {0}?', $empresa->id)]) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('LISTADO DE EMPRESAS'), ['action' => 'index']) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('AGREGAR NUEVA EMPRESAa'), ['action' => 'add']) ?> </li>
                </div>
            </div>
        </div>
    </div>
    <div class="col s12 m9">
        <div class="card darken-1">
            <div class="card-content black-text">
                <ul class="collection with-header">
                    <li class="collection-header">
                        <h4><?= h($empresa->id) ?></h4>
                    </li>
                    <li class="collection-item">
                        <?= __('Nombre') ?>
                        <div class="secondary-content">
                            <?= h($empresa->nombre) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Direccion') ?>
                        <div class="secondary-content">
                            <?= h($empresa->direccion) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Email') ?>
                        <div class="secondary-content">
                            <?= h($empresa->email) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Id') ?>
                        <div class="secondary-content">
                            <?= $this->Number->format($empresa->id) ?>
                        </div>
                    </li>
                </ul>
        </div>
    </div>
</div>
