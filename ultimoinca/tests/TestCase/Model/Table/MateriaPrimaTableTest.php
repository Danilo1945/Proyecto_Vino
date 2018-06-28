<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MateriaPrimaTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MateriaPrimaTable Test Case
 */
class MateriaPrimaTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MateriaPrimaTable
     */
    public $MateriaPrima;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.materia_prima',
        'app.compra_mat_pri',
        'app.prevee'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('MateriaPrima') ? [] : ['className' => MateriaPrimaTable::class];
        $this->MateriaPrima = TableRegistry::get('MateriaPrima', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MateriaPrima);

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