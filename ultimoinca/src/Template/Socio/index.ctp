<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\ORM\ResultSet $socio
 */

$this->set('bakeEntities', array (
  0 => 'Socio',
));
?>
<div class="container" id="socio_index">
    <?= $this->Html->button(
        '<i class="fa fa-plus-circle fa-lg"></i> ' . __('New Socio'),
        ['action' => 'add'],
        ['class' => ['float-right'], 'escape' => false, 'size' => 'small']); ?>
    <h3 class="mb-4"><?= __('Socio') ?></h3>
    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('cedula') ?></th>
                <th><?= $this->Paginator->sort('Nombres') ?></th>
                <th><?= $this->Paginator->sort('Apellidos') ?></th>
                <th><?= $this->Paginator->sort('Telefono') ?></th>
                <th><?= $this->Paginator->sort('Direccion') ?></th>
                <th><?= $this->Paginator->sort('Email') ?></th>
                <th><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($socio as $socio): ?>
            <tr>
                <td><?= $this->Number->format($socio->id) ?></td>
                <td><?= h($socio->cedula) ?></td>
                <td><?= h($socio->Nombres) ?></td>
                <td><?= h($socio->Apellidos) ?></td>
                <td><?= h($socio->Telefono) ?></td>
                <td><?= h($socio->Direccion) ?></td>
                <td><?= h($socio->Email) ?></td>
                <td class="text-right">
                    <?= $this->Html->link(null, ['action' => 'view', $socio->id], ['class' => 'btn btn-primary fa fa-eye p-1 mx-1']) ?>
                            <?= $this->Html->link(null, ['action' => 'edit', $socio->id], ['class' => 'btn btn-primary fa fa-pencil p-1 mx-1']) ?>
                            <?= $this->Form->postLink(null, ['action' => 'delete', $socio->id], [
                    'confirm' => __('Are you sure you want to delete # {0}?', $socio->id),
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
