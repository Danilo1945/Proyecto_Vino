<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Socio $socio
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Socio'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="socio form large-9 medium-8 columns content">
    <?= $this->Form->create($socio) ?>
    <fieldset>
        <legend><?= __('Add Socio') ?></legend>
        <?php
            echo $this->Form->control('Nombres');
            echo $this->Form->control('Apellidos');
            echo $this->Form->control('Telefono');
            echo $this->Form->control('Direccion');
            echo $this->Form->control('Email');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
