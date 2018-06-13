<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MateriaPrima $materiaPrima
 */

$this->set('bakeEntities', array (
  0 => 'MateriaPrima',
  1 => 'CompraMatPri',
  2 => 'Prevee',
));
?>
<div class="container" id="materia_prima_edit">
    <?= $this->Form->create($materiaPrima) ?>
    <fieldset>
        <legend><?= __('Edit Materia Prima') ?></legend>
        <?php
            echo $this->Form->control('nombre_mat_pri');
            echo $this->Form->control('descripcion_mat_pri');
            echo $this->Form->control('contidad');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
