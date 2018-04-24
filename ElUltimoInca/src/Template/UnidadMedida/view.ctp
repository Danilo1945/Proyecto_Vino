<?php
/**
* @var \App\View\AppView $this
* @var \App\Model\Entity\UnidadMedida $unidadMedida
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
                    <li class="padding-action"><?= $this->Html->link(__('Edit Unidad Medida'), ['action' => 'edit', $unidadMedida->id]) ?> </li>
                    <li class="padding-action"><?= $this->Form->postLink(__('Delete Unidad Medida'), ['action' => 'delete', $unidadMedida->id], ['confirm' => __('Are you sure you want to delete # {0}?', $unidadMedida->id)]) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('List Unidad Medida'), ['action' => 'index']) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('New Unidad Medida'), ['action' => 'add']) ?> </li>
                </div>
            </div>
        </div>
    </div>
    <div class="col s12 m9">
        <div class="card darken-1">
            <div class="card-content black-text">
                <ul class="collection with-header">
                    <li class="collection-header">
                        <h4><?= h($unidadMedida->id) ?></h4>
                    </li>
                    <li class="collection-item">
                        <?= __('Nombre Umed') ?>
                        <div class="secondary-content">
                            <?= h($unidadMedida->nombre_umed) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Detalle Umed') ?>
                        <div class="secondary-content">
                            <?= h($unidadMedida->detalle_umed) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Id') ?>
                        <div class="secondary-content">
                            <?= $this->Number->format($unidadMedida->id) ?>
                        </div>
                    </li>
                </ul>
        </div>
    </div>
</div>
