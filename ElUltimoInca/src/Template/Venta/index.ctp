<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ventum[]|\Cake\Collection\CollectionInterface $venta
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Ventum'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="venta index large-9 medium-8 columns content">
    <h3><?= __('Venta') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id_ven') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_ven') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id_tra') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Idcliente') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id_pro_ter') ?></th>
                <th scope="col"><?= $this->Paginator->sort('precio_uni') ?></th>
                <th scope="col"><?= $this->Paginator->sort('precio_total') ?></th>
                <th scope="col"><?= $this->Paginator->sort('estado_cuenta') ?></th>
                <th scope="col"><?= $this->Paginator->sort('valor_donacion_vent') ?></th>
                <th scope="col"><?= $this->Paginator->sort('observaciones_ven') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($venta as $ventum): ?>
            <tr>
                <td><?= $this->Number->format($ventum->id_ven) ?></td>
                <td><?= h($ventum->fecha_ven) ?></td>
                <td><?= h($ventum->id_tra) ?></td>
                <td><?= h($ventum->Idcliente) ?></td>
                <td><?= $this->Number->format($ventum->id_pro_ter) ?></td>
                <td><?= $this->Number->format($ventum->precio_uni) ?></td>
                <td><?= $this->Number->format($ventum->precio_total) ?></td>
                <td><?= h($ventum->estado_cuenta) ?></td>
                <td><?= $this->Number->format($ventum->valor_donacion_vent) ?></td>
                <td><?= h($ventum->observaciones_ven) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $ventum->id_ven]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ventum->id_ven]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ventum->id_ven], ['confirm' => __('Are you sure you want to delete # {0}?', $ventum->id_ven)]) ?>
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
