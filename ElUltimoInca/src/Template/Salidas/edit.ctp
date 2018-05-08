<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Salida $salida
 */
?>
<div class="hide">
    
</div>
<div class="row">
    <div class="col s12 m3">
        <div class="card darken-1">
            <div class="card-content white-text">
                <span class="card-title green-text">Actions</span>
                <div class="card-action" id="abajo_menu">
                    <li class="padding-action"><?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $salida->id],
                            ['confirm' => __('Are you sure you want to delete # {0}?', $salida->id)]
                            )
                            ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('List Salidas'), ['action' => 'index']) ?></li>
                </div>
            </div>
        </div>
    </div>
    <div class="col s12 m9">
        <div class="card darken-1">
            <div class="card-content black-text">
                <?= $this->Form->create($salida) ?>
                <span class="card-title green-text"><?= __('Edit Salida') ?></span>

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
