<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Administrador $administrador
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Administrador'), ['action' => 'edit', $administrador->id_adm]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Administrador'), ['action' => 'delete', $administrador->id_adm], ['confirm' => __('Are you sure you want to delete # {0}?', $administrador->id_adm)]) ?> </li>
        <li><?= $this->Html->link(__('List Administrador'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Administrador'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="administrador view large-9 medium-8 columns content">
    <h3><?= h($administrador->id_adm) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Usuario Adm') ?></th>
            <td><?= h($administrador->usuario_adm) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Contrasenia Adm') ?></th>
            <td><?= h($administrador->contrasenia_adm) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Adm') ?></th>
            <td><?= $this->Number->format($administrador->id_adm) ?></td>
        </tr>
    </table>
</div>
