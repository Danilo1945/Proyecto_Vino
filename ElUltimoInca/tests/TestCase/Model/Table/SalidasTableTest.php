<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SalidasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SalidasTable Test Case
 */
class SalidasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SalidasTable
     */
    public $Salidas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.salidas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Salidas') ? [] : ['className' => SalidasTable::class];
        $this->Salidas = TableRegistry::get('Salidas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Salidas);

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
