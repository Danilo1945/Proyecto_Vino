<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Salida $salida
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Salidas'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="salidas form large-9 medium-8 columns content">
    <?= $this->Form->create($salida) ?>
    <fieldset>
        <legend><?= __('Add Salida') ?></legend>
        <?php
            echo $this->Form->control('fecha_sal', ['empty' => true]);
            echo $this->Form->control('saldo_sal');
            echo $this->Form->control('ingreso_sal');
            echo $this->Form->control('egreso_sal');
            echo $this->Form->control('donacion_sal');
            echo $this->Form->control('devolucion_sal');
            echo $this->Form->control('saldo_total');
            echo $this->Form->control('observaciones_sal');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
