<?php
/**
* @var \App\View\AppView $this
* @var \App\Model\Entity\Pedido $pedido
*/
?>
<div class="hide">
<<<<<<< HEAD
  
=======
 
>>>>>>> e258ca626eab3f6a502cf168d403504f3987475b
</div>
<div class="row">
    <div class="col s12 m3">
        <div class="card darken-1" id="abajo_menu">
            <div class="card-content white-text" id="abajo_menu">
                <span class="card-title black-text"><?= __('Acciones') ?></span>
                <div class="card-action">
                    <li class="padding-action"><?= $this->Html->link(__('Editar Pedido'), ['Acciones' => 'editar', $pedido->id]) ?> </li>
                    <li class="padding-action"><?= $this->Form->postLink(__('Eliminar Pedido'), ['Actiones' => 'eliminar', $pedido->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pedido->id)]) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('Lista Pedido'), ['Acciones' => 'index']) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('Nuevo Pedido'), ['Acciones' => 'add']) ?> </li>
                </div>
            </div>
        </div>
    </div>
    <div class="col s12 m9">
        <div class="card darken-1">
            <div class="card-content black-text">
                <ul class="collection with-header">
                    <li class="collection-header">
                        <h4><?= h($pedido->id) ?></h4>
                    </li>
                    <li class="collection-item">
                        <?= __('Unidad Medida') ?>
                        <div class="secondary-content">
                            <?= h($pedido->unidad_medida) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Id') ?>
                        <div class="secondary-content">
                            <?= $this->Number->format($pedido->id) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Cantidad') ?>
                        <div class="secondary-content">
                            <?= $this->Number->format($pedido->Cantidad) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Idcliente') ?>
                        <div class="secondary-content">
                            <?= $this->Number->format($pedido->Idcliente) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Id Pro Ter') ?>
                        <div class="secondary-content">
                            <?= $this->Number->format($pedido->id_pro_ter) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Fecha') ?>
                        <div class="secondary-content">
                            <?= h($pedido->Fecha) ?>
                        </div>
                    </li>
                </ul>
        </div>
    </div>
</div>
