<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Socio[]|\Cake\Collection\CollectionInterface $socio
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Socio'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="socio index large-9 medium-8 columns content">
    <h3><?= __('Socio') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id_so') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Nombres') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Apellidos') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Telefono') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Direccion') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Email') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($socio as $socio): ?>
            <tr>
                <td><?= h($socio->id_so) ?></td>
                <td><?= h($socio->Nombres) ?></td>
                <td><?= h($socio->Apellidos) ?></td>
                <td><?= h($socio->Telefono) ?></td>
                <td><?= h($socio->Direccion) ?></td>
                <td><?= h($socio->Email) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $socio->id_so]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $socio->id_so]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $socio->id_so], ['confirm' => __('Are you sure you want to delete # {0}?', $socio->id_so)]) ?>
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
