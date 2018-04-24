<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * AreaProduccion Entity
 *
 * @property int $id_area_pro
 * @property \Cake\I18n\FrozenDate $fecha_elaboracion
 * @property string $num_procesos
 * @property int $brix_area_pro
 * @property string $clase_vino
 * @property int $temperatura_vino
 * @property \Cake\I18n\FrozenDate $fecha_control
 * @property string $observaciones_area_pro
 * @property int $id_uni_medi
 * @property string $id_tra
 * @property string $id_inv
 */
class AreaProduccion extends Entity
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
        'fecha_elaboracion' => true,
        'num_procesos' => true,
        'brix_area_pro' => true,
        'clase_vino' => true,
        'temperatura_vino' => true,
        'fecha_control' => true,
        'observaciones_area_pro' => true,
        'id_uni_medi' => true,
        'id_tra' => true,
        'id_inv' => true
    ];
}
