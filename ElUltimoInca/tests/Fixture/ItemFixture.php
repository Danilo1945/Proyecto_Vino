<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ItemFixture
 *
 */
class ItemFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'item';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'Iditem' => ['type' => 'integer', 'length' => 30, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'Idventa' => ['type' => 'integer', 'length' => 30, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'Idproducto_terminado' => ['type' => 'integer', 'length' => 30, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'Idproducto_terminado' => ['type' => 'index', 'columns' => ['Idproducto_terminado'], 'length' => []],
            'Idventa' => ['type' => 'index', 'columns' => ['Idventa'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['Iditem'], 'length' => []],
            'item_ibfk_1' => ['type' => 'foreign', 'columns' => ['Idproducto_terminado'], 'references' => ['producto_terminado', 'Idproducto_terminado'], 'update' => 'restrict', 'delete' => 'cascade', 'length' => []],
            'item_ibfk_2' => ['type' => 'foreign', 'columns' => ['Idventa'], 'references' => ['venta', 'Idventa'], 'update' => 'restrict', 'delete' => 'cascade', 'length' => []],
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
            'Iditem' => 1,
            'Idventa' => 1,
            'Idproducto_terminado' => 1
        ],
    ];
}
