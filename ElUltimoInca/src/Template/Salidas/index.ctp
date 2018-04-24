<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Salida[]|\Cake\Collection\CollectionInterface $salidas
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Salida'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="salidas index large-9 medium-8 columns content">
    <h3><?= __('Salidas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id_sal') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_sal') ?></th>
                <th scope="col"><?= $this->Paginator->sort('saldo_sal') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ingreso_sal') ?></th>
                <th scope="col"><?= $this->Paginator->sort('egreso_sal') ?></th>
                <th scope="col"><?= $this->Paginator->sort('donacion_sal') ?></th>
                <th scope="col"><?= $this->Paginator->sort('devolucion_sal') ?></th>
                <th scope="col"><?= $this->Paginator->sort('saldo_total') ?></th>
                <th scope="col"><?= $this->Paginator->sort('observaciones_sal') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($salidas as $salida): ?>
            <tr>
                <td><?= $this->Number->format($salida->id_sal) ?></td>
                <td><?= h($salida->fecha_sal) ?></td>
                <td><?= $this->Number->format($salida->saldo_sal) ?></td>
                <td><?= $this->Number->format($salida->ingreso_sal) ?></td>
                <td><?= $this->Number->format($salida->egreso_sal) ?></td>
                <td><?= $this->Number->format($salida->donacion_sal) ?></td>
                <td><?= $this->Number->format($salida->devolucion_sal) ?></td>
                <td><?= $this->Number->format($salida->saldo_total) ?></td>
                <td><?= h($salida->observaciones_sal) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $salida->id_sal]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $salida->id_sal]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $salida->id_sal], ['confirm' => __('Are you sure you want to delete # {0}?', $salida->id_sal)]) ?>
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
