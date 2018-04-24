<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CompraMatPriFixture
 *
 */
class CompraMatPriFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'compra_mat_pri';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'fecha_mat' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'precio_u_mat' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'precio_tot_mat' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'observaciones_mat' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'id_pro' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'id_tra' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'id_mat_prim' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'id_pro' => ['type' => 'index', 'columns' => ['id_pro'], 'length' => []],
            'id_tra' => ['type' => 'index', 'columns' => ['id_tra'], 'length' => []],
            'id_mat_prim' => ['type' => 'index', 'columns' => ['id_mat_prim'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'compra_mat_pri_ibfk_1' => ['type' => 'foreign', 'columns' => ['id_pro'], 'references' => ['proveedor', 'id'], 'update' => 'restrict', 'delete' => 'cascade', 'length' => []],
            'compra_mat_pri_ibfk_2' => ['type' => 'foreign', 'columns' => ['id_tra'], 'references' => ['trabajador', 'id'], 'update' => 'restrict', 'delete' => 'cascade', 'length' => []],
            'compra_mat_pri_ibfk_3' => ['type' => 'foreign', 'columns' => ['id_mat_prim'], 'references' => ['materia_prima', 'id'], 'update' => 'restrict', 'delete' => 'cascade', 'length' => []],
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
            'fecha_mat' => '2018-04-24',
            'precio_u_mat' => 1,
            'precio_tot_mat' => 1,
            'observaciones_mat' => 'Lorem ipsum dolor sit amet',
            'id_pro' => 1,
            'id_tra' => 1,
            'id_mat_prim' => 1
        ],
    ];
}
