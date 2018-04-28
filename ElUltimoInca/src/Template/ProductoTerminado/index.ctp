<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProductoTerminado[]|\Cake\Collection\CollectionInterface $productoTerminado
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
                    <li class="padding-action"><?= $this->Html->link(__('New Producto Terminado'), ['action' => 'add']) ?></li>
                </div>
            </div>
        </div>
    </div>

    <div class="col s12 m9">
        <div class="card darken-1">
            <div class="card-content black-text">
                <span class="card-title green-text"><?= __('Producto Terminado') ?></span>
                <table class="responsive-table">
                    <thead>
                        <tr>
                            <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('fecha') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('pasteurizacion') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('fecha_elb') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('lote_pro_ter') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('cantidad_pro_ter') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('valor_cantidad_pro') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('brix') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('valor_etiqueta') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('valor_corcho') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('valor_capuchon') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('num_cinta_sri') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('num_cinta_inca') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('observaciones') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('id_mat_prim') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('id_tra') ?></th>
                            <th><?= __('Actions') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($productoTerminado as $productoTerminado): ?>
                        <tr>
                            <td><?= $this->Number->format($productoTerminado->id) ?></td>
                            <td><?= h($productoTerminado->fecha) ?></td>
                            <td><?= $this->Number->format($productoTerminado->pasteurizacion) ?></td>
                            <td><?= h($productoTerminado->fecha_elb) ?></td>
                            <td><?= h($productoTerminado->lote_pro_ter) ?></td>
                            <td><?= h($productoTerminado->cantidad_pro_ter) ?></td>
                            <td><?= $this->Number->format($productoTerminado->valor_cantidad_pro) ?></td>
                            <td><?= $this->Number->format($productoTerminado->brix) ?></td>
                            <td><?= $this->Number->format($productoTerminado->valor_etiqueta) ?></td>
                            <td><?= $this->Number->format($productoTerminado->valor_corcho) ?></td>
                            <td><?= $this->Number->format($productoTerminado->valor_capuchon) ?></td>
                            <td><?= $this->Number->format($productoTerminado->num_cinta_sri) ?></td>
                            <td><?= $this->Number->format($productoTerminado->num_cinta_inca) ?></td>
                            <td><?= h($productoTerminado->observaciones) ?></td>
                            <td><?= $this->Number->format($productoTerminado->id_mat_prim) ?></td>
                            <td><?= $this->Number->format($productoTerminado->id_tra) ?></td>
                            <td>
                                <?= $this->Html->link('<i class="material-icons" title="'. __('View') . '" >zoom_in</i>', ['action' => 'view', $productoTerminado->id], ['escape' => false]) ?>
                                <?= $this->Html->link('<i class="material-icons" title="'. __('Edit') . '" >create</i>', ['action' => 'edit', $productoTerminado->id], ['escape' => false]) ?>
                                <?= $this->Form->postLink('<i class="material-icons" title="'. __('Delete') . '" >delete</i>', ['action' => 'delete', $productoTerminado->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productoTerminado->id), 'escape' => false]) ?>
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
