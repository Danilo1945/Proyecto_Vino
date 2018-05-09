<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AreaProduccion[]|\Cake\Collection\CollectionInterface $areaProduccion
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
                    <li class="padding-action"><?= $this->Html->link(__('New Area Produccion'), ['action' => 'add']) ?></li>
                </div>
            </div>
        </div>
    </div>

    <div class="col s12 m9">
        <div class="card darken-1">
            <div class="card-content black-text">
                <span class="card-title green-text"><?= __('Area Produccion') ?></span>
                <table class="responsive-table">
                    <thead>
                        <tr>
                            <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('fecha_elaboracion') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('num_procesos') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('brix_area_pro') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('clase_vino') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('temperatura_vino') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('fecha_control') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('observaciones_area_pro') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('id_uni_medi') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('id_tra') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('id_inv') ?></th>
                            <th><?= __('Actions') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($areaProduccion as $areaProduccion): ?>
                        <tr>
                            <td><?= $this->Number->format($areaProduccion->id) ?></td>
                            <td><?= h($areaProduccion->fecha_elaboracion) ?></td>
                            <td><?= h($areaProduccion->num_procesos) ?></td>
                            <td><?= $this->Number->format($areaProduccion->brix_area_pro) ?></td>
                            <td><?= h($areaProduccion->clase_vino) ?></td>
                            <td><?= $this->Number->format($areaProduccion->temperatura_vino) ?></td>
                            <td><?= h($areaProduccion->fecha_control) ?></td>
                            <td><?= h($areaProduccion->observaciones_area_pro) ?></td>
                            <td><?= $this->Number->format($areaProduccion->id_uni_medi) ?></td>
                            <td><?= $this->Number->format($areaProduccion->id_tra) ?></td>
                            <td><?= $this->Number->format($areaProduccion->id_inv) ?></td>
                            <td>
                                <?= $this->Html->link('<i class="material-icons" title="'. __('View') . '" >zoom_in</i>', ['action' => 'view', $areaProduccion->id], ['escape' => false]) ?>
                                <?= $this->Html->link('<i class="material-icons" title="'. __('Edit') . '" >create</i>', ['action' => 'edit', $areaProduccion->id], ['escape' => false]) ?>
                                <?= $this->Form->postLink('<i class="material-icons" title="'. __('Delete') . '" >delete</i>', ['action' => 'delete', $areaProduccion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $areaProduccion->id), 'escape' => false]) ?>
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

        <p class="right"><?= $this->Paginator->counter(['format' => __('Page  of , showing  record(s) out of  total')]) ?></p>
    </div>
</div>
