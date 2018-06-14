<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * HojaProductoTerminado Entity
 *
 * @property int $id
 * @property string $nombre
 * @property \Cake\I18n\FrozenDate $fecha
 * @property int $valor_IVA
 * @property int $valor_ICE
 * @property int $pasteurizacion_id
 * @property \Cake\I18n\FrozenDate $fecha_elb
 * @property int $lote_id
 * @property string $nombre_cantidad
 * @property int $valor_cantidad
 * @property int $brix_id
 * @property string $nombre_etiqueta
 * @property int $cantidad_etiqueta
 * @property string $nombre_corcho
 * @property int $cantidad_corcho
 * @property int $cantidad_capuchon
 * @property int $cantidad_cintas_SRI
 * @property int $cantidad_cintas_ultimoInca
 * @property int $trabajador_id
 * @property string $observaciones
 *
 * @property \App\Model\Entity\Pasteurizacion $pasteurizacion
 * @property \App\Model\Entity\Lote $lote
 * @property \App\Model\Entity\Brix $brix
 * @property \App\Model\Entity\Trabajador $trabajador
 */
class HojaProductoTerminado extends Entity
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
        'nombre' => true,
        'fecha' => true,
        'valor_IVA' => true,
        'valor_ICE' => true,
        'pasteurizacion_id' => true,
        'fecha_elb' => true,
        'lote_id' => true,
        'nombre_cantidad' => true,
        'valor_cantidad' => true,
        'brix_id' => true,
        'nombre_etiqueta' => true,
        'cantidad_etiqueta' => true,
        'nombre_corcho' => true,
        'cantidad_corcho' => true,
        'cantidad_capuchon' => true,
        'cantidad_cintas_SRI' => true,
        'cantidad_cintas_ultimoInca' => true,
        'trabajador_id' => true,
        'observaciones' => true,
        'pasteurizacion' => true,
        'lote' => true,
        'brix' => true,
        'trabajador' => true
    ];
}
