<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\VentaTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\VentaTable Test Case
 */
class VentaTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\VentaTable
     */
    public $Venta;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.venta'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Venta') ? [] : ['className' => VentaTable::class];
        $this->Venta = TableRegistry::get('Venta', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Venta);

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
