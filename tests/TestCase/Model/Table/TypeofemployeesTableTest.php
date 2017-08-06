<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TypeofemployeesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TypeofemployeesTable Test Case
 */
class TypeofemployeesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TypeofemployeesTable
     */
    public $Typeofemployees;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.typeofemployees'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Typeofemployees') ? [] : ['className' => TypeofemployeesTable::class];
        $this->Typeofemployees = TableRegistry::get('Typeofemployees', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Typeofemployees);

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
