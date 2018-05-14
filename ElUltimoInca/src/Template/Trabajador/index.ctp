<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Trabajador[]|\Cake\Collection\CollectionInterface $trabajador
 */
?>
<div class="hide">
<<<<<<< HEAD

=======
    
>>>>>>> a3eecf72e2da675c4a4bd5526b1a4b29fe5802b5
</div>
<div class="row">
    <div class="col s12 m3">
        <div class="card darken-1" id="abajo_menu">
            <div class="card-content white-text" id="abajo_menu">
                <span class="card-title black-text" id="abajo_menu">Acciones</span>
                <div class="card-action" id="abajo_menu">
                    <li class="padding-action"><?= $this->Html->link(__('Nuevo Trabajador'), ['action' => 'add']) ?></li>
                </div>
            </div>
        </div>
    </div>

    <div class="col s12 m9">
        <div class="card darken-1" id="abajo_menu">
            <div class="card-content black-text" id="abajo_menu">
                <span class="card-title black-text" id="abajo_menu"><?= __('Trabajador') ?></span>
                <table class="responsive-table">
                    <thead>
                        <tr class="color_encabezado">
                            <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('cedula') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('Nombres_tra') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('Apellidos_tra') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('Telefono_tra') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('Direccion_tra') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('Email_tra') ?></th>
                            <th><?= __('Acciones  ') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($trabajador as $trabajador): ?>
                        <tr>
                            <td><?= $this->Number->format($trabajador->id) ?></td>
                            <td><?= h($trabajador->cedula) ?></td>
                            <td><?= h($trabajador->Nombres_tra) ?></td>
                            <td><?= h($trabajador->Apellidos_tra) ?></td>
                            <td><?= h($trabajador->Telefono_tra) ?></td>
                            <td><?= h($trabajador->Direccion_tra) ?></td>
                            <td><?= h($trabajador->Email_tra) ?></td>
                            <td>
                                <?= $this->Html->link('<i class="material-icons co_buton_ver " title="'. __('Ver') . '" >zoom_in</i>', ['action' => 'view', $trabajador->id], ['escape' => false]) ?>
                                <?= $this->Html->link('<i class="material-icons co_buton_editar" title="'. __('Editar') . '" >create</i>', ['action' => 'edit', $trabajador->id], ['escape' => false]) ?>
                                <?= $this->Form->postLink('<i class="material-icons co_buton_eliminar" title="'. __('Eliminar') . '" >delete</i>', ['action' => 'delete', $trabajador->id], ['confirm' => __('Esta seguro que quiere borrarlo # {0}?', $trabajador->id), 'escape' => false]) ?>
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
