<?php
/**
* @var \App\View\AppView $this
* @var \App\Model\Entity\SalidaHojaInventario $salidaHojaInventario
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
                    <li class="padding-action"><?= $this->Html->link(__('Edit Salida Hoja Inventario'), ['action' => 'edit', $salidaHojaInventario->id]) ?> </li>
                    <li class="padding-action"><?= $this->Form->postLink(__('Delete Salida Hoja Inventario'), ['action' => 'delete', $salidaHojaInventario->id], ['confirm' => __('Are you sure you want to delete # {0}?', $salidaHojaInventario->id)]) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('List Salida Hoja Inventario'), ['action' => 'index']) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('New Salida Hoja Inventario'), ['action' => 'add']) ?> </li>
                </div>
            </div>
        </div>
    </div>
    <div class="col s12 m9">
        <div class="card darken-1">
            <div class="card-content black-text">
                <ul class="collection with-header">
                    <li class="collection-header">
                        <h4><?= h($salidaHojaInventario->id) ?></h4>
                    </li>
                    <li class="collection-item">
                        <?= __('Observaciones Sal') ?>
                        <div class="secondary-content">
                            <?= h($salidaHojaInventario->observaciones_sal) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Id') ?>
                        <div class="secondary-content">
                            <?= $this->Number->format($salidaHojaInventario->id) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Saldo Sal') ?>
                        <div class="secondary-content">
                            <?= $this->Number->format($salidaHojaInventario->saldo_sal) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Ingreso Sal') ?>
                        <div class="secondary-content">
                            <?= $this->Number->format($salidaHojaInventario->ingreso_sal) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Egreso Sal') ?>
                        <div class="secondary-content">
                            <?= $this->Number->format($salidaHojaInventario->egreso_sal) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Donacion Sal') ?>
                        <div class="secondary-content">
                            <?= $this->Number->format($salidaHojaInventario->donacion_sal) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Devolucion Sal') ?>
                        <div class="secondary-content">
                            <?= $this->Number->format($salidaHojaInventario->devolucion_sal) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Saldo Total') ?>
                        <div class="secondary-content">
                            <?= $this->Number->format($salidaHojaInventario->saldo_total) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Fecha Sal') ?>
                        <div class="secondary-content">
                            <?= h($salidaHojaInventario->fecha_sal) ?>
                        </div>
                    </li>
                </ul>
        </div>
    </div>
</div>
