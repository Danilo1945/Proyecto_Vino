<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\HojaProduccionVino[]|\Cake\Collection\CollectionInterface $hojaProduccionVino
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Hoja Produccion Vino'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="hojaProduccionVino index large-9 medium-8 columns content">
    <h3><?= __('Hoja Produccion Vino') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id_hoja_pro') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_pro') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id_inv') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cant_fruta_klg') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cant_agua_lts') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cant_azucar_klg') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cant_levadura_grms') ?></th>
                <th scope="col"><?= $this->Paginator->sort('numero_procesos') ?></th>
                <th scope="col"><?= $this->Paginator->sort('observacion_pro') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id_tra') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($hojaProduccionVino as $hojaProduccionVino): ?>
            <tr>
                <td><?= $this->Number->format($hojaProduccionVino->id_hoja_pro) ?></td>
                <td><?= h($hojaProduccionVino->fecha_pro) ?></td>
                <td><?= h($hojaProduccionVino->id_inv) ?></td>
                <td><?= $this->Number->format($hojaProduccionVino->cant_fruta_klg) ?></td>
                <td><?= $this->Number->format($hojaProduccionVino->cant_agua_lts) ?></td>
                <td><?= $this->Number->format($hojaProduccionVino->cant_azucar_klg) ?></td>
                <td><?= $this->Number->format($hojaProduccionVino->cant_levadura_grms) ?></td>
                <td><?= $this->Number->format($hojaProduccionVino->numero_procesos) ?></td>
                <td><?= h($hojaProduccionVino->observacion_pro) ?></td>
                <td><?= h($hojaProduccionVino->id_tra) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $hojaProduccionVino->id_hoja_pro]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $hojaProduccionVino->id_hoja_pro]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $hojaProduccionVino->id_hoja_pro], ['confirm' => __('Are you sure you want to delete # {0}?', $hojaProduccionVino->id_hoja_pro)]) ?>
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
