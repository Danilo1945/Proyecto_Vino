<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\ORM\ResultSet $produccionTotal
 */

$this->set('bakeEntities', array (
  0 => 'ProduccionTotal',
  1 => 'DetallePedidos',
));
?>
<div class="container" id="produccion_total_index">
    <?= $this->Html->button(
        '<i class="fa fa-plus-circle fa-lg"></i> ' . __('New Produccion Total'),
        ['action' => 'add'],
        ['class' => ['float-right'], 'escape' => false, 'size' => 'small']); ?>
    <h3 class="mb-4"><?= __('Produccion Total') ?></h3>
    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('nombre_producto') ?></th>
                <th><?= $this->Paginator->sort('valor_total_producto') ?></th>
                <th><?= $this->Paginator->sort('valor_ultima_suma') ?></th>
                <th><?= $this->Paginator->sort('precio') ?></th>
                <th><?= $this->Paginator->sort('presentacion') ?></th>
                <th><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($produccionTotal as $produccionTotal): ?>
            <tr>
                <td><?= $this->Number->format($produccionTotal->id) ?></td>
                <td><?= h($produccionTotal->nombre_producto) ?></td>
                <td><?= $this->Number->format($produccionTotal->valor_total_producto) ?></td>
                <td><?= $this->Number->format($produccionTotal->valor_ultima_suma) ?></td>
                <td><?= $this->Number->format($produccionTotal->precio) ?></td>
                <td><?= h($produccionTotal->presentacion) ?></td>
                <td class="text-right">
                    <?= $this->Html->link(null, ['action' => 'view', $produccionTotal->id], ['class' => 'btn btn-primary fa fa-eye p-1 mx-1']) ?>
                            <?= $this->Html->link(null, ['action' => 'edit', $produccionTotal->id], ['class' => 'btn btn-primary fa fa-pencil p-1 mx-1']) ?>
                            <?= $this->Form->postLink(null, ['action' => 'delete', $produccionTotal->id], [
                    'confirm' => __('Are you sure you want to delete # {0}?', $produccionTotal->id),
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
