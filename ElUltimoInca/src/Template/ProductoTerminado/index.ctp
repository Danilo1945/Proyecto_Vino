<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProductoTerminado[]|\Cake\Collection\CollectionInterface $productoTerminado
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Producto Terminado'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="productoTerminado index large-9 medium-8 columns content">
    <h3><?= __('Producto Terminado') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id_pro_ter') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pasteurizacion') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_elb') ?></th>
                <th scope="col"><?= $this->Paginator->sort('lote_pro_ter') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cantidad_pro_ter') ?></th>
                <th scope="col"><?= $this->Paginator->sort('valor_cantidad_pro') ?></th>
                <th scope="col"><?= $this->Paginator->sort('brix') ?></th>
                <th scope="col"><?= $this->Paginator->sort('valor_etiqueta') ?></th>
                <th scope="col"><?= $this->Paginator->sort('valor_corcho') ?></th>
                <th scope="col"><?= $this->Paginator->sort('valor_capuchon') ?></th>
                <th scope="col"><?= $this->Paginator->sort('num_cinta_sri') ?></th>
                <th scope="col"><?= $this->Paginator->sort('num_cinta_inca') ?></th>
                <th scope="col"><?= $this->Paginator->sort('observaciones') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id_mat_prim') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id_tra') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($productoTerminado as $productoTerminado): ?>
            <tr>
                <td><?= $this->Number->format($productoTerminado->id_pro_ter) ?></td>
                <td><?= h($productoTerminado->fecha) ?></td>
                <td><?= $this->Number->format($productoTerminado->pasteurizacion) ?></td>
                <td><?= h($productoTerminado->fecha_elb) ?></td>
                <td><?= h($productoTerminado->lote_pro_ter) ?></td>
                <td><?= h($productoTerminado->cantidad_pro_ter) ?></td>
                <td><?= $this->Number->format($productoTerminado->valor_cantidad_pro) ?></td>
                <td><?= $this->Number->format($productoTerminado->brix) ?></td>
                <td><?= $this->Number->format($productoTerminado->valor_etiqueta) ?></td>
                <td><?= $this->Number->format($productoTerminado->valor_corcho) ?></td>
                <td><?= $this->Number->format($productoTerminado->valor_capuchon) ?></td>
                <td><?= $this->Number->format($productoTerminado->num_cinta_sri) ?></td>
                <td><?= $this->Number->format($productoTerminado->num_cinta_inca) ?></td>
                <td><?= h($productoTerminado->observaciones) ?></td>
                <td><?= h($productoTerminado->id_mat_prim) ?></td>
                <td><?= h($productoTerminado->id_tra) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $productoTerminado->id_pro_ter]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $productoTerminado->id_pro_ter]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $productoTerminado->id_pro_ter], ['confirm' => __('Are you sure you want to delete # {0}?', $productoTerminado->id_pro_ter)]) ?>
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
