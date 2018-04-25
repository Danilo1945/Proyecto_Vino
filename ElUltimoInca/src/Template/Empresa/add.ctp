<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Empresa $empresa
 */
?>
<div class="hide">
</div>
<div class="row">
    <div class="col s12 m3">
        <div class="card darken-1" id="abajo_menu">
            <div class="card-content white-text">
                    <span class="card-title green-text">ACCIONES</span>
                <div class="card-action" id="abajo_menu">
                    <li class="padding-action"><?= $this->Html->link(__('LISTA DE EMPRESAS'), ['action' => 'index']) ?></li>
                </div>
            </div>
        </div>
    </div>
    <div class="col s12 m9">
        <div class="card darken-1">
            <div class="card-content black-text">
                <?= $this->Form->create($empresa) ?>
                <span class="card-title green-text"><?= __('AGREGAR EMPRESA') ?></span>

                <div class="input-field">
                    <?= $this->Form->control('nombre') ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('direccion') ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('email', ['type' => 'email', 'class' => 'validate']) ?>
                </div>
                <?= $this->Form->button(__('AGREGAR'), ['class' => 'btn waves-effect waves-light']) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
