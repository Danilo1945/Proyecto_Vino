<?php
/**
* @var \App\View\AppView $this
* @var \App\Model\Entity\Pedido $pedido
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
                    <li class="padding-action"><?= $this->Html->link(__('Edit Pedido'), ['action' => 'edit', $pedido->id]) ?> </li>
                    <li class="padding-action"><?= $this->Form->postLink(__('Delete Pedido'), ['action' => 'delete', $pedido->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pedido->id)]) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('List Pedido'), ['action' => 'index']) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('New Pedido'), ['action' => 'add']) ?> </li>
                </div>
            </div>
        </div>
    </div>
    <div class="col s12 m9">
        <div class="card darken-1">
            <div class="card-content black-text">
                <ul class="collection with-header">
                    <li class="collection-header">
                        <h4><?= h($pedido->id) ?></h4>
                    </li>
                    <li class="collection-item">
                        <?= __('Unidad Medida') ?>
                        <div class="secondary-content">
                            <?= h($pedido->unidad_medida) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Id') ?>
                        <div class="secondary-content">
                            <?= $this->Number->format($pedido->id) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Cantidad') ?>
                        <div class="secondary-content">
                            <?= $this->Number->format($pedido->Cantidad) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Idcliente') ?>
                        <div class="secondary-content">
                            <?= $this->Number->format($pedido->Idcliente) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Id Pro Ter') ?>
                        <div class="secondary-content">
                            <?= $this->Number->format($pedido->id_pro_ter) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Fecha') ?>
                        <div class="secondary-content">
                            <?= h($pedido->Fecha) ?>
                        </div>
                    </li>
                </ul>
        </div>
    </div>
</div>
