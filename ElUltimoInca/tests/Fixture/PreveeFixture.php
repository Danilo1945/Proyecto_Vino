<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PreveeFixture
 *
 */
class PreveeFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'prevee';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'proveedor_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'materia_prima_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'proveedor_id' => ['type' => 'index', 'columns' => ['proveedor_id'], 'length' => []],
            'materia_prima_id' => ['type' => 'index', 'columns' => ['materia_prima_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'prevee_ibfk_1' => ['type' => 'foreign', 'columns' => ['proveedor_id'], 'references' => ['proveedor', 'id'], 'update' => 'restrict', 'delete' => 'cascade', 'length' => []],
            'prevee_ibfk_2' => ['type' => 'foreign', 'columns' => ['materia_prima_id'], 'references' => ['materia_prima', 'id'], 'update' => 'restrict', 'delete' => 'cascade', 'length' => []],
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
            'proveedor_id' => 1,
            'materia_prima_id' => 1
        ],
    ];
}
