<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pedido $pedido
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Pedido'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="pedido form large-9 medium-8 columns content">
    <?= $this->Form->create($pedido) ?>
    <fieldset>
        <legend><?= __('Add Pedido') ?></legend>
        <?php
            echo $this->Form->control('Fecha', ['empty' => true]);
            echo $this->Form->control('Cantidad');
            echo $this->Form->control('unidad_medida');
            echo $this->Form->control('Idcliente');
            echo $this->Form->control('id_pro_ter');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
