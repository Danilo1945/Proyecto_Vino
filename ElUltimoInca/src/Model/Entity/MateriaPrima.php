<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * MateriaPrima Entity
 *
 * @property string $id_mat_prim
 * @property string $nombre_mat_pri
 * @property string $descripcion_mat_pri
 * @property int $id_uni_medi
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
        'id_uni_medi' => true
    ];
}
