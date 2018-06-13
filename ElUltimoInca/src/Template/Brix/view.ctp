<?php
/**
* @var \App\View\AppView $this
* @var \App\Model\Entity\Brix $brix
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
                    <li class="padding-action"><?= $this->Html->link(__('Edit Brix'), ['action' => 'edit', $brix->id]) ?> </li>
                    <li class="padding-action"><?= $this->Form->postLink(__('Delete Brix'), ['action' => 'delete', $brix->id], ['confirm' => __('Are you sure you want to delete # {0}?', $brix->id)]) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('List Brix'), ['action' => 'index']) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('New Brix'), ['action' => 'add']) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('List Area Produccion'), ['controller' => 'AreaProduccion', 'action' => 'index']) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('New Area Produccion'), ['controller' => 'AreaProduccion', 'action' => 'add']) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('List Hoja Producto Terminado'), ['controller' => 'HojaProductoTerminado', 'action' => 'index']) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('New Hoja Producto Terminado'), ['controller' => 'HojaProductoTerminado', 'action' => 'add']) ?> </li>
                </div>
            </div>
        </div>
    </div>
    <div class="col s12 m9">
        <div class="card darken-1">
            <div class="card-content black-text">
                <ul class="collection with-header">
                    <li class="collection-header">
                        <h4><?= h($brix->id) ?></h4>
                    </li>
                    <li class="collection-item">
                        <?= __('Id') ?>
                        <div class="secondary-content">
                            <?= $this->Number->format($brix->id) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Contidad') ?>
                        <div class="secondary-content">
                            <?= $this->Number->format($brix->contidad) ?>
                        </div>
                    </li>
                </ul>
                <div class="card-content black-text">
                    <div class="green-text"><h5><?= __('Related Area Produccion') ?></h5></div>
                    <div class="collapsible-header"></div>
                    <?php if (!empty($brix->area_produccion)): ?>
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
                        <?php foreach ($brix->area_produccion as $areaProduccion): ?>
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
                    <div class="green-text"><h5><?= __('Related Hoja Producto Terminado') ?></h5></div>
                    <div class="collapsible-header"></div>
                    <?php if (!empty($brix->hoja_producto_terminado)): ?>
                    <table class="striped responsive-table">
                        <thead>
                            <tr>
                                <th scope="col"><?= __('Id') ?></th>
                                <th scope="col"><?= __('Nombre') ?></th>
                                <th scope="col"><?= __('Fecha') ?></th>
                                <th scope="col"><?= __('Valor IVA') ?></th>
                                <th scope="col"><?= __('Valor ICE') ?></th>
                                <th scope="col"><?= __('Pasteurizacion Id') ?></th>
                                <th scope="col"><?= __('Fecha Elb') ?></th>
                                <th scope="col"><?= __('Lote Id') ?></th>
                                <th scope="col"><?= __('Nombre Cantidad') ?></th>
                                <th scope="col"><?= __('Valor Cantidad') ?></th>
                                <th scope="col"><?= __('Brix Id') ?></th>
                                <th scope="col"><?= __('Nombre Etiqueta') ?></th>
                                <th scope="col"><?= __('Cantidad Etiqueta') ?></th>
                                <th scope="col"><?= __('Nombre Corcho') ?></th>
                                <th scope="col"><?= __('Cantidad Corcho') ?></th>
                                <th scope="col"><?= __('Cantidad Capuchon') ?></th>
                                <th scope="col"><?= __('Cantidad Cintas SRI') ?></th>
                                <th scope="col"><?= __('Cantidad Cintas UltimoInca') ?></th>
                                <th scope="col"><?= __('Trabajador Id') ?></th>
                                <th scope="col"><?= __('Observaciones') ?></th>
                                <th><?= __('Actions') ?></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($brix->hoja_producto_terminado as $hojaProductoTerminado): ?>
                            <tr>
                                <td><?= h($hojaProductoTerminado->id) ?></td>
                                <td><?= h($hojaProductoTerminado->nombre) ?></td>
                                <td><?= h($hojaProductoTerminado->fecha) ?></td>
                                <td><?= h($hojaProductoTerminado->valor_IVA) ?></td>
                                <td><?= h($hojaProductoTerminado->valor_ICE) ?></td>
                                <td><?= h($hojaProductoTerminado->pasteurizacion_id) ?></td>
                                <td><?= h($hojaProductoTerminado->fecha_elb) ?></td>
                                <td><?= h($hojaProductoTerminado->lote_id) ?></td>
                                <td><?= h($hojaProductoTerminado->nombre_cantidad) ?></td>
                                <td><?= h($hojaProductoTerminado->valor_cantidad) ?></td>
                                <td><?= h($hojaProductoTerminado->brix_id) ?></td>
                                <td><?= h($hojaProductoTerminado->nombre_etiqueta) ?></td>
                                <td><?= h($hojaProductoTerminado->cantidad_etiqueta) ?></td>
                                <td><?= h($hojaProductoTerminado->nombre_corcho) ?></td>
                                <td><?= h($hojaProductoTerminado->cantidad_corcho) ?></td>
                                <td><?= h($hojaProductoTerminado->cantidad_capuchon) ?></td>
                                <td><?= h($hojaProductoTerminado->cantidad_cintas_SRI) ?></td>
                                <td><?= h($hojaProductoTerminado->cantidad_cintas_ultimoInca) ?></td>
                                <td><?= h($hojaProductoTerminado->trabajador_id) ?></td>
                                <td><?= h($hojaProductoTerminado->observaciones) ?></td>
                                <td><?= $product->has('category') ? $this->Html->link($product->category->name, ['controller' => 'Categories', 'action' => 'view', $product->category->id]) : '' ?></td>
                                <td>
                                <td>
                                    <?= $this->Html->link('<i class="material-icons" title="'. __('View') . '" >zoom_in</i>', ['controller' => 'HojaProductoTerminado', 'action' => 'view', $hojaProductoTerminado->id]) ?>
                                    <?= $this->Html->link('<i class="material-icons" title="'. __('Edit') . '" >create</i>', ['controller' => 'HojaProductoTerminado', 'action' => 'edit', $hojaProductoTerminado->id]) ?>
                                    <?= $this->Form->postLink('<i class="material-icons" title="'. __('Delete') . '" >delete</i>', 'action' => 'delete', $hojaProductoTerminado->id], ['confirm' => __('Are you sure you want to delete # {0}?', $hojaProductoTerminado->id)]) ?>
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
