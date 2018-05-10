<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Catalogo $catalogo
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
                    <li class="padding-action"><?= $this->Html->link(__('List Catalogo'), ['action' => 'index']) ?></li>
                </div>
            </div>
        </div>
    </div>
    <div class="col s12 m9">
        <div class="card darken-1">
            <div class="card-content black-text">
                <?= $this->Form->create($catalogo) ?>
                <span class="card-title green-text"><?= __('Add Catalogo') ?></span>

                <div class="input-field">
                    <?= $this->Form->control('Descripcion') ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('id_pro_ter') ?>
                </div>
                <?= $this->Form->button(__('Submit'), ['class' => 'btn waves-effect waves-light']) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
