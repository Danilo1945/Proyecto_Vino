<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Administrador[]|\Cake\Collection\CollectionInterface $administrador
 */
?>
<div class="hide">
  
</div>
<div class="row">
    <div class="col s12 m3">
        <div class="card darken-1" id="abajo_menu">
            <div class="card-content white-text">
                <span class="card-title green-text">ACCIONES</span>
                <div class="card-action" id="abajo_menu">
                    <li  class="padding-action"><?= $this->Html->link(__('NUEVO ADMINISTRADOR'), ['action' => 'add']) ?></li>
                </div>
            </div>
        </div>
    </div>

    <div class="col s12 m9">
        <div class="card darken-1">
            <div class="card-content black-text">
                <span class="card-title green-text"><?= __('ADMINISTRADOR') ?></span>
                <table class="responsive-table">
                    <thead>
                        <tr>
                            <th scope="col"><?= $this->Paginator->sort('Id') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('Cedula') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('Nombres') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('Apellidos') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('Telefono') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('Direccion') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('Email') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('User') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('Password') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('Rol') ?></th>
                            <th><?= __('ACCIONES') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($administrador as $administrador): ?>
                        <tr>
                            <td><?= $this->Number->format($administrador->id) ?></td>
                            <td><?= h($administrador->Cedula) ?></td>
                            <td><?= h($administrador->Nombres) ?></td>
                            <td><?= h($administrador->Apellidos) ?></td>
                            <td><?= h($administrador->Telefono) ?></td>
                            <td><?= h($administrador->Direccion) ?></td>
                            <td><?= h($administrador->Email) ?></td>
                            <td><?= h($administrador->user) ?></td>
                            <td><?= h($administrador->password) ?></td>
                            <td><?= h($administrador->Rol) ?></td>
                            <td>
                                <?= $this->Html->link('<i class="material-icons" title="'. __('VER') . '" >zoom_in</i>', ['action' => 'view', $administrador->id], ['escape' => false]) ?>
                                <?= $this->Html->link('<i class="material-icons" title="'. __('EDITAR') . '" >create</i>', ['action' => 'edit', $administrador->id], ['escape' => false]) ?>
                                <?= $this->Form->postLink('<i class="material-icons" title="'. __('ELIMINAR') . '" >delete</i>', ['action' => 'delete', $administrador->id], ['confirm' => __('Are you sure you want to delete # {0}?', $administrador->id), 'escape' => false]) ?>
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
