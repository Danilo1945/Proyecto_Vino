<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Proveedor $proveedor
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
                    <li class="padding-action"><?= $this->Html->link(__('List Proveedor'), ['action' => 'index']) ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('List Empresa'), ['controller' => 'Empresa', 'action' => 'index']) ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('New Empresa'), ['controller' => 'Empresa', 'action' => 'add']) ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('List Compra Mat Pri'), ['controller' => 'CompraMatPri', 'action' => 'index']) ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('New Compra Mat Pri'), ['controller' => 'CompraMatPri', 'action' => 'add']) ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('List Prevee'), ['controller' => 'Prevee', 'action' => 'index']) ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('New Prevee'), ['controller' => 'Prevee', 'action' => 'add']) ?></li>
                </div>
            </div>
        </div>
    </div>
    <div class="col s12 m9">
        <div class="card darken-1">
            <div class="card-content black-text">
                <?= $this->Form->create($proveedor) ?>
                <span class="card-title green-text"><?= __('Add Proveedor') ?></span>

                <div class="input-field">
                    <?= $this->Form->control('cedula') ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('nombres_pro') ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('apellidos_pro') ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('telefono_pro') ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('email_pro') ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('empresa_id', ['options' => $empresa, 'empty' => true]) ?>
                </div>
                <?= $this->Form->button(__('Submit'), ['class' => 'btn waves-effect waves-light']) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
