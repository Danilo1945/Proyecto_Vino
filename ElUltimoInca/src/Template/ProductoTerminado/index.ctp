<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProductoTerminado[]|\Cake\Collection\CollectionInterface $productoTerminado
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
        <div class="card darken-1" id="abajo_menu ">
            <div class="card-content white-text">
                
                <span class="card-title black-text">Acciones</span>
                <div class="card-action" id="abajo_menu">
                    <li class="padding-action"><?= $this->Html->link(__('Nuevo Producto Terminado'), ['Acciones' => 'Agregar']) ?></li>
                </div>
            </div>
        </div>
    </div>

    <div class="col s12 m9">
          <div class="card darken-1"  id="abajo_menu"> 
              
            <div class="card-content black-text">
                <span class="card-title black-text"><?= __('Producto Terminado') ?></span>
                <table class="responsive-table">
                    <thead>
                         <tr class="color_encabezado">
                            <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('fecha') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('pasteurizacion') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('fecha_elb') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('lote_pro_ter') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('cantidad_pro_ter') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('valor_cantidad_pro') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('brix') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('valor_etiqueta') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('valor_corcho') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('valor_capuchon') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('num_cinta_sri') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('num_cinta_inca') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('observaciones') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('id_mat_prim') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('id_tra') ?></th>
                            <th><?= __('Acciones') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($productoTerminado as $productoTerminado): ?>
                        <tr>
                            <td><?= $this->Number->format($productoTerminado->id) ?></td>
                            <td><?= h($productoTerminado->fecha) ?></td>
                            <td><?= $this->Number->format($productoTerminado->pasteurizacion) ?></td>
                            <td><?= h($productoTerminado->fecha_elb) ?></td>
                            <td><?= h($productoTerminado->lote_pro_ter) ?></td>
                            <td><?= h($productoTerminado->cantidad_pro_ter) ?></td>
                            <td><?= $this->Number->format($productoTerminado->valor_cantidad_pro) ?></td>
                            <td><?= $this->Number->format($productoTerminado->brix) ?></td>
                            <td><?= $this->Number->format($productoTerminado->valor_etiqueta) ?></td>
                            <td><?= $this->Number->format($productoTerminado->valor_corcho) ?></td>
                            <td><?= $this->Number->format($productoTerminado->valor_capuchon) ?></td>
                            <td><?= $this->Number->format($productoTerminado->num_cinta_sri) ?></td>
                            <td><?= $this->Number->format($productoTerminado->num_cinta_inca) ?></td>
                            <td><?= h($productoTerminado->observaciones) ?></td>
                            <td><?= $this->Number->format($productoTerminado->id_mat_prim) ?></td>
                            <td><?= $this->Number->format($productoTerminado->id_tra) ?></td>
                            <td>
                                <?= $this->Html->link('<i class="material-icons" title="'. __('Vista') . '" >zoom_in</i>', ['accion' => 'vista', $productoTerminado->id], ['escape' => false]) ?>
                                <?= $this->Html->link('<i class="material-icons" title="'. __('Editar') . '" >create</i>', ['accion' => 'editar', $productoTerminado->id], ['escape' => false]) ?>
                                <?= $this->Form->postLink('<i class="material-icons" title="'. __('Eliminar') . '" >delete</i>', ['accion' => 'elliminar', $productoTerminado->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productoTerminado->id), 'escape' => false]) ?>
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
 
</div>
