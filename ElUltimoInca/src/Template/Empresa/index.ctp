<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Empresa[]|\Cake\Collection\CollectionInterface $empresa
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Empresa'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="empresa index large-9 medium-8 columns content">
    <h3><?= __('Empresa') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id_emp') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombre') ?></th>
                <th scope="col"><?= $this->Paginator->sort('direccion') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($empresa as $empresa): ?>
            <tr>
                <td><?= $this->Number->format($empresa->id_emp) ?></td>
                <td><?= h($empresa->nombre) ?></td>
                <td><?= h($empresa->direccion) ?></td>
                <td><?= h($empresa->email) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $empresa->id_emp]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $empresa->id_emp]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $empresa->id_emp], ['confirm' => __('Are you sure you want to delete # {0}?', $empresa->id_emp)]) ?>
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
