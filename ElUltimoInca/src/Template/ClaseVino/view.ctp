<?php
/**
* @var \App\View\AppView $this
* @var \App\Model\Entity\ClaseVino $claseVino
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
                    <li class="padding-action"><?= $this->Html->link(__('Edit Clase Vino'), ['action' => 'edit', $claseVino->id]) ?> </li>
                    <li class="padding-action"><?= $this->Form->postLink(__('Delete Clase Vino'), ['action' => 'delete', $claseVino->id], ['confirm' => __('Are you sure you want to delete # {0}?', $claseVino->id)]) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('List Clase Vino'), ['action' => 'index']) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('New Clase Vino'), ['action' => 'add']) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('List Area Produccion'), ['controller' => 'AreaProduccion', 'action' => 'index']) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('New Area Produccion'), ['controller' => 'AreaProduccion', 'action' => 'add']) ?> </li>
                </div>
            </div>
        </div>
    </div>
    <div class="col s12 m9">
        <div class="card darken-1">
            <div class="card-content black-text">
                <ul class="collection with-header">
                    <li class="collection-header">
                        <h4><?= h($claseVino->id) ?></h4>
                    </li>
                    <li class="collection-item">
                        <?= __('Nombre') ?>
                        <div class="secondary-content">
                            <?= h($claseVino->nombre) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Descripcion') ?>
                        <div class="secondary-content">
                            <?= h($claseVino->descripcion) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Id') ?>
                        <div class="secondary-content">
                            <?= $this->Number->format($claseVino->id) ?>
                        </div>
                    </li>
                </ul>
                <div class="card-content black-text">
                    <div class="green-text"><h5><?= __('Related Area Produccion') ?></h5></div>
                    <div class="collapsible-header"></div>
                    <?php if (!empty($claseVino->area_produccion)): ?>
                    <table class="striped responsive-table">
                        <thead>
                            <tr>
                                <th scope="col"><?= __('Id') ?></th>
                                <th scope="col"><?= __('Fecha Elaboracion') ?></th>
                                <th scope="col"><?= __('Inventario Empresa Id') ?></th>
                                <th scope="col"><?= __('Cantidad Litros') ?></th>
                                <th scope="col"><?= __('Uni Medida Id') ?></th>
                                <th scope="col"><?= __('Procesos Id') ?></th>
                                <th scope="col"><?= __('Brix Id') ?></th>
                                <th scope="col"><?= __('Clase Vino Id') ?></th>
                                <th scope="col"><?= __('Temperatura Vino') ?></th>
                                <th scope="col"><?= __('Fecha Control') ?></th>
                                <th scope="col"><?= __('Trabajador Id') ?></th>
                                <th scope="col"><?= __('Observaciones Area Pro') ?></th>
                                <th><?= __('Actions') ?></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($claseVino->area_produccion as $areaProduccion): ?>
                            <tr>
                                <td><?= h($areaProduccion->id) ?></td>
                                <td><?= h($areaProduccion->fecha_elaboracion) ?></td>
                                <td><?= h($areaProduccion->inventario_empresa_id) ?></td>
                                <td><?= h($areaProduccion->cantidad_litros) ?></td>
                                <td><?= h($areaProduccion->uni_medida_id) ?></td>
                                <td><?= h($areaProduccion->procesos_id) ?></td>
                                <td><?= h($areaProduccion->brix_id) ?></td>
                                <td><?= h($areaProduccion->clase_vino_id) ?></td>
                                <td><?= h($areaProduccion->temperatura_vino) ?></td>
                                <td><?= h($areaProduccion->fecha_control) ?></td>
                                <td><?= h($areaProduccion->trabajador_id) ?></td>
                                <td><?= h($areaProduccion->observaciones_area_pro) ?></td>
                                <td><?= $product->has('category') ? $this->Html->link($product->category->name, ['controller' => 'Categories', 'action' => 'view', $product->category->id]) : '' ?></td>
                                <td>
                                <td>
                                    <?= $this->Html->link('<i class="material-icons" title="'. __('View') . '" >zoom_in</i>', ['controller' => 'AreaProduccion', 'action' => 'view', $areaProduccion->id]) ?>
                                    <?= $this->Html->link('<i class="material-icons" title="'. __('Edit') . '" >create</i>', ['controller' => 'AreaProduccion', 'action' => 'edit', $areaProduccion->id]) ?>
                                    <?= $this->Form->postLink('<i class="material-icons" title="'. __('Delete') . '" >delete</i>', 'action' => 'delete', $areaProduccion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $areaProduccion->id)]) ?>
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
