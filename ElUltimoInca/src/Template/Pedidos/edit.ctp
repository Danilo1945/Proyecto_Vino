<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pedido $pedido
 */
?>
<div class="hide">

</div>
<div class="row">
    <div class="col s12 m3">
        <div class="card darken-1">
            <div class="card-content white-text">
                <span class="card-title green-text">Actions</span>
                <div class="card-action">
                    <li class="padding-action"><?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $pedido->id],
                            ['confirm' => __('Are you sure you want to delete # {0}?', $pedido->id)]
                            )
                            ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('List Pedidos'), ['action' => 'index']) ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('List Trabajador'), ['controller' => 'Trabajador', 'action' => 'index']) ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('New Trabajador'), ['controller' => 'Trabajador', 'action' => 'add']) ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
                </div>
            </div>
        </div>
    </div>
    <div class="col s12 m9">
        <div class="card darken-1">
            <div class="card-content black-text">
                <?= $this->Form->create($pedido) ?>
                <span class="card-title green-text"><?= __('Edit Pedido') ?></span>

                <div class="input-field">
                    <?= $this->Form->control('fecha_ven', ['type' => 'text', 'class' => 'datepicker']) ?>
                </div>

                <div class="input-field">
                    <?= $this->Form->control('trabajador_id', ['options' => $trabajador, 'empty' => true]) ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('users_id', ['options' => $users, 'empty' => true]) ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('estado_cuenta') ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('precio_uni') ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('precio_total') ?>
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
