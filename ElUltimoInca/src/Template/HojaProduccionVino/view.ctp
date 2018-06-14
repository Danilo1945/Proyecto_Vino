<?php
/**
* @var \App\View\AppView $this
* @var \App\Model\Entity\HojaProduccionVino $hojaProduccionVino
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
                    <li class="padding-action"><?= $this->Html->link(__('Edit Hoja Produccion Vino'), ['action' => 'edit', $hojaProduccionVino->id]) ?> </li>
                    <li class="padding-action"><?= $this->Form->postLink(__('Delete Hoja Produccion Vino'), ['action' => 'delete', $hojaProduccionVino->id], ['confirm' => __('Are you sure you want to delete # {0}?', $hojaProduccionVino->id)]) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('List Hoja Produccion Vino'), ['action' => 'index']) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('New Hoja Produccion Vino'), ['action' => 'add']) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('List Inventario Empresa'), ['controller' => 'InventarioEmpresa', 'action' => 'index']) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('New Inventario Empresa'), ['controller' => 'InventarioEmpresa', 'action' => 'add']) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('List Procesos'), ['controller' => 'Procesos', 'action' => 'index']) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('New Proceso'), ['controller' => 'Procesos', 'action' => 'add']) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('List Trabajador'), ['controller' => 'Trabajador', 'action' => 'index']) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('New Trabajador'), ['controller' => 'Trabajador', 'action' => 'add']) ?> </li>
                </div>
            </div>
        </div>
    </div>
    <div class="col s12 m9">
        <div class="card darken-1">
            <div class="card-content black-text">
                <ul class="collection with-header">
                    <li class="collection-header">
                        <h4><?= h($hojaProduccionVino->id) ?></h4>
                    </li>
                    <li class="collection-item">
                        <?= __('Inventario Empresa Id') ?>
                        <div class="secondary-content">
                            <?= $hojaProduccionVino->has('inventario_empresa') ? $this->Html->link($hojaProduccionVino->inventario_empresa->id, ['controller' => 'InventarioEmpresa', 'action' => 'view', $hojaProduccionVino->inventario_empresa->id]) : '' ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Procesos Id') ?>
                        <div class="secondary-content">
                            <?= $hojaProduccionVino->has('proceso') ? $this->Html->link($hojaProduccionVino->proceso->id, ['controller' => 'Procesos', 'action' => 'view', $hojaProduccionVino->proceso->id]) : '' ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Trabajador Id') ?>
                        <div class="secondary-content">
                            <?= $hojaProduccionVino->has('trabajador') ? $this->Html->link($hojaProduccionVino->trabajador->id, ['controller' => 'Trabajador', 'action' => 'view', $hojaProduccionVino->trabajador->id]) : '' ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Observacion Pro') ?>
                        <div class="secondary-content">
                            <?= h($hojaProduccionVino->observacion_pro) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Id') ?>
                        <div class="secondary-content">
                            <?= $this->Number->format($hojaProduccionVino->id) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Cant Fruta Klg') ?>
                        <div class="secondary-content">
                            <?= $this->Number->format($hojaProduccionVino->cant_fruta_klg) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Cant Agua Lts') ?>
                        <div class="secondary-content">
                            <?= $this->Number->format($hojaProduccionVino->cant_agua_lts) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Cant Azucar Klg') ?>
                        <div class="secondary-content">
                            <?= $this->Number->format($hojaProduccionVino->cant_azucar_klg) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Cant Levadura Grms') ?>
                        <div class="secondary-content">
                            <?= $this->Number->format($hojaProduccionVino->cant_levadura_grms) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Numero Procesos') ?>
                        <div class="secondary-content">
                            <?= $this->Number->format($hojaProduccionVino->numero_procesos) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Fecha Pro') ?>
                        <div class="secondary-content">
                            <?= h($hojaProduccionVino->fecha_pro) ?>
                        </div>
                    </li>
                </ul>
        </div>
    </div>
</div>
