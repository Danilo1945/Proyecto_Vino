<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Item[]|\Cake\Collection\CollectionInterface $item
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
        <div class="card darken-1" id="abajo_menu">
            <div class="card-content white-text">
                <span class="card-title black-text">Acciones</span>
               <div class="card-action " id="abajo_menu"> 
                    <li class="padding-action"><?= $this->Html->link(__('Nuevo Item'), ['Accion' => 'Agregar']) ?></li>
                </div>
            </div>
        </div>
    </div>

    <div class="col s12 m9">
        <div class="card darken-1"  id="abajo_menu"> 
            <div class="card-content black-text">
                <span class="card-title black-text"><?= __('Item') ?></span>
                <table class="responsive-table">
                    <thead>
                        <tr class="color_encabezado">
                            <th scope="col"><?= $this->Paginator->sort('ID') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('nom_item') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('detalle_item') ?></th>
                            <th><?= __('Acciones') ?></th>
                        </tr>
                                         
                    </thead>
                    <tbody>
                    <?php foreach ($item as $item): ?>
                        <tr>
                            <td><?= $this->Number->format($item->id) ?></td>
                            <td><?= h($item->nom_item) ?></td>
                            <td><?= h($item->detalle_item) ?></td>
                            <td>
                                <?= $this->Html->link('<i class="material-icons" title="'. __('Vista') . '" >zoom_in</i>', ['action' => 'vista', $item->id], ['escape' => false]) ?>
                                <?= $this->Html->link('<i class="material-icons" title="'. __('Editar') . '" >create</i>', ['action' => 'editar', $item->id], ['escape' => false]) ?>
                                <?= $this->Form->postLink('<i class="material-icons" title="'. __('Eliminar') . '" >delete</i>', ['action' => 'eliminar', $item->id], ['confirm' => __('Are you sure you want to delete # {0}?', $item->id), 'escape' => false]) ?>
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
        <br>
       </div>
</div>
