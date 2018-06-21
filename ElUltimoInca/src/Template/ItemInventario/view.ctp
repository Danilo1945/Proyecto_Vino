<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ItemInventario $itemInventario
 */

$this->set('bakeEntities', array (
  0 => 'ItemInventario',
  1 => 'InventarioEmpresa',
));
?>
<div class="container"  id="item_inventario_view">
    <div class="float-right">
        <?= $this->Html->button(
        '<i class="fa fa-pencil fa-lg pr-3"></i> ' . __('Edit'),
        ['action' => 'edit', $itemInventario->id],
        ['class' => ['mr-3'], 'escape' => false, 'size' => 'sm']); ?>

        <?= $this->Form->postLink('<i class="fa fa-trash fa-lg pr-3"></i>'. __('Delete'), ['action' => 'delete', $itemInventario->id], [
        'escape' => false,
        'class' => 'btn btn-primary btn-sm',
        'confirm' => __('Are you sure you want to delete # {0}?', $itemInventario->id)]) ?>
    </div>

    <h3 class="mb-3"><?= h($itemInventario->id) ?></h3>
    <dl class="row">
        <dt class="col-sm-3"><?= __('Nom Item') ?></dt>
        <dd class="col-sm-9"><?= h($itemInventario->nom_item) ?></dd>
        <dt class="col-sm-3"><?= __('Detalle Item') ?></dt>
        <dd class="col-sm-9"><?= h($itemInventario->detalle_item) ?></dd>
        <dt class="col-sm-3"><?= __('Id') ?></dt>
        <dd class="col-sm-9"><?= $this->Number->format($itemInventario->id) ?></dd>
    </dl>
    <h4><?= __('Related Inventario Empresa') ?></h4>
    <?php if (!empty($itemInventario->inventario_empresa)): ?>
    <div class=" table-responsive">
        <table class="table table-sm table-striped table-hover">
            <thead>
                <tr>
                        <th scope="col"><?= __('Id') ?></th>
                        <th scope="col"><?= __('Nombre Art Inv') ?></th>
                        <th scope="col"><?= __('Descripcion Inv') ?></th>
                        <th scope="col"><?= __('Color Inv') ?></th>
                        <th scope="col"><?= __('Item Inventario Id') ?></th>
                        <th scope="col" class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <?php foreach ($itemInventario->inventario_empresa as $inventarioEmpresa): ?>
            <tr>
                <td><?= h($inventarioEmpresa->id) ?></td>
                <td><?= h($inventarioEmpresa->nombre_art_inv) ?></td>
                <td><?= h($inventarioEmpresa->descripcion_inv) ?></td>
                <td><?= h($inventarioEmpresa->color_inv) ?></td>
                <td><?= h($inventarioEmpresa->item_inventario_id) ?></td>
                <td class="text-right">
                    <?= $this->Html->link(null, ['controller' => 'InventarioEmpresa', 'action' => 'view', $inventarioEmpresa->id], ['class' => 'btn btn-primary fa fa-eye p-1 mx-1']) ?>
                            <?= $this->Html->link(null, ['controller' => 'InventarioEmpresa', 'action' => 'edit', $inventarioEmpresa->id], ['class' => 'btn btn-primary fa fa-pencil p-1 mx-1']) ?>
                            <?= $this->Form->postLink(null, ['controller' => 'InventarioEmpresa', 'action' => 'delete', $inventarioEmpresa->id], [
                    'confirm' => __('Are you sure you want to delete # {0}?', $inventarioEmpresa->id),
                    'class' => 'btn btn-primary fa fa-trash p-1 mx-1'
                    ]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>

</div>