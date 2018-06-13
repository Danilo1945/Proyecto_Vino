<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UnidadMedidaTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UnidadMedidaTable Test Case
 */
class UnidadMedidaTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\UnidadMedidaTable
     */
    public $UnidadMedida;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.unidad_medida',
        'app.compra_mat_pri',
        'app.proveedor',
        'app.empresa',
        'app.prevee',
        'app.materia_prima',
        'app.trabajador',
        'app.area_produccion',
        'app.inventario_empresa',
        'app.item_inventario',
        'app.hoja_produccion_vino',
        'app.procesos',
        'app.brix',
        'app.hoja_producto_terminado',
        'app.pasteurizacion',
        'app.lote',
        'app.clase_vino',
        'app.hoja_ventas',
        'app.users',
        'app.roles',
        'app.pedidos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('UnidadMedida') ? [] : ['className' => UnidadMedidaTable::class];
        $this->UnidadMedida = TableRegistry::get('UnidadMedida', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->UnidadMedida);

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
