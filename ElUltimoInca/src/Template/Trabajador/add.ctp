<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Trabajador $trabajador
 */
?>
<div class="hide">
<<<<<<< HEAD
  
=======
   
>>>>>>> a3eecf72e2da675c4a4bd5526b1a4b29fe5802b5
</div>
<div class="row">
    <div class="col s12 m3">
        <div class="card darken-1" id="abajo_menu">
            <div class="card-content white-text" id="abajo_menu">
                <span class="card-title black-text" id="abajo_menu">Acciones</span>
                <div class="card-action" id="abajo_menu">
                    <li class="padding-action"><?= $this->Html->link(__('Lista de Trabajadores'), ['action' => 'index']) ?></li>
                </div>
            </div>
        </div>
    </div>
    <div class="col s12 m9">
        <div class="card darken-1" id="abajo_menu">
            <div class="card-content black-text" id="abajo_menu">
                <?= $this->Form->create($trabajador) ?>
                <span class="card-title green-text" id="abajo_menu"><?= __('Añadir Trabajador') ?></span>

                <div class="input-field">
                    <?= $this->Form->control('cedula') ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('Nombres_tra') ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('Apellidos_tra') ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('Telefono_tra') ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('Direccion_tra') ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('Email_tra') ?>
                </div>
                <?= $this->Form->button(__('Enviar'), ['class' => 'btn waves-effect waves-light']) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
