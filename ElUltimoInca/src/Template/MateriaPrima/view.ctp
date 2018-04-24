<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MateriaPrima $materiaPrima
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Materia Prima'), ['action' => 'edit', $materiaPrima->id_mat_prim]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Materia Prima'), ['action' => 'delete', $materiaPrima->id_mat_prim], ['confirm' => __('Are you sure you want to delete # {0}?', $materiaPrima->id_mat_prim)]) ?> </li>
        <li><?= $this->Html->link(__('List Materia Prima'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Materia Prima'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="materiaPrima view large-9 medium-8 columns content">
    <h3><?= h($materiaPrima->id_mat_prim) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id Mat Prim') ?></th>
            <td><?= h($materiaPrima->id_mat_prim) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nombre Mat Pri') ?></th>
            <td><?= h($materiaPrima->nombre_mat_pri) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descripcion Mat Pri') ?></th>
            <td><?= h($materiaPrima->descripcion_mat_pri) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Uni Medi') ?></th>
            <td><?= $this->Number->format($materiaPrima->id_uni_medi) ?></td>
        </tr>
    </table>
</div>
