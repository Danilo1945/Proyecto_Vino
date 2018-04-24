<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Administrador[]|\Cake\Collection\CollectionInterface $administrador
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Administrador'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="administrador index large-9 medium-8 columns content">
    <h3><?= __('Administrador') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('Id_adm') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user') ?></th>
                <th scope="col"><?= $this->Paginator->sort('password') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Rol') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($administrador as $administrador): ?>
            <tr>
                <td><?= $this->Number->format($administrador->Id_adm) ?></td>
                <td><?= h($administrador->user) ?></td>
                <td><?= h($administrador->password) ?></td>
                <td><?= h($administrador->Rol) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $administrador->Id_adm]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $administrador->Id_adm]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $administrador->Id_adm], ['confirm' => __('Are you sure you want to delete # {0}?', $administrador->Id_adm)]) ?>
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
