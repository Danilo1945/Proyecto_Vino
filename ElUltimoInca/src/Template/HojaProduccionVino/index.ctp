<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\HojaProduccionVino[]|\Cake\Collection\CollectionInterface $hojaProduccionVino
 */
?>
<div class="hide">
   
</div>
<div class="row">
    <div class="col s12 m3">
        <div class="card darken-1">
            <div class="card-content white-text">
                <span class="card-title green-text">Acciones</span>
                <div class="card-action">
                    <li class="padding-action"><?= $this->Html->link(__('Nueva Hoja de Produccion Vino'), ['acciones' => 'add']) ?></li>
                </div>
            </div>
        </div>
    </div>

    <div class="col s12 m9">
        <div class="card darken-1">
            <div class="card-content black-text">
                <span class="card-title green-text"><?= __('Hoja Produccion Vino') ?></span>
                <table class="responsive-table">
                    <thead>
                        <tr>
                            <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('fecha_pro') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('id_inv') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('cant_fruta_klg') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('cant_agua_lts') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('cant_azucar_klg') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('cant_levadura_grms') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('numero_procesos') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('observacion_pro') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('id_tra') ?></th>
                            <th><?= __('Acciones') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($hojaProduccionVino as $hojaProduccionVino): ?>
                        <tr>
                            <td><?= $this->Number->format($hojaProduccionVino->id) ?></td>
                            <td><?= h($hojaProduccionVino->fecha_pro) ?></td>
                            <td><?= $this->Number->format($hojaProduccionVino->id_inv) ?></td>
                            <td><?= $this->Number->format($hojaProduccionVino->cant_fruta_klg) ?></td>
                            <td><?= $this->Number->format($hojaProduccionVino->cant_agua_lts) ?></td>
                            <td><?= $this->Number->format($hojaProduccionVino->cant_azucar_klg) ?></td>
                            <td><?= $this->Number->format($hojaProduccionVino->cant_levadura_grms) ?></td>
                            <td><?= $this->Number->format($hojaProduccionVino->numero_procesos) ?></td>
                            <td><?= h($hojaProduccionVino->observacion_pro) ?></td>
                            <td><?= $this->Number->format($hojaProduccionVino->id_tra) ?></td>
                            <td>
                                <?= $this->Html->link('<i class="material-icons" title="'. __('Nuevo') . '" >zoom_in</i>', ['action' => 'view', $hojaProduccionVino->id], ['escape' => false]) ?>
                                <?= $this->Html->link('<i class="material-icons" title="'. __('Editar') . '" >create</i>', ['action' => 'edit', $hojaProduccionVino->id], ['escape' => false]) ?>
                                <?= $this->Form->postLink('<i class="material-icons" title="'. __('Eliminar') . '" >delete</i>', ['action' => 'delete', $hojaProduccionVino->id], ['confirm' => __('Desea Eliminar', $hojaProduccionVino->id), 'escape' => false]) ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="center">
            <ul class="pagination">
                <?= $this->Paginator->first('<i class="material-icons">first_page</i>', ['class' => 'waves-effect', 'escape' => false]) ?>
                <?= $this->Paginator->prev('<i class="material-icons">chevron_left</i>', ['class' => 'waves-effect', 'escape' => false]) ?>
                <?= $this->Paginator->numbers() ?>
                <?= $this->Paginator->next('<i class="material-icons">chevron_right</i>', ['class' => 'waves-effect', 'escape' => false]) ?>
                <?= $this->Paginator->last('<i class="material-icons">last_page</i>', ['class' => 'waves-effect', 'escape' => false]) ?>
            </ul>
        </div>

        <p class="right"><?= $this->Paginator->counter(['format' => __('Lista Produccion Vino')]) ?></p>
    </div>
</div>
