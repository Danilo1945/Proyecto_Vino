<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Socio[]|\Cake\Collection\CollectionInterface $socio
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


<!--<a href="" style="background: #990000">1</a>-->



<div class="hide" >
    
</div>
<div class="row" >
    <div class="col s12 m3" >
        <div class="card darken-1 " id="abajo_menu ">

            <div class="card-content white-text">
                 <!--aqui titulo-->
                <span class="card-title black-text">Acciones</span>  <!--cambio el color por black-text -->
                <div class="card-action " id="abajo_menu"> 
                   
                    <li class="padding-action "><?= $this->Html->link(__('Nuevo Socio'), ['action' => 'add']) ?></li>

                </div>
            </div>
        </div>
    </div>

    <div class="col s12 m9">
        <div class="card darken-1"  id="abajo_menu"> 
            <div class="card-content black-text" >
              
                <span class="card-title black-text"> <?= __('Socio') ?> </span>  <!--cambio el colo por black-text-->
                <table class="responsive-table">
                    <thead>
                        <!--aqui agregamos la clase color_encabezado-->
                        <tr class="color_encabezado">
                            <th scope="col" ><?= $this->Paginator->sort('id') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('cedula') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('Nombres') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('Apellidos') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('Telefono') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('Direccion') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('Email') ?></th>
                            <th><?= __('Acciones') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($socio as $socio): ?>
                        <tr>
                            <td><?= $this->Number->format($socio->id) ?></td>
                            <td><?= h($socio->cedula) ?></td>
                            <td><?= h($socio->Nombres) ?></td>
                            <td><?= h($socio->Apellidos) ?></td>
                            <td><?= h($socio->Telefono) ?></td>
                            <td ><?= h($socio->Direccion) ?></td>
                            <td><?= h($socio->Email) ?></td>
                            <td>
                                <!--aqui agregamos la clase co_buton-->
                                <?= $this->Html->link('<i class="material-icons co_buton_ver" title="'. __('Ver') . '" >zoom_in</i>', ['action' => 'view', $socio->id], ['escape' => false]) ?>
                                <?= $this->Html->link('<i class="material-icons co_buton_editar" title="'. __('Editar') . '" >create</i>', ['action' => 'edit', $socio->id], ['escape' => false]) ?>
                                <?= $this->Form->postLink('<i class="material-icons co_buton_eliminar" title="'. __('Eliminar') . '" >delete</i>', ['action' => 'delete', $socio->id], ['confirm' => __('Are you sure you want to delete # {0}?', $socio->id), 'escape' => false]) ?>
                               
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="center">
            <ul class="pagination color_paginator">
                <?= $this->Paginator->first('<i class="material-icons">first_page</i>', ['class' => 'waves-effect', 'escape' => false]) ?>
                <?= $this->Paginator->prev('<i class="material-icons">chevron_left</i>', ['class' => 'waves-effect', 'escape' => false]) ?>
                <?= $this->Paginator->numbers() ?>
                <?= $this->Paginator->next('<i class="material-icons">chevron_right</i>', ['class' => 'waves-effect', 'escape' => false]) ?>
                <?= $this->Paginator->last('<i class="material-icons">last_page</i>', ['class' => 'waves-effect', 'escape' => false]) ?>
            </ul>
        </div>

      
    </div>
</div>
