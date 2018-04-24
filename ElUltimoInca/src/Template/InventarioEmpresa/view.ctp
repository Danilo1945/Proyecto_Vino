<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\InventarioEmpresa $inventarioEmpresa
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Inventario Empresa'), ['action' => 'edit', $inventarioEmpresa->id_inv]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Inventario Empresa'), ['action' => 'delete', $inventarioEmpresa->id_inv], ['confirm' => __('Are you sure you want to delete # {0}?', $inventarioEmpresa->id_inv)]) ?> </li>
        <li><?= $this->Html->link(__('List Inventario Empresa'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Inventario Empresa'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="inventarioEmpresa view large-9 medium-8 columns content">
    <h3><?= h($inventarioEmpresa->id_inv) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id Inv') ?></th>
            <td><?= h($inventarioEmpresa->id_inv) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nombre Art Inv') ?></th>
            <td><?= h($inventarioEmpresa->nombre_art_inv) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descripcion Inv') ?></th>
            <td><?= h($inventarioEmpresa->descripcion_inv) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Color Inv') ?></th>
            <td><?= h($inventarioEmpresa->color_inv) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Item') ?></th>
            <td><?= $this->Number->format($inventarioEmpresa->id_item) ?></td>
        </tr>
    </table>
</div>
