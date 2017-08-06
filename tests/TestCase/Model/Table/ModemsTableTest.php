<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ModemsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ModemsTable Test Case
 */
class ModemsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ModemsTable
     */
    public $Modems;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.modems',
        'app.instalations',
        'app.clients',
        'app.users',
        'app.appointments',
        'app.employees',
        'app.departments',
        'app.typeofemployees',
        'app.contracts',
        'app.internet_services',
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
        $config = TableRegistry::exists('Modems') ? [] : ['className' => ModemsTable::class];
        $this->Modems = TableRegistry::get('Modems', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Modems);

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
