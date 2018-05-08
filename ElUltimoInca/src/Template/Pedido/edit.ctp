<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pedido $pedido
 */
?>
<div class="hide">
  
</div>
<div class="row">
    <div class="col s12 m3">
        <div class="card darken-1" id="abajo_menu">
            <div class="card-content white-text" id="abajo_menu">
                <span class="card-title green-text">Acciones</span>
                <div class="card-action">
                    <li class="padding-action"><?= $this->Form->postLink(
                            __('Eliminar'),
                            ['Accion' => 'Eliminar', $pedido->id],
                            ['confirm' => __('Are you sure you want to delete # {0}?', $pedido->id)]
                            )
                            ?></li>
                    <li class="padding-action"><?= $this->Html->link(__('Lista Pedido'), ['action' => 'index']) ?></li>
                </div>
            </div>
        </div>
    </div>
    <div class="col s12 m9">
        <div class="card darken-1" id="abajo_menu">
            <div class="card-content black-text" id="abajo_menu">
                <?= $this->Form->create($pedido) ?>
                <div class="center"> <span class="card-title black-text"><?= __('Editar Pedido') ?></span>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('Fecha', ['type' => 'text', 'class' => 'datepicker']) ?>
                </div>

                <div class="input-field">
                    <?= $this->Form->control('Cantidad') ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('unidad_medida') ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('Idcliente') ?>
                </div>
                <div class="input-field">
                    <?= $this->Form->control('id_pro_ter') ?>
                </div>
                <?= $this->Form->button(__('Editar'), ['class' => 'btn waves-effect waves-light']) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
