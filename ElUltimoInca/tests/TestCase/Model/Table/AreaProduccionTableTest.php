<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AreaProduccionTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AreaProduccionTable Test Case
 */
class AreaProduccionTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AreaProduccionTable
     */
    public $AreaProduccion;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.area_produccion',
        'app.inventario_empresa',
        'app.unidad_medida',
        'app.procesos',
        'app.brix',
        'app.clase_vino',
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
        $config = TableRegistry::exists('AreaProduccion') ? [] : ['className' => AreaProduccionTable::class];
        $this->AreaProduccion = TableRegistry::get('AreaProduccion', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->AreaProduccion);

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
