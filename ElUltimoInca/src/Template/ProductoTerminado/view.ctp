<?php
/**
* @var \App\View\AppView $this
* @var \App\Model\Entity\ProductoTerminado $productoTerminado
*/
?>
<div class="hide">
   
</div>
<div class="row">
    <div class="col s12 m3">
        <div class="card darken-1" id="abajo_menu">
            <div class="card-content white-text" id="abajo_menu">
                <span class="card-title black-text"><?= __('Acciones') ?></span>
                <div class="card-action">
                    <li class="padding-action"><?= $this->Html->link(__('Editar Producto Terminado'), ['action' => 'edit', $productoTerminado->id]) ?> </li>
                    <li class="padding-action"><?= $this->Form->postLink(__('Eliminar Producto Terminado'), ['action' => 'delete', $productoTerminado->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productoTerminado->id)]) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('Lista de Producto Terminado'), ['action' => 'index']) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('Nuevo Producto Terminado'), ['action' => 'add']) ?> </li>
                </div>
            </div>
        </div>
    </div>
    <div class="col s12 m9">
        <div class="card darken-1">
            <div class="card-content black-text">
                <ul class="collection with-header">
                    <li class="collection-header">
                        <h4><?= h($productoTerminado->id) ?></h4>
                    </li>
                    <li class="collection-item">
                        <?= __('Lote Pro Ter') ?>
                        <div class="secondary-content">
                            <?= h($productoTerminado->lote_pro_ter) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Cantidad Pro Ter') ?>
                        <div class="secondary-content">
                            <?= h($productoTerminado->cantidad_pro_ter) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Observaciones') ?>
                        <div class="secondary-content">
                            <?= h($productoTerminado->observaciones) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Id') ?>
                        <div class="secondary-content">
                            <?= $this->Number->format($productoTerminado->id) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Pasteurizacion') ?>
                        <div class="secondary-content">
                            <?= $this->Number->format($productoTerminado->pasteurizacion) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Valor Cantidad Pro') ?>
                        <div class="secondary-content">
                            <?= $this->Number->format($productoTerminado->valor_cantidad_pro) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Brix') ?>
                        <div class="secondary-content">
                            <?= $this->Number->format($productoTerminado->brix) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Valor Etiqueta') ?>
                        <div class="secondary-content">
                            <?= $this->Number->format($productoTerminado->valor_etiqueta) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Valor Corcho') ?>
                        <div class="secondary-content">
                            <?= $this->Number->format($productoTerminado->valor_corcho) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Valor Capuchon') ?>
                        <div class="secondary-content">
                            <?= $this->Number->format($productoTerminado->valor_capuchon) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Num Cinta Sri') ?>
                        <div class="secondary-content">
                            <?= $this->Number->format($productoTerminado->num_cinta_sri) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Num Cinta Inca') ?>
                        <div class="secondary-content">
                            <?= $this->Number->format($productoTerminado->num_cinta_inca) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Id Mat Prim') ?>
                        <div class="secondary-content">
                            <?= $this->Number->format($productoTerminado->id_mat_prim) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Id Tra') ?>
                        <div class="secondary-content">
                            <?= $this->Number->format($productoTerminado->id_tra) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Fecha') ?>
                        <div class="secondary-content">
                            <?= h($productoTerminado->fecha) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Fecha Elb') ?>
                        <div class="secondary-content">
                            <?= h($productoTerminado->fecha_elb) ?>
                        </div>
                    </li>
                </ul>
        </div>
    </div>
</div>
