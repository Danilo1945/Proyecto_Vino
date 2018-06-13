<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Pedido Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenDate $fecha_ven
 * @property int $trabajador_id
 * @property int $users_id
 * @property string $estado_cuenta
 * @property float $precio_uni
 * @property float $precio_total
 * @property string $observaciones_ven
 *
 * @property \App\Model\Entity\Trabajador $trabajador
 * @property \App\Model\Entity\User $user
 */
class Pedido extends Entity
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
        'fecha_ven' => true,
        'trabajador_id' => true,
        'users_id' => true,
        'estado_cuenta' => true,
        'precio_uni' => true,
        'precio_total' => true,
        'observaciones_ven' => true,
        'trabajador' => true,
        'user' => true
    ];
}
