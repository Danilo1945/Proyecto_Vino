<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProductoTerminadoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProductoTerminadoTable Test Case
 */
class ProductoTerminadoTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ProductoTerminadoTable
     */
    public $ProductoTerminado;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.producto_terminado'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ProductoTerminado') ? [] : ['className' => ProductoTerminadoTable::class];
        $this->ProductoTerminado = TableRegistry::get('ProductoTerminado', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ProductoTerminado);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
