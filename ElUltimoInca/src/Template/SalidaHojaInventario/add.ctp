<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SalidaHojaInventario $salidaHojaInventario
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
                    <li class="padding-action"><?= $this->Html->link(__('List Salida Hoja Inventario'), ['action' => 'index']) ?></li>
                </div>
            </div>
        </div>
    </div>
    <div class="col s12 m9">
        <div class="card darken-1">
            <div class="card-content black-text">
                <?= $this->Form->create($salidaHojaInventario) ?>
                <span class="card-title green-text"><?= __('Add Salida Hoja Inventario') ?></span>

                <div class="input-field">
                    <?= $this->Form->control('fecha_sal', ['type' => 'text', 'class' => 'datepicker']) ?>
                </div>

                <div class="input-field">
                    <?= $this->Form->control('saldo_sal') ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('ingreso_sal') ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('egreso_sal') ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('donacion_sal') ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('devolucion_sal') ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('saldo_total') ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('observaciones_sal') ?>
                </div>
                <?= $this->Form->button(__('Submit'), ['class' => 'btn waves-effect waves-light']) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>