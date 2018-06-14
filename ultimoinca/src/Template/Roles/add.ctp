<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Role $role
 */

$this->set('bakeEntities', array (
  0 => 'Roles',
));
?>
<div class="container" id="roles_add">
    <?= $this->Form->create($role) ?>
    <fieldset>
        <legend><?= __('Añadir Rol') ?></legend>
        <?php
            echo $this->Form->control('role');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
