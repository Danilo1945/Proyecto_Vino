<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Proveedor $proveedor
 */
?>
<div class="hide">

</div>
<div class="row">
    <div class="col s12 m3">
        <div class="card darken-1"id="abajo_menu">
            <div class="card-content white-text" id="abajo_menu">
                <span class="card-title green-text">Acciones</span>
                <div class="card-action"id="abajo_menu">
                    <li class="padding-action"><?= $this->Html->link(__('Lista Proveedor'), ['action' => 'index']) ?></li>
                </div>
            </div>
        </div>
    </div>
    <div class="col s12 m9">
        <div class="card darken-1" id="abajo_menu">
            <div class="card-content black-text"id="abajo_menu">
                <?= $this->Form->create($proveedor) ?>
                <span class="card-title green-text"><?= __('Añadir Proveedor') ?></span>

                <div class="input-field">
                    <?= $this->Form->control('cedula') ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('nombres_pro') ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('apellidos_pro') ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('telefono_pro') ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('email_pro') ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('id_emp') ?>
                </div>
                <?= $this->Form->button(__('Submit'), ['class' => 'btn waves-effect waves-light']) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
