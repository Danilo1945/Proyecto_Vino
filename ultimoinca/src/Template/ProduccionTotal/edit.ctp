<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProduccionTotal $produccionTotal
 */

$this->set('bakeEntities', array (
  0 => 'ProduccionTotal',
  1 => 'DetallePedidos',
));
?>
<div class="container" id="produccion_total_edit">
    <?= $this->Form->create($produccionTotal) ?>
    <fieldset>
        <legend><?= __('Edit Produccion Total') ?></legend>
        <?php
            echo $this->Form->control('nombre_producto');
            echo $this->Form->control('valor_total_producto');
            echo $this->Form->control('valor_ultima_suma');
            echo $this->Form->control('precio');
            echo $this->Form->control('presentacion');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
