<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProveedorFixture
 *
 */
class ProveedorFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'proveedor';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id_pro' => ['type' => 'string', 'length' => 30, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'nombres_pro' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'apellidos_pro' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'telefono_pro' => ['type' => 'string', 'length' => 12, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'email_pro' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'id_emp' => ['type' => 'integer', 'length' => 10, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'id_emp' => ['type' => 'index', 'columns' => ['id_emp'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id_pro'], 'length' => []],
            'proveedor_ibfk_1' => ['type' => 'foreign', 'columns' => ['id_emp'], 'references' => ['empresa', 'id_emp'], 'update' => 'restrict', 'delete' => 'cascade', 'length' => []],
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
            'id_pro' => 'bdb1baef-8960-4123-9161-1971147da5b1',
            'nombres_pro' => 'Lorem ipsum dolor sit amet',
            'apellidos_pro' => 'Lorem ipsum dolor sit amet',
            'telefono_pro' => 'Lorem ipsu',
            'email_pro' => 'Lorem ipsum dolor sit amet',
            'id_emp' => 1
        ],
    ];
}
