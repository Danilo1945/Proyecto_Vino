<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MateriaPrima[]|\Cake\Collection\CollectionInterface $materiaPrima
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
                <span class="card-title black-text">ACCIONES</span>
                <div class="card-action">
                    <li class="padding-action"><?= $this->Html->link(__('NUEVA MATERIA PRIMA'), ['action' => 'add']) ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('LISTA UNIDAD DE MEDIDA'), ['controller' => 'UnidadMedida', 'action' => 'index']) ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('NUEVA UNIDAD DE MEDIDA'), ['controller' => 'UnidadMedida', 'action' => 'add']) ?></li>
                </div>
            </div>
        </div>
    </div>

    <div class="col s12 m9">
        <div class="card darken-1">
            <div class="card-content black-text">
                <span class="card-title black-text"><?= __('MATERIA PRIMA') ?></span>
                <table class="responsive-table">
                    <thead>
                        <tr class="color_encabezado">
                            <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('nombre_mat_pri') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('descripcion_mat_pri') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('unm_id') ?></th>
                            <th><?= __('ACCIONES') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($materiaPrima as $materiaPrima): ?>
                        <tr>
                            <td><?= $this->Number->format($materiaPrima->id) ?></td>
                            <td><?= h($materiaPrima->nombre_mat_pri) ?></td>
                            <td><?= h($materiaPrima->descripcion_mat_pri) ?></td>
                            <td><?= $materiaPrima->has('unidad_medida') ? $this->Html->link($materiaPrima->unidad_medida->id, ['controller' => 'UnidadMedida', 'action' => 'view', $materiaPrima->unidad_medida->id]) : '' ?></td>
                            <td>
                                <?= $this->Html->link('<i class="material-icons co_buton_ver" title="'. __('View') . '" >zoom_in</i>', ['action' => 'view', $materiaPrima->id], ['escape' => false]) ?>
                                <?= $this->Html->link('<i class="material-icons co_buton_editar" title="'. __('Edit') . '" >create</i>', ['action' => 'edit', $materiaPrima->id], ['escape' => false]) ?>
                                <?= $this->Form->postLink('<i class="material-icons co_buton_eliminar" title="'. __('Delete') . '" >delete</i>', ['action' => 'delete', $materiaPrima->id], ['confirm' => __('Are you sure you want to delete # {0}?', $materiaPrima->id), 'escape' => false]) ?>
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

        <p class="right"><?= $this->Paginator->counter(['format' => __('vino el ultimo inca ©todos los derechos reservados')]) ?></p>
    </div>
</div>
