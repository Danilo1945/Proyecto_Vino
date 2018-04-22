<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Proveedor[]|\Cake\Collection\CollectionInterface $proveedor
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Proveedor'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="proveedor index large-9 medium-8 columns content">
    <h3><?= __('Proveedor') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id_pro') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombres_pro') ?></th>
                <th scope="col"><?= $this->Paginator->sort('apellidos_pro') ?></th>
                <th scope="col"><?= $this->Paginator->sort('telefono_pro') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email_pro') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id_emp') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($proveedor as $proveedor): ?>
            <tr>
                <td><?= h($proveedor->id_pro) ?></td>
                <td><?= h($proveedor->nombres_pro) ?></td>
                <td><?= h($proveedor->apellidos_pro) ?></td>
                <td><?= h($proveedor->telefono_pro) ?></td>
                <td><?= h($proveedor->email_pro) ?></td>
                <td><?= $this->Number->format($proveedor->id_emp) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $proveedor->id_pro]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $proveedor->id_pro]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $proveedor->id_pro], ['confirm' => __('Are you sure you want to delete # {0}?', $proveedor->id_pro)]) ?>
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
