<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ArticuloEmpresaTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ArticuloEmpresaTable Test Case
 */
class ArticuloEmpresaTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ArticuloEmpresaTable
     */
    public $ArticuloEmpresa;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.articulo_empresa'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ArticuloEmpresa') ? [] : ['className' => ArticuloEmpresaTable::class];
        $this->ArticuloEmpresa = TableRegistry::get('ArticuloEmpresa', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ArticuloEmpresa);

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
