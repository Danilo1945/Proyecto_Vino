<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pasteurizacion $pasteurizacion
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
                            ['action' => 'delete', $pasteurizacion->id],
                            ['confirm' => __('Are you sure you want to delete # {0}?', $pasteurizacion->id)]
                            )
                            ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('List Pasteurizacion'), ['action' => 'index']) ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('List Hoja Producto Terminado'), ['controller' => 'HojaProductoTerminado', 'action' => 'index']) ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('New Hoja Producto Terminado'), ['controller' => 'HojaProductoTerminado', 'action' => 'add']) ?></li>
                </div>
            </div>
        </div>
    </div>
    <div class="col s12 m9">
        <div class="card darken-1">
            <div class="card-content black-text">
                <?= $this->Form->create($pasteurizacion) ?>
                <span class="card-title green-text"><?= __('Edit Pasteurizacion') ?></span>

                <div class="input-field">
                    <?= $this->Form->control('valor') ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('detalle') ?>
                </div>
                <?= $this->Form->button(__('Submit'), ['class' => 'btn waves-effect waves-light']) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
