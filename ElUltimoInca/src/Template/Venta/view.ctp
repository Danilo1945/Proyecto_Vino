<?php
/**
* @var \App\View\AppView $this
* @var \App\Model\Entity\Ventum $ventum
*/
?>
<div class="hide">
    
</div>
<div class="row">
    <div class="col s12 m3">
        <div class="card darken-1"id="abajo_menu">
            <div class="card-content white-text">
                <span class="card-title green-text"><?= __('Acciones') ?></span>
                <div class="card-action"id="abajo_menu">
                    <li class="padding-action"><?= $this->Html->link(__('Editar Venta'), ['action' => 'edit', $ventum->id]) ?> </li>
                    <li class="padding-action"><?= $this->Form->postLink(__('Eliminar Venta'), ['action' => 'delete', $ventum->id], ['confirm' => __('Desea Eliminar', $ventum->id)]) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('Lista Venta'), ['action' => 'index']) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('Nueva Venta'), ['action' => 'add']) ?> </li>
                </div>
            </div>
        </div>
    </div>
    <div class="col s12 m9">
        <div class="card darken-1">
            <div class="card-content black-text">
                <ul class="collection with-header">
                    <li class="collection-header">
                        <h4><?= h($ventum->id) ?></h4>
                    </li>
                    <li class="collection-item">
                        <?= __('Estado Cuenta') ?>
                        <div class="secondary-content">
                            <?= h($ventum->estado_cuenta) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Observaciones Ven') ?>
                        <div class="secondary-content">
                            <?= h($ventum->observaciones_ven) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Id') ?>
                        <div class="secondary-content">
                            <?= $this->Number->format($ventum->id) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Id Tra') ?>
                        <div class="secondary-content">
                            <?= $this->Number->format($ventum->id_tra) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Idcliente') ?>
                        <div class="secondary-content">
                            <?= $this->Number->format($ventum->Idcliente) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Id Pro Ter') ?>
                        <div class="secondary-content">
                            <?= $this->Number->format($ventum->id_pro_ter) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Precio Uni') ?>
                        <div class="secondary-content">
                            <?= $this->Number->format($ventum->precio_uni) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Precio Total') ?>
                        <div class="secondary-content">
                            <?= $this->Number->format($ventum->precio_total) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Valor Donacion Vent') ?>
                        <div class="secondary-content">
                            <?= $this->Number->format($ventum->valor_donacion_vent) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Fecha Ven') ?>
                        <div class="secondary-content">
                            <?= h($ventum->fecha_ven) ?>
                        </div>
                    </li>
                </ul>
        </div>
    </div>
</div>
