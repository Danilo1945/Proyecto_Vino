<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProveedorTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProveedorTable Test Case
 */
class ProveedorTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ProveedorTable
     */
    public $Proveedor;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.proveedor'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Proveedor') ? [] : ['className' => ProveedorTable::class];
        $this->Proveedor = TableRegistry::get('Proveedor', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Proveedor);

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
