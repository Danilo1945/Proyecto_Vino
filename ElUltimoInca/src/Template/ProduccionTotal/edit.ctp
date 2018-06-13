<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProduccionTotal $produccionTotal
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
                            ['action' => 'delete', $produccionTotal->id],
                            ['confirm' => __('Are you sure you want to delete # {0}?', $produccionTotal->id)]
                            )
                            ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('List Produccion Total'), ['action' => 'index']) ?></li>
                </div>
            </div>
        </div>
    </div>
    <div class="col s12 m9">
        <div class="card darken-1">
            <div class="card-content black-text">
                <?= $this->Form->create($produccionTotal) ?>
                <span class="card-title green-text"><?= __('Edit Produccion Total') ?></span>

                <div class="input-field">
                    <?= $this->Form->control('nombre_producto') ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('valor_total_producto') ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('valor_ultima_suma') ?>
                </div>
                <?= $this->Form->button(__('Submit'), ['class' => 'btn waves-effect waves-light']) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
