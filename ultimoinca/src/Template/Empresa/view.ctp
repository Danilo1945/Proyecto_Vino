<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Empresa $empresa
 */

$this->set('bakeEntities', array (
  0 => 'Empresa',
  1 => 'Proveedor',
));
?>
<div class="container"  id="empresa_view">
    <div class="float-right">
        <?= $this->Html->button(
        '<i class="fa fa-pencil fa-lg pr-3"></i> ' . __('Editar'),
        ['action' => 'edit', $empresa->id],
        ['class' => ['mr-3'], 'escape' => false, 'size' => 'sm']); ?>

        <?= $this->Form->postLink('<i class="fa fa-trash fa-lg pr-3"></i>'. __('Eliminar'), ['action' => 'delete', $empresa->id], [
        'escape' => false,
        'class' => 'btn btn-primary btn-sm',
        'confirm' => __('Estas seguro que quieres borrarlo', $empresa->id)]) ?>
    </div>

    <h3 class="mb-3"><?= h($empresa->id) ?></h3>
    <dl class="row">
        <dt class="col-sm-3"><?= __('Nombre') ?></dt>
        <dd class="col-sm-9"><?= h($empresa->nombre) ?></dd>
        <dt class="col-sm-3"><?= __('Direccion') ?></dt>
        <dd class="col-sm-9"><?= h($empresa->direccion) ?></dd>
        <dt class="col-sm-3"><?= __('Email') ?></dt>
        <dd class="col-sm-9"><?= h($empresa->email) ?></dd>
        <dt class="col-sm-3"><?= __('Id') ?></dt>
        <dd class="col-sm-9"><?= $this->Number->format($empresa->id) ?></dd>
    </dl>
    <h4><?= __('Related Proveedor') ?></h4>
    <?php if (!empty($empresa->proveedor)): ?>
    <div class=" table-responsive">
        <table class="table table-sm table-striped table-hover">
            <thead>
                <tr>
                        <th scope="col"><?= __('Id') ?></th>
                        <th scope="col"><?= __('Cedula') ?></th>
                        <th scope="col"><?= __('Nombres Pro') ?></th>
                        <th scope="col"><?= __('Apellidos Pro') ?></th>
                        <th scope="col"><?= __('Telefono Pro') ?></th>
                        <th scope="col"><?= __('Email Pro') ?></th>
                        <th scope="col"><?= __('Empresa Id') ?></th>
                        <th scope="col" class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <?php foreach ($empresa->proveedor as $proveedor): ?>
            <tr>
                <td><?= h($proveedor->id) ?></td>
                <td><?= h($proveedor->cedula) ?></td>
                <td><?= h($proveedor->nombres_pro) ?></td>
                <td><?= h($proveedor->apellidos_pro) ?></td>
                <td><?= h($proveedor->telefono_pro) ?></td>
                <td><?= h($proveedor->email_pro) ?></td>
                <td><?= h($proveedor->empresa_id) ?></td>
                <td class="text-right">
                    <?= $this->Html->link(null, ['controller' => 'Proveedor', 'action' => 'Nuevo', $proveedor->id], ['class' => 'btn btn-primary fa fa-eye p-1 mx-1']) ?>
                            <?= $this->Html->link(null, ['controller' => 'Proveedor', 'action' => 'Editar', $proveedor->id], ['class' => 'btn btn-primary fa fa-pencil p-1 mx-1']) ?>
                            <?= $this->Form->postLink(null, ['controller' => 'Proveedor', 'action' => 'Eliminar', $proveedor->id], [
                    'confirm' => __('Estas seguro que quieres borrarlo', $proveedor->id),
                    'class' => 'btn btn-primary fa fa-trash p-1 mx-1'
                    ]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>

</div>