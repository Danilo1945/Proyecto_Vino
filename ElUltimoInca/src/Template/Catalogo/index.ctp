<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Catalogo[]|\Cake\Collection\CollectionInterface $catalogo
 */
?>

<div class="row">
    <div class="col s12 m3">
        <div class="card darken-1">
            <div class="card-content white-text">
                <span class="card-title black-text">Actions</span>
                <div class="card-action">
                    <li class="padding-action"><?= $this->Html->link(__('New Catalogo'), ['action' => 'add']) ?></li>
                </div>
            </div>
        </div>
    </div>

    <div class="col s12 m9">
        <div class="card darken-1">
            <div class="card-content black-text">
                <span class="card-title black-text"><?= __('Catalogo') ?></span>
                <table class="responsive-table">
                    <thead>
                        <tr class="color_encabezado" >
                            <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('Descripcion') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('id_pro_ter') ?></th>
                            <th><?= __('Actions') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($catalogo as $catalogo): ?>
                        <tr>
                            <td><?= $this->Number->format($catalogo->id) ?></td>
                            <td><?= h($catalogo->Descripcion) ?></td>
                            <td><?= $this->Number->format($catalogo->id_pro_ter) ?></td>
                            <td>
                                <?= $this->Html->link('<i class="material-icons co_buton_ver" title="'. __('View') . '" >zoom_in</i>', ['action' => 'view', $catalogo->id], ['escape' => false]) ?>
                                <?= $this->Html->link('<i class="material-icons co_buton_editar" title="'. __('Edit') . '" >create</i>', ['action' => 'edit', $catalogo->id], ['escape' => false]) ?>
                                <?= $this->Form->postLink('<i class="material-icons co_buton_eliminar" title="'. __('Delete') . '" >delete</i>', ['action' => 'delete', $catalogo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $catalogo->id), 'escape' => false]) ?>
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
