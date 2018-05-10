<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CatalogoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CatalogoTable Test Case
 */
class CatalogoTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CatalogoTable
     */
    public $Catalogo;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.catalogo'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Catalogo') ? [] : ['className' => CatalogoTable::class];
        $this->Catalogo = TableRegistry::get('Catalogo', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Catalogo);

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
