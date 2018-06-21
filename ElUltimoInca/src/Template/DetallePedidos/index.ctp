<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\ORM\ResultSet $detallePedidos
 */

$this->set('bakeEntities', array (
  0 => 'DetallePedidos',
  1 => 'Pedidos',
  2 => 'UnidadMedida',
  3 => 'ProduccionTotal',
));
?>
<div class="container" id="detalle_pedidos_index">
    <?= $this->Html->button(
        '<i class="fa fa-plus-circle fa-lg"></i> ' . __('New Detalle Pedido'),
        ['action' => 'add'],
        ['class' => ['float-right'], 'escape' => false, 'size' => 'small']); ?>
    <h3 class="mb-4"><?= __('Detalle Pedidos') ?></h3>
    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('cantidad') ?></th>
                <th><?= $this->Paginator->sort('detalle') ?></th>
                <th><?= $this->Paginator->sort('valor_unitario') ?></th>
                <th><?= $this->Paginator->sort('valor_total') ?></th>
                <th><?= $this->Paginator->sort('pedidos_id') ?></th>
                <th><?= $this->Paginator->sort('unidad_medida_id') ?></th>
                <th><?= $this->Paginator->sort('produccion_total_id') ?></th>
                <th><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($detallePedidos as $detallePedido): ?>
            <tr>
                <td><?= $this->Number->format($detallePedido->id) ?></td>
                <td><?= $this->Number->format($detallePedido->cantidad) ?></td>
                <td><?= h($detallePedido->detalle) ?></td>
                <td><?= $this->Number->format($detallePedido->valor_unitario) ?></td>
                <td><?= $this->Number->format($detallePedido->valor_total) ?></td>
                <td><?= $detallePedido->has('pedido') ? $this->Html->link($detallePedido->pedido->id, ['controller' => 'Pedidos', 'action' => 'view', $detallePedido->pedido->id]) : '' ?></td>
                <td><?= $detallePedido->has('unidad_medida') ? $this->Html->link($detallePedido->unidad_medida->id, ['controller' => 'UnidadMedida', 'action' => 'view', $detallePedido->unidad_medida->id]) : '' ?></td>
                <td><?= $detallePedido->has('produccion_total') ? $this->Html->link($detallePedido->produccion_total->id, ['controller' => 'ProduccionTotal', 'action' => 'view', $detallePedido->produccion_total->id]) : '' ?></td>
                <td class="text-right">
                    <?= $this->Html->link(null, ['action' => 'view', $detallePedido->id], ['class' => 'btn btn-primary fa fa-eye p-1 mx-1']) ?>
                            <?= $this->Html->link(null, ['action' => 'edit', $detallePedido->id], ['class' => 'btn btn-primary fa fa-pencil p-1 mx-1']) ?>
                            <?= $this->Form->postLink(null, ['action' => 'delete', $detallePedido->id], [
                    'confirm' => __('Are you sure you want to delete # {0}?', $detallePedido->id),
                    'class' => 'btn btn-primary fa fa-trash p-1 mx-1'
                    ]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <nav aria-label="Page navigation">
        <ul class="pagination pagination-sm">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <small class="text-muted"><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></small>
    </nav>
</div>
