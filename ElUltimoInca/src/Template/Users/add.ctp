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
<div class="container" id="users_add">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Add User') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('lastname');
            echo $this->Form->control('username');
            echo $this->Form->control('Telefono');
            echo $this->Form->control('email');
            echo $this->Form->control('password');
            echo $this->Form->control('confirm_password',['type'=>'password']);
            echo $this->Form->control('roles_id', ['options' => $roles, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
