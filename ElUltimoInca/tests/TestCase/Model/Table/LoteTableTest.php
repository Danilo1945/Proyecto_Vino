<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LoteTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LoteTable Test Case
 */
class LoteTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\LoteTable
     */
    public $Lote;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.lote',
        'app.hoja_producto_terminado',
        'app.pasteurizacion',
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
        $config = TableRegistry::exists('Lote') ? [] : ['className' => LoteTable::class];
        $this->Lote = TableRegistry::get('Lote', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Lote);

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
