<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UnidadMedida[]|\Cake\Collection\CollectionInterface $unidadMedida
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
                    <li class="padding-action"><?= $this->Html->link(__('Nueva Unidad de Medida'), ['action' => 'add']) ?></li>
                </div>
            </div>
            
            
            
            
            
            
        </div>
    </div>

    <div class="col s12 m9">
        <div class="card darken-1">
            <div class="card-content black-text">
                <span class="card-title green-text"><?= __('Unidad de Medida') ?></span>
                <table class="responsive-table">
                    <thead>
                        <tr>
                            <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('Nombre U/M') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('Detalle U/M') ?></th>
                            <th><?= __('Actions') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($unidadMedida as $unidadMedida): ?>
                        <tr>
                            <td><?= $this->Number->format($unidadMedida->id) ?></td>
                            <td><?= h($unidadMedida->nombre_umed) ?></td>
                            <td><?= h($unidadMedida->detalle_umed) ?></td>
                            <td>
                                <?= $this->Html->link('<i class="material-icons" title="'. __('Ver') . '" >zoom_in</i>', ['action' => 'view', $unidadMedida->id], ['escape' => false]) ?>
                                <?= $this->Html->link('<i class="material-icons" title="'. __('Editar') . '" >create</i>', ['action' => 'edit', $unidadMedida->id], ['escape' => false]) ?>
                                <?= $this->Form->postLink('<i class="material-icons" title="'. __('Eliminar') . '" >delete</i>', ['action' => 'delete', $unidadMedida->id], ['confirm' => __('Esta seguro que quiere borrarlo # {0}?', $unidadMedida->id), 'escape' => false]) ?>
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
