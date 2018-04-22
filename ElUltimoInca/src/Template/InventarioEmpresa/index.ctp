<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\InventarioEmpresa[]|\Cake\Collection\CollectionInterface $inventarioEmpresa
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Inventario Empresa'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="inventarioEmpresa index large-9 medium-8 columns content">
    <h3><?= __('Inventario Empresa') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id_inv') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombre_art_inv') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descripcion_inv') ?></th>
                <th scope="col"><?= $this->Paginator->sort('color_inv') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id_item') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($inventarioEmpresa as $inventarioEmpresa): ?>
            <tr>
                <td><?= h($inventarioEmpresa->id_inv) ?></td>
                <td><?= h($inventarioEmpresa->nombre_art_inv) ?></td>
                <td><?= h($inventarioEmpresa->descripcion_inv) ?></td>
                <td><?= h($inventarioEmpresa->color_inv) ?></td>
                <td><?= $this->Number->format($inventarioEmpresa->id_item) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $inventarioEmpresa->id_inv]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $inventarioEmpresa->id_inv]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $inventarioEmpresa->id_inv], ['confirm' => __('Are you sure you want to delete # {0}?', $inventarioEmpresa->id_inv)]) ?>
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
