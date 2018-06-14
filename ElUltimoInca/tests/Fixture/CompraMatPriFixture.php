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
        'proveedor_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'trabajador_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'id_mat_prim' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'materia_prima_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'unidad_medida_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'unidad_medida_id' => ['type' => 'index', 'columns' => ['unidad_medida_id'], 'length' => []],
            'proveedor_id' => ['type' => 'index', 'columns' => ['proveedor_id'], 'length' => []],
            'trabajador_id' => ['type' => 'index', 'columns' => ['trabajador_id'], 'length' => []],
            'materia_prima_id' => ['type' => 'index', 'columns' => ['materia_prima_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'compra_mat_pri_ibfk_1' => ['type' => 'foreign', 'columns' => ['unidad_medida_id'], 'references' => ['unidad_medida', 'id'], 'update' => 'restrict', 'delete' => 'cascade', 'length' => []],
            'compra_mat_pri_ibfk_2' => ['type' => 'foreign', 'columns' => ['proveedor_id'], 'references' => ['proveedor', 'id'], 'update' => 'restrict', 'delete' => 'cascade', 'length' => []],
            'compra_mat_pri_ibfk_3' => ['type' => 'foreign', 'columns' => ['trabajador_id'], 'references' => ['trabajador', 'id'], 'update' => 'restrict', 'delete' => 'cascade', 'length' => []],
            'compra_mat_pri_ibfk_4' => ['type' => 'foreign', 'columns' => ['materia_prima_id'], 'references' => ['materia_prima', 'id'], 'update' => 'restrict', 'delete' => 'cascade', 'length' => []],
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
            'fecha_mat' => '2018-05-24',
            'precio_u_mat' => 1,
            'precio_tot_mat' => 1,
            'observaciones_mat' => 'Lorem ipsum dolor sit amet',
            'proveedor_id' => 1,
            'trabajador_id' => 1,
            'id_mat_prim' => 1,
            'materia_prima_id' => 1,
            'unidad_medida_id' => 1
        ],
    ];
}
