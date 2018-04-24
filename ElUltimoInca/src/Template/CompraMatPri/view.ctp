<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CompraMatPri $compraMatPri
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Compra Mat Pri'), ['action' => 'edit', $compraMatPri->id_cmp]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Compra Mat Pri'), ['action' => 'delete', $compraMatPri->id_cmp], ['confirm' => __('Are you sure you want to delete # {0}?', $compraMatPri->id_cmp)]) ?> </li>
        <li><?= $this->Html->link(__('List Compra Mat Pri'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Compra Mat Pri'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="compraMatPri view large-9 medium-8 columns content">
    <h3><?= h($compraMatPri->id_cmp) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Observaciones Mat') ?></th>
            <td><?= h($compraMatPri->observaciones_mat) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Pro') ?></th>
            <td><?= h($compraMatPri->id_pro) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Tra') ?></th>
            <td><?= h($compraMatPri->id_tra) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Mat Prim') ?></th>
            <td><?= h($compraMatPri->id_mat_prim) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Cmp') ?></th>
            <td><?= $this->Number->format($compraMatPri->id_cmp) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Precio U Mat') ?></th>
            <td><?= $this->Number->format($compraMatPri->precio_u_mat) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Precio Tot Mat') ?></th>
            <td><?= $this->Number->format($compraMatPri->precio_tot_mat) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha Mat') ?></th>
            <td><?= h($compraMatPri->fecha_mat) ?></td>
        </tr>
    </table>
</div>
