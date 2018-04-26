<?php
/**
* @var \App\View\AppView $this
* @var \App\Model\Entity\HojaProduccionVino $hojaProduccionVino
*/
?>
<div class="hide">
   
</div>
<div class="row">
    <div class="col s12 m3">
        <div class="card darken-1">
            <div class="card-content white-text"id="abajo_menu">
                <span class="card-title green-text"><?= __('Acciones') ?></span>
                <div class="card-action"id="abajo_menu">
                    <li class="padding-action"><?= $this->Html->link(__('Editar Hoja Produccion Vino'), ['action' => 'edit', $hojaProduccionVino->id]) ?> </li>
                    <li class="padding-action"><?= $this->Form->postLink(__('Elimar Hoja Produccion Vino'), ['action' => 'delete', $hojaProduccionVino->id], ['confirm' => __('Desea Eliminar', $hojaProduccionVino->id)]) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('Lista Hoja Produccion Vino'), ['action' => 'index']) ?> </li>
                    <li class="padding-action"><?= $this->Html->link(__('Nueva Hoja Produccion Vino'), ['action' => 'add']) ?> </li>
                </div>
            </div>
        </div>
    </div>
    <div class="col s12 m9">
        <div class="card darken-1">
            <div class="card-content black-text">
                <ul class="collection with-header">
                    <li class="collection-header">
                        <h4><?= h($hojaProduccionVino->id) ?></h4>
                    </li>
                    <li class="collection-item">
                        <?= __('Observacion Pro') ?>
                        <div class="secondary-content">
                            <?= h($hojaProduccionVino->observacion_pro) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Id') ?>
                        <div class="secondary-content">
                            <?= $this->Number->format($hojaProduccionVino->id) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Id Inv') ?>
                        <div class="secondary-content">
                            <?= $this->Number->format($hojaProduccionVino->id_inv) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Cant Fruta Klg') ?>
                        <div class="secondary-content">
                            <?= $this->Number->format($hojaProduccionVino->cant_fruta_klg) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Cant Agua Lts') ?>
                        <div class="secondary-content">
                            <?= $this->Number->format($hojaProduccionVino->cant_agua_lts) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Cant Azucar Klg') ?>
                        <div class="secondary-content">
                            <?= $this->Number->format($hojaProduccionVino->cant_azucar_klg) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Cant Levadura Grms') ?>
                        <div class="secondary-content">
                            <?= $this->Number->format($hojaProduccionVino->cant_levadura_grms) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Numero Procesos') ?>
                        <div class="secondary-content">
                            <?= $this->Number->format($hojaProduccionVino->numero_procesos) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Id Tra') ?>
                        <div class="secondary-content">
                            <?= $this->Number->format($hojaProduccionVino->id_tra) ?>
                        </div>
                    </li>
                    <li class="collection-item">
                        <?= __('Fecha Pro') ?>
                        <div class="secondary-content">
                            <?= h($hojaProduccionVino->fecha_pro) ?>
                        </div>
                    </li>
                </ul>
        </div>
    </div>
</div>
