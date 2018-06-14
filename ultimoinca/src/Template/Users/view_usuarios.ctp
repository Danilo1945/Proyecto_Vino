<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */

$this->set('bakeEntities', array (
  0 => 'Users',
  1 => 'Roles',
));
?>


<div class="hide" style="color: white">
    <?= $this->layout = 'publico'; ?>
</div>



<div class="container"  id="user_view">
    <div class="float-right">
        <?= $this->Html->button(
        '<i class="fa fa-pencil fa-lg pr-3"></i> ' . __('Editar'),
        ['action' => 'edit', $user->id],
        ['class' => ['mr-3'], 'escape' => false, 'size' => 'sm']); ?>

        <?= $this->Form->postLink('<i class="fa fa-trash fa-lg pr-3"></i>'. __('Eliminar'), ['action' => 'delete', $user->id], [
        'escape' => false,
        'class' => 'btn btn-primary btn-sm',
        'confirm' => __('Estas seguro que quieres borrarlo', $user->id)]) ?>
    </div>

    <h3 class="mb-3"><?= h($user->name) ?></h3>
    <dl class="row">
        <dt class="col-sm-3"><?= __('Name') ?></dt>
        <dd class="col-sm-9"><?= h($user->name) ?></dd>
        <dt class="col-sm-3"><?= __('Lastname') ?></dt>
        <dd class="col-sm-9"><?= h($user->lastname) ?></dd>
        <dt class="col-sm-3"><?= __('Username') ?></dt>
        <dd class="col-sm-9"><?= h($user->username) ?></dd>
        <dt class="col-sm-3"><?= __('Telefono') ?></dt>
        <dd class="col-sm-9"><?= h($user->Telefono) ?></dd>
        <dt class="col-sm-3"><?= __('Email') ?></dt>
        <dd class="col-sm-9"><?= h($user->email) ?></dd>
        <dt class="col-sm-3"><?= __('Password') ?></dt>
        <dd class="col-sm-9"><?= h($user->password) ?></dd>
        <dt class="col-sm-3"><?= __('Role') ?></dt>
        <dd class="col-sm-9"><?= $user->has('role') ? $this->Html->link($user->role->role, ['controller' => 'Roles', 'action' => 'view', $user->role->id]) : '' ?></dd>
        <dt class="col-sm-3"><?= __('Id') ?></dt>
        <dd class="col-sm-9"><?= $this->Number->format($user->id) ?></dd>
        <dt class="col-sm-3"><?= __('Created') ?></dt>
        <dd class="col-sm-9"><?= h($user->created) ?></dd>
        <dt class="col-sm-3"><?= __('Modified') ?></dt>
        <dd class="col-sm-9"><?= h($user->modified) ?></dd>
    </dl>

</div>