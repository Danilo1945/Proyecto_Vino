<?php
/**
* @var \App\View\AppView $this
* @var \App\Model\Entity\Salida $salida
*/
?>
<div class="hide">
   
</div>
<div class="row">
    <div class="col s12 m3">
        <div class="card darken-1" id="abajo_menu">
            <div class="card-content white-text">
                <span class="card-title green-text"><?= __('Actions') ?></span>
                <div class="card-action" id="abajo_menu">
                    <li class="padding-action"><?= $this->Html->link(__('Edit Salida'), ['action' => 'edit', $salida->id]) ?> </li>
                    <li class="padding-action"><?= $this->Form->postLink(__('Delete Salida'), ['action' => 'delete', $salida->id], ['confirm' => __('Are you sure you want to delete # {0}?', $salida->id)]) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('List Salidas'), ['action' => 'index']) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('New Salida'), ['action' => 'add']) ?> </li>
                </div>
            </div>
        </div>
    </div>
    <div class="col s12 m9">
        <div class="card darken-1">
            <div class="card-content black-text">
                <ul class="collection with-header">
                    <li class="collection-header">
                        <h4><?= h($salida->id) ?></h4>
                    </li>
                    <li class="collection-item">
                        <?= __('Observaciones Sal') ?>
                        <div class="secondary-content">
                            <?= h($salida->observaciones_sal) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Id') ?>
                        <div class="secondary-content">
                            <?= $this->Number->format($salida->id) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Saldo Sal') ?>
                        <div class="secondary-content">
                            <?= $this->Number->format($salida->saldo_sal) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Ingreso Sal') ?>
                        <div class="secondary-content">
                            <?= $this->Number->format($salida->ingreso_sal) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Egreso Sal') ?>
                        <div class="secondary-content">
                            <?= $this->Number->format($salida->egreso_sal) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Donacion Sal') ?>
                        <div class="secondary-content">
                            <?= $this->Number->format($salida->donacion_sal) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Devolucion Sal') ?>
                        <div class="secondary-content">
                            <?= $this->Number->format($salida->devolucion_sal) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Saldo Total') ?>
                        <div class="secondary-content">
                            <?= $this->Number->format($salida->saldo_total) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Fecha Sal') ?>
                        <div class="secondary-content">
                            <?= h($salida->fecha_sal) ?>
                        </div>
                    </li>
                </ul>
        </div>
    </div>
</div>
