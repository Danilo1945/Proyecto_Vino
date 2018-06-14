<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ProduccionTotal Entity
 *
 * @property int $id
 * @property string $nombre_producto
 * @property int $valor_total_producto
 * @property int $valor_ultima_suma
 */
class ProduccionTotal extends Entity
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
        'nombre_producto' => true,
        'valor_total_producto' => true,
        'valor_ultima_suma' => true
    ];
}
