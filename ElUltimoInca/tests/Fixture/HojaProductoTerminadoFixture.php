<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * HojaProductoTerminadoFixture
 *
 */
class HojaProductoTerminadoFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'hoja_producto_terminado';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'nombre' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'fecha' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'valor_IVA' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'valor_ICE' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'pasteurizacion_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'fecha_elb' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'lote_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'nombre_cantidad' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'valor_cantidad' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'brix_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'nombre_etiqueta' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'cantidad_etiqueta' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'nombre_corcho' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'cantidad_corcho' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'cantidad_capuchon' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'cantidad_cintas_SRI' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'cantidad_cintas_ultimoInca' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'trabajador_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'observaciones' => ['type' => 'string', 'length' => 300, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'pasteurizacion_id' => ['type' => 'index', 'columns' => ['pasteurizacion_id'], 'length' => []],
            'lote_id' => ['type' => 'index', 'columns' => ['lote_id'], 'length' => []],
            'brix_id' => ['type' => 'index', 'columns' => ['brix_id'], 'length' => []],
            'trabajador_id' => ['type' => 'index', 'columns' => ['trabajador_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'hoja_producto_terminado_ibfk_1' => ['type' => 'foreign', 'columns' => ['pasteurizacion_id'], 'references' => ['pasteurizacion', 'id'], 'update' => 'restrict', 'delete' => 'cascade', 'length' => []],
            'hoja_producto_terminado_ibfk_2' => ['type' => 'foreign', 'columns' => ['lote_id'], 'references' => ['lote', 'id'], 'update' => 'restrict', 'delete' => 'cascade', 'length' => []],
            'hoja_producto_terminado_ibfk_3' => ['type' => 'foreign', 'columns' => ['brix_id'], 'references' => ['brix', 'id'], 'update' => 'restrict', 'delete' => 'cascade', 'length' => []],
            'hoja_producto_terminado_ibfk_4' => ['type' => 'foreign', 'columns' => ['trabajador_id'], 'references' => ['trabajador', 'id'], 'update' => 'restrict', 'delete' => 'cascade', 'length' => []],
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
            'nombre' => 'Lorem ipsum dolor sit amet',
            'fecha' => '2018-05-24',
            'valor_IVA' => 1,
            'valor_ICE' => 1,
            'pasteurizacion_id' => 1,
            'fecha_elb' => '2018-05-24',
            'lote_id' => 1,
            'nombre_cantidad' => 'Lorem ipsum dolor sit amet',
            'valor_cantidad' => 1,
            'brix_id' => 1,
            'nombre_etiqueta' => 'Lorem ipsum dolor sit amet',
            'cantidad_etiqueta' => 1,
            'nombre_corcho' => 'Lorem ipsum dolor sit amet',
            'cantidad_corcho' => 1,
            'cantidad_capuchon' => 1,
            'cantidad_cintas_SRI' => 1,
            'cantidad_cintas_ultimoInca' => 1,
            'trabajador_id' => 1,
            'observaciones' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
