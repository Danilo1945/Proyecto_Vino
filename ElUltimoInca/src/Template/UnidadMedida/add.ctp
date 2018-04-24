<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UnidadMedida $unidadMedida
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Unidad Medida'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="unidadMedida form large-9 medium-8 columns content">
    <?= $this->Form->create($unidadMedida) ?>
    <fieldset>
        <legend><?= __('Add Unidad Medida') ?></legend>
        <?php
            echo $this->Form->control('nombre_umed');
            echo $this->Form->control('detalle_umed');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
