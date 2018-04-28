<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pedido[]|\Cake\Collection\CollectionInterface $pedido
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
                    <li class="padding-action"><?= $this->Html->link(__('New Pedido'), ['action' => 'add']) ?></li>
                </div>
            </div>
        </div>
    </div>

    <div class="col s12 m9">
        <div class="card darken-1">
            <div class="card-content black-text">
                <span class="card-title green-text"><?= __('Pedido') ?></span>
                <table class="responsive-table">
                    <thead>
                        <tr>
                            <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('Fecha') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('Cantidad') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('unidad_medida') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('Idcliente') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('id_pro_ter') ?></th>
                            <th><?= __('Actions') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($pedido as $pedido): ?>
                        <tr>
                            <td><?= $this->Number->format($pedido->id) ?></td>
                            <td><?= h($pedido->Fecha) ?></td>
                            <td><?= $this->Number->format($pedido->Cantidad) ?></td>
                            <td><?= h($pedido->unidad_medida) ?></td>
                            <td><?= $this->Number->format($pedido->Idcliente) ?></td>
                            <td><?= $this->Number->format($pedido->id_pro_ter) ?></td>
                            <td>
                                <?= $this->Html->link('<i class="material-icons" title="'. __('View') . '" >zoom_in</i>', ['action' => 'view', $pedido->id], ['escape' => false]) ?>
                                <?= $this->Html->link('<i class="material-icons" title="'. __('Edit') . '" >create</i>', ['action' => 'edit', $pedido->id], ['escape' => false]) ?>
                                <?= $this->Form->postLink('<i class="material-icons" title="'. __('Delete') . '" >delete</i>', ['action' => 'delete', $pedido->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pedido->id), 'escape' => false]) ?>
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
