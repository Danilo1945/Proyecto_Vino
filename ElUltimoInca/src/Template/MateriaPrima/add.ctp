<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MateriaPrima $materiaPrima
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Materia Prima'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="materiaPrima form large-9 medium-8 columns content">
    <?= $this->Form->create($materiaPrima) ?>
    <fieldset>
        <legend><?= __('Add Materia Prima') ?></legend>
        <?php
            echo $this->Form->control('nombre_mat_pri');
            echo $this->Form->control('descripcion_mat_pri');
            echo $this->Form->control('id_uni_medi');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
