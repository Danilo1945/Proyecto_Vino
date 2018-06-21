<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pedido $pedido
 */

$this->set('bakeEntities', array (
  0 => 'Pedidos',
  1 => 'Trabajador',
  2 => 'Users',
));
?>
<div class="container" id="pedidos_edit">
    <?= $this->Form->create($pedido) ?>
    <fieldset>
        <legend><?= __('Editar Pedido') ?></legend>
        <?php
            echo $this->Form->control('fecha_ven', ['empty' => true]);
            echo $this->Form->control('trabajador_id', ['options' => $trabajador, 'empty' => true]);
            echo $this->Form->control('users_id', ['options' => $users, 'empty' => true]);
            echo $this->Form->control('estado_cuenta');
            echo $this->Form->control('observaciones_ven');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
