<?php
/**
* @var \App\View\AppView $this
* @var \App\Model\Entity\ProduccionTotal $produccionTotal
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
                    <li class="padding-action"><?= $this->Html->link(__('Edit Produccion Total'), ['action' => 'edit', $produccionTotal->id]) ?> </li>
                    <li class="padding-action"><?= $this->Form->postLink(__('Delete Produccion Total'), ['action' => 'delete', $produccionTotal->id], ['confirm' => __('Are you sure you want to delete # {0}?', $produccionTotal->id)]) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('List Produccion Total'), ['action' => 'index']) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('New Produccion Total'), ['action' => 'add']) ?> </li>
                </div>
            </div>
        </div>
    </div>
    <div class="col s12 m9">
        <div class="card darken-1">
            <div class="card-content black-text">
                <ul class="collection with-header">
                    <li class="collection-header">
                        <h4><?= h($produccionTotal->id) ?></h4>
                    </li>
                    <li class="collection-item">
                        <?= __('Nombre Producto') ?>
                        <div class="secondary-content">
                            <?= h($produccionTotal->nombre_producto) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Id') ?>
                        <div class="secondary-content">
                            <?= $this->Number->format($produccionTotal->id) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Valor Total Producto') ?>
                        <div class="secondary-content">
                            <?= $this->Number->format($produccionTotal->valor_total_producto) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Valor Ultima Suma') ?>
                        <div class="secondary-content">
                            <?= $this->Number->format($produccionTotal->valor_ultima_suma) ?>
                        </div>
                    </li>
                </ul>
        </div>
    </div>
</div>
