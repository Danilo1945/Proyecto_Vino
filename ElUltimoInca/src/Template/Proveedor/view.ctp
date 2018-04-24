<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Proveedor $proveedor
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Proveedor'), ['action' => 'edit', $proveedor->id_pro]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Proveedor'), ['action' => 'delete', $proveedor->id_pro], ['confirm' => __('Are you sure you want to delete # {0}?', $proveedor->id_pro)]) ?> </li>
        <li><?= $this->Html->link(__('List Proveedor'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Proveedor'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="proveedor view large-9 medium-8 columns content">
    <h3><?= h($proveedor->id_pro) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id Pro') ?></th>
            <td><?= h($proveedor->id_pro) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nombres Pro') ?></th>
            <td><?= h($proveedor->nombres_pro) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Apellidos Pro') ?></th>
            <td><?= h($proveedor->apellidos_pro) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telefono Pro') ?></th>
            <td><?= h($proveedor->telefono_pro) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email Pro') ?></th>
            <td><?= h($proveedor->email_pro) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Emp') ?></th>
            <td><?= $this->Number->format($proveedor->id_emp) ?></td>
        </tr>
    </table>
</div>
