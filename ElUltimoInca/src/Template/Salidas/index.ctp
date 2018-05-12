<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Salida[]|\Cake\Collection\CollectionInterface $salidas
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
                <div class="card-action" id="abajo_menu">
                    <li class="padding-action"><?= $this->Html->link(__('Nueva Salida'), ['action' => 'add']) ?></li>
                </div>
            </div>
        </div>
    </div>

    <div class="col s12 m9">
        <div class="card darken-1">
            <div class="card-content black-text">
                <span class="card-title black-text"><?= __('Salidas') ?></span>
                <table class="responsive-table">
                    <thead>
                        <tr class="color_encabezado">
                            <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('fecha_sal') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('saldo_sal') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('ingreso_sal') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('egreso_sal') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('donacion_sal') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('devolucion_sal') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('saldo_total') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('observaciones_sal') ?></th>
                            <th><?= __('Acciones') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($salidas as $salida): ?>
                        <tr>
                            <td><?= $this->Number->format($salida->id) ?></td>
                            <td><?= h($salida->fecha_sal) ?></td>
                            <td><?= $this->Number->format($salida->saldo_sal) ?></td>
                            <td><?= $this->Number->format($salida->ingreso_sal) ?></td>
                            <td><?= $this->Number->format($salida->egreso_sal) ?></td>
                            <td><?= $this->Number->format($salida->donacion_sal) ?></td>
                            <td><?= $this->Number->format($salida->devolucion_sal) ?></td>
                            <td><?= $this->Number->format($salida->saldo_total) ?></td>
                            <td><?= h($salida->observaciones_sal) ?></td>
                            <td>
                                <?= $this->Html->link('<i class="material-icons co buton_ver" title="'. __('Ver') . '" >zoom_in</i>', ['action' => 'view', $salida->id], ['escape' => false]) ?>
                                <?= $this->Html->link('<i class="material-icons co buton_editar" title="'. __('Editar') . '" >create</i>', ['action' => 'edit', $salida->id], ['escape' => false]) ?>
                                <?= $this->Form->postLink('<i class="material-icons co buton_eliminar" title="'. __('Eliminar') . '" >delete</i>', ['action' => 'delete', $salida->id], ['confirm' => __('Esta seguro que desea eliminar # {0}?', $salida->id), 'escape' => false]) ?>
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
