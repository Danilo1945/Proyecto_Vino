<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CompraMatPri $compraMatPri
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
                    <li class="padding-action"><?= $this->Html->link(__('List Compra Mat Pri'), ['action' => 'index']) ?></li>
                </div>
            </div>
        </div>
    </div>
    <div class="col s12 m9">
        <div class="card darken-1">
            <div class="card-content black-text">
                <?= $this->Form->create($compraMatPri) ?>
                <span class="card-title green-text"><?= __('Add Compra Mat Pri') ?></span>

                <div class="input-field">
                    <?= $this->Form->control('fecha_mat', ['type' => 'text', 'class' => 'datepicker']) ?>
                </div>

                <div class="input-field">
                    <?= $this->Form->control('precio_u_mat') ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('precio_tot_mat') ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('observaciones_mat') ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('id_pro') ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('id_tra') ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('id_mat_prim') ?>
                </div>
                <?= $this->Form->button(__('Submit'), ['class' => 'btn waves-effect waves-light']) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
