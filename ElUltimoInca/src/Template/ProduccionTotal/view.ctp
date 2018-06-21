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
<div class="container"  id="produccion_total_view">
    <div class="float-right">
        <?= $this->Html->button(
        '<i class="fa fa-pencil fa-lg pr-3"></i> ' . __('Edit'),
        ['action' => 'edit', $produccionTotal->id],
        ['class' => ['mr-3'], 'escape' => false, 'size' => 'sm']); ?>

        <?= $this->Form->postLink('<i class="fa fa-trash fa-lg pr-3"></i>'. __('Delete'), ['action' => 'delete', $produccionTotal->id], [
        'escape' => false,
        'class' => 'btn btn-primary btn-sm',
        'confirm' => __('Are you sure you want to delete # {0}?', $produccionTotal->id)]) ?>
    </div>

    <h3 class="mb-3"><?= h($produccionTotal->nombre_producto) ?></h3>
    <dl class="row">
        <dt class="col-sm-3"><?= __('Nombre Producto') ?></dt>
        <dd class="col-sm-9"><?= h($produccionTotal->nombre_producto) ?></dd>
        <dt class="col-sm-3"><?= __('Presentacion') ?></dt>
        <dd class="col-sm-9"><?= h($produccionTotal->presentacion) ?></dd>
        <dt class="col-sm-3"><?= __('Id') ?></dt>
        <dd class="col-sm-9"><?= $this->Number->format($produccionTotal->id) ?></dd>
        <dt class="col-sm-3"><?= __('Valor Total Producto') ?></dt>
        <dd class="col-sm-9"><?= $this->Number->format($produccionTotal->valor_total_producto) ?></dd>
        <dt class="col-sm-3"><?= __('Valor Ultima Suma') ?></dt>
        <dd class="col-sm-9"><?= $this->Number->format($produccionTotal->valor_ultima_suma) ?></dd>
        <dt class="col-sm-3"><?= __('Precio') ?></dt>
        <dd class="col-sm-9"><?= $this->Number->format($produccionTotal->precio) ?></dd>
    </dl>
    <h4><?= __('Related Detalle Pedidos') ?></h4>
    <?php if (!empty($produccionTotal->detalle_pedidos)): ?>
    <div class=" table-responsive">
        <table class="table table-sm table-striped table-hover">
            <thead>
                <tr>
                        <th scope="col"><?= __('Id') ?></th>
                        <th scope="col"><?= __('Cantidad') ?></th>
                        <th scope="col"><?= __('Detalle') ?></th>
                        <th scope="col"><?= __('Valor Unitario') ?></th>
                        <th scope="col"><?= __('Valor Total') ?></th>
                        <th scope="col"><?= __('Pedidos Id') ?></th>
                        <th scope="col"><?= __('Unidad Medida Id') ?></th>
                        <th scope="col"><?= __('Produccion Total Id') ?></th>
                        <th scope="col" class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <?php foreach ($produccionTotal->detalle_pedidos as $detallePedidos): ?>
            <tr>
                <td><?= h($detallePedidos->id) ?></td>
                <td><?= h($detallePedidos->cantidad) ?></td>
                <td><?= h($detallePedidos->detalle) ?></td>
                <td><?= h($detallePedidos->valor_unitario) ?></td>
                <td><?= h($detallePedidos->valor_total) ?></td>
                <td><?= h($detallePedidos->pedidos_id) ?></td>
                <td><?= h($detallePedidos->unidad_medida_id) ?></td>
                <td><?= h($detallePedidos->produccion_total_id) ?></td>
                <td class="text-right">
                    <?= $this->Html->link(null, ['controller' => 'DetallePedidos', 'action' => 'view', $detallePedidos->id], ['class' => 'btn btn-primary fa fa-eye p-1 mx-1']) ?>
                            <?= $this->Html->link(null, ['controller' => 'DetallePedidos', 'action' => 'edit', $detallePedidos->id], ['class' => 'btn btn-primary fa fa-pencil p-1 mx-1']) ?>
                            <?= $this->Form->postLink(null, ['controller' => 'DetallePedidos', 'action' => 'delete', $detallePedidos->id], [
                    'confirm' => __('Are you sure you want to delete # {0}?', $detallePedidos->id),
                    'class' => 'btn btn-primary fa fa-trash p-1 mx-1'
                    ]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>

</div>