<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Administrador $administrador
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $administrador->Id_adm],
                ['confirm' => __('Are you sure you want to delete # {0}?', $administrador->Id_adm)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Administrador'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="administrador form large-9 medium-8 columns content">
    <?= $this->Form->create($administrador) ?>
    <fieldset>
        <legend><?= __('Edit Administrador') ?></legend>
        <?php
            echo $this->Form->control('user');
            echo $this->Form->control('password');
            echo $this->Form->control('Rol');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
