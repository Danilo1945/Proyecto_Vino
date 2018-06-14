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
                    <li class="padding-action"><?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $unidadMedida->id],
                            ['confirm' => __('Are you sure you want to delete # {0}?', $unidadMedida->id)]
                            )
                            ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('List Unidad Medida'), ['action' => 'index']) ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('List Compra Mat Pri'), ['controller' => 'CompraMatPri', 'action' => 'index']) ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('New Compra Mat Pri'), ['controller' => 'CompraMatPri', 'action' => 'add']) ?></li>
                </div>
            </div>
        </div>
    </div>
    <div class="col s12 m9">
        <div class="card darken-1">
            <div class="card-content black-text">
                <?= $this->Form->create($unidadMedida) ?>
                <span class="card-title green-text"><?= __('Edit Unidad Medida') ?></span>

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
