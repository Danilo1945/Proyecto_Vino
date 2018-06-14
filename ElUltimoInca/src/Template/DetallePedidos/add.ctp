<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DetallePedido $detallePedido
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
                    <li class="padding-action"><?= $this->Html->link(__('List Detalle Pedidos'), ['action' => 'index']) ?></li>
                </div>
            </div>
        </div>
    </div>
    <div class="col s12 m9">
        <div class="card darken-1">
            <div class="card-content black-text">
                <?= $this->Form->create($detallePedido) ?>
                <span class="card-title green-text"><?= __('Add Detalle Pedido') ?></span>

                <div class="input-field">
                    <?= $this->Form->control('cantidad') ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('detalle') ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('id_pedidos') ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('id_unidad_medida') ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('id_produccion_total') ?>
                </div>
                <?= $this->Form->button(__('Submit'), ['class' => 'btn waves-effect waves-light']) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
