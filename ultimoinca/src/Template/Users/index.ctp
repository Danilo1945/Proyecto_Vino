<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\ORM\ResultSet $users
 */



$this->set('bakeEntities', array (
  0 => 'Users',
  1 => 'Roles',
));
?>


<div class="container" id="users_index">
    
    <?= $this->Html->button(
        '<i class="fa fa-plus-circle fa-lg"></i> ' . __('New User'),
        ['action' => 'add'],['class' => ['float-right'], 'escape' => false, 'size' => 'small']); ?>
    
    <h3 class="mb-4"><?= __('Users') ?></h3>
    
    
    
    
    
    
    <div class="table-responsive">
        
        <table class="table table-hover table-condensed">
            
            <thead>               
            <tr>
                
                
                
                
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('name') ?></th>
                <th><?= $this->Paginator->sort('lastname') ?></th>
                <th><?= $this->Paginator->sort('username') ?></th>
                <th><?= $this->Paginator->sort('Telefono') ?></th>
                <th><?= $this->Paginator->sort('email') ?></th>
               
                <th><?= $this->Paginator->sort('roles_id') ?></th>
             
               
                <th><?= __('Acciones') ?></th>
                
                
            </tr>
            </thead>
            
            
            <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $this->Number->format($user->id) ?></td>
                <td><?= h($user->name) ?></td>
                <td><?= h($user->lastname) ?></td>
                <td><?= h($user->username) ?></td>
                <td><?= h($user->Telefono) ?></td>
                <td style="width: 20px"><?= h($user->email) ?></td>
              
                <td><?= $user->has('role') ? $this->Html->link($user->role->role, ['controller' => 'Roles', 'action' => 'view', $user->role->id]) : '' ?></td>
               
               
                <td class="text-right">
                    <?= $this->Html->link(null, ['action' => 'Nuevo', $user->id], ['class' => 'btn btn-primary fa fa-eye p-1 mx-1']) ?>
                            <?= $this->Html->link(null, ['action' => 'Editar', $user->id], ['class' => 'btn btn-primary fa fa-pencil p-1 mx-1']) ?>
                            <?= $this->Form->postLink(null, ['action' => 'Eliminar', $user->id], [
                    'confirm' => __('Estas seguro que quieres borrarlo', $user->id),
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
