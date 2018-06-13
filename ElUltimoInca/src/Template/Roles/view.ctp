<?php
/**
* @var \App\View\AppView $this
* @var \App\Model\Entity\Role $role
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
                    <li class="padding-action"><?= $this->Html->link(__('Edit Role'), ['action' => 'edit', $role->id]) ?> </li>
                    <li class="padding-action"><?= $this->Form->postLink(__('Delete Role'), ['action' => 'delete', $role->id], ['confirm' => __('Are you sure you want to delete # {0}?', $role->id)]) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('List Roles'), ['action' => 'index']) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('New Role'), ['action' => 'add']) ?> </li>
                </div>
            </div>
        </div>
    </div>
    <div class="col s12 m9">
        <div class="card darken-1">
            <div class="card-content black-text">
                <ul class="collection with-header">
                    <li class="collection-header">
                        <h4><?= h($role->id) ?></h4>
                    </li>
                    <li class="collection-item">
                        <?= __('Role') ?>
                        <div class="secondary-content">
                            <?= h($role->role) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Id') ?>
                        <div class="secondary-content">
                            <?= $this->Number->format($role->id) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Created') ?>
                        <div class="secondary-content">
                            <?= h($role->created) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Modified') ?>
                        <div class="secondary-content">
                            <?= h($role->modified) ?>
                        </div>
                    </li>
                </ul>
        </div>
    </div>
</div>
