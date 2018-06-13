<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\HojaProductoTerminado $hojaProductoTerminado
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
                            ['action' => 'delete', $hojaProductoTerminado->id],
                            ['confirm' => __('Are you sure you want to delete # {0}?', $hojaProductoTerminado->id)]
                            )
                            ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('List Hoja Producto Terminado'), ['action' => 'index']) ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('List Pasteurizacion'), ['controller' => 'Pasteurizacion', 'action' => 'index']) ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('New Pasteurizacion'), ['controller' => 'Pasteurizacion', 'action' => 'add']) ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('List Lote'), ['controller' => 'Lote', 'action' => 'index']) ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('New Lote'), ['controller' => 'Lote', 'action' => 'add']) ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('List Brix'), ['controller' => 'Brix', 'action' => 'index']) ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('New Brix'), ['controller' => 'Brix', 'action' => 'add']) ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('List Trabajador'), ['controller' => 'Trabajador', 'action' => 'index']) ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('New Trabajador'), ['controller' => 'Trabajador', 'action' => 'add']) ?></li>
                </div>
            </div>
        </div>
    </div>
    <div class="col s12 m9">
        <div class="card darken-1">
            <div class="card-content black-text">
                <?= $this->Form->create($hojaProductoTerminado) ?>
                <span class="card-title green-text"><?= __('Edit Hoja Producto Terminado') ?></span>

                <div class="input-field">
                    <?= $this->Form->control('nombre') ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('fecha', ['type' => 'text', 'class' => 'datepicker']) ?>
                </div>

                <div class="input-field">
                    <?= $this->Form->control('valor_IVA') ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('valor_ICE') ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('pasteurizacion_id', ['options' => $pasteurizacion, 'empty' => true]) ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('fecha_elb', ['type' => 'text', 'class' => 'datepicker']) ?>
                </div>

                <div class="input-field">
                    <?= $this->Form->control('lote_id', ['options' => $lote, 'empty' => true]) ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('nombre_cantidad') ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('valor_cantidad') ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('brix_id', ['options' => $brix, 'empty' => true]) ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('nombre_etiqueta') ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('cantidad_etiqueta') ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('nombre_corcho') ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('cantidad_corcho') ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('cantidad_capuchon') ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('cantidad_cintas_SRI') ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('cantidad_cintas_ultimoInca') ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('trabajador_id', ['options' => $trabajador, 'empty' => true]) ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('observaciones') ?>
                </div>
                <?= $this->Form->button(__('Submit'), ['class' => 'btn waves-effect waves-light']) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
