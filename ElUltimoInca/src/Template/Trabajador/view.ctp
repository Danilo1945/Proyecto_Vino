<?php
/**
* @var \App\View\AppView $this
* @var \App\Model\Entity\Trabajador $trabajador
*/
?>
<div class="hide">

</div>
<div class="row">
    <div class="col s12 m3">
        <div class="card darken-1">
            <div class="card-content white-text">
                <span class="card-title green-text"><?= __('Actions') ?></span>
                <div class="card-action">
                    <li class="padding-action"><?= $this->Html->link(__('Edit Trabajador'), ['action' => 'edit', $trabajador->id]) ?> </li>
                    <li class="padding-action"><?= $this->Form->postLink(__('Delete Trabajador'), ['action' => 'delete', $trabajador->id], ['confirm' => __('Are you sure you want to delete # {0}?', $trabajador->id)]) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('List Trabajador'), ['action' => 'index']) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('New Trabajador'), ['action' => 'add']) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('List Area Produccion'), ['controller' => 'AreaProduccion', 'action' => 'index']) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('New Area Produccion'), ['controller' => 'AreaProduccion', 'action' => 'add']) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('List Compra Mat Pri'), ['controller' => 'CompraMatPri', 'action' => 'index']) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('New Compra Mat Pri'), ['controller' => 'CompraMatPri', 'action' => 'add']) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('List Hoja Produccion Vino'), ['controller' => 'HojaProduccionVino', 'action' => 'index']) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('New Hoja Produccion Vino'), ['controller' => 'HojaProduccionVino', 'action' => 'add']) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('List Hoja Producto Terminado'), ['controller' => 'HojaProductoTerminado', 'action' => 'index']) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('New Hoja Producto Terminado'), ['controller' => 'HojaProductoTerminado', 'action' => 'add']) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('List Hoja Ventas'), ['controller' => 'HojaVentas', 'action' => 'index']) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('New Hoja Venta'), ['controller' => 'HojaVentas', 'action' => 'add']) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('List Pedidos'), ['controller' => 'Pedidos', 'action' => 'index']) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('New Pedido'), ['controller' => 'Pedidos', 'action' => 'add']) ?> </li>
                </div>
            </div>
        </div>
    </div>
    <div class="col s12 m9">
        <div class="card darken-1">
            <div class="card-content black-text">
                <ul class="collection with-header">
                    <li class="collection-header">
                        <h4><?= h($trabajador->id) ?></h4>
                    </li>
                    <li class="collection-item">
                        <?= __('Cedula') ?>
                        <div class="secondary-content">
                            <?= h($trabajador->cedula) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Nombres Tra') ?>
                        <div class="secondary-content">
                            <?= h($trabajador->Nombres_tra) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Apellidos Tra') ?>
                        <div class="secondary-content">
                            <?= h($trabajador->Apellidos_tra) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Telefono Tra') ?>
                        <div class="secondary-content">
                            <?= h($trabajador->Telefono_tra) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Direccion Tra') ?>
                        <div class="secondary-content">
                            <?= h($trabajador->Direccion_tra) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Email Tra') ?>
                        <div class="secondary-content">
                            <?= h($trabajador->Email_tra) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Id') ?>
                        <div class="secondary-content">
                            <?= $this->Number->format($trabajador->id) ?>
                        </div>
                    </li>
                </ul>
                <div class="card-content black-text">
                    <div class="green-text"><h5><?= __('Related Area Produccion') ?></h5></div>
                    <div class="collapsible-header"></div>
                    <?php if (!empty($trabajador->area_produccion)): ?>
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
                        <?php foreach ($trabajador->area_produccion as $areaProduccion): ?>
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
                    <div class="green-text"><h5><?= __('Related Compra Mat Pri') ?></h5></div>
                    <div class="collapsible-header"></div>
                    <?php if (!empty($trabajador->compra_mat_pri)): ?>
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
                        <?php foreach ($trabajador->compra_mat_pri as $compraMatPri): ?>
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
                    <div class="green-text"><h5><?= __('Related Hoja Produccion Vino') ?></h5></div>
                    <div class="collapsible-header"></div>
                    <?php if (!empty($trabajador->hoja_produccion_vino)): ?>
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
                        <?php foreach ($trabajador->hoja_produccion_vino as $hojaProduccionVino): ?>
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
                <div class="card-content black-text">
                    <div class="green-text"><h5><?= __('Related Hoja Producto Terminado') ?></h5></div>
                    <div class="collapsible-header"></div>
                    <?php if (!empty($trabajador->hoja_producto_terminado)): ?>
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
                        <?php foreach ($trabajador->hoja_producto_terminado as $hojaProductoTerminado): ?>
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
                <div class="card-content black-text">
                    <div class="green-text"><h5><?= __('Related Hoja Ventas') ?></h5></div>
                    <div class="collapsible-header"></div>
                    <?php if (!empty($trabajador->hoja_ventas)): ?>
                    <table class="striped responsive-table">
                        <thead>
                            <tr>
                                <th scope="col"><?= __('Id') ?></th>
                                <th scope="col"><?= __('Fecha') ?></th>
                                <th scope="col"><?= __('Trabajador Id') ?></th>
                                <th scope="col"><?= __('Users Id') ?></th>
                                <th scope="col"><?= __('Cantidad') ?></th>
                                <th scope="col"><?= __('Precio Unitario') ?></th>
                                <th scope="col"><?= __('Precio Total') ?></th>
                                <th scope="col"><?= __('Estado Venta') ?></th>
                                <th scope="col"><?= __('Valor Estado') ?></th>
                                <th scope="col"><?= __('Observaciones') ?></th>
                                <th><?= __('Actions') ?></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($trabajador->hoja_ventas as $hojaVentas): ?>
                            <tr>
                                <td><?= h($hojaVentas->id) ?></td>
                                <td><?= h($hojaVentas->fecha) ?></td>
                                <td><?= h($hojaVentas->trabajador_id) ?></td>
                                <td><?= h($hojaVentas->users_id) ?></td>
                                <td><?= h($hojaVentas->cantidad) ?></td>
                                <td><?= h($hojaVentas->precio_unitario) ?></td>
                                <td><?= h($hojaVentas->precio_total) ?></td>
                                <td><?= h($hojaVentas->estado_venta) ?></td>
                                <td><?= h($hojaVentas->valor_estado) ?></td>
                                <td><?= h($hojaVentas->observaciones) ?></td>
                                <td><?= $product->has('category') ? $this->Html->link($product->category->name, ['controller' => 'Categories', 'action' => 'view', $product->category->id]) : '' ?></td>
                                <td>
                                <td>
                                    <?= $this->Html->link('<i class="material-icons" title="'. __('View') . '" >zoom_in</i>', ['controller' => 'HojaVentas', 'action' => 'view', $hojaVentas->id]) ?>
                                    <?= $this->Html->link('<i class="material-icons" title="'. __('Edit') . '" >create</i>', ['controller' => 'HojaVentas', 'action' => 'edit', $hojaVentas->id]) ?>
                                    <?= $this->Form->postLink('<i class="material-icons" title="'. __('Delete') . '" >delete</i>', 'action' => 'delete', $hojaVentas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $hojaVentas->id)]) ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
                <div class="card-content black-text">
                    <div class="green-text"><h5><?= __('Related Pedidos') ?></h5></div>
                    <div class="collapsible-header"></div>
                    <?php if (!empty($trabajador->pedidos)): ?>
                    <table class="striped responsive-table">
                        <thead>
                            <tr>
                                <th scope="col"><?= __('Id') ?></th>
                                <th scope="col"><?= __('Fecha Ven') ?></th>
                                <th scope="col"><?= __('Trabajador Id') ?></th>
                                <th scope="col"><?= __('Users Id') ?></th>
                                <th scope="col"><?= __('Estado Cuenta') ?></th>
                                <th scope="col"><?= __('Precio Uni') ?></th>
                                <th scope="col"><?= __('Precio Total') ?></th>
                                <th scope="col"><?= __('Observaciones Ven') ?></th>
                                <th><?= __('Actions') ?></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($trabajador->pedidos as $pedidos): ?>
                            <tr>
                                <td><?= h($pedidos->id) ?></td>
                                <td><?= h($pedidos->fecha_ven) ?></td>
                                <td><?= h($pedidos->trabajador_id) ?></td>
                                <td><?= h($pedidos->users_id) ?></td>
                                <td><?= h($pedidos->estado_cuenta) ?></td>
                                <td><?= h($pedidos->precio_uni) ?></td>
                                <td><?= h($pedidos->precio_total) ?></td>
                                <td><?= h($pedidos->observaciones_ven) ?></td>
                                <td><?= $product->has('category') ? $this->Html->link($product->category->name, ['controller' => 'Categories', 'action' => 'view', $product->category->id]) : '' ?></td>
                                <td>
                                <td>
                                    <?= $this->Html->link('<i class="material-icons" title="'. __('View') . '" >zoom_in</i>', ['controller' => 'Pedidos', 'action' => 'view', $pedidos->id]) ?>
                                    <?= $this->Html->link('<i class="material-icons" title="'. __('Edit') . '" >create</i>', ['controller' => 'Pedidos', 'action' => 'edit', $pedidos->id]) ?>
                                    <?= $this->Form->postLink('<i class="material-icons" title="'. __('Delete') . '" >delete</i>', 'action' => 'delete', $pedidos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pedidos->id)]) ?>
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
