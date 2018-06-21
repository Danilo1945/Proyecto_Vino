<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Trabajador $trabajador
 */

$this->set('bakeEntities', array (
  0 => 'Trabajador',
));
?>
<div class="container" id="trabajador_add">
    <?= $this->Form->create($trabajador) ?>
    <fieldset>
        <legend><?= __('Añadir Trabajador') ?></legend>
        <?php
            echo $this->Form->control('cedula');
            echo $this->Form->control('Nombres_tra');
            echo $this->Form->control('Apellidos_tra');
            echo $this->Form->control('Telefono_tra');
            echo $this->Form->control('Direccion_tra');
            echo $this->Form->control('Email_tra');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
