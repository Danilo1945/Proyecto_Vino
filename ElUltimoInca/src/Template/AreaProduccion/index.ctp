<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AreaProduccion[]|\Cake\Collection\CollectionInterface $areaProduccion
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Area Produccion'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="areaProduccion index large-9 medium-8 columns content">
    <h3><?= __('Area Produccion') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id_area_pro') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_elaboracion') ?></th>
                <th scope="col"><?= $this->Paginator->sort('num_procesos') ?></th>
                <th scope="col"><?= $this->Paginator->sort('brix_area_pro') ?></th>
                <th scope="col"><?= $this->Paginator->sort('clase_vino') ?></th>
                <th scope="col"><?= $this->Paginator->sort('temperatura_vino') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_control') ?></th>
                <th scope="col"><?= $this->Paginator->sort('observaciones_area_pro') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id_uni_medi') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id_tra') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id_inv') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($areaProduccion as $areaProduccion): ?>
            <tr>
                <td><?= $this->Number->format($areaProduccion->id_area_pro) ?></td>
                <td><?= h($areaProduccion->fecha_elaboracion) ?></td>
                <td><?= h($areaProduccion->num_procesos) ?></td>
                <td><?= $this->Number->format($areaProduccion->brix_area_pro) ?></td>
                <td><?= h($areaProduccion->clase_vino) ?></td>
                <td><?= $this->Number->format($areaProduccion->temperatura_vino) ?></td>
                <td><?= h($areaProduccion->fecha_control) ?></td>
                <td><?= h($areaProduccion->observaciones_area_pro) ?></td>
                <td><?= $this->Number->format($areaProduccion->id_uni_medi) ?></td>
                <td><?= h($areaProduccion->id_tra) ?></td>
                <td><?= h($areaProduccion->id_inv) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $areaProduccion->id_area_pro]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $areaProduccion->id_area_pro]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $areaProduccion->id_area_pro], ['confirm' => __('Are you sure you want to delete # {0}?', $areaProduccion->id_area_pro)]) ?>
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
