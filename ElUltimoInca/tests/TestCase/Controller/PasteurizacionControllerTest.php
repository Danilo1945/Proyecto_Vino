<?php
namespace App\Test\TestCase\Controller;

use App\Controller\PasteurizacionController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\PasteurizacionController Test Case
 */
class PasteurizacionControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.pasteurizacion',
        'app.hoja_producto_terminado',
        'app.lote',
        'app.brix',
        'app.area_produccion',
        'app.inventario_empresa',
        'app.item_inventario',
        'app.hoja_produccion_vino',
        'app.procesos',
        'app.trabajador',
        'app.unidad_medida',
        'app.clase_vino'
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