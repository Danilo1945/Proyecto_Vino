<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * CompraMatPri Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenDate $fecha_mat
 * @property float $precio_u_mat
 * @property float $precio_tot_mat
 * @property string $observaciones_mat
 * @property int $id_pro
 * @property int $id_tra
 * @property int $id_mat_prim
 */
class CompraMatPri extends Entity
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
        'fecha_mat' => true,
        'precio_u_mat' => true,
        'precio_tot_mat' => true,
        'observaciones_mat' => true,
        'id_pro' => true,
        'id_tra' => true,
        'id_mat_prim' => true
    ];
}
