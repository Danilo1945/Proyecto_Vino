<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Socio $socio
 */

$this->set('bakeEntities', array (
  0 => 'Socio',
));
?>
<div class="container" id="socio_add">
    <?= $this->Form->create($socio) ?>
    <fieldset>
        <legend><?= __('Añadir Socio') ?></legend>
        <?php
            echo $this->Form->control('cedula');
            echo $this->Form->control('Nombres');
            echo $this->Form->control('Apellidos');
            echo $this->Form->control('Telefono');
            echo $this->Form->control('Direccion');
            echo $this->Form->control('Email');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
