<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>
<div class="hide">

</div>
<div class="row">
    <div class="col s12 m3">
        <div class="card darken-1">
            <div class="card-content white-text">
                <span class="card-title green-text">Actions</span>
                <div class="card-action">
                    <li class="padding-action"><?= $this->Html->link(__('New User'), ['action' => 'add']) ?></li>
                </div>
            </div>
        </div>
    </div>

    <div class="col s12 m9">
        <div class="card darken-1">
            <div class="card-content black-text">
                <span class="card-title green-text"><?= __('Users') ?></span>
                <table class="responsive-table">
                    <thead>
                        <tr>
                            <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('Cedula') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('Nombres') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('Apellidos') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('Telefono') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('Direccion') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('Email') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('user') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('password') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('Rol') ?></th>
                            <th><?= __('Actions') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($users as $user): ?>
                        <tr>
                            <td><?= $this->Number->format($user->id) ?></td>
                            <td><?= h($user->Cedula) ?></td>
                            <td><?= h($user->Nombres) ?></td>
                            <td><?= h($user->Apellidos) ?></td>
                            <td><?= h($user->Telefono) ?></td>
                            <td><?= h($user->Direccion) ?></td>
                            <td><?= h($user->Email) ?></td>
                            <td><?= h($user->user) ?></td>
                            <td><?= h($user->password) ?></td>
                            <td><?= h($user->Rol) ?></td>
                            <td>
                                <?= $this->Html->link('<i class="material-icons" title="'. __('View') . '" >zoom_in</i>', ['action' => 'view', $user->id], ['escape' => false]) ?>
                                <?= $this->Html->link('<i class="material-icons" title="'. __('Edit') . '" >create</i>', ['action' => 'edit', $user->id], ['escape' => false]) ?>
                                <?= $this->Form->postLink('<i class="material-icons" title="'. __('Delete') . '" >delete</i>', ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id), 'escape' => false]) ?>
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
