<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ClaseVinoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ClaseVinoTable Test Case
 */
class ClaseVinoTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ClaseVinoTable
     */
    public $ClaseVino;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.clase_vino',
        'app.area_produccion',
        'app.inventario_empresa',
        'app.unidad_medida',
        'app.procesos',
        'app.brix',
        'app.hoja_producto_terminado',
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
        $config = TableRegistry::exists('ClaseVino') ? [] : ['className' => ClaseVinoTable::class];
        $this->ClaseVino = TableRegistry::get('ClaseVino', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ClaseVino);

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
