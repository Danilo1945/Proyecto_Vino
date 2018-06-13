<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * HojaProduccionVinoFixture
 *
 */
class HojaProduccionVinoFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'hoja_produccion_vino';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'inventario_empresa_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'procesos_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'trabajador_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'fecha_pro' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'cant_fruta_klg' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'cant_agua_lts' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'cant_azucar_klg' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'cant_levadura_grms' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'numero_procesos' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'observacion_pro' => ['type' => 'string', 'length' => 200, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'procesos_id' => ['type' => 'index', 'columns' => ['procesos_id'], 'length' => []],
            'inventario_empresa_id' => ['type' => 'index', 'columns' => ['inventario_empresa_id'], 'length' => []],
            'trabajador_id' => ['type' => 'index', 'columns' => ['trabajador_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'hoja_produccion_vino_ibfk_1' => ['type' => 'foreign', 'columns' => ['procesos_id'], 'references' => ['procesos', 'id'], 'update' => 'restrict', 'delete' => 'cascade', 'length' => []],
            'hoja_produccion_vino_ibfk_2' => ['type' => 'foreign', 'columns' => ['inventario_empresa_id'], 'references' => ['inventario_empresa', 'id'], 'update' => 'restrict', 'delete' => 'cascade', 'length' => []],
            'hoja_produccion_vino_ibfk_3' => ['type' => 'foreign', 'columns' => ['trabajador_id'], 'references' => ['trabajador', 'id'], 'update' => 'restrict', 'delete' => 'cascade', 'length' => []],
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
            'inventario_empresa_id' => 1,
            'procesos_id' => 1,
            'trabajador_id' => 1,
            'fecha_pro' => '2018-05-24',
            'cant_fruta_klg' => 1,
            'cant_agua_lts' => 1,
            'cant_azucar_klg' => 1,
            'cant_levadura_grms' => 1,
            'numero_procesos' => 1,
            'observacion_pro' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
