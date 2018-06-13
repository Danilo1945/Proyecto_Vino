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
                <span class="card-title green-text">Actions</span>
                <div class="card-action">
                    <li class="padding-action"><?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $areaProduccion->id],
                            ['confirm' => __('Are you sure you want to delete # {0}?', $areaProduccion->id)]
                            )
                            ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('List Area Produccion'), ['action' => 'index']) ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('List Inventario Empresa'), ['controller' => 'InventarioEmpresa', 'action' => 'index']) ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('New Inventario Empresa'), ['controller' => 'InventarioEmpresa', 'action' => 'add']) ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('List Unidad Medida'), ['controller' => 'UnidadMedida', 'action' => 'index']) ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('New Unidad Medida'), ['controller' => 'UnidadMedida', 'action' => 'add']) ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('List Procesos'), ['controller' => 'Procesos', 'action' => 'index']) ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('New Proceso'), ['controller' => 'Procesos', 'action' => 'add']) ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('List Brix'), ['controller' => 'Brix', 'action' => 'index']) ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('New Brix'), ['controller' => 'Brix', 'action' => 'add']) ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('List Clase Vino'), ['controller' => 'ClaseVino', 'action' => 'index']) ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('New Clase Vino'), ['controller' => 'ClaseVino', 'action' => 'add']) ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('List Trabajador'), ['controller' => 'Trabajador', 'action' => 'index']) ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('New Trabajador'), ['controller' => 'Trabajador', 'action' => 'add']) ?></li>
                </div>
            </div>
        </div>
    </div>
    <div class="col s12 m9">
        <div class="card darken-1">
            <div class="card-content black-text">
                <?= $this->Form->create($areaProduccion) ?>
                <span class="card-title green-text"><?= __('Edit Area Produccion') ?></span>

                <div class="input-field">
                    <?= $this->Form->control('fecha_elaboracion', ['type' => 'text', 'class' => 'datepicker']) ?>
                </div>

                <div class="input-field">
                    <?= $this->Form->control('inventario_empresa_id', ['options' => $inventarioEmpresa, 'empty' => true]) ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('cantidad_litros') ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('uni_medida_id', ['options' => $unidadMedida, 'empty' => true]) ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('procesos_id', ['options' => $procesos, 'empty' => true]) ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('brix_id', ['options' => $brix, 'empty' => true]) ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('clase_vino_id', ['options' => $claseVino, 'empty' => true]) ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('temperatura_vino') ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('fecha_control', ['type' => 'text', 'class' => 'datepicker']) ?>
                </div>

                <div class="input-field">
                    <?= $this->Form->control('trabajador_id', ['options' => $trabajador, 'empty' => true]) ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('observaciones_area_pro') ?>
                </div>
                <?= $this->Form->button(__('Submit'), ['class' => 'btn waves-effect waves-light']) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
