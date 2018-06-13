<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProduccionTotalTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProduccionTotalTable Test Case
 */
class ProduccionTotalTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ProduccionTotalTable
     */
    public $ProduccionTotal;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.produccion_total'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ProduccionTotal') ? [] : ['className' => ProduccionTotalTable::class];
        $this->ProduccionTotal = TableRegistry::get('ProduccionTotal', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ProduccionTotal);

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
