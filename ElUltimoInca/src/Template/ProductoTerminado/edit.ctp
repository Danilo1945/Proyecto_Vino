<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProductoTerminado $productoTerminado
 */
?>
<div class="hide">
<<<<<<< HEAD
    
=======
   
>>>>>>> e258ca626eab3f6a502cf168d403504f3987475b
</div>
<div class="row">
    <div class="col s12 m3">
        <div class="card darken-1"id="abajo_menu">
            <div class="card-content white-text"id="abajo_menu">
                <span class="card-title green-text">Acciones</span>
                <div class="card-action">
                    <li class="padding-action"><?= $this->Form->postLink(
                            __('Eliminar'),
                            ['accion' => 'eliminar', $productoTerminado->id],
                            ['confirm' => __('Are you sure you want to delete # {0}?', $productoTerminado->id)]
                            )
                            ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('Lista de Producto Terminado'), ['action' => 'index']) ?></li>
                </div>
            </div>
        </div>
    </div>
    <div class="col s12 m9">
        <div class="card darken-1">
            <div class="card-content black-text">
                <?= $this->Form->create($productoTerminado) ?>
                <span class="card-title green-text"><?= __('Editar Producto Terminado') ?></span>

                <div class="input-field">
                    <?= $this->Form->control('fecha', ['type' => 'text', 'class' => 'datepicker']) ?>
                </div>

                <div class="input-field">
                    <?= $this->Form->control('pasteurizacion') ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('fecha_elb', ['type' => 'text', 'class' => 'datepicker']) ?>
                </div>

                <div class="input-field">
                    <?= $this->Form->control('lote_pro_ter') ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('cantidad_pro_ter') ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('valor_cantidad_pro') ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('brix') ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('valor_etiqueta') ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('valor_corcho') ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('valor_capuchon') ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('num_cinta_sri') ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('num_cinta_inca') ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('observaciones') ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('id_mat_prim') ?>
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
