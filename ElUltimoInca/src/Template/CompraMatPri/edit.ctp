<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CompraMatPri $compraMatPri
 */
?>
<div class="hide">
   
</div>
<div class="row">
    <div class="col s12 m3">
        <div class="card darken-1"id="abajo_menu">
            <div class="card-content white-text">
                <span class="card-title green-text">Acciones</span>
                <div class="card-action"id="abajo_menu">
                    <li class="padding-action"><?= $this->Form->postLink(
                            __('Eliminar'),
                            ['action' => 'delete', $compraMatPri->id],
                            ['confirm' => __('Desea Eliminar', $compraMatPri->id)]
                            )
                            ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('Lista de Compra de Materia Prima'), ['action' => 'index']) ?></li>
                </div>
            </div>
        </div>
    </div>
    <div class="col s12 m9">
        <div class="card darken-1">
            <div class="card-content black-text">
                <?= $this->Form->create($compraMatPri) ?>
                <span class="card-title green-text"><?= __('Editar Compra Mat Pri') ?></span>

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
