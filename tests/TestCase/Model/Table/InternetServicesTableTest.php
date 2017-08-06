<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\InternetServicesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\InternetServicesTable Test Case
 */
class InternetServicesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\InternetServicesTable
     */
    public $InternetServices;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.internet_services',
        'app.clients',
        'app.users',
        'app.appointments',
        'app.employees',
        'app.departments',
        'app.typeofemployees',
        'app.instalations',
        'app.modems',
        'app.contracts',
        'app.payements'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('InternetServices') ? [] : ['className' => InternetServicesTable::class];
        $this->InternetServices = TableRegistry::get('InternetServices', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->InternetServices);

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
