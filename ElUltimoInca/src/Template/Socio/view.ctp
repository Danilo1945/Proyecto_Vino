<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Socio $socio
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Socio'), ['action' => 'edit', $socio->id_so]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Socio'), ['action' => 'delete', $socio->id_so], ['confirm' => __('Are you sure you want to delete # {0}?', $socio->id_so)]) ?> </li>
        <li><?= $this->Html->link(__('List Socio'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Socio'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="socio view large-9 medium-8 columns content">
    <h3><?= h($socio->id_so) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id So') ?></th>
            <td><?= h($socio->id_so) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nombres') ?></th>
            <td><?= h($socio->Nombres) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Apellidos') ?></th>
            <td><?= h($socio->Apellidos) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telefono') ?></th>
            <td><?= h($socio->Telefono) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Direccion') ?></th>
            <td><?= h($socio->Direccion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($socio->Email) ?></td>
        </tr>
    </table>
</div>
