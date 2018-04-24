<?php
/**
* @var \App\View\AppView $this
* @var \App\Model\Entity\CompraMatPri $compraMatPri
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
                    <li class="padding-action"><?= $this->Html->link(__('Edit Compra Mat Pri'), ['action' => 'edit', $compraMatPri->id]) ?> </li>
                    <li class="padding-action"><?= $this->Form->postLink(__('Delete Compra Mat Pri'), ['action' => 'delete', $compraMatPri->id], ['confirm' => __('Are you sure you want to delete # {0}?', $compraMatPri->id)]) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('List Compra Mat Pri'), ['action' => 'index']) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('New Compra Mat Pri'), ['action' => 'add']) ?> </li>
                </div>
            </div>
        </div>
    </div>
    <div class="col s12 m9">
        <div class="card darken-1">
            <div class="card-content black-text">
                <ul class="collection with-header">
                    <li class="collection-header">
                        <h4><?= h($compraMatPri->id) ?></h4>
                    </li>
                    <li class="collection-item">
                        <?= __('Observaciones Mat') ?>
                        <div class="secondary-content">
                            <?= h($compraMatPri->observaciones_mat) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Id') ?>
                        <div class="secondary-content">
                            <?= $this->Number->format($compraMatPri->id) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Precio U Mat') ?>
                        <div class="secondary-content">
                            <?= $this->Number->format($compraMatPri->precio_u_mat) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Precio Tot Mat') ?>
                        <div class="secondary-content">
                            <?= $this->Number->format($compraMatPri->precio_tot_mat) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Id Pro') ?>
                        <div class="secondary-content">
                            <?= $this->Number->format($compraMatPri->id_pro) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Id Tra') ?>
                        <div class="secondary-content">
                            <?= $this->Number->format($compraMatPri->id_tra) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Id Mat Prim') ?>
                        <div class="secondary-content">
                            <?= $this->Number->format($compraMatPri->id_mat_prim) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Fecha Mat') ?>
                        <div class="secondary-content">
                            <?= h($compraMatPri->fecha_mat) ?>
                        </div>
                    </li>
                </ul>
        </div>
    </div>
</div>
