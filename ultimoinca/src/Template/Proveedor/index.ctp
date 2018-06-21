<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\ORM\ResultSet $proveedor
 */

$this->set('bakeEntities', array (
  0 => 'Proveedor',
  1 => 'Empresa',
  2 => 'CompraMatPri',
  3 => 'Prevee',
));
?>
<div class="container" id="proveedor_index">
    <?= $this->Html->button(
        '<i class="fa fa-plus-circle fa-lg"></i> ' . __('Proveedor'),
        ['action' => 'add'],
        ['class' => ['float-right'], 'escape' => false, 'size' => 'small']); ?>
    <h3 class="mb-4"><?= __('Proveedor') ?></h3>
    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('cedula') ?></th>
                <th><?= $this->Paginator->sort('nombres_pro') ?></th>
                <th><?= $this->Paginator->sort('apellidos_pro') ?></th>
                <th><?= $this->Paginator->sort('telefono_pro') ?></th>
                <th><?= $this->Paginator->sort('email_pro') ?></th>
                <th><?= $this->Paginator->sort('empresa_id') ?></th>
                <th><?= __('Acciones') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($proveedor as $proveedor): ?>
            <tr>
                <td><?= $this->Number->format($proveedor->id) ?></td>
                <td><?= h($proveedor->cedula) ?></td>
                <td><?= h($proveedor->nombres_pro) ?></td>
                <td><?= h($proveedor->apellidos_pro) ?></td>
                <td><?= h($proveedor->telefono_pro) ?></td>
                <td><?= h($proveedor->email_pro) ?></td>
                <td><?= $proveedor->has('empresa') ? $this->Html->link($proveedor->empresa->id, ['controller' => 'Empresa', 'action' => 'view', $proveedor->empresa->id]) : '' ?></td>
                <td class="text-right">
                    <?= $this->Html->link(null, ['action' => 'Nuevo', $proveedor->id], ['class' => 'btn btn-primary fa fa-eye p-1 mx-1']) ?>
                            <?= $this->Html->link(null, ['action' => 'Editar', $proveedor->id], ['class' => 'btn btn-primary fa fa-pencil p-1 mx-1']) ?>
                            <?= $this->Form->postLink(null, ['action' => 'Eliminar', $proveedor->id], [
                    'confirm' => __('Estas seguro que quieres borrarlo', $proveedor->id),
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
