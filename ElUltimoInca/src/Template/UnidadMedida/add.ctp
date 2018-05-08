<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UnidadMedida $unidadMedida
 */
?>
<div class="hide">
    
</div>
<div class="row">
    <div class="col s12 m3">
        <div class="card darken-1">
            <div class="card-content white-text">
                <span class="card-title green-text">Acciones</span>
                <div class="card-action">
                    <li class="padding-action"><?= $this->Html->link(__('Lista de Unidad de Medida'), ['action' => 'index']) ?></li>
                </div>
            </div>
        </div>
    </div>
    <div class="col s12 m9">
        <div class="card darken-1">
            <div class="card-content black-text">
                <?= $this->Form->create($unidadMedida) ?>
                <span class="card-title green-text"><?= __('Añadir Unidad de Medida') ?></span>

                <div class="input-field">
                    <?= $this->Form->control('Nombre U/M') ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('Detalle U/M') ?>
                </div>
                <?= $this->Form->button(__('Enviar'), ['class' => 'btn waves-effect waves-light']) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
