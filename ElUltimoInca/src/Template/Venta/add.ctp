<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ventum $ventum
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Venta'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="venta form large-9 medium-8 columns content">
    <?= $this->Form->create($ventum) ?>
    <fieldset>
        <legend><?= __('Add Ventum') ?></legend>
        <?php
            echo $this->Form->control('fecha_ven', ['empty' => true]);
            echo $this->Form->control('id_tra');
            echo $this->Form->control('Idcliente');
            echo $this->Form->control('id_pro_ter');
            echo $this->Form->control('precio_uni');
            echo $this->Form->control('precio_total');
            echo $this->Form->control('estado_cuenta');
            echo $this->Form->control('valor_donacion_vent');
            echo $this->Form->control('observaciones_ven');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
