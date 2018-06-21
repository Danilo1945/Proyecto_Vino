<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\ORM\ResultSet $trabajador
 */

$this->set('bakeEntities', array (
  0 => 'Trabajador',
));
?>
<div class="container" id="trabajador_index">
    <?= $this->Html->button(
        '<i class="fa fa-plus-circle fa-lg"></i> ' . __('New Trabajador'),
        ['action' => 'add'],
        ['class' => ['float-right'], 'escape' => false, 'size' => 'small']); ?>
    <h3 class="mb-4"><?= __('Trabajador') ?></h3>
    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('cedula') ?></th>
                <th><?= $this->Paginator->sort('Nombres_tra') ?></th>
                <th><?= $this->Paginator->sort('Apellidos_tra') ?></th>
                <th><?= $this->Paginator->sort('Telefono_tra') ?></th>
                <th><?= $this->Paginator->sort('Direccion_tra') ?></th>
                <th><?= $this->Paginator->sort('Email_tra') ?></th>
                <th><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($trabajador as $trabajador): ?>
            <tr>
                <td><?= $this->Number->format($trabajador->id) ?></td>
                <td><?= h($trabajador->cedula) ?></td>
                <td><?= h($trabajador->Nombres_tra) ?></td>
                <td><?= h($trabajador->Apellidos_tra) ?></td>
                <td><?= h($trabajador->Telefono_tra) ?></td>
                <td><?= h($trabajador->Direccion_tra) ?></td>
                <td><?= h($trabajador->Email_tra) ?></td>
                <td class="text-right">
                    <?= $this->Html->link(null, ['action' => 'view', $trabajador->id], ['class' => 'btn btn-primary fa fa-eye p-1 mx-1']) ?>
                            <?= $this->Html->link(null, ['action' => 'edit', $trabajador->id], ['class' => 'btn btn-primary fa fa-pencil p-1 mx-1']) ?>
                            <?= $this->Form->postLink(null, ['action' => 'delete', $trabajador->id], [
                    'confirm' => __('Are you sure you want to delete # {0}?', $trabajador->id),
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
