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
<div class="container"  id="pedido_view">
    <div class="float-right">
        <?= $this->Html->button(
        '<i class="fa fa-pencil fa-lg pr-3"></i> ' . __('Edit'),
        ['action' => 'edit', $pedido->id],
        ['class' => ['mr-3'], 'escape' => false, 'size' => 'sm']); ?>

        <?= $this->Form->postLink('<i class="fa fa-trash fa-lg pr-3"></i>'. __('Delete'), ['action' => 'delete', $pedido->id], [
        'escape' => false,
        'class' => 'btn btn-primary btn-sm',
        'confirm' => __('Are you sure you want to delete # {0}?', $pedido->id)]) ?>
    </div>

    <h3 class="mb-3"><?= h($pedido->id) ?></h3>
    <dl class="row">
        <dt class="col-sm-3"><?= __('Trabajador') ?></dt>
        <dd class="col-sm-9"><?= $pedido->has('trabajador') ? $this->Html->link($pedido->trabajador->Nombres_tra, ['controller' => 'Trabajador', 'action' => 'view', $pedido->trabajador->id]) : '' ?></dd>
        <dt class="col-sm-3"><?= __('User') ?></dt>
        <dd class="col-sm-9"><?= $pedido->has('user') ? $this->Html->link($pedido->user->name, ['controller' => 'Users', 'action' => 'view', $pedido->user->id]) : '' ?></dd>
        <dt class="col-sm-3"><?= __('Estado Cuenta') ?></dt>
        <dd class="col-sm-9"><?= h($pedido->estado_cuenta) ?></dd>
        <dt class="col-sm-3"><?= __('Observaciones Ven') ?></dt>
        <dd class="col-sm-9"><?= h($pedido->observaciones_ven) ?></dd>
        <dt class="col-sm-3"><?= __('Id') ?></dt>
        <dd class="col-sm-9"><?= $this->Number->format($pedido->id) ?></dd>
        <dt class="col-sm-3"><?= __('Fecha Ven') ?></dt>
        <dd class="col-sm-9"><?= h($pedido->fecha_ven) ?></dd>
    </dl>

</div>