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
<<<<<<< HEAD
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
=======
        'id_item' => ['type' => 'integer', 'length' => 30, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'nom_item' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'detalle_item' => ['type' => 'string', 'length' => 200, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id_item'], 'length' => []],
>>>>>>> aad36dacdf3881aeabdc527932b7437689d7e567
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
<<<<<<< HEAD
            'Iditem' => 1,
            'Idventa' => 1,
            'Idproducto_terminado' => 1
=======
            'id_item' => 1,
            'nom_item' => 'Lorem ipsum dolor sit amet',
            'detalle_item' => 'Lorem ipsum dolor sit amet'
>>>>>>> aad36dacdf3881aeabdc527932b7437689d7e567
        ],
    ];
}
