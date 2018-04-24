<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\InventarioEmpresa $inventarioEmpresa
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $inventarioEmpresa->id_inv],
                ['confirm' => __('Are you sure you want to delete # {0}?', $inventarioEmpresa->id_inv)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Inventario Empresa'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="inventarioEmpresa form large-9 medium-8 columns content">
    <?= $this->Form->create($inventarioEmpresa) ?>
    <fieldset>
        <legend><?= __('Edit Inventario Empresa') ?></legend>
        <?php
            echo $this->Form->control('nombre_art_inv');
            echo $this->Form->control('descripcion_inv');
            echo $this->Form->control('color_inv');
            echo $this->Form->control('id_item');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
