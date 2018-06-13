<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CompraMatPriTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CompraMatPriTable Test Case
 */
class CompraMatPriTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CompraMatPriTable
     */
    public $CompraMatPri;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.compra_mat_pri',
        'app.proveedor',
        'app.trabajador',
        'app.materia_prima',
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
        $config = TableRegistry::exists('CompraMatPri') ? [] : ['className' => CompraMatPriTable::class];
        $this->CompraMatPri = TableRegistry::get('CompraMatPri', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CompraMatPri);

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
