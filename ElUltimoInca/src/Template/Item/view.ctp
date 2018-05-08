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
            <div class="card-content white-text"id="abajo_menu">
                <span class="card-title green-text"><?= __('ACCIONES') ?></span>
                <div class="card-action">
                    <li class="padding-action"><?= $this->Html->link(__('Editar Item'), ['Accion' => 'Editar', $item->id]) ?> </li>
                    <li class="padding-action"><?= $this->Form->postLink(__('Eliminar Item'), ['Accion' => 'Eliminar', $item->id], ['confirm' => __('Are you sure you want to delete # {0}?', $item->id)]) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('List Item'), ['action' => 'index']) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('Nuevo Item'), ['action' => 'add']) ?> </li>
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
