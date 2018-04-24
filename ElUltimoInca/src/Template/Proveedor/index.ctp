<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Proveedor[]|\Cake\Collection\CollectionInterface $proveedor
 */
?>
<div class="hide">
    <?= $this->layout = "Materialize.materialize"; ?>
</div>
<div class="row">
    <div class="col s12 m3">
        <div class="card darken-1">
            <div class="card-content white-text">
                <span class="card-title green-text">Actions</span>
                <div class="card-action">
                    <li class="padding-action"><?= $this->Html->link(__('New Proveedor'), ['action' => 'add']) ?></li>
                </div>
            </div>
        </div>
    </div>

    <div class="col s12 m9">
        <div class="card darken-1">
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
                            <th><?= __('Actions') ?></th>
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
                                <?= $this->Html->link('<i class="material-icons" title="'. __('View') . '" >zoom_in</i>', ['action' => 'view', $proveedor->id], ['escape' => false]) ?>
                                <?= $this->Html->link('<i class="material-icons" title="'. __('Edit') . '" >create</i>', ['action' => 'edit', $proveedor->id], ['escape' => false]) ?>
                                <?= $this->Form->postLink('<i class="material-icons" title="'. __('Delete') . '" >delete</i>', ['action' => 'delete', $proveedor->id], ['confirm' => __('Are you sure you want to delete # {0}?', $proveedor->id), 'escape' => false]) ?>
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
