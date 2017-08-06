<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PayementsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PayementsTable Test Case
 */
class PayementsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PayementsTable
     */
    public $Payements;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.payements',
        'app.plans',
        'app.clients',
        'app.users',
        'app.appointments',
        'app.employees',
        'app.departments',
        'app.typeofemployees',
        'app.instalations',
        'app.modems',
        'app.internet_services',
        'app.contracts'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Payements') ? [] : ['className' => PayementsTable::class];
        $this->Payements = TableRegistry::get('Payements', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Payements);

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
