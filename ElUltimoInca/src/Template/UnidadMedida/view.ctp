<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UnidadMedida $unidadMedida
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Unidad Medida'), ['action' => 'edit', $unidadMedida->id_uni_medi]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Unidad Medida'), ['action' => 'delete', $unidadMedida->id_uni_medi], ['confirm' => __('Are you sure you want to delete # {0}?', $unidadMedida->id_uni_medi)]) ?> </li>
        <li><?= $this->Html->link(__('List Unidad Medida'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Unidad Medida'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="unidadMedida view large-9 medium-8 columns content">
    <h3><?= h($unidadMedida->id_uni_medi) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre Umed') ?></th>
            <td><?= h($unidadMedida->nombre_umed) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Detalle Umed') ?></th>
            <td><?= h($unidadMedida->detalle_umed) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Uni Medi') ?></th>
            <td><?= $this->Number->format($unidadMedida->id_uni_medi) ?></td>
        </tr>
    </table>
</div>
