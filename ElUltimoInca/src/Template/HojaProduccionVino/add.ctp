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
        <div class="card darken-1"id="abajo_menu">
            <div class="card-content white-text">
                <span class="card-title green-text">Acciones</span>
                <div class="card-action"id="abajo_menu">
                    <li class="padding-action"><?= $this->Html->link(__('Lista de Hoja de Produccion Vino'), ['action' => 'index']) ?></li>
                </div>
            </div>
        </div>
    </div>
    <div class="col s12 m9">
        <div class="card darken-1">
            <div class="card-content black-text">
                <?= $this->Form->create($hojaProduccionVino) ?>
                <span class="card-title green-text"><?= __('Add Hoja Produccion Vino') ?></span>

                <div class="input-field">
                    <?= $this->Form->control('fecha_pro', ['type' => 'text', 'class' => 'datepicker']) ?>
                </div>

                <div class="input-field">
                    <?= $this->Form->control('id_inv') ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('cant_fruta_klg') ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('cant_agua_lts') ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('cant_azucar_klg') ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('cant_levadura_grms') ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('numero_procesos') ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('observacion_pro') ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('id_tra') ?>
                </div>
                <?= $this->Form->button(__('Submit'), ['class' => 'btn waves-effect waves-light']) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
