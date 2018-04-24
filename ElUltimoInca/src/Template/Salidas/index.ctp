<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Salida[]|\Cake\Collection\CollectionInterface $salidas
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
                    <li class="padding-action"><?= $this->Html->link(__('New Salida'), ['action' => 'add']) ?></li>
                </div>
            </div>
        </div>
    </div>

    <div class="col s12 m9">
        <div class="card darken-1">
            <div class="card-content black-text">
                <span class="card-title green-text"><?= __('Salidas') ?></span>
                <table class="responsive-table">
                    <thead>
                        <tr>
                            <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('fecha_sal') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('saldo_sal') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('ingreso_sal') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('egreso_sal') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('donacion_sal') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('devolucion_sal') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('saldo_total') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('observaciones_sal') ?></th>
                            <th><?= __('Actions') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($salidas as $salida): ?>
                        <tr>
                            <td><?= $this->Number->format($salida->id) ?></td>
                            <td><?= h($salida->fecha_sal) ?></td>
                            <td><?= $this->Number->format($salida->saldo_sal) ?></td>
                            <td><?= $this->Number->format($salida->ingreso_sal) ?></td>
                            <td><?= $this->Number->format($salida->egreso_sal) ?></td>
                            <td><?= $this->Number->format($salida->donacion_sal) ?></td>
                            <td><?= $this->Number->format($salida->devolucion_sal) ?></td>
                            <td><?= $this->Number->format($salida->saldo_total) ?></td>
                            <td><?= h($salida->observaciones_sal) ?></td>
                            <td>
                                <?= $this->Html->link('<i class="material-icons" title="'. __('View') . '" >zoom_in</i>', ['action' => 'view', $salida->id], ['escape' => false]) ?>
                                <?= $this->Html->link('<i class="material-icons" title="'. __('Edit') . '" >create</i>', ['action' => 'edit', $salida->id], ['escape' => false]) ?>
                                <?= $this->Form->postLink('<i class="material-icons" title="'. __('Delete') . '" >delete</i>', ['action' => 'delete', $salida->id], ['confirm' => __('Are you sure you want to delete # {0}?', $salida->id), 'escape' => false]) ?>
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
