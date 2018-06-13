<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DetallePedidosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DetallePedidosTable Test Case
 */
class DetallePedidosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DetallePedidosTable
     */
    public $DetallePedidos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.detalle_pedidos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('DetallePedidos') ? [] : ['className' => DetallePedidosTable::class];
        $this->DetallePedidos = TableRegistry::get('DetallePedidos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DetallePedidos);

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
