<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\ORM\ResultSet $itemInventario
 */

$this->set('bakeEntities', array (
  0 => 'ItemInventario',
  1 => 'InventarioEmpresa',
));
?>
<div class="container" id="item_inventario_index">
    <?= $this->Html->button(
        '<i class="fa fa-plus-circle fa-lg"></i> ' . __('New Item Inventario'),
        ['action' => 'add'],
        ['class' => ['float-right'], 'escape' => false, 'size' => 'small']); ?>
    <h3 class="mb-4"><?= __('Item Inventario') ?></h3>
    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('nom_item') ?></th>
                <th><?= $this->Paginator->sort('detalle_item') ?></th>
                <th><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($itemInventario as $itemInventario): ?>
            <tr>
                <td><?= $this->Number->format($itemInventario->id) ?></td>
                <td><?= h($itemInventario->nom_item) ?></td>
                <td><?= h($itemInventario->detalle_item) ?></td>
                <td class="text-right">
                    <?= $this->Html->link(null, ['action' => 'view', $itemInventario->id], ['class' => 'btn btn-primary fa fa-eye p-1 mx-1']) ?>
                            <?= $this->Html->link(null, ['action' => 'edit', $itemInventario->id], ['class' => 'btn btn-primary fa fa-pencil p-1 mx-1']) ?>
                            <?= $this->Form->postLink(null, ['action' => 'delete', $itemInventario->id], [
                    'confirm' => __('Are you sure you want to delete # {0}?', $itemInventario->id),
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
