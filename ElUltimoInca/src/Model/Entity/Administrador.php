<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Administrador Entity
 *
 * @property int $id_adm
 * @property string $usuario_adm
 * @property string $contrasenia_adm
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
        'usuario_adm' => true,
        'contrasenia_adm' => true
    ];
}
