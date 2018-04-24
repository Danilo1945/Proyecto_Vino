<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UnidadMedida $unidadMedida
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
                    <li class="padding-action"><?= $this->Html->link(__('List Unidad Medida'), ['action' => 'index']) ?></li>
                </div>
            </div>
        </div>
    </div>
    <div class="col s12 m9">
        <div class="card darken-1">
            <div class="card-content black-text">
                <?= $this->Form->create($unidadMedida) ?>
                <span class="card-title green-text"><?= __('Add Unidad Medida') ?></span>

                <div class="input-field">
                    <?= $this->Form->control('nombre_umed') ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('detalle_umed') ?>
                </div>
                <?= $this->Form->button(__('Submit'), ['class' => 'btn waves-effect waves-light']) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
