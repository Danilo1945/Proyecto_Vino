<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CompraMatPri $compraMatPri
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $compraMatPri->id_cmp],
                ['confirm' => __('Are you sure you want to delete # {0}?', $compraMatPri->id_cmp)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Compra Mat Pri'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="compraMatPri form large-9 medium-8 columns content">
    <?= $this->Form->create($compraMatPri) ?>
    <fieldset>
        <legend><?= __('Edit Compra Mat Pri') ?></legend>
        <?php
            echo $this->Form->control('fecha_mat', ['empty' => true]);
            echo $this->Form->control('precio_u_mat');
            echo $this->Form->control('precio_tot_mat');
            echo $this->Form->control('observaciones_mat');
            echo $this->Form->control('id_pro');
            echo $this->Form->control('id_tra');
            echo $this->Form->control('id_mat_prim');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
