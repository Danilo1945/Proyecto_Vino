<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Catalogo Entity
 *
 * @property int $id
 * @property string $Descripcion
 * @property string|resource $Imagen
 */
class Catalogo extends Entity
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
        'Descripcion' => true,
        'Imagen' => true
    ];
}
