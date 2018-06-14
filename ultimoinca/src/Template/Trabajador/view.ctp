<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Trabajador $trabajador
 */

$this->set('bakeEntities', array (
  0 => 'Trabajador',
));
?>
<div class="container"  id="trabajador_view">
    <div class="float-right">
        <?= $this->Html->button(
        '<i class="fa fa-pencil fa-lg pr-3"></i> ' . __('Editar'),
        ['action' => 'edit', $trabajador->id],
        ['class' => ['mr-3'], 'escape' => false, 'size' => 'sm']); ?>

        <?= $this->Form->postLink('<i class="fa fa-trash fa-lg pr-3"></i>'. __('Eliminar'), ['action' => 'delete', $trabajador->id], [
        'escape' => false,
        'class' => 'btn btn-primary btn-sm',
        'confirm' => __('Estas seguro que quieres borrarlo', $trabajador->id)]) ?>
    </div>

    <h3 class="mb-3"><?= h($trabajador->id) ?></h3>
    <dl class="row">
        <dt class="col-sm-3"><?= __('Cedula') ?></dt>
        <dd class="col-sm-9"><?= h($trabajador->cedula) ?></dd>
        <dt class="col-sm-3"><?= __('Nombres Tra') ?></dt>
        <dd class="col-sm-9"><?= h($trabajador->Nombres_tra) ?></dd>
        <dt class="col-sm-3"><?= __('Apellidos Tra') ?></dt>
        <dd class="col-sm-9"><?= h($trabajador->Apellidos_tra) ?></dd>
        <dt class="col-sm-3"><?= __('Telefono Tra') ?></dt>
        <dd class="col-sm-9"><?= h($trabajador->Telefono_tra) ?></dd>
        <dt class="col-sm-3"><?= __('Direccion Tra') ?></dt>
        <dd class="col-sm-9"><?= h($trabajador->Direccion_tra) ?></dd>
        <dt class="col-sm-3"><?= __('Email Tra') ?></dt>
        <dd class="col-sm-9"><?= h($trabajador->Email_tra) ?></dd>
        <dt class="col-sm-3"><?= __('Id') ?></dt>
        <dd class="col-sm-9"><?= $this->Number->format($trabajador->id) ?></dd>
    </dl>

</div>