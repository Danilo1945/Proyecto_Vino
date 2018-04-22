<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Proveedor $proveedor
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $proveedor->id_pro],
                ['confirm' => __('Are you sure you want to delete # {0}?', $proveedor->id_pro)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Proveedor'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="proveedor form large-9 medium-8 columns content">
    <?= $this->Form->create($proveedor) ?>
    <fieldset>
        <legend><?= __('Edit Proveedor') ?></legend>
        <?php
            echo $this->Form->control('nombres_pro');
            echo $this->Form->control('apellidos_pro');
            echo $this->Form->control('telefono_pro');
            echo $this->Form->control('email_pro');
            echo $this->Form->control('id_emp');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
