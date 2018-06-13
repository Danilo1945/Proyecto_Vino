<?php
/**
* @var \App\View\AppView $this
* @var \App\Model\Entity\Empresa $empresa
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
                    <li class="padding-action"><?= $this->Html->link(__('Edit Empresa'), ['action' => 'edit', $empresa->id]) ?> </li>
                    <li class="padding-action"><?= $this->Form->postLink(__('Delete Empresa'), ['action' => 'delete', $empresa->id], ['confirm' => __('Are you sure you want to delete # {0}?', $empresa->id)]) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('List Empresa'), ['action' => 'index']) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('New Empresa'), ['action' => 'add']) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('List Proveedor'), ['controller' => 'Proveedor', 'action' => 'index']) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('New Proveedor'), ['controller' => 'Proveedor', 'action' => 'add']) ?> </li>
                </div>
            </div>
        </div>
    </div>
    <div class="col s12 m9">
        <div class="card darken-1">
            <div class="card-content black-text">
                <ul class="collection with-header">
                    <li class="collection-header">
                        <h4><?= h($empresa->id) ?></h4>
                    </li>
                    <li class="collection-item">
                        <?= __('Nombre') ?>
                        <div class="secondary-content">
                            <?= h($empresa->nombre) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Direccion') ?>
                        <div class="secondary-content">
                            <?= h($empresa->direccion) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Email') ?>
                        <div class="secondary-content">
                            <?= h($empresa->email) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Id') ?>
                        <div class="secondary-content">
                            <?= $this->Number->format($empresa->id) ?>
                        </div>
                    </li>
                </ul>
                <div class="card-content black-text">
                    <div class="green-text"><h5><?= __('Related Proveedor') ?></h5></div>
                    <div class="collapsible-header"></div>
                    <?php if (!empty($empresa->proveedor)): ?>
                    <table class="striped responsive-table">
                        <thead>
                            <tr>
                                <th scope="col"><?= __('Id') ?></th>
                                <th scope="col"><?= __('Cedula') ?></th>
                                <th scope="col"><?= __('Nombres Pro') ?></th>
                                <th scope="col"><?= __('Apellidos Pro') ?></th>
                                <th scope="col"><?= __('Telefono Pro') ?></th>
                                <th scope="col"><?= __('Email Pro') ?></th>
                                <th scope="col"><?= __('Empresa Id') ?></th>
                                <th><?= __('Actions') ?></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($empresa->proveedor as $proveedor): ?>
                            <tr>
                                <td><?= h($proveedor->id) ?></td>
                                <td><?= h($proveedor->cedula) ?></td>
                                <td><?= h($proveedor->nombres_pro) ?></td>
                                <td><?= h($proveedor->apellidos_pro) ?></td>
                                <td><?= h($proveedor->telefono_pro) ?></td>
                                <td><?= h($proveedor->email_pro) ?></td>
                                <td><?= h($proveedor->empresa_id) ?></td>
                                <td><?= $product->has('category') ? $this->Html->link($product->category->name, ['controller' => 'Categories', 'action' => 'view', $product->category->id]) : '' ?></td>
                                <td>
                                <td>
                                    <?= $this->Html->link('<i class="material-icons" title="'. __('View') . '" >zoom_in</i>', ['controller' => 'Proveedor', 'action' => 'view', $proveedor->id]) ?>
                                    <?= $this->Html->link('<i class="material-icons" title="'. __('Edit') . '" >create</i>', ['controller' => 'Proveedor', 'action' => 'edit', $proveedor->id]) ?>
                                    <?= $this->Form->postLink('<i class="material-icons" title="'. __('Delete') . '" >delete</i>', 'action' => 'delete', $proveedor->id], ['confirm' => __('Are you sure you want to delete # {0}?', $proveedor->id)]) ?>
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
