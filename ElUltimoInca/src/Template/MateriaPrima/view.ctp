<?php
/**
* @var \App\View\AppView $this
* @var \App\Model\Entity\MateriaPrima $materiaPrima
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
                    <li class="padding-action"><?= $this->Html->link(__('Edit Materia Prima'), ['action' => 'edit', $materiaPrima->id]) ?> </li>
                    <li class="padding-action"><?= $this->Form->postLink(__('Delete Materia Prima'), ['action' => 'delete', $materiaPrima->id], ['confirm' => __('Are you sure you want to delete # {0}?', $materiaPrima->id)]) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('List Materia Prima'), ['action' => 'index']) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('New Materia Prima'), ['action' => 'add']) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('List Compra Mat Pri'), ['controller' => 'CompraMatPri', 'action' => 'index']) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('New Compra Mat Pri'), ['controller' => 'CompraMatPri', 'action' => 'add']) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('List Prevee'), ['controller' => 'Prevee', 'action' => 'index']) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('New Prevee'), ['controller' => 'Prevee', 'action' => 'add']) ?> </li>
                </div>
            </div>
        </div>
    </div>
    <div class="col s12 m9">
        <div class="card darken-1">
            <div class="card-content black-text">
                <ul class="collection with-header">
                    <li class="collection-header">
                        <h4><?= h($materiaPrima->id) ?></h4>
                    </li>
                    <li class="collection-item">
                        <?= __('Nombre Mat Pri') ?>
                        <div class="secondary-content">
                            <?= h($materiaPrima->nombre_mat_pri) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Descripcion Mat Pri') ?>
                        <div class="secondary-content">
                            <?= h($materiaPrima->descripcion_mat_pri) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Id') ?>
                        <div class="secondary-content">
                            <?= $this->Number->format($materiaPrima->id) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Contidad') ?>
                        <div class="secondary-content">
                            <?= $this->Number->format($materiaPrima->contidad) ?>
                        </div>
                    </li>
                </ul>
                <div class="card-content black-text">
                    <div class="green-text"><h5><?= __('Related Compra Mat Pri') ?></h5></div>
                    <div class="collapsible-header"></div>
                    <?php if (!empty($materiaPrima->compra_mat_pri)): ?>
                    <table class="striped responsive-table">
                        <thead>
                            <tr>
                                <th scope="col"><?= __('Id') ?></th>
                                <th scope="col"><?= __('Fecha Mat') ?></th>
                                <th scope="col"><?= __('Precio U Mat') ?></th>
                                <th scope="col"><?= __('Precio Tot Mat') ?></th>
                                <th scope="col"><?= __('Observaciones Mat') ?></th>
                                <th scope="col"><?= __('Proveedor Id') ?></th>
                                <th scope="col"><?= __('Trabajador Id') ?></th>
                                <th scope="col"><?= __('Id Mat Prim') ?></th>
                                <th scope="col"><?= __('Materia Prima Id') ?></th>
                                <th scope="col"><?= __('Unidad Medida Id') ?></th>
                                <th><?= __('Actions') ?></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($materiaPrima->compra_mat_pri as $compraMatPri): ?>
                            <tr>
                                <td><?= h($compraMatPri->id) ?></td>
                                <td><?= h($compraMatPri->fecha_mat) ?></td>
                                <td><?= h($compraMatPri->precio_u_mat) ?></td>
                                <td><?= h($compraMatPri->precio_tot_mat) ?></td>
                                <td><?= h($compraMatPri->observaciones_mat) ?></td>
                                <td><?= h($compraMatPri->proveedor_id) ?></td>
                                <td><?= h($compraMatPri->trabajador_id) ?></td>
                                <td><?= h($compraMatPri->id_mat_prim) ?></td>
                                <td><?= h($compraMatPri->materia_prima_id) ?></td>
                                <td><?= h($compraMatPri->unidad_medida_id) ?></td>
                                <td><?= $product->has('category') ? $this->Html->link($product->category->name, ['controller' => 'Categories', 'action' => 'view', $product->category->id]) : '' ?></td>
                                <td>
                                <td>
                                    <?= $this->Html->link('<i class="material-icons" title="'. __('View') . '" >zoom_in</i>', ['controller' => 'CompraMatPri', 'action' => 'view', $compraMatPri->id]) ?>
                                    <?= $this->Html->link('<i class="material-icons" title="'. __('Edit') . '" >create</i>', ['controller' => 'CompraMatPri', 'action' => 'edit', $compraMatPri->id]) ?>
                                    <?= $this->Form->postLink('<i class="material-icons" title="'. __('Delete') . '" >delete</i>', 'action' => 'delete', $compraMatPri->id], ['confirm' => __('Are you sure you want to delete # {0}?', $compraMatPri->id)]) ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
                <div class="card-content black-text">
                    <div class="green-text"><h5><?= __('Related Prevee') ?></h5></div>
                    <div class="collapsible-header"></div>
                    <?php if (!empty($materiaPrima->prevee)): ?>
                    <table class="striped responsive-table">
                        <thead>
                            <tr>
                                <th scope="col"><?= __('Id') ?></th>
                                <th scope="col"><?= __('Proveedor Id') ?></th>
                                <th scope="col"><?= __('Materia Prima Id') ?></th>
                                <th><?= __('Actions') ?></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($materiaPrima->prevee as $prevee): ?>
                            <tr>
                                <td><?= h($prevee->id) ?></td>
                                <td><?= h($prevee->proveedor_id) ?></td>
                                <td><?= h($prevee->materia_prima_id) ?></td>
                                <td><?= $product->has('category') ? $this->Html->link($product->category->name, ['controller' => 'Categories', 'action' => 'view', $product->category->id]) : '' ?></td>
                                <td>
                                <td>
                                    <?= $this->Html->link('<i class="material-icons" title="'. __('View') . '" >zoom_in</i>', ['controller' => 'Prevee', 'action' => 'view', $prevee->id]) ?>
                                    <?= $this->Html->link('<i class="material-icons" title="'. __('Edit') . '" >create</i>', ['controller' => 'Prevee', 'action' => 'edit', $prevee->id]) ?>
                                    <?= $this->Form->postLink('<i class="material-icons" title="'. __('Delete') . '" >delete</i>', 'action' => 'delete', $prevee->id], ['confirm' => __('Are you sure you want to delete # {0}?', $prevee->id)]) ?>
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
