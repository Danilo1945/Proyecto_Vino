<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Brix Entity
 *
 * @property int $id
 * @property float $contidad
 *
 * @property \App\Model\Entity\AreaProduccion[] $area_produccion
 * @property \App\Model\Entity\HojaProductoTerminado[] $hoja_producto_terminado
 */
class Brix extends Entity
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
        'contidad' => true,
        'area_produccion' => true,
        'hoja_producto_terminado' => true
    ];
}
