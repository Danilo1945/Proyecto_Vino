<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AreaProduccion $areaProduccion
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Area Produccion'), ['action' => 'edit', $areaProduccion->id_area_pro]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Area Produccion'), ['action' => 'delete', $areaProduccion->id_area_pro], ['confirm' => __('Are you sure you want to delete # {0}?', $areaProduccion->id_area_pro)]) ?> </li>
        <li><?= $this->Html->link(__('List Area Produccion'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Area Produccion'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="areaProduccion view large-9 medium-8 columns content">
    <h3><?= h($areaProduccion->id_area_pro) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Num Procesos') ?></th>
            <td><?= h($areaProduccion->num_procesos) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Clase Vino') ?></th>
            <td><?= h($areaProduccion->clase_vino) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Observaciones Area Pro') ?></th>
            <td><?= h($areaProduccion->observaciones_area_pro) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Tra') ?></th>
            <td><?= h($areaProduccion->id_tra) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Inv') ?></th>
            <td><?= h($areaProduccion->id_inv) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Area Pro') ?></th>
            <td><?= $this->Number->format($areaProduccion->id_area_pro) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Brix Area Pro') ?></th>
            <td><?= $this->Number->format($areaProduccion->brix_area_pro) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Temperatura Vino') ?></th>
            <td><?= $this->Number->format($areaProduccion->temperatura_vino) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Uni Medi') ?></th>
            <td><?= $this->Number->format($areaProduccion->id_uni_medi) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha Elaboracion') ?></th>
            <td><?= h($areaProduccion->fecha_elaboracion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha Control') ?></th>
            <td><?= h($areaProduccion->fecha_control) ?></td>
        </tr>
    </table>
</div>
