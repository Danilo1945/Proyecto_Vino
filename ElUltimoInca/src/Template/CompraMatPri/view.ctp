<?php
/**
* @var \App\View\AppView $this
* @var \App\Model\Entity\CompraMatPri $compraMatPri
*/
?>
<div class="hide">
    
</div>
<div class="row">
    <div class="col s12 m3">
        <div class="card darken-1"id="abajo_menu">
            <div class="card-content white-text">
                <span class="card-title green-text"><?= __('Acciones') ?></span>
                <div class="card-action"id="abajo_menu">
                    <li class="padding-action"><?= $this->Html->link(__('Editar Compra Materia Prima'), ['action' => 'edit', $compraMatPri->id]) ?> </li>
                    <li class="padding-action"><?= $this->Form->postLink(__('Eliminar Compra Materia Prima'), ['action' => 'delete', $compraMatPri->id], ['confirm' => __('Desea Eliminar', $compraMatPri->id)]) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('Lista de Compra Materia Prima'), ['action' => 'index']) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('Nueva Compra Materia Prima'), ['action' => 'add']) ?> </li>
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
