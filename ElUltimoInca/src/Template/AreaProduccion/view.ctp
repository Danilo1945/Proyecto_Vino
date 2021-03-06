<?php
/**
* @var \App\View\AppView $this
* @var \App\Model\Entity\AreaProduccion $areaProduccion
*/
?>
<div class="hide">
  
</div>
<div class="row">
    <div class="col s12 m3">
        <div class="card darken-1">
            <div class="card-content white-text">
                <span class="card-title green-text"><?= __('Actions') ?></span>
                <div class="card-action">
                    <li class="padding-action"><?= $this->Html->link(__('Edit Area Produccion'), ['action' => 'edit', $areaProduccion->id]) ?> </li>
                    <li class="padding-action"><?= $this->Form->postLink(__('Delete Area Produccion'), ['action' => 'delete', $areaProduccion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $areaProduccion->id)]) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('List Area Produccion'), ['action' => 'index']) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('New Area Produccion'), ['action' => 'add']) ?> </li>
                </div>
            </div>
        </div>
    </div>
    <div class="col s12 m9">
        <div class="card darken-1">
            <div class="card-content black-text">
                <ul class="collection with-header">
                    <li class="collection-header">
                        <h4><?= h($areaProduccion->id) ?></h4>
                    </li>
                    <li class="collection-item">
                        <?= __('Num Procesos') ?>
                        <div class="secondary-content">
                            <?= h($areaProduccion->num_procesos) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Clase Vino') ?>
                        <div class="secondary-content">
                            <?= h($areaProduccion->clase_vino) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Observaciones Area Pro') ?>
                        <div class="secondary-content">
                            <?= h($areaProduccion->observaciones_area_pro) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Id') ?>
                        <div class="secondary-content">
                            <?= $this->Number->format($areaProduccion->id) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Brix Area Pro') ?>
                        <div class="secondary-content">
                            <?= $this->Number->format($areaProduccion->brix_area_pro) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Temperatura Vino') ?>
                        <div class="secondary-content">
                            <?= $this->Number->format($areaProduccion->temperatura_vino) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Id Uni Medi') ?>
                        <div class="secondary-content">
                            <?= $this->Number->format($areaProduccion->id_uni_medi) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Id Tra') ?>
                        <div class="secondary-content">
                            <?= $this->Number->format($areaProduccion->id_tra) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Id Inv') ?>
                        <div class="secondary-content">
                            <?= $this->Number->format($areaProduccion->id_inv) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Fecha Elaboracion') ?>
                        <div class="secondary-content">
                            <?= h($areaProduccion->fecha_elaboracion) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Fecha Control') ?>
                        <div class="secondary-content">
                            <?= h($areaProduccion->fecha_control) ?>
                        </div>
                    </li>
                </ul>
        </div>
    </div>
</div>
