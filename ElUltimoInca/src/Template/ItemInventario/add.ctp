<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ItemInventario $itemInventario
 */

$this->set('bakeEntities', array (
  0 => 'ItemInventario',
  1 => 'InventarioEmpresa',
));
?>
<div class="container" id="item_inventario_add">
    <?= $this->Form->create($itemInventario) ?>
    <fieldset>
        <legend><?= __('Add Item Inventario') ?></legend>
        <?php
            echo $this->Form->control('nom_item');
            echo $this->Form->control('detalle_item');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
