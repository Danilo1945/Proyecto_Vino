<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\ORM\ResultSet $empresa
 */

$this->set('bakeEntities', array (
  0 => 'Empresa',
  1 => 'Proveedor',
));
?>
<div class="container" id="empresa_index">
    <?= $this->Html->button(
        '<i class="fa fa-plus-circle fa-lg"></i> ' . __(' Empresa'),
        ['action' => 'add'],
        ['class' => ['float-right'], 'escape' => false, 'size' => 'small']); ?>
    <h3 class="mb-4"><?= __('Empresa') ?></h3>
    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('nombre') ?></th>
                <th><?= $this->Paginator->sort('direccion') ?></th>
                <th><?= $this->Paginator->sort('email') ?></th>
                <th><?= __('Acciones') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($empresa as $empresa): ?>
            <tr>
                <td><?= $this->Number->format($empresa->id) ?></td>
                <td><?= h($empresa->nombre) ?></td>
                <td><?= h($empresa->direccion) ?></td>
                <td><?= h($empresa->email) ?></td>
                <td class="text-right">
                    <?= $this->Html->link(null, ['action' => 'Nuevo', $empresa->id], ['class' => 'btn btn-primary fa fa-eye p-1 mx-1']) ?>
                            <?= $this->Html->link(null, ['action' => 'Editar', $empresa->id], ['class' => 'btn btn-primary fa fa-pencil p-1 mx-1']) ?>
                            <?= $this->Form->postLink(null, ['action' => 'Eliminar', $empresa->id], [
                    'confirm' => __('Estas seguro que quieres borrarlo', $empresa->id),
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
