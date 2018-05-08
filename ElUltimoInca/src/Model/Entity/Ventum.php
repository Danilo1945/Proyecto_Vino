<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Ventum Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenDate $fecha_ven
 * @property int $id_tra
 * @property int $Idcliente
 * @property int $id_pro_ter
 * @property float $precio_uni
 * @property float $precio_total
 * @property string $estado_cuenta
 * @property float $valor_donacion_vent
 * @property string $observaciones_ven
 */
class Ventum extends Entity
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
        'id_tra' => true,
        'Idcliente' => true,
        'id_pro_ter' => true,
        'precio_uni' => true,
        'precio_total' => true,
        'estado_cuenta' => true,
        'valor_donacion_vent' => true,
        'observaciones_ven' => true
    ];
}
