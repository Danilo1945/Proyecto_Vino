<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DetallePedido $detallePedido
 */

$this->set('bakeEntities', array (
  0 => 'DetallePedidos',
  1 => 'Pedidos',
  2 => 'UnidadMedida',
  3 => 'ProduccionTotal',
));
?>
<div class="container" id="detalle_pedidos_add">
    <?= $this->Form->create($detallePedido) ?>
    <fieldset>
        <legend><?= __('Add Detalle Pedido') ?></legend>
        <?php
            echo $this->Form->control('cantidad');
            echo $this->Form->control('detalle');
            echo $this->Form->control('valor_unitario');
            echo $this->Form->control('valor_total');
            echo $this->Form->control('pedidos_id', ['options' => $pedidos, 'empty' => true]);
            echo $this->Form->control('unidad_medida_id', ['options' => $unidadMedida, 'empty' => true]);
            echo $this->Form->control('produccion_total_id', ['options' => $produccionTotal, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
