<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DetallePedidosFixture
 *
 */
class DetallePedidosFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'cantidad' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'detalle' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'valor_unitario' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'valor_total' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'pedidos_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'unidad_medida_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'produccion_total_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'pedidos_id' => ['type' => 'index', 'columns' => ['pedidos_id'], 'length' => []],
            'unidad_medida_id' => ['type' => 'index', 'columns' => ['unidad_medida_id'], 'length' => []],
            'produccion_total_id' => ['type' => 'index', 'columns' => ['produccion_total_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'detalle_pedidos_ibfk_1' => ['type' => 'foreign', 'columns' => ['pedidos_id'], 'references' => ['pedidos', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'detalle_pedidos_ibfk_2' => ['type' => 'foreign', 'columns' => ['unidad_medida_id'], 'references' => ['unidad_medida', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'detalle_pedidos_ibfk_3' => ['type' => 'foreign', 'columns' => ['produccion_total_id'], 'references' => ['produccion_total', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'id' => 1,
                'cantidad' => 1,
                'detalle' => 'Lorem ipsum dolor sit amet',
                'valor_unitario' => 1,
                'valor_total' => 1,
                'pedidos_id' => 1,
                'unidad_medida_id' => 1,
                'produccion_total_id' => 1
            ],
        ];
        parent::init();
    }
}
