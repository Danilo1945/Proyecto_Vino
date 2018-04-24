<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AreaProduccion $areaProduccion
 */
?>
<div class="hide">
    <?= $this->layout = "Materialize.materialize"; ?>
</div>
<div class="row">
    <div class="col s12 m3">
        <div class="card darken-1">
            <div class="card-content white-text">
                <span class="card-title green-text">Actions</span>
                <div class="card-action">
                    <li class="padding-action"><?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $areaProduccion->id],
                            ['confirm' => __('Are you sure you want to delete # {0}?', $areaProduccion->id)]
                            )
                            ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('List Area Produccion'), ['action' => 'index']) ?></li>
                </div>
            </div>
        </div>
    </div>
    <div class="col s12 m9">
        <div class="card darken-1">
            <div class="card-content black-text">
                <?= $this->Form->create($areaProduccion) ?>
                <span class="card-title green-text"><?= __('Edit Area Produccion') ?></span>

                <div class="input-field">
                    <?= $this->Form->control('fecha_elaboracion', ['type' => 'text', 'class' => 'datepicker']) ?>
                </div>

                <div class="input-field">
                    <?= $this->Form->control('num_procesos') ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('brix_area_pro') ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('clase_vino') ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('temperatura_vino') ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('fecha_control', ['type' => 'text', 'class' => 'datepicker']) ?>
                </div>

                <div class="input-field">
                    <?= $this->Form->control('observaciones_area_pro') ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('id_uni_medi') ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('id_tra') ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('id_inv') ?>
                </div>
                <?= $this->Form->button(__('Submit'), ['class' => 'btn waves-effect waves-light']) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
