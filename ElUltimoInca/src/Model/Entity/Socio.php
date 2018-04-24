<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Socio Entity
 *
 * @property string $id_so
 * @property string $Nombres
 * @property string $Apellidos
 * @property string $Telefono
 * @property string $Direccion
 * @property string $Email
 */
class Socio extends Entity
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
        'Nombres' => true,
        'Apellidos' => true,
        'Telefono' => true,
        'Direccion' => true,
        'Email' => true
    ];
}
