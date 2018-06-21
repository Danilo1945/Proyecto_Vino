<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MateriaPrima $materiaPrima
 */

$this->set('bakeEntities', array (
  0 => 'MateriaPrima',
  1 => 'CompraMatPri',
  2 => 'Prevee',
));
?>
<div class="container"  id="materia_prima_view">
    <div class="float-right">
        <?= $this->Html->button(
        '<i class="fa fa-pencil fa-lg pr-3"></i> ' . __('Editar'),
        ['action' => 'edit', $materiaPrima->id],
        ['class' => ['mr-3'], 'escape' => false, 'size' => 'sm']); ?>

        <?= $this->Form->postLink('<i class="fa fa-trash fa-lg pr-3"></i>'. __('Eliminar'), ['action' => 'delete', $materiaPrima->id], [
        'escape' => false,
        'class' => 'btn btn-primary btn-sm',
        'confirm' => __('Estas seguro que quieres borrarlo', $materiaPrima->id)]) ?>
    </div>

    <h3 class="mb-3"><?= h($materiaPrima->id) ?></h3>
    <dl class="row">
        <dt class="col-sm-3"><?= __('Nombre Mat Pri') ?></dt>
        <dd class="col-sm-9"><?= h($materiaPrima->nombre_mat_pri) ?></dd>
        <dt class="col-sm-3"><?= __('Descripcion Mat Pri') ?></dt>
        <dd class="col-sm-9"><?= h($materiaPrima->descripcion_mat_pri) ?></dd>
        <dt class="col-sm-3"><?= __('Id') ?></dt>
        <dd class="col-sm-9"><?= $this->Number->format($materiaPrima->id) ?></dd>
        <dt class="col-sm-3"><?= __('Contidad') ?></dt>
        <dd class="col-sm-9"><?= $this->Number->format($materiaPrima->contidad) ?></dd>
    </dl>
    <h4><?= __('Related Compra Mat Pri') ?></h4>
    <?php if (!empty($materiaPrima->compra_mat_pri)): ?>
    <div class=" table-responsive">
        <table class="table table-sm table-striped table-hover">
            <thead>
                <tr>
                        <th scope="col"><?= __('Id') ?></th>
                        <th scope="col"><?= __('Fecha Mat') ?></th>
                        <th scope="col"><?= __('Precio U Mat') ?></th>
                        <th scope="col"><?= __('Precio Tot Mat') ?></th>
                        <th scope="col"><?= __('Observaciones Mat') ?></th>
                        <th scope="col"><?= __('Proveedor Id') ?></th>
                        <th scope="col"><?= __('Trabajador Id') ?></th>
                        <th scope="col"><?= __('Id Mat Prim') ?></th>
                        <th scope="col"><?= __('Materia Prima Id') ?></th>
                        <th scope="col"><?= __('Unidad Medida Id') ?></th>
                        <th scope="col" class="actions"><?= __('Acciones') ?></th>
                </tr>
            </thead>
            <?php foreach ($materiaPrima->compra_mat_pri as $compraMatPri): ?>
            <tr>
                <td><?= h($compraMatPri->id) ?></td>
                <td><?= h($compraMatPri->fecha_mat) ?></td>
                <td><?= h($compraMatPri->precio_u_mat) ?></td>
                <td><?= h($compraMatPri->precio_tot_mat) ?></td>
                <td><?= h($compraMatPri->observaciones_mat) ?></td>
                <td><?= h($compraMatPri->proveedor_id) ?></td>
                <td><?= h($compraMatPri->trabajador_id) ?></td>
                <td><?= h($compraMatPri->id_mat_prim) ?></td>
                <td><?= h($compraMatPri->materia_prima_id) ?></td>
                <td><?= h($compraMatPri->unidad_medida_id) ?></td>
                <td class="text-right">
                    <?= $this->Html->link(null, ['controller' => 'CompraMatPri', 'action' => 'Nuevo', $compraMatPri->id], ['class' => 'btn btn-primary fa fa-eye p-1 mx-1']) ?>
                            <?= $this->Html->link(null, ['controller' => 'CompraMatPri', 'action' => 'Editar', $compraMatPri->id], ['class' => 'btn btn-primary fa fa-pencil p-1 mx-1']) ?>
                            <?= $this->Form->postLink(null, ['controller' => 'CompraMatPri', 'action' => 'Eliminar', $compraMatPri->id], [
                    'confirm' => __('Estas seguro que quieres borrarlo', $compraMatPri->id),
                    'class' => 'btn btn-primary fa fa-trash p-1 mx-1'
                    ]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <h4><?= __('Related Prevee') ?></h4>
    <?php if (!empty($materiaPrima->prevee)): ?>
    <div class=" table-responsive">
        <table class="table table-sm table-striped table-hover">
            <thead>
                <tr>
                        <th scope="col"><?= __('Id') ?></th>
                        <th scope="col"><?= __('Proveedor Id') ?></th>
                        <th scope="col"><?= __('Materia Prima Id') ?></th>
                        <th scope="col" class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <?php foreach ($materiaPrima->prevee as $prevee): ?>
            <tr>
                <td><?= h($prevee->id) ?></td>
                <td><?= h($prevee->proveedor_id) ?></td>
                <td><?= h($prevee->materia_prima_id) ?></td>
                <td class="text-right">
                    <?= $this->Html->link(null, ['controller' => 'Prevee', 'action' => 'Nuevo', $prevee->id], ['class' => 'btn btn-primary fa fa-eye p-1 mx-1']) ?>
                            <?= $this->Html->link(null, ['controller' => 'Prevee', 'action' => 'Editar', $prevee->id], ['class' => 'btn btn-primary fa fa-pencil p-1 mx-1']) ?>
                            <?= $this->Form->postLink(null, ['controller' => 'Prevee', 'action' => 'Eliminar', $prevee->id], [
                    'confirm' => __('Estas seguro que quieres borrarlo', $prevee->id),
                    'class' => 'btn btn-primary fa fa-trash p-1 mx-1'
                    ]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>

</div>