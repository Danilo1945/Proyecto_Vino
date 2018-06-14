<?php
/**
* @var \App\View\AppView $this
* @var \App\Model\Entity\InventarioEmpresa $inventarioEmpresa
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
                    <li class="padding-action"><?= $this->Html->link(__('Edit Inventario Empresa'), ['action' => 'edit', $inventarioEmpresa->id]) ?> </li>
                    <li class="padding-action"><?= $this->Form->postLink(__('Delete Inventario Empresa'), ['action' => 'delete', $inventarioEmpresa->id], ['confirm' => __('Are you sure you want to delete # {0}?', $inventarioEmpresa->id)]) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('List Inventario Empresa'), ['action' => 'index']) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('New Inventario Empresa'), ['action' => 'add']) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('List Item Inventario'), ['controller' => 'ItemInventario', 'action' => 'index']) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('New Item Inventario'), ['controller' => 'ItemInventario', 'action' => 'add']) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('List Area Produccion'), ['controller' => 'AreaProduccion', 'action' => 'index']) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('New Area Produccion'), ['controller' => 'AreaProduccion', 'action' => 'add']) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('List Hoja Produccion Vino'), ['controller' => 'HojaProduccionVino', 'action' => 'index']) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('New Hoja Produccion Vino'), ['controller' => 'HojaProduccionVino', 'action' => 'add']) ?> </li>
                </div>
            </div>
        </div>
    </div>
    <div class="col s12 m9">
        <div class="card darken-1">
            <div class="card-content black-text">
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
                        <?= __('Item Inventario Id') ?>
                        <div class="secondary-content">
                            <?= $inventarioEmpresa->has('item_inventario') ? $this->Html->link($inventarioEmpresa->item_inventario->id, ['controller' => 'ItemInventario', 'action' => 'view', $inventarioEmpresa->item_inventario->id]) : '' ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Id') ?>
                        <div class="secondary-content">
                            <?= $this->Number->format($inventarioEmpresa->id) ?>
                        </div>
                    </li>
                </ul>
                <div class="card-content black-text">
                    <div class="green-text"><h5><?= __('Related Area Produccion') ?></h5></div>
                    <div class="collapsible-header"></div>
                    <?php if (!empty($inventarioEmpresa->area_produccion)): ?>
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
                        <?php foreach ($inventarioEmpresa->area_produccion as $areaProduccion): ?>
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
                <div class="card-content black-text">
                    <div class="green-text"><h5><?= __('Related Hoja Produccion Vino') ?></h5></div>
                    <div class="collapsible-header"></div>
                    <?php if (!empty($inventarioEmpresa->hoja_produccion_vino)): ?>
                    <table class="striped responsive-table">
                        <thead>
                            <tr>
                                <th scope="col"><?= __('Id') ?></th>
                                <th scope="col"><?= __('Inventario Empresa Id') ?></th>
                                <th scope="col"><?= __('Procesos Id') ?></th>
                                <th scope="col"><?= __('Trabajador Id') ?></th>
                                <th scope="col"><?= __('Fecha Pro') ?></th>
                                <th scope="col"><?= __('Cant Fruta Klg') ?></th>
                                <th scope="col"><?= __('Cant Agua Lts') ?></th>
                                <th scope="col"><?= __('Cant Azucar Klg') ?></th>
                                <th scope="col"><?= __('Cant Levadura Grms') ?></th>
                                <th scope="col"><?= __('Numero Procesos') ?></th>
                                <th scope="col"><?= __('Observacion Pro') ?></th>
                                <th><?= __('Actions') ?></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($inventarioEmpresa->hoja_produccion_vino as $hojaProduccionVino): ?>
                            <tr>
                                <td><?= h($hojaProduccionVino->id) ?></td>
                                <td><?= h($hojaProduccionVino->inventario_empresa_id) ?></td>
                                <td><?= h($hojaProduccionVino->procesos_id) ?></td>
                                <td><?= h($hojaProduccionVino->trabajador_id) ?></td>
                                <td><?= h($hojaProduccionVino->fecha_pro) ?></td>
                                <td><?= h($hojaProduccionVino->cant_fruta_klg) ?></td>
                                <td><?= h($hojaProduccionVino->cant_agua_lts) ?></td>
                                <td><?= h($hojaProduccionVino->cant_azucar_klg) ?></td>
                                <td><?= h($hojaProduccionVino->cant_levadura_grms) ?></td>
                                <td><?= h($hojaProduccionVino->numero_procesos) ?></td>
                                <td><?= h($hojaProduccionVino->observacion_pro) ?></td>
                                <td><?= $product->has('category') ? $this->Html->link($product->category->name, ['controller' => 'Categories', 'action' => 'view', $product->category->id]) : '' ?></td>
                                <td>
                                <td>
                                    <?= $this->Html->link('<i class="material-icons" title="'. __('View') . '" >zoom_in</i>', ['controller' => 'HojaProduccionVino', 'action' => 'view', $hojaProduccionVino->id]) ?>
                                    <?= $this->Html->link('<i class="material-icons" title="'. __('Edit') . '" >create</i>', ['controller' => 'HojaProduccionVino', 'action' => 'edit', $hojaProduccionVino->id]) ?>
                                    <?= $this->Form->postLink('<i class="material-icons" title="'. __('Delete') . '" >delete</i>', 'action' => 'delete', $hojaProduccionVino->id], ['confirm' => __('Are you sure you want to delete # {0}?', $hojaProduccionVino->id)]) ?>
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
