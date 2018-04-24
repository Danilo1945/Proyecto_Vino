<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * HojaProduccionVino Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenDate $fecha_pro
 * @property int $id_inv
 * @property float $cant_fruta_klg
 * @property float $cant_agua_lts
 * @property float $cant_azucar_klg
 * @property float $cant_levadura_grms
 * @property float $numero_procesos
 * @property string $observacion_pro
 * @property int $id_tra
 */
class HojaProduccionVino extends Entity
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
        'fecha_pro' => true,
        'id_inv' => true,
        'cant_fruta_klg' => true,
        'cant_agua_lts' => true,
        'cant_azucar_klg' => true,
        'cant_levadura_grms' => true,
        'numero_procesos' => true,
        'observacion_pro' => true,
        'id_tra' => true
    ];
}
