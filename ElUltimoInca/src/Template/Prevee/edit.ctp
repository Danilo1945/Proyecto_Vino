<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Prevee $prevee
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
                            ['action' => 'delete', $prevee->id],
                            ['confirm' => __('Are you sure you want to delete # {0}?', $prevee->id)]
                            )
                            ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('List Prevee'), ['action' => 'index']) ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('List Proveedor'), ['controller' => 'Proveedor', 'action' => 'index']) ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('New Proveedor'), ['controller' => 'Proveedor', 'action' => 'add']) ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('List Materia Prima'), ['controller' => 'MateriaPrima', 'action' => 'index']) ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('New Materia Prima'), ['controller' => 'MateriaPrima', 'action' => 'add']) ?></li>
                </div>
            </div>
        </div>
    </div>
    <div class="col s12 m9">
        <div class="card darken-1">
            <div class="card-content black-text">
                <?= $this->Form->create($prevee) ?>
                <span class="card-title green-text"><?= __('Edit Prevee') ?></span>

                <div class="input-field">
                    <?= $this->Form->control('proveedor_id', ['options' => $proveedor, 'empty' => true]) ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('materia_prima_id', ['options' => $materiaPrima, 'empty' => true]) ?>
                </div>
                <?= $this->Form->button(__('Submit'), ['class' => 'btn waves-effect waves-light']) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
