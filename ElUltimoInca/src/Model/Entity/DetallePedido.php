<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * DetallePedido Entity
 *
 * @property int $id
 * @property float $cantidad
 * @property string $detalle
 * @property int $id_pedidos
 * @property int $id_unidad_medida
 * @property int $id_produccion_total
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
        'id_pedidos' => true,
        'id_unidad_medida' => true,
        'id_produccion_total' => true
    ];
}
