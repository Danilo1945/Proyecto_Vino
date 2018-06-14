<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\ORM\ResultSet $unidadMedida
 */

$this->set('bakeEntities', array (
  0 => 'UnidadMedida',
  1 => 'CompraMatPri',
));
?>
<div class="container" id="unidad_medida_index">
    <?= $this->Html->button(
        '<i class="fa fa-plus-circle fa-lg"></i> ' . __('Unidad Medida'),
        ['action' => 'add'],
        ['class' => ['float-right'], 'escape' => false, 'size' => 'small']); ?>
    <h3 class="mb-4"><?= __('Unidad Medida') ?></h3>
    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('nombre_umed') ?></th>
                <th><?= $this->Paginator->sort('detalle_umed') ?></th>
                <th><?= __('Acciones') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($unidadMedida as $unidadMedida): ?>
            <tr>
                <td><?= $this->Number->format($unidadMedida->id) ?></td>
                <td><?= h($unidadMedida->nombre_umed) ?></td>
                <td><?= h($unidadMedida->detalle_umed) ?></td>
                <td class="text-right">
                    <?= $this->Html->link(null, ['action' => 'Nuevo', $unidadMedida->id], ['class' => 'btn btn-primary fa fa-eye p-1 mx-1']) ?>
                            <?= $this->Html->link(null, ['action' => 'Editar', $unidadMedida->id], ['class' => 'btn btn-primary fa fa-pencil p-1 mx-1']) ?>
                            <?= $this->Form->postLink(null, ['action' => 'Eliminar', $unidadMedida->id], [
                    'confirm' => __('Estas seguro que quieres borrarlo', $unidadMedida->id),
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
