<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TrabajadorTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TrabajadorTable Test Case
 */
class TrabajadorTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TrabajadorTable
     */
    public $Trabajador;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.trabajador'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Trabajador') ? [] : ['className' => TrabajadorTable::class];
        $this->Trabajador = TableRegistry::get('Trabajador', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Trabajador);

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
