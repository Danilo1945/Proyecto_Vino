<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProductoTerminado $productoTerminado
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Producto Terminado'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="productoTerminado form large-9 medium-8 columns content">
    <?= $this->Form->create($productoTerminado) ?>
    <fieldset>
        <legend><?= __('Add Producto Terminado') ?></legend>
        <?php
            echo $this->Form->control('fecha', ['empty' => true]);
            echo $this->Form->control('pasteurizacion');
            echo $this->Form->control('fecha_elb', ['empty' => true]);
            echo $this->Form->control('lote_pro_ter');
            echo $this->Form->control('cantidad_pro_ter');
            echo $this->Form->control('valor_cantidad_pro');
            echo $this->Form->control('brix');
            echo $this->Form->control('valor_etiqueta');
            echo $this->Form->control('valor_corcho');
            echo $this->Form->control('valor_capuchon');
            echo $this->Form->control('num_cinta_sri');
            echo $this->Form->control('num_cinta_inca');
            echo $this->Form->control('observaciones');
            echo $this->Form->control('id_mat_prim');
            echo $this->Form->control('id_tra');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
