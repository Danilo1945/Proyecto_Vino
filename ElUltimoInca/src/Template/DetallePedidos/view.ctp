<?php
/**
* @var \App\View\AppView $this
* @var \App\Model\Entity\DetallePedido $detallePedido
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
                    <li class="padding-action"><?= $this->Html->link(__('Edit Detalle Pedido'), ['action' => 'edit', $detallePedido->id]) ?> </li>
                    <li class="padding-action"><?= $this->Form->postLink(__('Delete Detalle Pedido'), ['action' => 'delete', $detallePedido->id], ['confirm' => __('Are you sure you want to delete # {0}?', $detallePedido->id)]) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('List Detalle Pedidos'), ['action' => 'index']) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('New Detalle Pedido'), ['action' => 'add']) ?> </li>
                </div>
            </div>
        </div>
    </div>
    <div class="col s12 m9">
        <div class="card darken-1">
            <div class="card-content black-text">
                <ul class="collection with-header">
                    <li class="collection-header">
                        <h4><?= h($detallePedido->id) ?></h4>
                    </li>
                    <li class="collection-item">
                        <?= __('Detalle') ?>
                        <div class="secondary-content">
                            <?= h($detallePedido->detalle) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Id') ?>
                        <div class="secondary-content">
                            <?= $this->Number->format($detallePedido->id) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Cantidad') ?>
                        <div class="secondary-content">
                            <?= $this->Number->format($detallePedido->cantidad) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Id Pedidos') ?>
                        <div class="secondary-content">
                            <?= $this->Number->format($detallePedido->id_pedidos) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Id Unidad Medida') ?>
                        <div class="secondary-content">
                            <?= $this->Number->format($detallePedido->id_unidad_medida) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Id Produccion Total') ?>
                        <div class="secondary-content">
                            <?= $this->Number->format($detallePedido->id_produccion_total) ?>
                        </div>
                    </li>
                </ul>
        </div>
    </div>
</div>
