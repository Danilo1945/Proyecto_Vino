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
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'fecha_elaboracion' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'inventario_empresa_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'cantidad_litros' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'uni_medida_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'procesos_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'brix_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'clase_vino_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'temperatura_vino' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'fecha_control' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'trabajador_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'observaciones_area_pro' => ['type' => 'string', 'length' => 200, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'procesos_id' => ['type' => 'index', 'columns' => ['procesos_id'], 'length' => []],
            'brix_id' => ['type' => 'index', 'columns' => ['brix_id'], 'length' => []],
            'uni_medida_id' => ['type' => 'index', 'columns' => ['uni_medida_id'], 'length' => []],
            'inventario_empresa_id' => ['type' => 'index', 'columns' => ['inventario_empresa_id'], 'length' => []],
            'clase_vino_id' => ['type' => 'index', 'columns' => ['clase_vino_id'], 'length' => []],
            'trabajador_id' => ['type' => 'index', 'columns' => ['trabajador_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'area_produccion_ibfk_1' => ['type' => 'foreign', 'columns' => ['procesos_id'], 'references' => ['procesos', 'id'], 'update' => 'restrict', 'delete' => 'cascade', 'length' => []],
            'area_produccion_ibfk_2' => ['type' => 'foreign', 'columns' => ['brix_id'], 'references' => ['brix', 'id'], 'update' => 'restrict', 'delete' => 'cascade', 'length' => []],
            'area_produccion_ibfk_3' => ['type' => 'foreign', 'columns' => ['uni_medida_id'], 'references' => ['unidad_medida', 'id'], 'update' => 'restrict', 'delete' => 'cascade', 'length' => []],
            'area_produccion_ibfk_4' => ['type' => 'foreign', 'columns' => ['inventario_empresa_id'], 'references' => ['inventario_empresa', 'id'], 'update' => 'restrict', 'delete' => 'cascade', 'length' => []],
            'area_produccion_ibfk_5' => ['type' => 'foreign', 'columns' => ['clase_vino_id'], 'references' => ['clase_vino', 'id'], 'update' => 'restrict', 'delete' => 'cascade', 'length' => []],
            'area_produccion_ibfk_6' => ['type' => 'foreign', 'columns' => ['trabajador_id'], 'references' => ['trabajador', 'id'], 'update' => 'restrict', 'delete' => 'cascade', 'length' => []],
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
            'fecha_elaboracion' => '2018-05-24',
            'inventario_empresa_id' => 1,
            'cantidad_litros' => 1,
            'uni_medida_id' => 1,
            'procesos_id' => 1,
            'brix_id' => 1,
            'clase_vino_id' => 1,
            'temperatura_vino' => 1,
            'fecha_control' => '2018-05-24',
            'trabajador_id' => 1,
            'observaciones_area_pro' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
