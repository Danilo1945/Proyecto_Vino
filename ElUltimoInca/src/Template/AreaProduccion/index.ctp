<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AreaProduccion[]|\Cake\Collection\CollectionInterface $areaProduccion
 */
?>

<style>
    .color_negro{
        background: #000000;
        color: #AA8100;
    }
    .co_buton_ver  {
      color: #990000;  
    }
    .co_buton_editar  {
      color: #990000 ;  
    }
    .co_buton_eliminar  {
      color: #990000 ;  
    }
    .color_encabezado a{
        color: #990000;
    }
    .color_menu {
        color: #990000;
    }
    .color_paginator li  a {
         color: #990000;
         
    }
    .active a{
        background: #990000;
    }
    .padding-action a{
        color: #AA8100;
    }
</style>

<div class="hide">
   
</div>
<div class="row">
    <div class="col s12 m3">
        <div class="card darken-1">
            <div class="card-content white-text">
                <span class="card-title black-text">Acciones</span>
                <div class="card-action">
                    <li class="padding-action"><?= $this->Html->link(__('Nueva Area de Produccion'), ['action' => 'add']) ?></li>
                </div>
            </div>
        </div>
    </div>

    <div class="col s12 m9">
        <div class="card darken-1">
            <div class="card-content black-text">
                <span class="card-title black-text"><?= __('Area de Produccion') ?></span>
                <table class="responsive-table">
                    <thead>
                        <tr class="color_encabezado">
                            <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('fecha_elaboracion') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('num_procesos') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('brix_area_pro') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('clase_vino') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('temperatura_vino') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('fecha_control') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('observaciones_area_pro') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('id_uni_medi') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('id_tra') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('id_inv') ?></th>
                            <th><?= __('Actions') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($areaProduccion as $areaProduccion): ?>
                        <tr>
                            <td><?= $this->Number->format($areaProduccion->id) ?></td>
                            <td><?= h($areaProduccion->fecha_elaboracion) ?></td>
                            <td><?= h($areaProduccion->num_procesos) ?></td>
                            <td><?= $this->Number->format($areaProduccion->brix_area_pro) ?></td>
                            <td><?= h($areaProduccion->clase_vino) ?></td>
                            <td><?= $this->Number->format($areaProduccion->temperatura_vino) ?></td>
                            <td><?= h($areaProduccion->fecha_control) ?></td>
                            <td><?= h($areaProduccion->observaciones_area_pro) ?></td>
                            <td><?= $this->Number->format($areaProduccion->id_uni_medi) ?></td>
                            <td><?= $this->Number->format($areaProduccion->id_tra) ?></td>
                            <td><?= $this->Number->format($areaProduccion->id_inv) ?></td>
                            <td>
                                <?= $this->Html->link('<i class="material-icons co_buton_ver" title="'. __('Ver') . '" >zoom_in</i>', ['action' => 'view', $areaProduccion->id], ['escape' => false]) ?>
                                <?= $this->Html->link('<i class="material-icons co_buton_editar" title="'. __('Editar') . '" >create</i>', ['action' => 'edit', $areaProduccion->id], ['escape' => false]) ?>
                                <?= $this->Form->postLink('<i class="material-icons co_buton_eliminar" title="'. __('Eliminar') . '" >delete</i>', ['action' => 'delete', $areaProduccion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $areaProduccion->id), 'escape' => false]) ?>
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

        <p class="right"><?= $this->Paginator->counter(['format' => __('Página de, mostrando registro (s) del total')]) ?></p>
    </div>
</div>
