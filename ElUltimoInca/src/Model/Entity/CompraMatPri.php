<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * CompraMatPri Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenDate $fecha_mat
 * @property float $precio_u_mat
 * @property float $precio_tot_mat
 * @property string $observaciones_mat
 * @property int $proveedor_id
 * @property int $trabajador_id
 * @property int $id_mat_prim
 * @property int $materia_prima_id
 * @property int $unidad_medida_id
 *
 * @property \App\Model\Entity\Proveedor $proveedor
 * @property \App\Model\Entity\Trabajador $trabajador
 * @property \App\Model\Entity\MateriaPrima $materia_prima
 * @property \App\Model\Entity\UnidadMedida $unidad_medida
 */
class CompraMatPri extends Entity
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
        'fecha_mat' => true,
        'precio_u_mat' => true,
        'precio_tot_mat' => true,
        'observaciones_mat' => true,
        'proveedor_id' => true,
        'trabajador_id' => true,
        'id_mat_prim' => true,
        'materia_prima_id' => true,
        'unidad_medida_id' => true,
        'proveedor' => true,
        'trabajador' => true,
        'materia_prima' => true,
        'unidad_medida' => true
    ];
}
