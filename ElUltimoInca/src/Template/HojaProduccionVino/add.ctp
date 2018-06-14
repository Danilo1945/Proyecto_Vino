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
                <span class="card-title green-text">Actions</span>
                <div class="card-action">
                    <li class="padding-action"><?= $this->Html->link(__('List Hoja Produccion Vino'), ['action' => 'index']) ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('List Inventario Empresa'), ['controller' => 'InventarioEmpresa', 'action' => 'index']) ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('New Inventario Empresa'), ['controller' => 'InventarioEmpresa', 'action' => 'add']) ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('List Procesos'), ['controller' => 'Procesos', 'action' => 'index']) ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('New Proceso'), ['controller' => 'Procesos', 'action' => 'add']) ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('List Trabajador'), ['controller' => 'Trabajador', 'action' => 'index']) ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('New Trabajador'), ['controller' => 'Trabajador', 'action' => 'add']) ?></li>
                </div>
            </div>
        </div>
    </div>
    <div class="col s12 m9">
        <div class="card darken-1">
            <div class="card-content black-text">
                <?= $this->Form->create($hojaProduccionVino) ?>
                <span class="card-title green-text"><?= __('Add Hoja Produccion Vino') ?></span>

                <div class="input-field">
                    <?= $this->Form->control('inventario_empresa_id', ['options' => $inventarioEmpresa, 'empty' => true]) ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('procesos_id', ['options' => $procesos, 'empty' => true]) ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('trabajador_id', ['options' => $trabajador, 'empty' => true]) ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('fecha_pro', ['type' => 'text', 'class' => 'datepicker']) ?>
                </div>

                <div class="input-field">
                    <?= $this->Form->control('cant_fruta_klg') ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('cant_agua_lts') ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('cant_azucar_klg') ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('cant_levadura_grms') ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('numero_procesos') ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('observacion_pro') ?>
                </div>
                <?= $this->Form->button(__('Submit'), ['class' => 'btn waves-effect waves-light']) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
