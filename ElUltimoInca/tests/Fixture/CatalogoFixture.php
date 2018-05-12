<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CatalogoFixture
 *
 */
class CatalogoFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'catalogo';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'Descripcion' => ['type' => 'string', 'length' => 300, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'Imagen' => ['type' => 'binary', 'length' => 4294967295, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'id_pro_ter' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'id_pro_ter' => ['type' => 'index', 'columns' => ['id_pro_ter'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'catalogo_ibfk_1' => ['type' => 'foreign', 'columns' => ['id_pro_ter'], 'references' => ['producto_terminado', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'Descripcion' => 'Lorem ipsum dolor sit amet',
            'Imagen' => 'Lorem ipsum dolor sit a',
            'id_pro_ter' => 1
        ],
    ];
}
