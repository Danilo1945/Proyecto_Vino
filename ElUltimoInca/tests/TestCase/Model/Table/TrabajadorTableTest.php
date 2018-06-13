<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TrabajadorTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TrabajadorTable Test Case
 */
class TrabajadorTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TrabajadorTable
     */
    public $Trabajador;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.trabajador',
        'app.area_produccion',
        'app.inventario_empresa',
        'app.item_inventario',
        'app.hoja_produccion_vino',
        'app.procesos',
        'app.unidad_medida',
        'app.brix',
        'app.hoja_producto_terminado',
        'app.pasteurizacion',
        'app.lote',
        'app.clase_vino',
        'app.compra_mat_pri',
        'app.proveedor',
        'app.empresa',
        'app.prevee',
        'app.materia_prima',
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
        $config = TableRegistry::exists('Trabajador') ? [] : ['className' => TrabajadorTable::class];
        $this->Trabajador = TableRegistry::get('Trabajador', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Trabajador);

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
