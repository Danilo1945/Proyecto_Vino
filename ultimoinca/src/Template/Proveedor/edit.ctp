<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Proveedor $proveedor
 */

$this->set('bakeEntities', array (
  0 => 'Proveedor',
  1 => 'Empresa',
  2 => 'CompraMatPri',
  3 => 'Prevee',
));
?>
<div class="container" id="proveedor_edit">
    <?= $this->Form->create($proveedor) ?>
    <fieldset>
        <legend><?= __('Edit Proveedor') ?></legend>
        <?php
            echo $this->Form->control('cedula');
            echo $this->Form->control('nombres_pro');
            echo $this->Form->control('apellidos_pro');
            echo $this->Form->control('telefono_pro');
            echo $this->Form->control('email_pro');
            echo $this->Form->control('empresa_id', ['options' => $empresa, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
