<?php
/**
* @var \App\View\AppView $this
* @var \App\Model\Entity\Proceso $proceso
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
                    <li class="padding-action"><?= $this->Html->link(__('Edit Proceso'), ['action' => 'edit', $proceso->id]) ?> </li>
                    <li class="padding-action"><?= $this->Form->postLink(__('Delete Proceso'), ['action' => 'delete', $proceso->id], ['confirm' => __('Are you sure you want to delete # {0}?', $proceso->id)]) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('List Procesos'), ['action' => 'index']) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('New Proceso'), ['action' => 'add']) ?> </li>
                </div>
            </div>
        </div>
    </div>
    <div class="col s12 m9">
        <div class="card darken-1">
            <div class="card-content black-text">
                <ul class="collection with-header">
                    <li class="collection-header">
                        <h4><?= h($proceso->id) ?></h4>
                    </li>
                    <li class="collection-item">
                        <?= __('Nombre Proceso') ?>
                        <div class="secondary-content">
                            <?= h($proceso->nombre_proceso) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Detalle') ?>
                        <div class="secondary-content">
                            <?= h($proceso->detalle) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Id') ?>
                        <div class="secondary-content">
                            <?= $this->Number->format($proceso->id) ?>
                        </div>
                    </li>
                </ul>
        </div>
    </div>
</div>
