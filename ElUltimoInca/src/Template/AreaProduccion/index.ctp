<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AreaProduccion[]|\Cake\Collection\CollectionInterface $areaProduccion
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
                    <li class="padding-action"><?= $this->Html->link(__('New Area Produccion'), ['action' => 'add']) ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('List Inventario Empresa'), ['controller' => 'InventarioEmpresa', 'action' => 'index']) ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('New Inventario Empresa'), ['controller' => 'InventarioEmpresa', 'action' => 'add']) ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('List Unidad Medida'), ['controller' => 'UnidadMedida', 'action' => 'index']) ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('New Unidad Medida'), ['controller' => 'UnidadMedida', 'action' => 'add']) ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('List Procesos'), ['controller' => 'Procesos', 'action' => 'index']) ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('New Proceso'), ['controller' => 'Procesos', 'action' => 'add']) ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('List Brix'), ['controller' => 'Brix', 'action' => 'index']) ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('New Brix'), ['controller' => 'Brix', 'action' => 'add']) ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('List Clase Vino'), ['controller' => 'ClaseVino', 'action' => 'index']) ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('New Clase Vino'), ['controller' => 'ClaseVino', 'action' => 'add']) ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('List Trabajador'), ['controller' => 'Trabajador', 'action' => 'index']) ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('New Trabajador'), ['controller' => 'Trabajador', 'action' => 'add']) ?></li>
                </div>
            </div>
        </div>
    </div>

    <div class="col s12 m9">
        <div class="card darken-1">
            <div class="card-content black-text">
                <span class="card-title green-text"><?= __('Area Produccion') ?></span>
                <table class="responsive-table">
                    <thead>
                        <tr>
                            <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('fecha_elaboracion') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('inventario_empresa_id') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('cantidad_litros') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('uni_medida_id') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('procesos_id') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('brix_id') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('clase_vino_id') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('temperatura_vino') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('fecha_control') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('trabajador_id') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('observaciones_area_pro') ?></th>
                            <th><?= __('Actions') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($areaProduccion as $areaProduccion): ?>
                        <tr>
                            <td><?= $this->Number->format($areaProduccion->id) ?></td>
                            <td><?= h($areaProduccion->fecha_elaboracion) ?></td>
                            <td><?= $areaProduccion->has('inventario_empresa') ? $this->Html->link($areaProduccion->inventario_empresa->id, ['controller' => 'InventarioEmpresa', 'action' => 'view', $areaProduccion->inventario_empresa->id]) : '' ?></td>
                            <td><?= $this->Number->format($areaProduccion->cantidad_litros) ?></td>
                            <td><?= $areaProduccion->has('unidad_medida') ? $this->Html->link($areaProduccion->unidad_medida->id, ['controller' => 'UnidadMedida', 'action' => 'view', $areaProduccion->unidad_medida->id]) : '' ?></td>
                            <td><?= $areaProduccion->has('proceso') ? $this->Html->link($areaProduccion->proceso->id, ['controller' => 'Procesos', 'action' => 'view', $areaProduccion->proceso->id]) : '' ?></td>
                            <td><?= $areaProduccion->has('brix') ? $this->Html->link($areaProduccion->brix->id, ['controller' => 'Brix', 'action' => 'view', $areaProduccion->brix->id]) : '' ?></td>
                            <td><?= $areaProduccion->has('clase_vino') ? $this->Html->link($areaProduccion->clase_vino->id, ['controller' => 'ClaseVino', 'action' => 'view', $areaProduccion->clase_vino->id]) : '' ?></td>
                            <td><?= $this->Number->format($areaProduccion->temperatura_vino) ?></td>
                            <td><?= h($areaProduccion->fecha_control) ?></td>
                            <td><?= $areaProduccion->has('trabajador') ? $this->Html->link($areaProduccion->trabajador->id, ['controller' => 'Trabajador', 'action' => 'view', $areaProduccion->trabajador->id]) : '' ?></td>
                            <td><?= h($areaProduccion->observaciones_area_pro) ?></td>
                            <td>
                                <?= $this->Html->link('<i class="material-icons" title="'. __('View') . '" >zoom_in</i>', ['action' => 'view', $areaProduccion->id], ['escape' => false]) ?>
                                <?= $this->Html->link('<i class="material-icons" title="'. __('Edit') . '" >create</i>', ['action' => 'edit', $areaProduccion->id], ['escape' => false]) ?>
                                <?= $this->Form->postLink('<i class="material-icons" title="'. __('Delete') . '" >delete</i>', ['action' => 'delete', $areaProduccion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $areaProduccion->id), 'escape' => false]) ?>
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
