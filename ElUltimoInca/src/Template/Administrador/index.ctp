<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Administrador[]|\Cake\Collection\CollectionInterface $administrador
 */
?>

 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  
 <?= $this->Html->script('jquery-3.3.1.min')?>
  







<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <!--LISTA EL MENU DE OPCIONES DE LA ENTIDAD-->
        <li class="heading"><?= __('ACCIONES') ?></li>
        
      
        <li><?= $this->Html->link(__('Nuevo Administrador'), ['action' => 'add']) ?></li>
   
        
        <!--boton para regresar al menu-->
       
    </ul>
</nav>




<div class="administrador index large-9 medium-8 columns content">
    <h3><?= __('Administrador') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id_adm') ?></th>
                <th scope="col"><?= $this->Paginator->sort('usuario_adm') ?></th>
                <th scope="col"><?= $this->Paginator->sort('contrasenia_adm') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($administrador as $administrador): ?>
            <tr>
                <td><?= $this->Number->format($administrador->id_adm) ?></td>
                <td><?= h($administrador->usuario_adm) ?></td>
                <td><?= h($administrador->contrasenia_adm) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $administrador->id_adm]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $administrador->id_adm]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $administrador->id_adm], ['confirm' => __('Are you sure you want to delete # {0}?', $administrador->id_adm)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
