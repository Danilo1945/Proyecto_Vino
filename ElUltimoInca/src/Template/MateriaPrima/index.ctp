<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MateriaPrima[]|\Cake\Collection\CollectionInterface $materiaPrima
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Materia Prima'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="materiaPrima index large-9 medium-8 columns content">
    <h3><?= __('Materia Prima') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id_mat_prim') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombre_mat_pri') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descripcion_mat_pri') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id_uni_medi') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($materiaPrima as $materiaPrima): ?>
            <tr>
                <td><?= h($materiaPrima->id_mat_prim) ?></td>
                <td><?= h($materiaPrima->nombre_mat_pri) ?></td>
                <td><?= h($materiaPrima->descripcion_mat_pri) ?></td>
                <td><?= $this->Number->format($materiaPrima->id_uni_medi) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $materiaPrima->id_mat_prim]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $materiaPrima->id_mat_prim]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $materiaPrima->id_mat_prim], ['confirm' => __('Are you sure you want to delete # {0}?', $materiaPrima->id_mat_prim)]) ?>
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
