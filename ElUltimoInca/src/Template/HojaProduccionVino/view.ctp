<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\HojaProduccionVino $hojaProduccionVino
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Hoja Produccion Vino'), ['action' => 'edit', $hojaProduccionVino->id_hoja_pro]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Hoja Produccion Vino'), ['action' => 'delete', $hojaProduccionVino->id_hoja_pro], ['confirm' => __('Are you sure you want to delete # {0}?', $hojaProduccionVino->id_hoja_pro)]) ?> </li>
        <li><?= $this->Html->link(__('List Hoja Produccion Vino'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Hoja Produccion Vino'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="hojaProduccionVino view large-9 medium-8 columns content">
    <h3><?= h($hojaProduccionVino->id_hoja_pro) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id Inv') ?></th>
            <td><?= h($hojaProduccionVino->id_inv) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Observacion Pro') ?></th>
            <td><?= h($hojaProduccionVino->observacion_pro) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Tra') ?></th>
            <td><?= h($hojaProduccionVino->id_tra) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Hoja Pro') ?></th>
            <td><?= $this->Number->format($hojaProduccionVino->id_hoja_pro) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cant Fruta Klg') ?></th>
            <td><?= $this->Number->format($hojaProduccionVino->cant_fruta_klg) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cant Agua Lts') ?></th>
            <td><?= $this->Number->format($hojaProduccionVino->cant_agua_lts) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cant Azucar Klg') ?></th>
            <td><?= $this->Number->format($hojaProduccionVino->cant_azucar_klg) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cant Levadura Grms') ?></th>
            <td><?= $this->Number->format($hojaProduccionVino->cant_levadura_grms) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Numero Procesos') ?></th>
            <td><?= $this->Number->format($hojaProduccionVino->numero_procesos) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha Pro') ?></th>
            <td><?= h($hojaProduccionVino->fecha_pro) ?></td>
        </tr>
    </table>
</div>
