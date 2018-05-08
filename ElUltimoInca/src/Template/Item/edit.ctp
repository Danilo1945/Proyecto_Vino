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
        <div class="card darken-1" id="abajo_menu">
            <div class="card-content white-text" id="abajo_menu">
                <span class="card-title green-text">ACCION</span>
                <div class="card-action">
                    <li class="padding-action"><?= $this->Form->postLink(
                            __('Eliminar'),
                            ['action' => 'delete', $item->id],
                            ['confirm' => __('Are you sure you want to delete # {0}?', $item->id)]
                            )
                            ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('List Item'), ['action' => 'index']) ?></li>
                </div>
            </div>
        </div>
    </div>
    <div class="col s12 m9">
        <div class="card darken-1">
            <div class="card-content black-text">
                <?= $this->Form->create($item) ?>
                <span class="card-title green-text"><?= __('EDITAR ITEMS') ?></span>

                <div class="input-field">
                    <?= $this->Form->control('Nom_item') ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('Detalle_item') ?>
                </div>
                <?= $this->Form->button(__('Submit'), ['class' => 'btn waves-effect waves-light']) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
