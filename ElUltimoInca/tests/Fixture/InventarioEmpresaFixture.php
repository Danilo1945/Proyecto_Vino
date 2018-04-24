<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * InventarioEmpresaFixture
 *
 */
class InventarioEmpresaFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'inventario_empresa';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id_inv' => ['type' => 'string', 'length' => 20, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'nombre_art_inv' => ['type' => 'string', 'length' => 40, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'descripcion_inv' => ['type' => 'string', 'length' => 200, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'color_inv' => ['type' => 'string', 'length' => 20, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'id_item' => ['type' => 'integer', 'length' => 30, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'id_item' => ['type' => 'index', 'columns' => ['id_item'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id_inv'], 'length' => []],
            'inventario_empresa_ibfk_1' => ['type' => 'foreign', 'columns' => ['id_item'], 'references' => ['item', 'id_item'], 'update' => 'restrict', 'delete' => 'cascade', 'length' => []],
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
            'id_inv' => '15614693-0db3-40e9-b951-9dfd609c2928',
            'nombre_art_inv' => 'Lorem ipsum dolor sit amet',
            'descripcion_inv' => 'Lorem ipsum dolor sit amet',
            'color_inv' => 'Lorem ipsum dolor ',
            'id_item' => 1
        ],
    ];
}
