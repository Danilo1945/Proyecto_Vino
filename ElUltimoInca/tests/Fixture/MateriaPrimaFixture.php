<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MateriaPrimaFixture
 *
 */
class MateriaPrimaFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'materia_prima';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id_mat_prim' => ['type' => 'string', 'length' => 15, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'nombre_mat_pri' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'descripcion_mat_pri' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'id_uni_medi' => ['type' => 'integer', 'length' => 10, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'id_uni_medi' => ['type' => 'index', 'columns' => ['id_uni_medi'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id_mat_prim'], 'length' => []],
            'materia_prima_ibfk_1' => ['type' => 'foreign', 'columns' => ['id_uni_medi'], 'references' => ['unidad_medida', 'id_uni_medi'], 'update' => 'restrict', 'delete' => 'cascade', 'length' => []],
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
            'id_mat_prim' => '0b862681-a5e3-4f6d-9a7c-c8998023f7a8',
            'nombre_mat_pri' => 'Lorem ipsum dolor sit amet',
            'descripcion_mat_pri' => 'Lorem ipsum dolor sit amet',
            'id_uni_medi' => 1
        ],
    ];
}
