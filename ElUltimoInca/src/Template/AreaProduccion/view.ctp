<?php
/**
* @var \App\View\AppView $this
* @var \App\Model\Entity\AreaProduccion $areaProduccion
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
                    <li class="padding-action"><?= $this->Html->link(__('Edit Area Produccion'), ['action' => 'edit', $areaProduccion->id]) ?> </li>
                    <li class="padding-action"><?= $this->Form->postLink(__('Delete Area Produccion'), ['action' => 'delete', $areaProduccion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $areaProduccion->id)]) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('List Area Produccion'), ['action' => 'index']) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('New Area Produccion'), ['action' => 'add']) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('List Inventario Empresa'), ['controller' => 'InventarioEmpresa', 'action' => 'index']) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('New Inventario Empresa'), ['controller' => 'InventarioEmpresa', 'action' => 'add']) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('List Unidad Medida'), ['controller' => 'UnidadMedida', 'action' => 'index']) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('New Unidad Medida'), ['controller' => 'UnidadMedida', 'action' => 'add']) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('List Procesos'), ['controller' => 'Procesos', 'action' => 'index']) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('New Proceso'), ['controller' => 'Procesos', 'action' => 'add']) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('List Brix'), ['controller' => 'Brix', 'action' => 'index']) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('New Brix'), ['controller' => 'Brix', 'action' => 'add']) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('List Clase Vino'), ['controller' => 'ClaseVino', 'action' => 'index']) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('New Clase Vino'), ['controller' => 'ClaseVino', 'action' => 'add']) ?> </li>
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
                        <h4><?= h($areaProduccion->id) ?></h4>
                    </li>
                    <li class="collection-item">
                        <?= __('Inventario Empresa Id') ?>
                        <div class="secondary-content">
                            <?= $areaProduccion->has('inventario_empresa') ? $this->Html->link($areaProduccion->inventario_empresa->id, ['controller' => 'InventarioEmpresa', 'action' => 'view', $areaProduccion->inventario_empresa->id]) : '' ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Uni Medida Id') ?>
                        <div class="secondary-content">
                            <?= $areaProduccion->has('unidad_medida') ? $this->Html->link($areaProduccion->unidad_medida->id, ['controller' => 'UnidadMedida', 'action' => 'view', $areaProduccion->unidad_medida->id]) : '' ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Procesos Id') ?>
                        <div class="secondary-content">
                            <?= $areaProduccion->has('proceso') ? $this->Html->link($areaProduccion->proceso->id, ['controller' => 'Procesos', 'action' => 'view', $areaProduccion->proceso->id]) : '' ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Brix Id') ?>
                        <div class="secondary-content">
                            <?= $areaProduccion->has('brix') ? $this->Html->link($areaProduccion->brix->id, ['controller' => 'Brix', 'action' => 'view', $areaProduccion->brix->id]) : '' ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Clase Vino Id') ?>
                        <div class="secondary-content">
                            <?= $areaProduccion->has('clase_vino') ? $this->Html->link($areaProduccion->clase_vino->id, ['controller' => 'ClaseVino', 'action' => 'view', $areaProduccion->clase_vino->id]) : '' ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Trabajador Id') ?>
                        <div class="secondary-content">
                            <?= $areaProduccion->has('trabajador') ? $this->Html->link($areaProduccion->trabajador->id, ['controller' => 'Trabajador', 'action' => 'view', $areaProduccion->trabajador->id]) : '' ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Observaciones Area Pro') ?>
                        <div class="secondary-content">
                            <?= h($areaProduccion->observaciones_area_pro) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Id') ?>
                        <div class="secondary-content">
                            <?= $this->Number->format($areaProduccion->id) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Cantidad Litros') ?>
                        <div class="secondary-content">
                            <?= $this->Number->format($areaProduccion->cantidad_litros) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Temperatura Vino') ?>
                        <div class="secondary-content">
                            <?= $this->Number->format($areaProduccion->temperatura_vino) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Fecha Elaboracion') ?>
                        <div class="secondary-content">
                            <?= h($areaProduccion->fecha_elaboracion) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Fecha Control') ?>
                        <div class="secondary-content">
                            <?= h($areaProduccion->fecha_control) ?>
                        </div>
                    </li>
                </ul>
        </div>
    </div>
</div>
