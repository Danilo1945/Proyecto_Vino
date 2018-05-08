<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PedidoFixture
 *
 */
class PedidoFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'pedido';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'Fecha' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'Cantidad' => ['type' => 'integer', 'length' => 20, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'unidad_medida' => ['type' => 'string', 'length' => 20, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'Idcliente' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'id_pro_ter' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'Idcliente' => ['type' => 'index', 'columns' => ['Idcliente'], 'length' => []],
            'id_pro_ter' => ['type' => 'index', 'columns' => ['id_pro_ter'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'pedido_ibfk_1' => ['type' => 'foreign', 'columns' => ['Idcliente'], 'references' => ['cliente', 'id'], 'update' => 'restrict', 'delete' => 'cascade', 'length' => []],
            'pedido_ibfk_2' => ['type' => 'foreign', 'columns' => ['id_pro_ter'], 'references' => ['producto_terminado', 'id'], 'update' => 'restrict', 'delete' => 'cascade', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => 1,
            'Fecha' => '2018-04-24',
            'Cantidad' => 1,
            'unidad_medida' => 'Lorem ipsum dolor ',
            'Idcliente' => 1,
            'id_pro_ter' => 1
        ],
    ];
}
