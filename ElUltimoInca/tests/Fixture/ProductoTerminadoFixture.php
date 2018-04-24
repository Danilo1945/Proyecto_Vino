<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProductoTerminadoFixture
 *
 */
class ProductoTerminadoFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'producto_terminado';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id_pro_ter' => ['type' => 'integer', 'length' => 20, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'fecha' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'pasteurizacion' => ['type' => 'integer', 'length' => 20, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'fecha_elb' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'lote_pro_ter' => ['type' => 'string', 'length' => 20, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'cantidad_pro_ter' => ['type' => 'string', 'length' => 40, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'valor_cantidad_pro' => ['type' => 'integer', 'length' => 10, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'brix' => ['type' => 'integer', 'length' => 10, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'valor_etiqueta' => ['type' => 'integer', 'length' => 10, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'valor_corcho' => ['type' => 'integer', 'length' => 10, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'valor_capuchon' => ['type' => 'integer', 'length' => 10, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'num_cinta_sri' => ['type' => 'integer', 'length' => 10, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'num_cinta_inca' => ['type' => 'integer', 'length' => 10, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'observaciones' => ['type' => 'string', 'length' => 200, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'id_mat_prim' => ['type' => 'string', 'length' => 15, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'id_tra' => ['type' => 'string', 'length' => 15, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'id_mat_prim' => ['type' => 'index', 'columns' => ['id_mat_prim'], 'length' => []],
            'id_tra' => ['type' => 'index', 'columns' => ['id_tra'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id_pro_ter'], 'length' => []],
            'producto_terminado_ibfk_1' => ['type' => 'foreign', 'columns' => ['id_mat_prim'], 'references' => ['materia_prima', 'id_mat_prim'], 'update' => 'restrict', 'delete' => 'cascade', 'length' => []],
            'producto_terminado_ibfk_2' => ['type' => 'foreign', 'columns' => ['id_tra'], 'references' => ['trabajador', 'id_tra'], 'update' => 'restrict', 'delete' => 'cascade', 'length' => []],
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
            'id_pro_ter' => 1,
            'fecha' => '2018-04-22',
            'pasteurizacion' => 1,
            'fecha_elb' => '2018-04-22',
            'lote_pro_ter' => 'Lorem ipsum dolor ',
            'cantidad_pro_ter' => 'Lorem ipsum dolor sit amet',
            'valor_cantidad_pro' => 1,
            'brix' => 1,
            'valor_etiqueta' => 1,
            'valor_corcho' => 1,
            'valor_capuchon' => 1,
            'num_cinta_sri' => 1,
            'num_cinta_inca' => 1,
            'observaciones' => 'Lorem ipsum dolor sit amet',
            'id_mat_prim' => 'Lorem ipsum d',
            'id_tra' => 'Lorem ipsum d'
        ],
    ];
}
