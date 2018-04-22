<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Empresa $empresa
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Empresa'), ['action' => 'edit', $empresa->id_emp]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Empresa'), ['action' => 'delete', $empresa->id_emp], ['confirm' => __('Are you sure you want to delete # {0}?', $empresa->id_emp)]) ?> </li>
        <li><?= $this->Html->link(__('List Empresa'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Empresa'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="empresa view large-9 medium-8 columns content">
    <h3><?= h($empresa->id_emp) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($empresa->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Direccion') ?></th>
            <td><?= h($empresa->direccion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($empresa->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Emp') ?></th>
            <td><?= $this->Number->format($empresa->id_emp) ?></td>
        </tr>
    </table>
</div>
