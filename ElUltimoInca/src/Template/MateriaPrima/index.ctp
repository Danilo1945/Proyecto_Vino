<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\ORM\ResultSet $materiaPrima
 */

$this->set('bakeEntities', array (
  0 => 'MateriaPrima',
  1 => 'CompraMatPri',
  2 => 'Prevee',
));
?>
<div class="container" id="materia_prima_index">
    <?= $this->Html->button(
        '<i class="fa fa-plus-circle fa-lg"></i> ' . __('Materia Prima'),
        ['action' => 'add'],
        ['class' => ['float-right'], 'escape' => false, 'size' => 'small']); ?>
    <h3 class="mb-4"><?= __('Materia Prima') ?></h3>
    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('nombre_mat_pri') ?></th>
                <th><?= $this->Paginator->sort('descripcion_mat_pri') ?></th>
                <th><?= $this->Paginator->sort('contidad') ?></th>
                <th><?= __('Acciones') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($materiaPrima as $materiaPrima): ?>
            <tr>
                <td><?= $this->Number->format($materiaPrima->id) ?></td>
                <td><?= h($materiaPrima->nombre_mat_pri) ?></td>
                <td><?= h($materiaPrima->descripcion_mat_pri) ?></td>
                <td><?= $this->Number->format($materiaPrima->contidad) ?></td>
                <td class="text-right">
                    <?= $this->Html->link(null, ['action' => 'Nuevo', $materiaPrima->id], ['class' => 'btn btn-primary fa fa-eye p-1 mx-1']) ?>
                            <?= $this->Html->link(null, ['action' => 'Editar', $materiaPrima->id], ['class' => 'btn btn-primary fa fa-pencil p-1 mx-1']) ?>
                            <?= $this->Form->postLink(null, ['action' => 'Eliminar', $materiaPrima->id], [
                    'confirm' => __('Estas seguro que quieres borrarlo', $materiaPrima->id),
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
