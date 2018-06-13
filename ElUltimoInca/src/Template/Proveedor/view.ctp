<?php
/**
* @var \App\View\AppView $this
* @var \App\Model\Entity\Proveedor $proveedor
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
                    <li class="padding-action"><?= $this->Html->link(__('Edit Proveedor'), ['action' => 'edit', $proveedor->id]) ?> </li>
                    <li class="padding-action"><?= $this->Form->postLink(__('Delete Proveedor'), ['action' => 'delete', $proveedor->id], ['confirm' => __('Are you sure you want to delete # {0}?', $proveedor->id)]) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('List Proveedor'), ['action' => 'index']) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('New Proveedor'), ['action' => 'add']) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('List Empresa'), ['controller' => 'Empresa', 'action' => 'index']) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('New Empresa'), ['controller' => 'Empresa', 'action' => 'add']) ?> </li>
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
                        <h4><?= h($proveedor->id) ?></h4>
                    </li>
                    <li class="collection-item">
                        <?= __('Cedula') ?>
                        <div class="secondary-content">
                            <?= h($proveedor->cedula) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Nombres Pro') ?>
                        <div class="secondary-content">
                            <?= h($proveedor->nombres_pro) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Apellidos Pro') ?>
                        <div class="secondary-content">
                            <?= h($proveedor->apellidos_pro) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Telefono Pro') ?>
                        <div class="secondary-content">
                            <?= h($proveedor->telefono_pro) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Email Pro') ?>
                        <div class="secondary-content">
                            <?= h($proveedor->email_pro) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Empresa Id') ?>
                        <div class="secondary-content">
                            <?= $proveedor->has('empresa') ? $this->Html->link($proveedor->empresa->id, ['controller' => 'Empresa', 'action' => 'view', $proveedor->empresa->id]) : '' ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Id') ?>
                        <div class="secondary-content">
                            <?= $this->Number->format($proveedor->id) ?>
                        </div>
                    </li>
                </ul>
                <div class="card-content black-text">
                    <div class="green-text"><h5><?= __('Related Compra Mat Pri') ?></h5></div>
                    <div class="collapsible-header"></div>
                    <?php if (!empty($proveedor->compra_mat_pri)): ?>
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
                        <?php foreach ($proveedor->compra_mat_pri as $compraMatPri): ?>
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
                    <?php if (!empty($proveedor->prevee)): ?>
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
                        <?php foreach ($proveedor->prevee as $prevee): ?>
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
