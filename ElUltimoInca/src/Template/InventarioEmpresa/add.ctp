<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\InventarioEmpresa $inventarioEmpresa
 */
?>
<div class="hide">
   
</div>
<div class="row">
    <div class="col s12 m3">
        <div class="card darken-1" id="abajo_menu">
            <div class="card-content white-text" id="abajo_menu">
                <span class="card-title black-text" id="abajo_menu">Acciones</span>
                <div class="card-action" id="abajo_menu">
                    <li class="padding-action"><?= $this->Html->link(__('Lista del Inventario Empresa'), ['action' => 'index']) ?></li>
                </div>
            </div>
        </div>
    </div>
    <div class="col s12 m9">
        <div class="card darken-1" id="abajo_menu">
            <div class="card-content black-text" id="abajo_menu">
                <?= $this->Form->create($inventarioEmpresa) ?>
                <span class="card-title black-text" id="abajo_menu"><?= __('Añadir Inventario de Empresa') ?></span>

                <div class="input-field">
                    <?= $this->Form->control('nombre_art_inv') ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('descripcion_inv') ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('color_inv') ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('id_item') ?>
                </div>
                <?= $this->Form->button(__('Enviar'), ['class' => 'btn waves-effect waves-light']) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
