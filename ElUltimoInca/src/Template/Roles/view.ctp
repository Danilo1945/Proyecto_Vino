<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Role $role
 */

$this->set('bakeEntities', array (
  0 => 'Roles',
));
?>
<div class="container"  id="role_view">
    <div class="float-right">
        <?= $this->Html->button(
        '<i class="fa fa-pencil fa-lg pr-3"></i> ' . __('Editar'),
        ['action' => 'edit', $role->id],
        ['class' => ['mr-3'], 'escape' => false, 'size' => 'sm']); ?>

        <?= $this->Form->postLink('<i class="fa fa-trash fa-lg pr-3"></i>'. __('Eliminar'), ['action' => 'delete', $role->id], [
        'escape' => false,
        'class' => 'btn btn-primary btn-sm',
        'confirm' => __('Estas seguro que quieres borrarlo', $role->id)]) ?>
    </div>

    <h3 class="mb-3"><?= h($role->id) ?></h3>
    <dl class="row">
        <dt class="col-sm-3"><?= __('Role') ?></dt>
        <dd class="col-sm-9"><?= h($role->role) ?></dd>
        <dt class="col-sm-3"><?= __('Id') ?></dt>
        <dd class="col-sm-9"><?= $this->Number->format($role->id) ?></dd>
        <dt class="col-sm-3"><?= __('Created') ?></dt>
        <dd class="col-sm-9"><?= h($role->created) ?></dd>
        <dt class="col-sm-3"><?= __('Modified') ?></dt>
        <dd class="col-sm-9"><?= h($role->modified) ?></dd>
    </dl>

</div>