<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * AreaProduccion Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenDate $fecha_elaboracion
 * @property int $inventario_empresa_id
 * @property float $cantidad_litros
 * @property int $uni_medida_id
 * @property int $procesos_id
 * @property int $brix_id
 * @property int $clase_vino_id
 * @property float $temperatura_vino
 * @property \Cake\I18n\FrozenDate $fecha_control
 * @property int $trabajador_id
 * @property string $observaciones_area_pro
 *
 * @property \App\Model\Entity\InventarioEmpresa $inventario_empresa
 * @property \App\Model\Entity\UnidadMedida $unidad_medida
 * @property \App\Model\Entity\Proceso $proceso
 * @property \App\Model\Entity\Brix $brix
 * @property \App\Model\Entity\ClaseVino $clase_vino
 * @property \App\Model\Entity\Trabajador $trabajador
 */
class AreaProduccion extends Entity
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
        'fecha_elaboracion' => true,
        'inventario_empresa_id' => true,
        'cantidad_litros' => true,
        'uni_medida_id' => true,
        'procesos_id' => true,
        'brix_id' => true,
        'clase_vino_id' => true,
        'temperatura_vino' => true,
        'fecha_control' => true,
        'trabajador_id' => true,
        'observaciones_area_pro' => true,
        'inventario_empresa' => true,
        'unidad_medida' => true,
        'proceso' => true,
        'brix' => true,
        'clase_vino' => true,
        'trabajador' => true
    ];
}
