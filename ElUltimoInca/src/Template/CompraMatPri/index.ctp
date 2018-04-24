<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CompraMatPri[]|\Cake\Collection\CollectionInterface $compraMatPri
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Compra Mat Pri'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="compraMatPri index large-9 medium-8 columns content">
    <h3><?= __('Compra Mat Pri') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id_cmp') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_mat') ?></th>
                <th scope="col"><?= $this->Paginator->sort('precio_u_mat') ?></th>
                <th scope="col"><?= $this->Paginator->sort('precio_tot_mat') ?></th>
                <th scope="col"><?= $this->Paginator->sort('observaciones_mat') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id_pro') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id_tra') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id_mat_prim') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($compraMatPri as $compraMatPri): ?>
            <tr>
                <td><?= $this->Number->format($compraMatPri->id_cmp) ?></td>
                <td><?= h($compraMatPri->fecha_mat) ?></td>
                <td><?= $this->Number->format($compraMatPri->precio_u_mat) ?></td>
                <td><?= $this->Number->format($compraMatPri->precio_tot_mat) ?></td>
                <td><?= h($compraMatPri->observaciones_mat) ?></td>
                <td><?= h($compraMatPri->id_pro) ?></td>
                <td><?= h($compraMatPri->id_tra) ?></td>
                <td><?= h($compraMatPri->id_mat_prim) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $compraMatPri->id_cmp]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $compraMatPri->id_cmp]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $compraMatPri->id_cmp], ['confirm' => __('Are you sure you want to delete # {0}?', $compraMatPri->id_cmp)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
