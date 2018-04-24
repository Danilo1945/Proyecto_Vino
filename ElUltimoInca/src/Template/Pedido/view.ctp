<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pedido $pedido
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Pedido'), ['action' => 'edit', $pedido->Idpedido]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Pedido'), ['action' => 'delete', $pedido->Idpedido], ['confirm' => __('Are you sure you want to delete # {0}?', $pedido->Idpedido)]) ?> </li>
        <li><?= $this->Html->link(__('List Pedido'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pedido'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="pedido view large-9 medium-8 columns content">
    <h3><?= h($pedido->Idpedido) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Unidad Medida') ?></th>
            <td><?= h($pedido->unidad_medida) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Idcliente') ?></th>
            <td><?= h($pedido->Idcliente) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Idpedido') ?></th>
            <td><?= $this->Number->format($pedido->Idpedido) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cantidad') ?></th>
            <td><?= $this->Number->format($pedido->Cantidad) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Pro Ter') ?></th>
            <td><?= $this->Number->format($pedido->id_pro_ter) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha') ?></th>
            <td><?= h($pedido->Fecha) ?></td>
        </tr>
    </table>
</div>
