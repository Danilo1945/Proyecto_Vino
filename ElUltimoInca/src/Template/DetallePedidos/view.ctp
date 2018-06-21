<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DetallePedido $detallePedido
 */

$this->set('bakeEntities', array (
  0 => 'DetallePedidos',
  1 => 'Pedidos',
  2 => 'UnidadMedida',
  3 => 'ProduccionTotal',
));
?>
<div class="container"  id="detalle_pedido_view">
    <div class="float-right">
        <?= $this->Html->button(
        '<i class="fa fa-pencil fa-lg pr-3"></i> ' . __('Edit'),
        ['action' => 'edit', $detallePedido->id],
        ['class' => ['mr-3'], 'escape' => false, 'size' => 'sm']); ?>

        <?= $this->Form->postLink('<i class="fa fa-trash fa-lg pr-3"></i>'. __('Delete'), ['action' => 'delete', $detallePedido->id], [
        'escape' => false,
        'class' => 'btn btn-primary btn-sm',
        'confirm' => __('Are you sure you want to delete # {0}?', $detallePedido->id)]) ?>
    </div>

    <h3 class="mb-3"><?= h($detallePedido->id) ?></h3>
    <dl class="row">
        <dt class="col-sm-3"><?= __('Detalle') ?></dt>
        <dd class="col-sm-9"><?= h($detallePedido->detalle) ?></dd>
        <dt class="col-sm-3"><?= __('Pedido') ?></dt>
        <dd class="col-sm-9"><?= $detallePedido->has('pedido') ? $this->Html->link($detallePedido->pedido->id, ['controller' => 'Pedidos', 'action' => 'view', $detallePedido->pedido->id]) : '' ?></dd>
        <dt class="col-sm-3"><?= __('Unidad Medida') ?></dt>
        <dd class="col-sm-9"><?= $detallePedido->has('unidad_medida') ? $this->Html->link($detallePedido->unidad_medida->id, ['controller' => 'UnidadMedida', 'action' => 'view', $detallePedido->unidad_medida->id]) : '' ?></dd>
        <dt class="col-sm-3"><?= __('Produccion Total') ?></dt>
        <dd class="col-sm-9"><?= $detallePedido->has('produccion_total') ? $this->Html->link($detallePedido->produccion_total->id, ['controller' => 'ProduccionTotal', 'action' => 'view', $detallePedido->produccion_total->id]) : '' ?></dd>
        <dt class="col-sm-3"><?= __('Id') ?></dt>
        <dd class="col-sm-9"><?= $this->Number->format($detallePedido->id) ?></dd>
        <dt class="col-sm-3"><?= __('Cantidad') ?></dt>
        <dd class="col-sm-9"><?= $this->Number->format($detallePedido->cantidad) ?></dd>
        <dt class="col-sm-3"><?= __('Valor Unitario') ?></dt>
        <dd class="col-sm-9"><?= $this->Number->format($detallePedido->valor_unitario) ?></dd>
        <dt class="col-sm-3"><?= __('Valor Total') ?></dt>
        <dd class="col-sm-9"><?= $this->Number->format($detallePedido->valor_total) ?></dd>
    </dl>

</div>