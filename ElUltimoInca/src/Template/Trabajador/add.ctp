<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Trabajador $trabajador
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Trabajador'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="trabajador form large-9 medium-8 columns content">
    <?= $this->Form->create($trabajador) ?>
    <fieldset>
        <legend><?= __('Add Trabajador') ?></legend>
        <?php
            echo $this->Form->control('Nombres_tra');
            echo $this->Form->control('Apellidos_tra');
            echo $this->Form->control('Telefono_tra');
            echo $this->Form->control('Direccion_tra');
            echo $this->Form->control('Email_tra');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
