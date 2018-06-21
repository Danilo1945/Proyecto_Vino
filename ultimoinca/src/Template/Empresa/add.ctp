<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Empresa $empresa
 */

$this->set('bakeEntities', array (
  0 => 'Empresa',
  1 => 'Proveedor',
));
?>
<div class="container" id="empresa_add">
    <?= $this->Form->create($empresa) ?>
    <fieldset>
        <legend><?= __('Añadir Empresa') ?></legend>
        <?php
            echo $this->Form->control('nombre',['required']);
            echo $this->Form->control('direccion');
            echo $this->Form->control('email');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
