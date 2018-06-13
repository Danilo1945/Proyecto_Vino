<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Trabajador $trabajador
 */
?>
<div class="hide">

</div>
<div class="row">
    <div class="col s12 m3">
        <div class="card darken-1">
            <div class="card-content white-text">
                <span class="card-title green-text">Actions</span>
                <div class="card-action">
                    <li class="padding-action"><?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $trabajador->id],
                            ['confirm' => __('Are you sure you want to delete # {0}?', $trabajador->id)]
                            )
                            ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('List Trabajador'), ['action' => 'index']) ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('List Area Produccion'), ['controller' => 'AreaProduccion', 'action' => 'index']) ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('New Area Produccion'), ['controller' => 'AreaProduccion', 'action' => 'add']) ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('List Compra Mat Pri'), ['controller' => 'CompraMatPri', 'action' => 'index']) ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('New Compra Mat Pri'), ['controller' => 'CompraMatPri', 'action' => 'add']) ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('List Hoja Produccion Vino'), ['controller' => 'HojaProduccionVino', 'action' => 'index']) ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('New Hoja Produccion Vino'), ['controller' => 'HojaProduccionVino', 'action' => 'add']) ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('List Hoja Producto Terminado'), ['controller' => 'HojaProductoTerminado', 'action' => 'index']) ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('New Hoja Producto Terminado'), ['controller' => 'HojaProductoTerminado', 'action' => 'add']) ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('List Hoja Ventas'), ['controller' => 'HojaVentas', 'action' => 'index']) ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('New Hoja Venta'), ['controller' => 'HojaVentas', 'action' => 'add']) ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('List Pedidos'), ['controller' => 'Pedidos', 'action' => 'index']) ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('New Pedido'), ['controller' => 'Pedidos', 'action' => 'add']) ?></li>
                </div>
            </div>
        </div>
    </div>
    <div class="col s12 m9">
        <div class="card darken-1">
            <div class="card-content black-text">
                <?= $this->Form->create($trabajador) ?>
                <span class="card-title green-text"><?= __('Edit Trabajador') ?></span>

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
                <?= $this->Form->button(__('Submit'), ['class' => 'btn waves-effect waves-light']) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
