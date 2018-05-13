<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cliente[]|\Cake\Collection\CollectionInterface $cliente
 */
?>
<div class="hide">
    
</div>
<div class="row">
    <div class="col s12 m3">
        <div class="card darken-1" id="abajo_menu" >
            <div class="card-content white-text" id="abajo_menu">
                <span class="card-title black-text" id="abajo_menu">Acciones</span>
                <div class="card-action" id="abajo_menu">
                    <li class="padding-action"><?= $this->Html->link(__('Nuevo Cliente'), ['action' => 'add']) ?></li>
                </div>
            </div>
        </div>
    </div>

    <div class="col s12 m9">
        <div class="card darken-1" id="abajo_menu">
            <div class="card-content black-text" id="abajo_menu">
                <span class="card-title black-text" id="abajo_menu"><?= __('Cliente') ?></span>
                <table class="responsive-table">
                    <thead>
                        <tr  class="color_encabezado">
                            <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('Cedula') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('Nombres') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('Apellidos') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('Telefono') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('Direccion') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('Email') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('user') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('password') ?></th>
                            <th><?= __('Actions') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($cliente as $cliente): ?>
                        <tr>
                            <td><?= $this->Number->format($cliente->id) ?></td>
                            <td><?= h($cliente->Cedula) ?></td>
                            <td><?= h($cliente->Nombres) ?></td>
                            <td><?= h($cliente->Apellidos) ?></td>
                            <td><?= h($cliente->Telefono) ?></td>
                            <td><?= h($cliente->Direccion) ?></td>
                            <td><?= h($cliente->Email) ?></td>
                            <td><?= h($cliente->user) ?></td>
                            <td><?= h($cliente->password) ?></td>
                            <td>
                                <?= $this->Html->link('<i class="material-icons co_buton_ver" title="'. __('Ver') . '" >zoom_in</i>', ['action' => 'view', $cliente->id], ['escape' => false]) ?>
                                <?= $this->Html->link('<i class="material-icons co_buton_editar" title="'. __('Editar') . '" >create</i>', ['action' => 'edit', $cliente->id], ['escape' => false]) ?>
                                <?= $this->Form->postLink('<i class="material-icons co_buton_eliminar" title="'. __('Eliminar') . '" >delete</i>', ['action' => 'delete', $cliente->id], ['confirm' => __('Esta seguro que quiere borrarlo # {0}?', $cliente->id), 'escape' => false]) ?>
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
