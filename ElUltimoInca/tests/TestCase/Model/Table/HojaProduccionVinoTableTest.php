<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\HojaProduccionVinoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\HojaProduccionVinoTable Test Case
 */
class HojaProduccionVinoTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\HojaProduccionVinoTable
     */
    public $HojaProduccionVino;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.hoja_produccion_vino',
        'app.inventario_empresa',
        'app.procesos',
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
        $config = TableRegistry::exists('HojaProduccionVino') ? [] : ['className' => HojaProduccionVinoTable::class];
        $this->HojaProduccionVino = TableRegistry::get('HojaProduccionVino', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->HojaProduccionVino);

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
