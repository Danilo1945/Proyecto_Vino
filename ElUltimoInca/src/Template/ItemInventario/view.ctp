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
                <span class="card-title green-text"><?= __('Actions') ?></span>
                <div class="card-action">
                    <li class="padding-action"><?= $this->Html->link(__('Edit Item Inventario'), ['action' => 'edit', $itemInventario->id]) ?> </li>
                    <li class="padding-action"><?= $this->Form->postLink(__('Delete Item Inventario'), ['action' => 'delete', $itemInventario->id], ['confirm' => __('Are you sure you want to delete # {0}?', $itemInventario->id)]) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('List Item Inventario'), ['action' => 'index']) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('New Item Inventario'), ['action' => 'add']) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('List Inventario Empresa'), ['controller' => 'InventarioEmpresa', 'action' => 'index']) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('New Inventario Empresa'), ['controller' => 'InventarioEmpresa', 'action' => 'add']) ?> </li>
                </div>
            </div>
        </div>
    </div>
    <div class="col s12 m9">
        <div class="card darken-1">
            <div class="card-content black-text">
                <ul class="collection with-header">
                    <li class="collection-header">
                        <h4><?= h($itemInventario->id) ?></h4>
                    </li>
                    <li class="collection-item">
                        <?= __('Nom Item') ?>
                        <div class="secondary-content">
                            <?= h($itemInventario->nom_item) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Detalle Item') ?>
                        <div class="secondary-content">
                            <?= h($itemInventario->detalle_item) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Id') ?>
                        <div class="secondary-content">
                            <?= $this->Number->format($itemInventario->id) ?>
                        </div>
                    </li>
                </ul>
                <div class="card-content black-text">
                    <div class="green-text"><h5><?= __('Related Inventario Empresa') ?></h5></div>
                    <div class="collapsible-header"></div>
                    <?php if (!empty($itemInventario->inventario_empresa)): ?>
                    <table class="striped responsive-table">
                        <thead>
                            <tr>
                                <th scope="col"><?= __('Id') ?></th>
                                <th scope="col"><?= __('Nombre Art Inv') ?></th>
                                <th scope="col"><?= __('Descripcion Inv') ?></th>
                                <th scope="col"><?= __('Color Inv') ?></th>
                                <th scope="col"><?= __('Item Inventario Id') ?></th>
                                <th><?= __('Actions') ?></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($itemInventario->inventario_empresa as $inventarioEmpresa): ?>
                            <tr>
                                <td><?= h($inventarioEmpresa->id) ?></td>
                                <td><?= h($inventarioEmpresa->nombre_art_inv) ?></td>
                                <td><?= h($inventarioEmpresa->descripcion_inv) ?></td>
                                <td><?= h($inventarioEmpresa->color_inv) ?></td>
                                <td><?= h($inventarioEmpresa->item_inventario_id) ?></td>
                                <td><?= $product->has('category') ? $this->Html->link($product->category->name, ['controller' => 'Categories', 'action' => 'view', $product->category->id]) : '' ?></td>
                                <td>
                                <td>
                                    <?= $this->Html->link('<i class="material-icons" title="'. __('View') . '" >zoom_in</i>', ['controller' => 'InventarioEmpresa', 'action' => 'view', $inventarioEmpresa->id]) ?>
                                    <?= $this->Html->link('<i class="material-icons" title="'. __('Edit') . '" >create</i>', ['controller' => 'InventarioEmpresa', 'action' => 'edit', $inventarioEmpresa->id]) ?>
                                    <?= $this->Form->postLink('<i class="material-icons" title="'. __('Delete') . '" >delete</i>', 'action' => 'delete', $inventarioEmpresa->id], ['confirm' => __('Are you sure you want to delete # {0}?', $inventarioEmpresa->id)]) ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
