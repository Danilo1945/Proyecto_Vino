<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Administrador $administrador
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Administrador'), ['action' => 'edit', $administrador->Id_adm]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Administrador'), ['action' => 'delete', $administrador->Id_adm], ['confirm' => __('Are you sure you want to delete # {0}?', $administrador->Id_adm)]) ?> </li>
        <li><?= $this->Html->link(__('List Administrador'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Administrador'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="administrador view large-9 medium-8 columns content">
    <h3><?= h($administrador->Id_adm) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= h($administrador->user) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($administrador->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rol') ?></th>
            <td><?= h($administrador->Rol) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Adm') ?></th>
            <td><?= $this->Number->format($administrador->Id_adm) ?></td>
        </tr>
    </table>
</div>
