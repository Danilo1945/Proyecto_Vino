<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ItemInventarioTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ItemInventarioTable Test Case
 */
class ItemInventarioTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ItemInventarioTable
     */
    public $ItemInventario;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.item_inventario',
        'app.inventario_empresa',
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
        $config = TableRegistry::exists('ItemInventario') ? [] : ['className' => ItemInventarioTable::class];
        $this->ItemInventario = TableRegistry::get('ItemInventario', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ItemInventario);

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
