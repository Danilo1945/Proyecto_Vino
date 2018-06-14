<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\HojaVenta[]|\Cake\Collection\CollectionInterface $hojaVentas
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
                    <li class="padding-action"><?= $this->Html->link(__('New Hoja Venta'), ['action' => 'add']) ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('List Trabajador'), ['controller' => 'Trabajador', 'action' => 'index']) ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('New Trabajador'), ['controller' => 'Trabajador', 'action' => 'add']) ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
                </div>
            </div>
        </div>
    </div>

    <div class="col s12 m9">
        <div class="card darken-1">
            <div class="card-content black-text">
                <span class="card-title green-text"><?= __('Hoja Ventas') ?></span>
                <table class="responsive-table">
                    <thead>
                        <tr>
                            <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('fecha') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('trabajador_id') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('users_id') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('cantidad') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('precio_unitario') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('precio_total') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('estado_venta') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('valor_estado') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('observaciones') ?></th>
                            <th><?= __('Actions') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($hojaVentas as $hojaVenta): ?>
                        <tr>
                            <td><?= $this->Number->format($hojaVenta->id) ?></td>
                            <td><?= h($hojaVenta->fecha) ?></td>
                            <td><?= $hojaVenta->has('trabajador') ? $this->Html->link($hojaVenta->trabajador->id, ['controller' => 'Trabajador', 'action' => 'view', $hojaVenta->trabajador->id]) : '' ?></td>
                            <td><?= $hojaVenta->has('user') ? $this->Html->link($hojaVenta->user->name, ['controller' => 'Users', 'action' => 'view', $hojaVenta->user->id]) : '' ?></td>
                            <td><?= $this->Number->format($hojaVenta->cantidad) ?></td>
                            <td><?= $this->Number->format($hojaVenta->precio_unitario) ?></td>
                            <td><?= $this->Number->format($hojaVenta->precio_total) ?></td>
                            <td><?= h($hojaVenta->estado_venta) ?></td>
                            <td><?= $this->Number->format($hojaVenta->valor_estado) ?></td>
                            <td><?= h($hojaVenta->observaciones) ?></td>
                            <td>
                                <?= $this->Html->link('<i class="material-icons" title="'. __('View') . '" >zoom_in</i>', ['action' => 'view', $hojaVenta->id], ['escape' => false]) ?>
                                <?= $this->Html->link('<i class="material-icons" title="'. __('Edit') . '" >create</i>', ['action' => 'edit', $hojaVenta->id], ['escape' => false]) ?>
                                <?= $this->Form->postLink('<i class="material-icons" title="'. __('Delete') . '" >delete</i>', ['action' => 'delete', $hojaVenta->id], ['confirm' => __('Are you sure you want to delete # {0}?', $hojaVenta->id), 'escape' => false]) ?>
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
