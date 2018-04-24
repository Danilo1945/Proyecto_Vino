<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ventum $ventum
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Ventum'), ['action' => 'edit', $ventum->id_ven]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Ventum'), ['action' => 'delete', $ventum->id_ven], ['confirm' => __('Are you sure you want to delete # {0}?', $ventum->id_ven)]) ?> </li>
        <li><?= $this->Html->link(__('List Venta'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ventum'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="venta view large-9 medium-8 columns content">
    <h3><?= h($ventum->id_ven) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id Tra') ?></th>
            <td><?= h($ventum->id_tra) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Idcliente') ?></th>
            <td><?= h($ventum->Idcliente) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estado Cuenta') ?></th>
            <td><?= h($ventum->estado_cuenta) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Observaciones Ven') ?></th>
            <td><?= h($ventum->observaciones_ven) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Ven') ?></th>
            <td><?= $this->Number->format($ventum->id_ven) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Pro Ter') ?></th>
            <td><?= $this->Number->format($ventum->id_pro_ter) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Precio Uni') ?></th>
            <td><?= $this->Number->format($ventum->precio_uni) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Precio Total') ?></th>
            <td><?= $this->Number->format($ventum->precio_total) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Valor Donacion Vent') ?></th>
            <td><?= $this->Number->format($ventum->valor_donacion_vent) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha Ven') ?></th>
            <td><?= h($ventum->fecha_ven) ?></td>
        </tr>
    </table>
</div>
