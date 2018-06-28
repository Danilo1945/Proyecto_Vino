<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UnidadMedida $unidadMedida
 */

$this->set('bakeEntities', array (
  0 => 'UnidadMedida',
  1 => 'CompraMatPri',
));
?>
<div class="container" id="unidad_medida_add">
    <?= $this->Form->create($unidadMedida) ?>
    <fieldset>
        <legend><?= __('Añadir Unidad Medida') ?></legend>
        <?php
            echo $this->Form->control('nombre_umed');
            echo $this->Form->control('detalle_umed');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
