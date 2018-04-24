<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ClienteFixture
 *
 */
class ClienteFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'cliente';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'Idcliente' => ['type' => 'string', 'length' => 10, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
<<<<<<< HEAD
        'Nombre' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'Telofono' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'Direccion' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'Usuario' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'Contraseña' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
=======
        'Nombres' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'Apellidos' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'Telefono' => ['type' => 'string', 'length' => 12, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'Direccion' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'Email' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'user' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'password' => ['type' => 'string', 'length' => 30, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
>>>>>>> 22979b72f8bb41e00b64b91fc1fb6eea5eabe561
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['Idcliente'], 'length' => []],
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
            'Idcliente' => '5545ec62-693b-4940-8505-35f3fa4656e2',
            'Nombre' => 'Lorem ipsum dolor sit amet',
            'Telofono' => 'Lorem ipsum dolor sit amet',
            'Direccion' => 'Lorem ipsum dolor sit amet',
            'Usuario' => 'Lorem ipsum dolor sit amet',
            'Contraseña' => 'Lorem ipsum dolor sit amet'
=======
            'Idcliente' => 'fdc41938-4825-4ce3-b792-2c7ab6500914',
            'Nombres' => 'Lorem ipsum dolor sit amet',
            'Apellidos' => 'Lorem ipsum dolor sit amet',
            'Telefono' => 'Lorem ipsu',
            'Direccion' => 'Lorem ipsum dolor sit amet',
            'Email' => 'Lorem ipsum dolor sit amet',
            'user' => 'Lorem ipsum dolor sit amet',
            'password' => 'Lorem ipsum dolor sit amet'
>>>>>>> 22979b72f8bb41e00b64b91fc1fb6eea5eabe561
        ],
    ];
}
