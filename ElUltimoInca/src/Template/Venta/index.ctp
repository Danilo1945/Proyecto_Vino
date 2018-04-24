<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ventum[]|\Cake\Collection\CollectionInterface $venta
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
                    <li class="padding-action"><?= $this->Html->link(__('New Ventum'), ['action' => 'add']) ?></li>
                </div>
            </div>
        </div>
    </div>

    <div class="col s12 m9">
        <div class="card darken-1">
            <div class="card-content black-text">
                <span class="card-title green-text"><?= __('Venta') ?></span>
                <table class="responsive-table">
                    <thead>
                        <tr>
                            <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('fecha_ven') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('id_tra') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('Idcliente') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('id_pro_ter') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('precio_uni') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('precio_total') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('estado_cuenta') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('valor_donacion_vent') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('observaciones_ven') ?></th>
                            <th><?= __('Actions') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($venta as $ventum): ?>
                        <tr>
                            <td><?= $this->Number->format($ventum->id) ?></td>
                            <td><?= h($ventum->fecha_ven) ?></td>
                            <td><?= $this->Number->format($ventum->id_tra) ?></td>
                            <td><?= $this->Number->format($ventum->Idcliente) ?></td>
                            <td><?= $this->Number->format($ventum->id_pro_ter) ?></td>
                            <td><?= $this->Number->format($ventum->precio_uni) ?></td>
                            <td><?= $this->Number->format($ventum->precio_total) ?></td>
                            <td><?= h($ventum->estado_cuenta) ?></td>
                            <td><?= $this->Number->format($ventum->valor_donacion_vent) ?></td>
                            <td><?= h($ventum->observaciones_ven) ?></td>
                            <td>
                                <?= $this->Html->link('<i class="material-icons" title="'. __('View') . '" >zoom_in</i>', ['action' => 'view', $ventum->id], ['escape' => false]) ?>
                                <?= $this->Html->link('<i class="material-icons" title="'. __('Edit') . '" >create</i>', ['action' => 'edit', $ventum->id], ['escape' => false]) ?>
                                <?= $this->Form->postLink('<i class="material-icons" title="'. __('Delete') . '" >delete</i>', ['action' => 'delete', $ventum->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ventum->id), 'escape' => false]) ?>
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
