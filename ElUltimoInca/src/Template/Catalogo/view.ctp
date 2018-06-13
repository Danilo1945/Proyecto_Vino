<?php
/**
* @var \App\View\AppView $this
* @var \App\Model\Entity\Catalogo $catalogo
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
                    <li class="padding-action"><?= $this->Html->link(__('Edit Catalogo'), ['action' => 'edit', $catalogo->id]) ?> </li>
                    <li class="padding-action"><?= $this->Form->postLink(__('Delete Catalogo'), ['action' => 'delete', $catalogo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $catalogo->id)]) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('List Catalogo'), ['action' => 'index']) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('New Catalogo'), ['action' => 'add']) ?> </li>
                </div>
            </div>
        </div>
    </div>
    <div class="col s12 m9">
        <div class="card darken-1">
            <div class="card-content black-text">
                <ul class="collection with-header">
                    <li class="collection-header">
                        <h4><?= h($catalogo->id) ?></h4>
                    </li>
                    <li class="collection-item">
                        <?= __('Descripcion') ?>
                        <div class="secondary-content">
                            <?= h($catalogo->Descripcion) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Id') ?>
                        <div class="secondary-content">
                            <?= $this->Number->format($catalogo->id) ?>
                        </div>
                    </li>
                </ul>
        </div>
    </div>
</div>
