<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SalidaHojaInventarioTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SalidaHojaInventarioTable Test Case
 */
class SalidaHojaInventarioTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SalidaHojaInventarioTable
     */
    public $SalidaHojaInventario;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.salida_hoja_inventario'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('SalidaHojaInventario') ? [] : ['className' => SalidaHojaInventarioTable::class];
        $this->SalidaHojaInventario = TableRegistry::get('SalidaHojaInventario', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->SalidaHojaInventario);

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
