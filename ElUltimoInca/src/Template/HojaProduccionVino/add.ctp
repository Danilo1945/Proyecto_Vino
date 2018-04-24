<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\HojaProduccionVino $hojaProduccionVino
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Hoja Produccion Vino'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="hojaProduccionVino form large-9 medium-8 columns content">
    <?= $this->Form->create($hojaProduccionVino) ?>
    <fieldset>
        <legend><?= __('Add Hoja Produccion Vino') ?></legend>
        <?php
            echo $this->Form->control('fecha_pro', ['empty' => true]);
            echo $this->Form->control('id_inv');
            echo $this->Form->control('cant_fruta_klg');
            echo $this->Form->control('cant_agua_lts');
            echo $this->Form->control('cant_azucar_klg');
            echo $this->Form->control('cant_levadura_grms');
            echo $this->Form->control('numero_procesos');
            echo $this->Form->control('observacion_pro');
            echo $this->Form->control('id_tra');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
