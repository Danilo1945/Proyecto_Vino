<?php
/**
* @var \App\View\AppView $this
* @var \App\Model\Entity\Pedido $pedido
*/
?>
<div class="hide">

</div>
<div class="row">
    <div class="col s12 m3">
        <div class="card darken-1">
            <div class="card-content white-text">
                <span class="card-title green-text"><?= __('Actions') ?></span>
                <div class="card-action">
                    <li class="padding-action"><?= $this->Html->link(__('Edit Pedido'), ['action' => 'edit', $pedido->id]) ?> </li>
                    <li class="padding-action"><?= $this->Form->postLink(__('Delete Pedido'), ['action' => 'delete', $pedido->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pedido->id)]) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('List Pedidos'), ['action' => 'index']) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('New Pedido'), ['action' => 'add']) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('List Trabajador'), ['controller' => 'Trabajador', 'action' => 'index']) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('New Trabajador'), ['controller' => 'Trabajador', 'action' => 'add']) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
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
                        <?= __('Trabajador Id') ?>
                        <div class="secondary-content">
                            <?= $pedido->has('trabajador') ? $this->Html->link($pedido->trabajador->id, ['controller' => 'Trabajador', 'action' => 'view', $pedido->trabajador->id]) : '' ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Users Id') ?>
                        <div class="secondary-content">
                            <?= $pedido->has('user') ? $this->Html->link($pedido->user->name, ['controller' => 'Users', 'action' => 'view', $pedido->user->id]) : '' ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Estado Cuenta') ?>
                        <div class="secondary-content">
                            <?= h($pedido->estado_cuenta) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Observaciones Ven') ?>
                        <div class="secondary-content">
                            <?= h($pedido->observaciones_ven) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Id') ?>
                        <div class="secondary-content">
                            <?= $this->Number->format($pedido->id) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Precio Uni') ?>
                        <div class="secondary-content">
                            <?= $this->Number->format($pedido->precio_uni) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Precio Total') ?>
                        <div class="secondary-content">
                            <?= $this->Number->format($pedido->precio_total) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Fecha Ven') ?>
                        <div class="secondary-content">
                            <?= h($pedido->fecha_ven) ?>
                        </div>
                    </li>
                </ul>
        </div>
    </div>
</div>
