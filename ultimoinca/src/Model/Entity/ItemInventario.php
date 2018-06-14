<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ItemInventario Entity
 *
 * @property int $id
 * @property string $nom_item
 * @property string $detalle_item
 *
 * @property \App\Model\Entity\InventarioEmpresa[] $inventario_empresa
 */
class ItemInventario extends Entity
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
        'nom_item' => true,
        'detalle_item' => true,
        'inventario_empresa' => true
    ];
}
