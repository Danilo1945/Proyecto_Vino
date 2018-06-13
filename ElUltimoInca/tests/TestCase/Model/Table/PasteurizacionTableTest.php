<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PasteurizacionTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PasteurizacionTable Test Case
 */
class PasteurizacionTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PasteurizacionTable
     */
    public $Pasteurizacion;

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
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Pasteurizacion') ? [] : ['className' => PasteurizacionTable::class];
        $this->Pasteurizacion = TableRegistry::get('Pasteurizacion', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Pasteurizacion);

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
