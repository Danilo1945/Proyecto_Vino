<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ventum $ventum
 */
?>
<div class="hide">
    
</div>
<div class="row">
    <div class="col s12 m3">
        <div class="card darken-1" id="abajo_menu">
            <div class="card-content white-text">
                <span class="card-title green-text">Acciones</span>
                <div class="card-action" id="abajo_menu">
                    <li class="padding-action"><?= $this->Form->postLink(
                            __('Eliminar'),
                            ['action' => 'delete', $ventum->id],
                            ['confirm' => __('Desea Eliminar', $ventum->id)]
                            )
                            ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('Lista Venta'), ['action' => 'index']) ?></li>
                </div>
            </div>
        </div>
    </div>
    <div class="col s12 m9">
        <div class="card darken-1">
            <div class="card-content black-text">
                <?= $this->Form->create($ventum) ?>
                <span class="card-title green-text"><?= __('Editar Venta') ?></span>

                <div class="input-field">
                    <?= $this->Form->control('fecha_ven', ['type' => 'text', 'class' => 'datepicker']) ?>
                </div>

                <div class="input-field">
                    <?= $this->Form->control('id_tra') ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('Idcliente') ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('id_pro_ter') ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('precio_uni') ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('precio_total') ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('estado_cuenta') ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('valor_donacion_vent') ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('observaciones_ven') ?>
                </div>
                <?= $this->Form->button(__('Submit'), ['class' => 'btn waves-effect waves-light']) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
