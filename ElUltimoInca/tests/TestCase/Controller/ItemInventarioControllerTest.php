<?php
namespace App\Test\TestCase\Controller;

use App\Controller\ItemInventarioController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\ItemInventarioController Test Case
 */
class ItemInventarioControllerTest extends IntegrationTestCase
{

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
     * Test beforeRender method
     *
     * @return void
     */
    public function testBeforeRender()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
