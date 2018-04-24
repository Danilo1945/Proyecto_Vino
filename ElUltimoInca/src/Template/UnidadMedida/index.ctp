<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UnidadMedida[]|\Cake\Collection\CollectionInterface $unidadMedida
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Unidad Medida'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="unidadMedida index large-9 medium-8 columns content">
    <h3><?= __('Unidad Medida') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id_uni_medi') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombre_umed') ?></th>
                <th scope="col"><?= $this->Paginator->sort('detalle_umed') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($unidadMedida as $unidadMedida): ?>
            <tr>
                <td><?= $this->Number->format($unidadMedida->id_uni_medi) ?></td>
                <td><?= h($unidadMedida->nombre_umed) ?></td>
                <td><?= h($unidadMedida->detalle_umed) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $unidadMedida->id_uni_medi]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $unidadMedida->id_uni_medi]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $unidadMedida->id_uni_medi], ['confirm' => __('Are you sure you want to delete # {0}?', $unidadMedida->id_uni_medi)]) ?>
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
