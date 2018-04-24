<?php
/**
* @var \App\View\AppView $this
* @var \App\Model\Entity\Item $item
*/
?>
<div class="hide">
    <?= $this->layout = "Materialize.materialize"; ?>
</div>
<div class="row">
    <div class="col s12 m3">
        <div class="card darken-1">
            <div class="card-content white-text">
                <span class="card-title green-text"><?= __('Actions') ?></span>
                <div class="card-action">
                    <li class="padding-action"><?= $this->Html->link(__('Edit Item'), ['action' => 'edit', $item->id]) ?> </li>
                    <li class="padding-action"><?= $this->Form->postLink(__('Delete Item'), ['action' => 'delete', $item->id], ['confirm' => __('Are you sure you want to delete # {0}?', $item->id)]) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('List Item'), ['action' => 'index']) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('New Item'), ['action' => 'add']) ?> </li>
                </div>
            </div>
        </div>
    </div>
    <div class="col s12 m9">
        <div class="card darken-1">
            <div class="card-content black-text">
                <ul class="collection with-header">
                    <li class="collection-header">
                        <h4><?= h($item->id) ?></h4>
                    </li>
                    <li class="collection-item">
                        <?= __('Nom Item') ?>
                        <div class="secondary-content">
                            <?= h($item->nom_item) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Detalle Item') ?>
                        <div class="secondary-content">
                            <?= h($item->detalle_item) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Id') ?>
                        <div class="secondary-content">
                            <?= $this->Number->format($item->id) ?>
                        </div>
                    </li>
                </ul>
        </div>
    </div>
</div>
