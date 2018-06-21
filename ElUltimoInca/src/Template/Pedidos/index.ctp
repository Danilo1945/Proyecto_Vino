<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\ORM\ResultSet $pedidos
 */

$this->set('bakeEntities', array (
  0 => 'Pedidos',
  1 => 'Trabajador',
  2 => 'Users',
));
?>
<div class="container" id="pedidos_index">
    <?= $this->Html->button(
        '<i class="fa fa-plus-circle fa-lg"></i> ' . __('New Pedido'),
        ['action' => 'add'],
        ['class' => ['float-right'], 'escape' => false, 'size' => 'small']); ?>
    <h3 class="mb-4"><?= __('Pedidos') ?></h3>
    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('fecha_ven') ?></th>
                <th><?= $this->Paginator->sort('trabajador_id') ?></th>
                <th><?= $this->Paginator->sort('users_id') ?></th>
                <th><?= $this->Paginator->sort('estado_cuenta') ?></th>
                <th><?= $this->Paginator->sort('observaciones_ven') ?></th>
                <th><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($pedidos as $pedido): ?>
            <tr>
                <td><?= $this->Number->format($pedido->id) ?></td>
                <td><?= h($pedido->fecha_ven) ?></td>
                <td><?= $pedido->has('trabajador') ? $this->Html->link($pedido->trabajador->Nombres_tra, ['controller' => 'Trabajador', 'action' => 'view', $pedido->trabajador->id]) : '' ?></td>
                <td><?= $pedido->has('user') ? $this->Html->link($pedido->user->name, ['controller' => 'Users', 'action' => 'view', $pedido->user->id]) : '' ?></td>
                <td><?= h($pedido->estado_cuenta) ?></td>
                <td><?= h($pedido->observaciones_ven) ?></td>
                <td class="text-right">
                    <?= $this->Html->link(null, ['action' => 'view', $pedido->id], ['class' => 'btn btn-primary fa fa-eye p-1 mx-1']) ?>
                            <?= $this->Html->link(null, ['action' => 'edit', $pedido->id], ['class' => 'btn btn-primary fa fa-pencil p-1 mx-1']) ?>
                            <?= $this->Form->postLink(null, ['action' => 'delete', $pedido->id], [
                    'confirm' => __('Are you sure you want to delete # {0}?', $pedido->id),
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
