<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\HojaVentasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\HojaVentasTable Test Case
 */
class HojaVentasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\HojaVentasTable
     */
    public $HojaVentas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.hoja_ventas',
        'app.trabajador',
        'app.users',
        'app.roles'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('HojaVentas') ? [] : ['className' => HojaVentasTable::class];
        $this->HojaVentas = TableRegistry::get('HojaVentas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->HojaVentas);

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
