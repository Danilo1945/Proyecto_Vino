<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Item $item
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Item'), ['action' => 'edit', $item->id_item]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Item'), ['action' => 'delete', $item->id_item], ['confirm' => __('Are you sure you want to delete # {0}?', $item->id_item)]) ?> </li>
        <li><?= $this->Html->link(__('List Item'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Item'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="item view large-9 medium-8 columns content">
    <h3><?= h($item->id_item) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nom Item') ?></th>
            <td><?= h($item->nom_item) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Detalle Item') ?></th>
            <td><?= h($item->detalle_item) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Item') ?></th>
            <td><?= $this->Number->format($item->id_item) ?></td>
        </tr>
    </table>
</div>
