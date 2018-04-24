<?php
/**
* @var \App\View\AppView $this
* @var \App\Model\Entity\MateriaPrima $materiaPrima
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
                    <li class="padding-action"><?= $this->Html->link(__('Edit Materia Prima'), ['action' => 'edit', $materiaPrima->id]) ?> </li>
                    <li class="padding-action"><?= $this->Form->postLink(__('Delete Materia Prima'), ['action' => 'delete', $materiaPrima->id], ['confirm' => __('Are you sure you want to delete # {0}?', $materiaPrima->id)]) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('List Materia Prima'), ['action' => 'index']) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('New Materia Prima'), ['action' => 'add']) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('List Unidad Medida'), ['controller' => 'UnidadMedida', 'action' => 'index']) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('New Unidad Medida'), ['controller' => 'UnidadMedida', 'action' => 'add']) ?> </li>
                </div>
            </div>
        </div>
    </div>
    <div class="col s12 m9">
        <div class="card darken-1">
            <div class="card-content black-text">
                <ul class="collection with-header">
                    <li class="collection-header">
                        <h4><?= h($materiaPrima->id) ?></h4>
                    </li>
                    <li class="collection-item">
                        <?= __('Nombre Mat Pri') ?>
                        <div class="secondary-content">
                            <?= h($materiaPrima->nombre_mat_pri) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Descripcion Mat Pri') ?>
                        <div class="secondary-content">
                            <?= h($materiaPrima->descripcion_mat_pri) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Unm Id') ?>
                        <div class="secondary-content">
                            <?= $materiaPrima->has('unidad_medida') ? $this->Html->link($materiaPrima->unidad_medida->id, ['controller' => 'UnidadMedida', 'action' => 'view', $materiaPrima->unidad_medida->id]) : '' ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Id') ?>
                        <div class="secondary-content">
                            <?= $this->Number->format($materiaPrima->id) ?>
                        </div>
                    </li>
                </ul>
        </div>
    </div>
</div>
