<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ItemInventario $itemInventario
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
                            ['action' => 'delete', $itemInventario->id],
                            ['confirm' => __('Are you sure you want to delete # {0}?', $itemInventario->id)]
                            )
                            ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('List Item Inventario'), ['action' => 'index']) ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('List Inventario Empresa'), ['controller' => 'InventarioEmpresa', 'action' => 'index']) ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('New Inventario Empresa'), ['controller' => 'InventarioEmpresa', 'action' => 'add']) ?></li>
                </div>
            </div>
        </div>
    </div>
    <div class="col s12 m9">
        <div class="card darken-1">
            <div class="card-content black-text">
                <?= $this->Form->create($itemInventario) ?>
                <span class="card-title green-text"><?= __('Edit Item Inventario') ?></span>

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
