<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Trabajador Entity
 *
 * @property int $id
 * @property string $cedula
 * @property string $Nombres_tra
 * @property string $Apellidos_tra
 * @property string $Telefono_tra
 * @property string $Direccion_tra
 * @property string $Email_tra
 *
 * @property \App\Model\Entity\AreaProduccion[] $area_produccion
 * @property \App\Model\Entity\CompraMatPri[] $compra_mat_pri
 * @property \App\Model\Entity\HojaProduccionVino[] $hoja_produccion_vino
 * @property \App\Model\Entity\HojaProductoTerminado[] $hoja_producto_terminado
 * @property \App\Model\Entity\HojaVenta[] $hoja_ventas
 * @property \App\Model\Entity\Pedido[] $pedidos
 */
class Trabajador extends Entity
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
        'cedula' => true,
        'Nombres_tra' => true,
        'Apellidos_tra' => true,
        'Telefono_tra' => true,
        'Direccion_tra' => true,
        'Email_tra' => true,
        'area_produccion' => true,
        'compra_mat_pri' => true,
        'hoja_produccion_vino' => true,
        'hoja_producto_terminado' => true,
        'hoja_ventas' => true,
        'pedidos' => true
    ];
}