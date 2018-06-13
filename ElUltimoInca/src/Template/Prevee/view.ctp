<?php
/**
* @var \App\View\AppView $this
* @var \App\Model\Entity\Prevee $prevee
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
                    <li class="padding-action"><?= $this->Html->link(__('Edit Prevee'), ['action' => 'edit', $prevee->id]) ?> </li>
                    <li class="padding-action"><?= $this->Form->postLink(__('Delete Prevee'), ['action' => 'delete', $prevee->id], ['confirm' => __('Are you sure you want to delete # {0}?', $prevee->id)]) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('List Prevee'), ['action' => 'index']) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('New Prevee'), ['action' => 'add']) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('List Proveedor'), ['controller' => 'Proveedor', 'action' => 'index']) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('New Proveedor'), ['controller' => 'Proveedor', 'action' => 'add']) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('List Materia Prima'), ['controller' => 'MateriaPrima', 'action' => 'index']) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('New Materia Prima'), ['controller' => 'MateriaPrima', 'action' => 'add']) ?> </li>
                </div>
            </div>
        </div>
    </div>
    <div class="col s12 m9">
        <div class="card darken-1">
            <div class="card-content black-text">
                <ul class="collection with-header">
                    <li class="collection-header">
                        <h4><?= h($prevee->id) ?></h4>
                    </li>
                    <li class="collection-item">
                        <?= __('Proveedor Id') ?>
                        <div class="secondary-content">
                            <?= $prevee->has('proveedor') ? $this->Html->link($prevee->proveedor->id, ['controller' => 'Proveedor', 'action' => 'view', $prevee->proveedor->id]) : '' ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Materia Prima Id') ?>
                        <div class="secondary-content">
                            <?= $prevee->has('materia_prima') ? $this->Html->link($prevee->materia_prima->id, ['controller' => 'MateriaPrima', 'action' => 'view', $prevee->materia_prima->id]) : '' ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Id') ?>
                        <div class="secondary-content">
                            <?= $this->Number->format($prevee->id) ?>
                        </div>
                    </li>
                </ul>
        </div>
    </div>
</div>
