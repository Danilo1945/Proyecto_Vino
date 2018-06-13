<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PreveeTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PreveeTable Test Case
 */
class PreveeTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PreveeTable
     */
    public $Prevee;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.prevee',
        'app.proveedor',
        'app.materia_prima',
        'app.compra_mat_pri',
        'app.trabajador',
        'app.unidad_medida'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Prevee') ? [] : ['className' => PreveeTable::class];
        $this->Prevee = TableRegistry::get('Prevee', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Prevee);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
