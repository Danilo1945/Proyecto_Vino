<?php
/**
* @var \App\View\AppView $this
* @var \App\Model\Entity\HojaProductoTerminado $hojaProductoTerminado
*/
?>
<div class="hide">
    <?= $this->layout = "Materialize.materialize"; ?>
</div>
<div class="row">
    <div class="col s12 m3">
        <div class="card darken-1">
            <div class="card-content white-text">
                <span class="card-title green-text"><?= __('Actions') ?></span>
                <div class="card-action">
                    <li class="padding-action"><?= $this->Html->link(__('Edit Hoja Producto Terminado'), ['action' => 'edit', $hojaProductoTerminado->id]) ?> </li>
                    <li class="padding-action"><?= $this->Form->postLink(__('Delete Hoja Producto Terminado'), ['action' => 'delete', $hojaProductoTerminado->id], ['confirm' => __('Are you sure you want to delete # {0}?', $hojaProductoTerminado->id)]) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('List Hoja Producto Terminado'), ['action' => 'index']) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('New Hoja Producto Terminado'), ['action' => 'add']) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('List Pasteurizacion'), ['controller' => 'Pasteurizacion', 'action' => 'index']) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('New Pasteurizacion'), ['controller' => 'Pasteurizacion', 'action' => 'add']) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('List Lote'), ['controller' => 'Lote', 'action' => 'index']) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('New Lote'), ['controller' => 'Lote', 'action' => 'add']) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('List Brix'), ['controller' => 'Brix', 'action' => 'index']) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('New Brix'), ['controller' => 'Brix', 'action' => 'add']) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('List Trabajador'), ['controller' => 'Trabajador', 'action' => 'index']) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('New Trabajador'), ['controller' => 'Trabajador', 'action' => 'add']) ?> </li>
                </div>
            </div>
        </div>
    </div>
    <div class="col s12 m9">
        <div class="card darken-1">
            <div class="card-content black-text">
                <ul class="collection with-header">
                    <li class="collection-header">
                        <h4><?= h($hojaProductoTerminado->id) ?></h4>
                    </li>
                    <li class="collection-item">
                        <?= __('Nombre') ?>
                        <div class="secondary-content">
                            <?= h($hojaProductoTerminado->nombre) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Pasteurizacion Id') ?>
                        <div class="secondary-content">
                            <?= $hojaProductoTerminado->has('pasteurizacion') ? $this->Html->link($hojaProductoTerminado->pasteurizacion->id, ['controller' => 'Pasteurizacion', 'action' => 'view', $hojaProductoTerminado->pasteurizacion->id]) : '' ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Lote Id') ?>
                        <div class="secondary-content">
                            <?= $hojaProductoTerminado->has('lote') ? $this->Html->link($hojaProductoTerminado->lote->id, ['controller' => 'Lote', 'action' => 'view', $hojaProductoTerminado->lote->id]) : '' ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Nombre Cantidad') ?>
                        <div class="secondary-content">
                            <?= h($hojaProductoTerminado->nombre_cantidad) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Brix Id') ?>
                        <div class="secondary-content">
                            <?= $hojaProductoTerminado->has('brix') ? $this->Html->link($hojaProductoTerminado->brix->id, ['controller' => 'Brix', 'action' => 'view', $hojaProductoTerminado->brix->id]) : '' ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Nombre Etiqueta') ?>
                        <div class="secondary-content">
                            <?= h($hojaProductoTerminado->nombre_etiqueta) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Nombre Corcho') ?>
                        <div class="secondary-content">
                            <?= h($hojaProductoTerminado->nombre_corcho) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Trabajador Id') ?>
                        <div class="secondary-content">
                            <?= $hojaProductoTerminado->has('trabajador') ? $this->Html->link($hojaProductoTerminado->trabajador->id, ['controller' => 'Trabajador', 'action' => 'view', $hojaProductoTerminado->trabajador->id]) : '' ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Observaciones') ?>
                        <div class="secondary-content">
                            <?= h($hojaProductoTerminado->observaciones) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Id') ?>
                        <div class="secondary-content">
                            <?= $this->Number->format($hojaProductoTerminado->id) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Valor IVA') ?>
                        <div class="secondary-content">
                            <?= $this->Number->format($hojaProductoTerminado->valor_IVA) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Valor ICE') ?>
                        <div class="secondary-content">
                            <?= $this->Number->format($hojaProductoTerminado->valor_ICE) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Valor Cantidad') ?>
                        <div class="secondary-content">
                            <?= $this->Number->format($hojaProductoTerminado->valor_cantidad) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Cantidad Etiqueta') ?>
                        <div class="secondary-content">
                            <?= $this->Number->format($hojaProductoTerminado->cantidad_etiqueta) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Cantidad Corcho') ?>
                        <div class="secondary-content">
                            <?= $this->Number->format($hojaProductoTerminado->cantidad_corcho) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Cantidad Capuchon') ?>
                        <div class="secondary-content">
                            <?= $this->Number->format($hojaProductoTerminado->cantidad_capuchon) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Cantidad Cintas SRI') ?>
                        <div class="secondary-content">
                            <?= $this->Number->format($hojaProductoTerminado->cantidad_cintas_SRI) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Cantidad Cintas UltimoInca') ?>
                        <div class="secondary-content">
                            <?= $this->Number->format($hojaProductoTerminado->cantidad_cintas_ultimoInca) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Fecha') ?>
                        <div class="secondary-content">
                            <?= h($hojaProductoTerminado->fecha) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Fecha Elb') ?>
                        <div class="secondary-content">
                            <?= h($hojaProductoTerminado->fecha_elb) ?>
                        </div>
                    </li>
                </ul>
        </div>
    </div>
</div>
