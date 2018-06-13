<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * HojaVenta Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenDate $fecha
 * @property int $trabajador_id
 * @property int $users_id
 * @property float $cantidad
 * @property float $precio_unitario
 * @property float $precio_total
 * @property string $estado_venta
 * @property float $valor_estado
 * @property string $observaciones
 *
 * @property \App\Model\Entity\Trabajador $trabajador
 * @property \App\Model\Entity\User $user
 */
class HojaVenta extends Entity
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
        'fecha' => true,
        'trabajador_id' => true,
        'users_id' => true,
        'cantidad' => true,
        'precio_unitario' => true,
        'precio_total' => true,
        'estado_venta' => true,
        'valor_estado' => true,
        'observaciones' => true,
        'trabajador' => true,
        'user' => true
    ];
}
