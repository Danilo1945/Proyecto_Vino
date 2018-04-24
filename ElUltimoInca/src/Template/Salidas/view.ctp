<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Salida $salida
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Salida'), ['action' => 'edit', $salida->id_sal]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Salida'), ['action' => 'delete', $salida->id_sal], ['confirm' => __('Are you sure you want to delete # {0}?', $salida->id_sal)]) ?> </li>
        <li><?= $this->Html->link(__('List Salidas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Salida'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="salidas view large-9 medium-8 columns content">
    <h3><?= h($salida->id_sal) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Observaciones Sal') ?></th>
            <td><?= h($salida->observaciones_sal) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Sal') ?></th>
            <td><?= $this->Number->format($salida->id_sal) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Saldo Sal') ?></th>
            <td><?= $this->Number->format($salida->saldo_sal) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ingreso Sal') ?></th>
            <td><?= $this->Number->format($salida->ingreso_sal) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Egreso Sal') ?></th>
            <td><?= $this->Number->format($salida->egreso_sal) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Donacion Sal') ?></th>
            <td><?= $this->Number->format($salida->donacion_sal) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Devolucion Sal') ?></th>
            <td><?= $this->Number->format($salida->devolucion_sal) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Saldo Total') ?></th>
            <td><?= $this->Number->format($salida->saldo_total) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha Sal') ?></th>
            <td><?= h($salida->fecha_sal) ?></td>
        </tr>
    </table>
</div>
