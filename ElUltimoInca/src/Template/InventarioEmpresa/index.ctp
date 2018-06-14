<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\InventarioEmpresa[]|\Cake\Collection\CollectionInterface $inventarioEmpresa
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
                    <li class="padding-action"><?= $this->Html->link(__('New Inventario Empresa'), ['action' => 'add']) ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('List Item Inventario'), ['controller' => 'ItemInventario', 'action' => 'index']) ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('New Item Inventario'), ['controller' => 'ItemInventario', 'action' => 'add']) ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('List Area Produccion'), ['controller' => 'AreaProduccion', 'action' => 'index']) ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('New Area Produccion'), ['controller' => 'AreaProduccion', 'action' => 'add']) ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('List Hoja Produccion Vino'), ['controller' => 'HojaProduccionVino', 'action' => 'index']) ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('New Hoja Produccion Vino'), ['controller' => 'HojaProduccionVino', 'action' => 'add']) ?></li>
                </div>
            </div>
        </div>
    </div>

    <div class="col s12 m9">
        <div class="card darken-1">
            <div class="card-content black-text">
                <span class="card-title green-text"><?= __('Inventario Empresa') ?></span>
                <table class="responsive-table">
                    <thead>
                        <tr>
                            <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('nombre_art_inv') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('descripcion_inv') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('color_inv') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('item_inventario_id') ?></th>
                            <th><?= __('Actions') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($inventarioEmpresa as $inventarioEmpresa): ?>
                        <tr>
                            <td><?= $this->Number->format($inventarioEmpresa->id) ?></td>
                            <td><?= h($inventarioEmpresa->nombre_art_inv) ?></td>
                            <td><?= h($inventarioEmpresa->descripcion_inv) ?></td>
                            <td><?= h($inventarioEmpresa->color_inv) ?></td>
                            <td><?= $inventarioEmpresa->has('item_inventario') ? $this->Html->link($inventarioEmpresa->item_inventario->id, ['controller' => 'ItemInventario', 'action' => 'view', $inventarioEmpresa->item_inventario->id]) : '' ?></td>
                            <td>
                                <?= $this->Html->link('<i class="material-icons" title="'. __('View') . '" >zoom_in</i>', ['action' => 'view', $inventarioEmpresa->id], ['escape' => false]) ?>
                                <?= $this->Html->link('<i class="material-icons" title="'. __('Edit') . '" >create</i>', ['action' => 'edit', $inventarioEmpresa->id], ['escape' => false]) ?>
                                <?= $this->Form->postLink('<i class="material-icons" title="'. __('Delete') . '" >delete</i>', ['action' => 'delete', $inventarioEmpresa->id], ['confirm' => __('Are you sure you want to delete # {0}?', $inventarioEmpresa->id), 'escape' => false]) ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="center">
            <ul class="pagination">
                <?= $this->Paginator->first('<i class="material-icons">first_page</i>', ['class' => 'waves-effect', 'escape' => false]) ?>
                <?= $this->Paginator->prev('<i class="material-icons">chevron_left</i>', ['class' => 'waves-effect', 'escape' => false]) ?>
                <?= $this->Paginator->numbers() ?>
                <?= $this->Paginator->next('<i class="material-icons">chevron_right</i>', ['class' => 'waves-effect', 'escape' => false]) ?>
                <?= $this->Paginator->last('<i class="material-icons">last_page</i>', ['class' => 'waves-effect', 'escape' => false]) ?>
            </ul>
        </div>

        <p class="right"><?= $this->Paginator->counter(['format' => __('Page  of , showing  record(s) out of  total')]) ?></p>
    </div>
</div>
