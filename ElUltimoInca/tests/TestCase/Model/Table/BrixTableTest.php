<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BrixTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BrixTable Test Case
 */
class BrixTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\BrixTable
     */
    public $Brix;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.brix',
        'app.area_produccion',
        'app.inventario_empresa',
        'app.unidad_medida',
        'app.procesos',
        'app.clase_vino',
        'app.trabajador',
        'app.hoja_producto_terminado'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Brix') ? [] : ['className' => BrixTable::class];
        $this->Brix = TableRegistry::get('Brix', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Brix);

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
