<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\InventarioEmpresaTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\InventarioEmpresaTable Test Case
 */
class InventarioEmpresaTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\InventarioEmpresaTable
     */
    public $InventarioEmpresa;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.inventario_empresa',
        'app.item_inventario',
        'app.area_produccion',
        'app.unidad_medida',
        'app.procesos',
        'app.brix',
        'app.hoja_producto_terminado',
        'app.pasteurizacion',
        'app.lote',
        'app.trabajador',
        'app.clase_vino',
        'app.hoja_produccion_vino'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('InventarioEmpresa') ? [] : ['className' => InventarioEmpresaTable::class];
        $this->InventarioEmpresa = TableRegistry::get('InventarioEmpresa', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->InventarioEmpresa);

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
