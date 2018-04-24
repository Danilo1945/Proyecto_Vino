<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * VentaFixture
 *
 */
class VentaFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'venta';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id_ven' => ['type' => 'integer', 'length' => 30, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'fecha_ven' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'id_tra' => ['type' => 'string', 'length' => 15, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'Idcliente' => ['type' => 'string', 'length' => 10, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'id_pro_ter' => ['type' => 'integer', 'length' => 20, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'precio_uni' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'precio_total' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'estado_cuenta' => ['type' => 'string', 'length' => 20, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'valor_donacion_vent' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'observaciones_ven' => ['type' => 'string', 'length' => 200, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'id_tra' => ['type' => 'index', 'columns' => ['id_tra'], 'length' => []],
            'Idcliente' => ['type' => 'index', 'columns' => ['Idcliente'], 'length' => []],
            'id_pro_ter' => ['type' => 'index', 'columns' => ['id_pro_ter'], 'length' => []],
        ],
        '_constraints' => [
            'venta_ibfk_1' => ['type' => 'foreign', 'columns' => ['id_tra'], 'references' => ['trabajador', 'id_tra'], 'update' => 'restrict', 'delete' => 'cascade', 'length' => []],
            'venta_ibfk_2' => ['type' => 'foreign', 'columns' => ['Idcliente'], 'references' => ['cliente', 'Idcliente'], 'update' => 'restrict', 'delete' => 'cascade', 'length' => []],
            'venta_ibfk_3' => ['type' => 'foreign', 'columns' => ['id_pro_ter'], 'references' => ['producto_terminado', 'id_pro_ter'], 'update' => 'restrict', 'delete' => 'cascade', 'length' => []],
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
            'id_ven' => 1,
            'fecha_ven' => '2018-04-22',
            'id_tra' => 'Lorem ipsum d',
            'Idcliente' => 'Lorem ip',
            'id_pro_ter' => 1,
            'precio_uni' => 1,
            'precio_total' => 1,
            'estado_cuenta' => 'Lorem ipsum dolor ',
            'valor_donacion_vent' => 1,
            'observaciones_ven' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
