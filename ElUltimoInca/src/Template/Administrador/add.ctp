<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Administrador $administrador
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Administrador'), ['action' => 'index']) ?></li>
    </ul>
</nav>

<div class="administrador form large-9 medium-8 columns content">
    <?= $this->Form->create($administrador) ?>
    <fieldset>
        <legend><?= __('Add Administrador') ?></legend>
        <?php
            echo $this->Form->control('usuario_adm');
            echo $this->Form->control('contrasenia_adm');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
