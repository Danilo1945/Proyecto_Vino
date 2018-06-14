<?php
/**
* @var \App\View\AppView $this
* @var \App\Model\Entity\HojaVenta $hojaVenta
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
                    <li class="padding-action"><?= $this->Html->link(__('Edit Hoja Venta'), ['action' => 'edit', $hojaVenta->id]) ?> </li>
                    <li class="padding-action"><?= $this->Form->postLink(__('Delete Hoja Venta'), ['action' => 'delete', $hojaVenta->id], ['confirm' => __('Are you sure you want to delete # {0}?', $hojaVenta->id)]) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('List Hoja Ventas'), ['action' => 'index']) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('New Hoja Venta'), ['action' => 'add']) ?> </li>
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
                        <h4><?= h($hojaVenta->id) ?></h4>
                    </li>
                    <li class="collection-item">
                        <?= __('Trabajador Id') ?>
                        <div class="secondary-content">
                            <?= $hojaVenta->has('trabajador') ? $this->Html->link($hojaVenta->trabajador->id, ['controller' => 'Trabajador', 'action' => 'view', $hojaVenta->trabajador->id]) : '' ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Users Id') ?>
                        <div class="secondary-content">
                            <?= $hojaVenta->has('user') ? $this->Html->link($hojaVenta->user->name, ['controller' => 'Users', 'action' => 'view', $hojaVenta->user->id]) : '' ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Estado Venta') ?>
                        <div class="secondary-content">
                            <?= h($hojaVenta->estado_venta) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Observaciones') ?>
                        <div class="secondary-content">
                            <?= h($hojaVenta->observaciones) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Id') ?>
                        <div class="secondary-content">
                            <?= $this->Number->format($hojaVenta->id) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Cantidad') ?>
                        <div class="secondary-content">
                            <?= $this->Number->format($hojaVenta->cantidad) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Precio Unitario') ?>
                        <div class="secondary-content">
                            <?= $this->Number->format($hojaVenta->precio_unitario) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Precio Total') ?>
                        <div class="secondary-content">
                            <?= $this->Number->format($hojaVenta->precio_total) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Valor Estado') ?>
                        <div class="secondary-content">
                            <?= $this->Number->format($hojaVenta->valor_estado) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Fecha') ?>
                        <div class="secondary-content">
                            <?= h($hojaVenta->fecha) ?>
                        </div>
                    </li>
                </ul>
        </div>
    </div>
</div>
