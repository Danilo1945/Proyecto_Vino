<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Prevee Entity
 *
 * @property int $id
 * @property int $proveedor_id
 * @property int $materia_prima_id
 *
 * @property \App\Model\Entity\Proveedor $proveedor
 * @property \App\Model\Entity\MateriaPrima $materia_prima
 */
class Prevee extends Entity
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
        'proveedor_id' => true,
        'materia_prima_id' => true,
        'proveedor' => true,
        'materia_prima' => true
    ];
}
