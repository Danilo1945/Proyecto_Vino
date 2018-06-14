<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MateriaPrima $materiaPrima
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
                            ['action' => 'delete', $materiaPrima->id],
                            ['confirm' => __('Are you sure you want to delete # {0}?', $materiaPrima->id)]
                            )
                            ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('List Materia Prima'), ['action' => 'index']) ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('List Compra Mat Pri'), ['controller' => 'CompraMatPri', 'action' => 'index']) ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('New Compra Mat Pri'), ['controller' => 'CompraMatPri', 'action' => 'add']) ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('List Prevee'), ['controller' => 'Prevee', 'action' => 'index']) ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('New Prevee'), ['controller' => 'Prevee', 'action' => 'add']) ?></li>
                </div>
            </div>
        </div>
    </div>
    <div class="col s12 m9">
        <div class="card darken-1">
            <div class="card-content black-text">
                <?= $this->Form->create($materiaPrima) ?>
                <span class="card-title green-text"><?= __('Edit Materia Prima') ?></span>

                <div class="input-field">
                    <?= $this->Form->control('nombre_mat_pri') ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('descripcion_mat_pri') ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('contidad') ?>
                </div>
                <?= $this->Form->button(__('Submit'), ['class' => 'btn waves-effect waves-light']) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
