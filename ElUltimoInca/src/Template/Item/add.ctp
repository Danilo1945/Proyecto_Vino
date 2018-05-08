<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Item $item
 */
?>
<div class="hide">
    
</div>
<div class="row">
    <div class="col s12 m3">
        <div class="card darken-1"id="abajo_menu">
            <div class="card-content white-text" id="abajo_menu">
                <span class="card-title green-text">ACCIONES</span>
                <div class="card-action">
                    <li class="padding-action"><?= $this->Html->link(__('LISTA DE ITEMS'), ['ACCION' => 'index']) ?></li>
                </div>
            </div>
        </div>
    </div>
    <div class="col s12 m9">
        <div class="card darken-1">
            <div class="card-content black-text">
                <?= $this->Form->create($item) ?>
                <span class="card-title black-text"><?= __('AGREGAR ITEM') ?></span>

                <div class="input-field">
                    <?= $this->Form->control('nom_item') ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('detalle_item') ?>
                </div>
                <?= $this->Form->button(__('Submit'), ['class' => 'btn waves-effect waves-light']) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
