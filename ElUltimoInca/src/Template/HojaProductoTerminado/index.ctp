<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\HojaProductoTerminado[]|\Cake\Collection\CollectionInterface $hojaProductoTerminado
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
                    <li class="padding-action"><?= $this->Html->link(__('New Hoja Producto Terminado'), ['action' => 'add']) ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('List Pasteurizacion'), ['controller' => 'Pasteurizacion', 'action' => 'index']) ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('New Pasteurizacion'), ['controller' => 'Pasteurizacion', 'action' => 'add']) ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('List Lote'), ['controller' => 'Lote', 'action' => 'index']) ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('New Lote'), ['controller' => 'Lote', 'action' => 'add']) ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('List Brix'), ['controller' => 'Brix', 'action' => 'index']) ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('New Brix'), ['controller' => 'Brix', 'action' => 'add']) ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('List Trabajador'), ['controller' => 'Trabajador', 'action' => 'index']) ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('New Trabajador'), ['controller' => 'Trabajador', 'action' => 'add']) ?></li>
                </div>
            </div>
        </div>
    </div>

    <div class="col s12 m9">
        <div class="card darken-1">
            <div class="card-content black-text">
                <span class="card-title green-text"><?= __('Hoja Producto Terminado') ?></span>
                <table class="responsive-table">
                    <thead>
                        <tr>
                            <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('nombre') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('fecha') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('valor_IVA') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('valor_ICE') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('pasteurizacion_id') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('fecha_elb') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('lote_id') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('nombre_cantidad') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('valor_cantidad') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('brix_id') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('nombre_etiqueta') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('cantidad_etiqueta') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('nombre_corcho') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('cantidad_corcho') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('cantidad_capuchon') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('cantidad_cintas_SRI') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('cantidad_cintas_ultimoInca') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('trabajador_id') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('observaciones') ?></th>
                            <th><?= __('Actions') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($hojaProductoTerminado as $hojaProductoTerminado): ?>
                        <tr>
                            <td><?= $this->Number->format($hojaProductoTerminado->id) ?></td>
                            <td><?= h($hojaProductoTerminado->nombre) ?></td>
                            <td><?= h($hojaProductoTerminado->fecha) ?></td>
                            <td><?= $this->Number->format($hojaProductoTerminado->valor_IVA) ?></td>
                            <td><?= $this->Number->format($hojaProductoTerminado->valor_ICE) ?></td>
                            <td><?= $hojaProductoTerminado->has('pasteurizacion') ? $this->Html->link($hojaProductoTerminado->pasteurizacion->id, ['controller' => 'Pasteurizacion', 'action' => 'view', $hojaProductoTerminado->pasteurizacion->id]) : '' ?></td>
                            <td><?= h($hojaProductoTerminado->fecha_elb) ?></td>
                            <td><?= $hojaProductoTerminado->has('lote') ? $this->Html->link($hojaProductoTerminado->lote->id, ['controller' => 'Lote', 'action' => 'view', $hojaProductoTerminado->lote->id]) : '' ?></td>
                            <td><?= h($hojaProductoTerminado->nombre_cantidad) ?></td>
                            <td><?= $this->Number->format($hojaProductoTerminado->valor_cantidad) ?></td>
                            <td><?= $hojaProductoTerminado->has('brix') ? $this->Html->link($hojaProductoTerminado->brix->id, ['controller' => 'Brix', 'action' => 'view', $hojaProductoTerminado->brix->id]) : '' ?></td>
                            <td><?= h($hojaProductoTerminado->nombre_etiqueta) ?></td>
                            <td><?= $this->Number->format($hojaProductoTerminado->cantidad_etiqueta) ?></td>
                            <td><?= h($hojaProductoTerminado->nombre_corcho) ?></td>
                            <td><?= $this->Number->format($hojaProductoTerminado->cantidad_corcho) ?></td>
                            <td><?= $this->Number->format($hojaProductoTerminado->cantidad_capuchon) ?></td>
                            <td><?= $this->Number->format($hojaProductoTerminado->cantidad_cintas_SRI) ?></td>
                            <td><?= $this->Number->format($hojaProductoTerminado->cantidad_cintas_ultimoInca) ?></td>
                            <td><?= $hojaProductoTerminado->has('trabajador') ? $this->Html->link($hojaProductoTerminado->trabajador->id, ['controller' => 'Trabajador', 'action' => 'view', $hojaProductoTerminado->trabajador->id]) : '' ?></td>
                            <td><?= h($hojaProductoTerminado->observaciones) ?></td>
                            <td>
                                <?= $this->Html->link('<i class="material-icons" title="'. __('View') . '" >zoom_in</i>', ['action' => 'view', $hojaProductoTerminado->id], ['escape' => false]) ?>
                                <?= $this->Html->link('<i class="material-icons" title="'. __('Edit') . '" >create</i>', ['action' => 'edit', $hojaProductoTerminado->id], ['escape' => false]) ?>
                                <?= $this->Form->postLink('<i class="material-icons" title="'. __('Delete') . '" >delete</i>', ['action' => 'delete', $hojaProductoTerminado->id], ['confirm' => __('Are you sure you want to delete # {0}?', $hojaProductoTerminado->id), 'escape' => false]) ?>
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
