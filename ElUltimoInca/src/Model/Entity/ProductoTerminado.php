<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ProductoTerminado Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenDate $fecha
 * @property int $pasteurizacion
 * @property \Cake\I18n\FrozenDate $fecha_elb
 * @property string $lote_pro_ter
 * @property string $cantidad_pro_ter
 * @property int $valor_cantidad_pro
 * @property int $brix
 * @property int $valor_etiqueta
 * @property int $valor_corcho
 * @property int $valor_capuchon
 * @property int $num_cinta_sri
 * @property int $num_cinta_inca
 * @property string $observaciones
 * @property int $id_mat_prim
 * @property int $id_tra
 */
class ProductoTerminado extends Entity
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
        'fecha' => true,
        'pasteurizacion' => true,
        'fecha_elb' => true,
        'lote_pro_ter' => true,
        'cantidad_pro_ter' => true,
        'valor_cantidad_pro' => true,
        'brix' => true,
        'valor_etiqueta' => true,
        'valor_corcho' => true,
        'valor_capuchon' => true,
        'num_cinta_sri' => true,
        'num_cinta_inca' => true,
        'observaciones' => true,
        'id_mat_prim' => true,
        'id_tra' => true
    ];
}
