<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProductoTerminado $productoTerminado
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Producto Terminado'), ['action' => 'edit', $productoTerminado->id_pro_ter]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Producto Terminado'), ['action' => 'delete', $productoTerminado->id_pro_ter], ['confirm' => __('Are you sure you want to delete # {0}?', $productoTerminado->id_pro_ter)]) ?> </li>
        <li><?= $this->Html->link(__('List Producto Terminado'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Producto Terminado'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="productoTerminado view large-9 medium-8 columns content">
    <h3><?= h($productoTerminado->id_pro_ter) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Lote Pro Ter') ?></th>
            <td><?= h($productoTerminado->lote_pro_ter) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cantidad Pro Ter') ?></th>
            <td><?= h($productoTerminado->cantidad_pro_ter) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Observaciones') ?></th>
            <td><?= h($productoTerminado->observaciones) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Mat Prim') ?></th>
            <td><?= h($productoTerminado->id_mat_prim) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Tra') ?></th>
            <td><?= h($productoTerminado->id_tra) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Pro Ter') ?></th>
            <td><?= $this->Number->format($productoTerminado->id_pro_ter) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pasteurizacion') ?></th>
            <td><?= $this->Number->format($productoTerminado->pasteurizacion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Valor Cantidad Pro') ?></th>
            <td><?= $this->Number->format($productoTerminado->valor_cantidad_pro) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Brix') ?></th>
            <td><?= $this->Number->format($productoTerminado->brix) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Valor Etiqueta') ?></th>
            <td><?= $this->Number->format($productoTerminado->valor_etiqueta) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Valor Corcho') ?></th>
            <td><?= $this->Number->format($productoTerminado->valor_corcho) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Valor Capuchon') ?></th>
            <td><?= $this->Number->format($productoTerminado->valor_capuchon) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Num Cinta Sri') ?></th>
            <td><?= $this->Number->format($productoTerminado->num_cinta_sri) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Num Cinta Inca') ?></th>
            <td><?= $this->Number->format($productoTerminado->num_cinta_inca) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha') ?></th>
            <td><?= h($productoTerminado->fecha) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha Elb') ?></th>
            <td><?= h($productoTerminado->fecha_elb) ?></td>
        </tr>
    </table>
</div>
