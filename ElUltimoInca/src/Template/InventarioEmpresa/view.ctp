<?php
/**
* @var \App\View\AppView $this
* @var \App\Model\Entity\InventarioEmpresa $inventarioEmpresa
*/
?>
<div class="hide">
    
</div>
<div class="row">
    <div class="col s12 m3">
        <div class="card darken-1 " id="abajo_menu">
            <div class="card-content white-text" id="abajo_menu">
                <span class="card-title black-text" id="abajo_menu"><?= __('Acciones') ?></span>
                <div class="card-action" id="abajo_menu">
                    <li class="padding-action"><?= $this->Html->link(__('Editar Inventario Empresa'), ['action' => 'edit', $inventarioEmpresa->id]) ?> </li>
                    <li class="padding-action"><?= $this->Form->postLink(__('Eliminar Inventario Empresa'), ['action' => 'delete', $inventarioEmpresa->id], ['confirm' => __('Esta seguro que quiere borrarlo # {0}?', $inventarioEmpresa->id)]) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('Lista del Inventario Empresa'), ['action' => 'index']) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('Nuevo Inventario Empresa'), ['action' => 'add']) ?> </li>
                </div>
            </div>
        </div>
    </div>
    <div class="col s12 m9">
        <div class="card darken-1" id="abajo_menu">
            <div class="card-content black-text" id="abajo_menu">
                <ul class="collection with-header">
                    <li class="collection-header">
                        <h4><?= h($inventarioEmpresa->id) ?></h4>
                    </li>
                    <li class="collection-item">
                        <?= __('Nombre Art Inv') ?>
                        <div class="secondary-content">
                            <?= h($inventarioEmpresa->nombre_art_inv) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Descripcion Inv') ?>
                        <div class="secondary-content">
                            <?= h($inventarioEmpresa->descripcion_inv) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Color Inv') ?>
                        <div class="secondary-content">
                            <?= h($inventarioEmpresa->color_inv) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Id') ?>
                        <div class="secondary-content">
                            <?= $this->Number->format($inventarioEmpresa->id) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Id Item') ?>
                        <div class="secondary-content">
                            <?= $this->Number->format($inventarioEmpresa->id_item) ?>
                        </div>
                    </li>
                </ul>
        </div>
    </div>
</div>
