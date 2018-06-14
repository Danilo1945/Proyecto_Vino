<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\InventarioEmpresa $inventarioEmpresa
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
                    <li class="padding-action"><?= $this->Html->link(__('List Inventario Empresa'), ['action' => 'index']) ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('List Item Inventario'), ['controller' => 'ItemInventario', 'action' => 'index']) ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('New Item Inventario'), ['controller' => 'ItemInventario', 'action' => 'add']) ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('List Area Produccion'), ['controller' => 'AreaProduccion', 'action' => 'index']) ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('New Area Produccion'), ['controller' => 'AreaProduccion', 'action' => 'add']) ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('List Hoja Produccion Vino'), ['controller' => 'HojaProduccionVino', 'action' => 'index']) ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('New Hoja Produccion Vino'), ['controller' => 'HojaProduccionVino', 'action' => 'add']) ?></li>
                </div>
            </div>
        </div>
    </div>
    <div class="col s12 m9">
        <div class="card darken-1">
            <div class="card-content black-text">
                <?= $this->Form->create($inventarioEmpresa) ?>
                <span class="card-title green-text"><?= __('Add Inventario Empresa') ?></span>

                <div class="input-field">
                    <?= $this->Form->control('nombre_art_inv') ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('descripcion_inv') ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('color_inv') ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('item_inventario_id', ['options' => $itemInventario, 'empty' => true]) ?>
                </div>
                <?= $this->Form->button(__('Submit'), ['class' => 'btn waves-effect waves-light']) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
