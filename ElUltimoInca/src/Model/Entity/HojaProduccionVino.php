<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * HojaProduccionVino Entity
 *
 * @property int $id
 * @property int $inventario_empresa_id
 * @property int $procesos_id
 * @property int $trabajador_id
 * @property \Cake\I18n\FrozenDate $fecha_pro
 * @property float $cant_fruta_klg
 * @property float $cant_agua_lts
 * @property float $cant_azucar_klg
 * @property float $cant_levadura_grms
 * @property float $numero_procesos
 * @property string $observacion_pro
 *
 * @property \App\Model\Entity\InventarioEmpresa $inventario_empresa
 * @property \App\Model\Entity\Proceso $proceso
 * @property \App\Model\Entity\Trabajador $trabajador
 */
class HojaProduccionVino extends Entity
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
        'inventario_empresa_id' => true,
        'procesos_id' => true,
        'trabajador_id' => true,
        'fecha_pro' => true,
        'cant_fruta_klg' => true,
        'cant_agua_lts' => true,
        'cant_azucar_klg' => true,
        'cant_levadura_grms' => true,
        'numero_procesos' => true,
        'observacion_pro' => true,
        'inventario_empresa' => true,
        'proceso' => true,
        'trabajador' => true
    ];
}
