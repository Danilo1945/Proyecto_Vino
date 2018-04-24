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
        'fecha_pro' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'id_inv' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'cant_fruta_klg' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'cant_agua_lts' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'cant_azucar_klg' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'cant_levadura_grms' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'numero_procesos' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'observacion_pro' => ['type' => 'string', 'length' => 200, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'id_tra' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'id_inv' => ['type' => 'index', 'columns' => ['id_inv'], 'length' => []],
            'id_tra' => ['type' => 'index', 'columns' => ['id_tra'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'hoja_produccion_vino_ibfk_1' => ['type' => 'foreign', 'columns' => ['id_inv'], 'references' => ['inventario_empresa', 'id'], 'update' => 'restrict', 'delete' => 'cascade', 'length' => []],
            'hoja_produccion_vino_ibfk_2' => ['type' => 'foreign', 'columns' => ['id_tra'], 'references' => ['trabajador', 'id'], 'update' => 'restrict', 'delete' => 'cascade', 'length' => []],
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
            'fecha_pro' => '2018-04-24',
            'id_inv' => 1,
            'cant_fruta_klg' => 1,
            'cant_agua_lts' => 1,
            'cant_azucar_klg' => 1,
            'cant_levadura_grms' => 1,
            'numero_procesos' => 1,
            'observacion_pro' => 'Lorem ipsum dolor sit amet',
            'id_tra' => 1
        ],
    ];
}
