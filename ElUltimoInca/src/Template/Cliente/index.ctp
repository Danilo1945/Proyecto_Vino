<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cliente[]|\Cake\Collection\CollectionInterface $cliente
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Cliente'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="cliente index large-9 medium-8 columns content">
    <h3><?= __('Cliente') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('Idcliente') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Nombres') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Apellidos') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Telefono') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Direccion') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user') ?></th>
                <th scope="col"><?= $this->Paginator->sort('password') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cliente as $cliente): ?>
            <tr>
                <td><?= h($cliente->Idcliente) ?></td>
                <td><?= h($cliente->Nombres) ?></td>
                <td><?= h($cliente->Apellidos) ?></td>
                <td><?= h($cliente->Telefono) ?></td>
                <td><?= h($cliente->Direccion) ?></td>
                <td><?= h($cliente->Email) ?></td>
                <td><?= h($cliente->user) ?></td>
                <td><?= h($cliente->password) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $cliente->Idcliente]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $cliente->Idcliente]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $cliente->Idcliente], ['confirm' => __('Are you sure you want to delete # {0}?', $cliente->Idcliente)]) ?>
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
