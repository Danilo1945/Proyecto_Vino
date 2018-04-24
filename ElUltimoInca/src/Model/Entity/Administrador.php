<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Administrador Entity
 *
 * @property int $Id_adm
 * @property string $user
 * @property string $password
 * @property string $Rol
 */
class Administrador extends Entity
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
        'user' => true,
        'password' => true,
        'Rol' => true
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
