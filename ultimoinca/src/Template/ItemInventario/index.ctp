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
        '<i class="fa fa-plus-circle fa-lg"></i> ' . __('Item Inventario'),
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
                <th><?= __('Acciones') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($itemInventario as $itemInventario): ?>
            <tr>
                <td><?= $this->Number->format($itemInventario->id) ?></td>
                <td><?= h($itemInventario->nom_item) ?></td>
                <td><?= h($itemInventario->detalle_item) ?></td>
                <td class="text-right">
                    <?= $this->Html->link(null, ['action' => 'Nuevo', $itemInventario->id], ['class' => 'btn btn-primary fa fa-eye p-1 mx-1']) ?>
                            <?= $this->Html->link(null, ['action' => 'Editar', $itemInventario->id], ['class' => 'btn btn-primary fa fa-pencil p-1 mx-1']) ?>
                            <?= $this->Form->postLink(null, ['action' => 'Eliminar', $itemInventario->id], [
                    'confirm' => __('Estas seguro que quieres borrarlo', $itemInventario->id),
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
