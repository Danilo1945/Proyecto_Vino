<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AreaProduccionFixture
 *
 */
class AreaProduccionFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'area_produccion';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id_area_pro' => ['type' => 'integer', 'length' => 10, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'fecha_elaboracion' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'num_procesos' => ['type' => 'string', 'length' => 20, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'brix_area_pro' => ['type' => 'integer', 'length' => 10, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'clase_vino' => ['type' => 'string', 'length' => 20, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'temperatura_vino' => ['type' => 'integer', 'length' => 5, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'fecha_control' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'observaciones_area_pro' => ['type' => 'string', 'length' => 200, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'id_uni_medi' => ['type' => 'integer', 'length' => 10, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'id_tra' => ['type' => 'string', 'length' => 15, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'id_inv' => ['type' => 'string', 'length' => 20, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'id_uni_medi' => ['type' => 'index', 'columns' => ['id_uni_medi'], 'length' => []],
            'id_inv' => ['type' => 'index', 'columns' => ['id_inv'], 'length' => []],
            'id_tra' => ['type' => 'index', 'columns' => ['id_tra'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id_area_pro'], 'length' => []],
            'area_produccion_ibfk_1' => ['type' => 'foreign', 'columns' => ['id_uni_medi'], 'references' => ['unidad_medida', 'id_uni_medi'], 'update' => 'restrict', 'delete' => 'cascade', 'length' => []],
            'area_produccion_ibfk_2' => ['type' => 'foreign', 'columns' => ['id_inv'], 'references' => ['inventario_empresa', 'id_inv'], 'update' => 'restrict', 'delete' => 'cascade', 'length' => []],
            'area_produccion_ibfk_3' => ['type' => 'foreign', 'columns' => ['id_tra'], 'references' => ['trabajador', 'id_tra'], 'update' => 'restrict', 'delete' => 'cascade', 'length' => []],
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
            'id_area_pro' => 1,
            'fecha_elaboracion' => '2018-04-22',
            'num_procesos' => 'Lorem ipsum dolor ',
            'brix_area_pro' => 1,
            'clase_vino' => 'Lorem ipsum dolor ',
            'temperatura_vino' => 1,
            'fecha_control' => '2018-04-22',
            'observaciones_area_pro' => 'Lorem ipsum dolor sit amet',
            'id_uni_medi' => 1,
            'id_tra' => 'Lorem ipsum d',
            'id_inv' => 'Lorem ipsum dolor '
        ],
    ];
}
