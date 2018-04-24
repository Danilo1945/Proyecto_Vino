<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ArticuloEmpresaFixture
 *
 */
class ArticuloEmpresaFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'articulo_empresa';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'Idarticulo' => ['type' => 'integer', 'length' => 30, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'Nombre' => ['type' => 'string', 'length' => 10, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'Idcategoria' => ['type' => 'integer', 'length' => 30, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'Idcategoria' => ['type' => 'index', 'columns' => ['Idcategoria'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['Idarticulo'], 'length' => []],
            'articulo_empresa_ibfk_1' => ['type' => 'foreign', 'columns' => ['Idcategoria'], 'references' => ['categoria', 'Idcategoria'], 'update' => 'restrict', 'delete' => 'cascade', 'length' => []],
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
            'Idarticulo' => 1,
            'Nombre' => 'Lorem ip',
            'Idcategoria' => 1
        ],
    ];
}
