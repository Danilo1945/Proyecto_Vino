<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CompraMatPri[]|\Cake\Collection\CollectionInterface $compraMatPri
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
                    <li class="padding-action"><?= $this->Html->link(__('New Compra Mat Pri'), ['action' => 'add']) ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('List Proveedor'), ['controller' => 'Proveedor', 'action' => 'index']) ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('New Proveedor'), ['controller' => 'Proveedor', 'action' => 'add']) ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('List Trabajador'), ['controller' => 'Trabajador', 'action' => 'index']) ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('New Trabajador'), ['controller' => 'Trabajador', 'action' => 'add']) ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('List Materia Prima'), ['controller' => 'MateriaPrima', 'action' => 'index']) ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('New Materia Prima'), ['controller' => 'MateriaPrima', 'action' => 'add']) ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('List Unidad Medida'), ['controller' => 'UnidadMedida', 'action' => 'index']) ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('New Unidad Medida'), ['controller' => 'UnidadMedida', 'action' => 'add']) ?></li>
                </div>
            </div>
        </div>
    </div>

    <div class="col s12 m9">
        <div class="card darken-1">
            <div class="card-content black-text">
                <span class="card-title green-text"><?= __('Compra Mat Pri') ?></span>
                <table class="responsive-table">
                    <thead>
                        <tr>
                            <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('fecha_mat') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('precio_u_mat') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('precio_tot_mat') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('observaciones_mat') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('proveedor_id') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('trabajador_id') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('id_mat_prim') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('materia_prima_id') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('unidad_medida_id') ?></th>
                            <th><?= __('Actions') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($compraMatPri as $compraMatPri): ?>
                        <tr>
                            <td><?= $this->Number->format($compraMatPri->id) ?></td>
                            <td><?= h($compraMatPri->fecha_mat) ?></td>
                            <td><?= $this->Number->format($compraMatPri->precio_u_mat) ?></td>
                            <td><?= $this->Number->format($compraMatPri->precio_tot_mat) ?></td>
                            <td><?= h($compraMatPri->observaciones_mat) ?></td>
                            <td><?= $compraMatPri->has('proveedor') ? $this->Html->link($compraMatPri->proveedor->id, ['controller' => 'Proveedor', 'action' => 'view', $compraMatPri->proveedor->id]) : '' ?></td>
                            <td><?= $compraMatPri->has('trabajador') ? $this->Html->link($compraMatPri->trabajador->id, ['controller' => 'Trabajador', 'action' => 'view', $compraMatPri->trabajador->id]) : '' ?></td>
                            <td><?= $this->Number->format($compraMatPri->id_mat_prim) ?></td>
                            <td><?= $compraMatPri->has('materia_prima') ? $this->Html->link($compraMatPri->materia_prima->id, ['controller' => 'MateriaPrima', 'action' => 'view', $compraMatPri->materia_prima->id]) : '' ?></td>
                            <td><?= $compraMatPri->has('unidad_medida') ? $this->Html->link($compraMatPri->unidad_medida->id, ['controller' => 'UnidadMedida', 'action' => 'view', $compraMatPri->unidad_medida->id]) : '' ?></td>
                            <td>
                                <?= $this->Html->link('<i class="material-icons" title="'. __('View') . '" >zoom_in</i>', ['action' => 'view', $compraMatPri->id], ['escape' => false]) ?>
                                <?= $this->Html->link('<i class="material-icons" title="'. __('Edit') . '" >create</i>', ['action' => 'edit', $compraMatPri->id], ['escape' => false]) ?>
                                <?= $this->Form->postLink('<i class="material-icons" title="'. __('Delete') . '" >delete</i>', ['action' => 'delete', $compraMatPri->id], ['confirm' => __('Are you sure you want to delete # {0}?', $compraMatPri->id), 'escape' => false]) ?>
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
