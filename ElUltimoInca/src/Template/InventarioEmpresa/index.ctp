<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\InventarioEmpresa[]|\Cake\Collection\CollectionInterface $inventarioEmpresa
 */
?>
<div class="hide">
    
</div>
<div class="row">
    <div class="col s12 m3">
        <div class="card darken-1" id="abajo_menu">
            <div class="card-content white-text" id="abajo_menu">
                <span class="card-title green-text" id="abajo_menu">Acciones</span>
                <div class="card-action" id="abajo_menu">
                    <li class="padding-action"><?= $this->Html->link(__('Nuevo Inventario Empresa'), ['action' => 'add']) ?></li>
                </div>
            </div>
        </div>
    </div>

    <div class="col s12 m9">
        <div class="card darken-1" id="abajo_menu">
            <div class="card-content black-text" id="abajo_menu">
                <span class="card-title green-text" id="abajo_menu"><?= __('Inventario Empresa') ?></span>
                <table class="responsive-table">
                    <thead>
                        <tr>
                            <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('nombre_art_inv') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('descripcion_inv') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('color_inv') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('id_item') ?></th>
                            <th><?= __('Acciones') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($inventarioEmpresa as $inventarioEmpresa): ?>
                        <tr>
                            <td><?= $this->Number->format($inventarioEmpresa->id) ?></td>
                            <td><?= h($inventarioEmpresa->nombre_art_inv) ?></td>
                            <td><?= h($inventarioEmpresa->descripcion_inv) ?></td>
                            <td><?= h($inventarioEmpresa->color_inv) ?></td>
                            <td><?= $this->Number->format($inventarioEmpresa->id_item) ?></td>
                            <td>
                                <?= $this->Html->link('<i class="material-icons" title="'. __('Ver') . '" >zoom_in</i>', ['action' => 'view', $inventarioEmpresa->id], ['escape' => false]) ?>
                                <?= $this->Html->link('<i class="material-icons" title="'. __('Editar') . '" >create</i>', ['action' => 'edit', $inventarioEmpresa->id], ['escape' => false]) ?>
                                <?= $this->Form->postLink('<i class="material-icons" title="'. __('Eliminar') . '" >delete</i>', ['action' => 'delete', $inventarioEmpresa->id], ['confirm' => __('Esta seguro que quiere borrarlo # {0}?', $inventarioEmpresa->id), 'escape' => false]) ?>
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
