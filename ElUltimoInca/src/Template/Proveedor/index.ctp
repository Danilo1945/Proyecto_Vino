<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Proveedor[]|\Cake\Collection\CollectionInterface $proveedor
 */
?>
<div class="hide">
   
</div>
<div class="row">
    <div class="col s12 m3">
        <div class="card darken-1" id="abajo_menu">
            <div class="card-content white-text">
                <span class="card-title green-text">Accion </span>
                <div class="card-action" id="abajo_menu">
                    <li class="padding-action"><?= $this->Html->link(__('Nuevo Proveedor'), ['accion' => 'add']) ?></li>
                </div>
            </div>
        </div>
    </div>

    <div class="col s12 m9">
        <div class="card darken-1" id="abajo_menu">
            <div class="card-content black-text">
                <span class="card-title green-text"><?= __('Proveedor') ?></span>
                <table class="responsive-table">
                    <thead>
                        <tr>
                            <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('cedula') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('nombres_pro') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('apellidos_pro') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('telefono_pro') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('email_pro') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('id_emp') ?></th>
                            <th><?= __('Acciones') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($proveedor as $proveedor): ?>
                        <tr>
                            <td><?= $this->Number->format($proveedor->id) ?></td>
                            <td><?= h($proveedor->cedula) ?></td>
                            <td><?= h($proveedor->nombres_pro) ?></td>
                            <td><?= h($proveedor->apellidos_pro) ?></td>
                            <td><?= h($proveedor->telefono_pro) ?></td>
                            <td><?= h($proveedor->email_pro) ?></td>
                            <td><?= $this->Number->format($proveedor->id_emp) ?></td>
                            <td>
                                <?= $this->Html->link('<i class="material-icons" title="'. __('Nuevo') . '" >zoom_in</i>', ['action' => 'view', $proveedor->id], ['escape' => false]) ?>
                                <?= $this->Html->link('<i class="material-icons" title="'. __('Editar') . '" >create</i>', ['action' => 'edit', $proveedor->id], ['escape' => false]) ?>
                                <?= $this->Form->postLink('<i class="material-icons" title="'. __('Eliminar') . '" >delete</i>', ['action' => 'delete', $proveedor->id], ['confirm' => __('Desea Eliminar', $proveedor->id), 'escape' => false]) ?>
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

        <p class="right"><?= $this->Paginator->counter(['format' => __('Lista de Proveedores')]) ?></p>
    </div>
</div>
