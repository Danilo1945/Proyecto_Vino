<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AreaProduccion $areaProduccion
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Area Produccion'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="areaProduccion form large-9 medium-8 columns content">
    <?= $this->Form->create($areaProduccion) ?>
    <fieldset>
        <legend><?= __('Add Area Produccion') ?></legend>
        <?php
            echo $this->Form->control('fecha_elaboracion', ['empty' => true]);
            echo $this->Form->control('num_procesos');
            echo $this->Form->control('brix_area_pro');
            echo $this->Form->control('clase_vino');
            echo $this->Form->control('temperatura_vino');
            echo $this->Form->control('fecha_control', ['empty' => true]);
            echo $this->Form->control('observaciones_area_pro');
            echo $this->Form->control('id_uni_medi');
            echo $this->Form->control('id_tra');
            echo $this->Form->control('id_inv');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
