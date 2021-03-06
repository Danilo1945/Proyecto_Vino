<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Cliente Entity
 *
 * @property int $id
 * @property string $Cedula
 * @property string $Nombres
 * @property string $Apellidos
 * @property string $Telefono
 * @property string $Direccion
 * @property string $Email
 * @property string $user
 * @property string $password
 */
class Cliente extends Entity
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
        'Cedula' => true,
        'Nombres' => true,
        'Apellidos' => true,
        'Telefono' => true,
        'Direccion' => true,
        'Email' => true,
        'user' => true,
        'password' => true
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];
}
