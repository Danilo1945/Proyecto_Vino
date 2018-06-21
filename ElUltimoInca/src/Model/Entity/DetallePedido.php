<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * DetallePedido Entity
 *
 * @property int $id
 * @property float $cantidad
 * @property string $detalle
 * @property float $valor_unitario
 * @property float $valor_total
 * @property int $pedidos_id
 * @property int $unidad_medida_id
 * @property int $produccion_total_id
 *
 * @property \App\Model\Entity\Pedido $pedido
 * @property \App\Model\Entity\UnidadMedida $unidad_medida
 * @property \App\Model\Entity\ProduccionTotal $produccion_total
 */
class DetallePedido extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'cantidad' => true,
        'detalle' => true,
        'valor_unitario' => true,
        'valor_total' => true,
        'pedidos_id' => true,
        'unidad_medida_id' => true,
        'produccion_total_id' => true,
        'pedido' => true,
        'unidad_medida' => true,
        'produccion_total' => true
    ];
}
