<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Socio $socio
 */

$this->set('bakeEntities', array (
  0 => 'Socio',
));
?>
<div class="container"  id="socio_view">
    <div class="float-right">
        <?= $this->Html->button(
        '<i class="fa fa-pencil fa-lg pr-3"></i> ' . __('Edit'),
        ['action' => 'edit', $socio->id],
        ['class' => ['mr-3'], 'escape' => false, 'size' => 'sm']); ?>

        <?= $this->Form->postLink('<i class="fa fa-trash fa-lg pr-3"></i>'. __('Delete'), ['action' => 'delete', $socio->id], [
        'escape' => false,
        'class' => 'btn btn-primary btn-sm',
        'confirm' => __('Are you sure you want to delete # {0}?', $socio->id)]) ?>
    </div>

    <h3 class="mb-3"><?= h($socio->id) ?></h3>
    <dl class="row">
        <dt class="col-sm-3"><?= __('Cedula') ?></dt>
        <dd class="col-sm-9"><?= h($socio->cedula) ?></dd>
        <dt class="col-sm-3"><?= __('Nombres') ?></dt>
        <dd class="col-sm-9"><?= h($socio->Nombres) ?></dd>
        <dt class="col-sm-3"><?= __('Apellidos') ?></dt>
        <dd class="col-sm-9"><?= h($socio->Apellidos) ?></dd>
        <dt class="col-sm-3"><?= __('Telefono') ?></dt>
        <dd class="col-sm-9"><?= h($socio->Telefono) ?></dd>
        <dt class="col-sm-3"><?= __('Direccion') ?></dt>
        <dd class="col-sm-9"><?= h($socio->Direccion) ?></dd>
        <dt class="col-sm-3"><?= __('Email') ?></dt>
        <dd class="col-sm-9"><?= h($socio->Email) ?></dd>
        <dt class="col-sm-3"><?= __('Id') ?></dt>
        <dd class="col-sm-9"><?= $this->Number->format($socio->id) ?></dd>
    </dl>

</div>