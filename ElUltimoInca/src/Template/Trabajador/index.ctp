<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Trabajador[]|\Cake\Collection\CollectionInterface $trabajador
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Trabajador'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="trabajador index large-9 medium-8 columns content">
    <h3><?= __('Trabajador') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id_tra') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Nombres_tra') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Apellidos_tra') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Telefono_tra') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Direccion_tra') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Email_tra') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($trabajador as $trabajador): ?>
            <tr>
                <td><?= h($trabajador->id_tra) ?></td>
                <td><?= h($trabajador->Nombres_tra) ?></td>
                <td><?= h($trabajador->Apellidos_tra) ?></td>
                <td><?= h($trabajador->Telefono_tra) ?></td>
                <td><?= h($trabajador->Direccion_tra) ?></td>
                <td><?= h($trabajador->Email_tra) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $trabajador->id_tra]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $trabajador->id_tra]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $trabajador->id_tra], ['confirm' => __('Are you sure you want to delete # {0}?', $trabajador->id_tra)]) ?>
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
