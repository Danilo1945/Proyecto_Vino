<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * MateriaPrima Entity
 *
 * @property int $id
 * @property string $nombre_mat_pri
 * @property string $descripcion_mat_pri
 * @property int $unm_id
 *
 * @property \App\Model\Entity\UnidadMedida $unidad_medida
 */
class MateriaPrima extends Entity
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
        'nombre_mat_pri' => true,
        'descripcion_mat_pri' => true,
        'unm_id' => true,
        'unidad_medida' => true
    ];
}
