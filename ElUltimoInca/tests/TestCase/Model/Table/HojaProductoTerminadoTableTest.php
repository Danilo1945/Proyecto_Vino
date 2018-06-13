<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\HojaProductoTerminadoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\HojaProductoTerminadoTable Test Case
 */
class HojaProductoTerminadoTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\HojaProductoTerminadoTable
     */
    public $HojaProductoTerminado;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.hoja_producto_terminado',
        'app.pasteurizacion',
        'app.lote',
        'app.brix',
        'app.area_produccion',
        'app.inventario_empresa',
        'app.unidad_medida',
        'app.procesos',
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
        $config = TableRegistry::exists('HojaProductoTerminado') ? [] : ['className' => HojaProductoTerminadoTable::class];
        $this->HojaProductoTerminado = TableRegistry::get('HojaProductoTerminado', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->HojaProductoTerminado);

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
