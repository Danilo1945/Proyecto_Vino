<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Salida Entity
 *
 * @property int $id_sal
 * @property \Cake\I18n\FrozenDate $fecha_sal
 * @property float $saldo_sal
 * @property float $ingreso_sal
 * @property float $egreso_sal
 * @property float $donacion_sal
 * @property float $devolucion_sal
 * @property float $saldo_total
 * @property string $observaciones_sal
 */
class Salida extends Entity
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
        'fecha_sal' => true,
        'saldo_sal' => true,
        'ingreso_sal' => true,
        'egreso_sal' => true,
        'donacion_sal' => true,
        'devolucion_sal' => true,
        'saldo_total' => true,
        'observaciones_sal' => true
    ];
}
