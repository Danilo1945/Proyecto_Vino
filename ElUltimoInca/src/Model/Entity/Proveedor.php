<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Proveedor Entity
 *
 * @property string $id_pro
 * @property string $nombres_pro
 * @property string $apellidos_pro
 * @property string $telefono_pro
 * @property string $email_pro
 * @property int $id_emp
 */
class Proveedor extends Entity
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
        'nombres_pro' => true,
        'apellidos_pro' => true,
        'telefono_pro' => true,
        'email_pro' => true,
        'id_emp' => true
    ];
}
