<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\InstalationsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\InstalationsTable Test Case
 */
class InstalationsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\InstalationsTable
     */
    public $Instalations;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.instalations',
        'app.clients',
        'app.users',
        'app.appointments',
        'app.employees',
        'app.departments',
        'app.typeofemployees',
        'app.contracts',
        'app.internet_services',
        'app.payements',
        'app.modems'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Instalations') ? [] : ['className' => InstalationsTable::class];
        $this->Instalations = TableRegistry::get('Instalations', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Instalations);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
