<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Trabajador $trabajador
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Trabajador'), ['action' => 'edit', $trabajador->id_tra]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Trabajador'), ['action' => 'delete', $trabajador->id_tra], ['confirm' => __('Are you sure you want to delete # {0}?', $trabajador->id_tra)]) ?> </li>
        <li><?= $this->Html->link(__('List Trabajador'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Trabajador'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="trabajador view large-9 medium-8 columns content">
    <h3><?= h($trabajador->id_tra) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id Tra') ?></th>
            <td><?= h($trabajador->id_tra) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nombres Tra') ?></th>
            <td><?= h($trabajador->Nombres_tra) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Apellidos Tra') ?></th>
            <td><?= h($trabajador->Apellidos_tra) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telefono Tra') ?></th>
            <td><?= h($trabajador->Telefono_tra) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Direccion Tra') ?></th>
            <td><?= h($trabajador->Direccion_tra) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email Tra') ?></th>
            <td><?= h($trabajador->Email_tra) ?></td>
        </tr>
    </table>
</div>
