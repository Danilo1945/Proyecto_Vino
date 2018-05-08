<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SocioTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SocioTable Test Case
 */
class SocioTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SocioTable
     */
    public $Socio;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.socio'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Socio') ? [] : ['className' => SocioTable::class];
        $this->Socio = TableRegistry::get('Socio', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Socio);

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
