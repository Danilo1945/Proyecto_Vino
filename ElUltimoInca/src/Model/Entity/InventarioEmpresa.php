<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * InventarioEmpresa Entity
 *
 * @property string $id_inv
 * @property string $nombre_art_inv
 * @property string $descripcion_inv
 * @property string $color_inv
 * @property int $id_item
 */
class InventarioEmpresa extends Entity
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
        'nombre_art_inv' => true,
        'descripcion_inv' => true,
        'color_inv' => true,
        'id_item' => true
    ];
}
