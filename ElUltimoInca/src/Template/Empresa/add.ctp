<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Empresa $empresa
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
                    <li class="padding-action"><?= $this->Html->link(__('List Empresa'), ['action' => 'index']) ?></li>
                </div>
            </div>
        </div>
    </div>
    <div class="col s12 m9">
        <div class="card darken-1">
            <div class="card-content black-text">
                <?= $this->Form->create($empresa) ?>
                <span class="card-title green-text"><?= __('Add Empresa') ?></span>

                <div class="input-field">
                    <?= $this->Form->control('nombre') ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('direccion') ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('email', ['type' => 'email', 'class' => 'validate']) ?>
                </div>
                <?= $this->Form->button(__('Submit'), ['class' => 'btn waves-effect waves-light']) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
