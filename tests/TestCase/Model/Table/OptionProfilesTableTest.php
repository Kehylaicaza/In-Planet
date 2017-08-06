<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OptionProfilesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OptionProfilesTable Test Case
 */
class OptionProfilesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\OptionProfilesTable
     */
    public $OptionProfiles;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.option_profiles',
        'app.options',
        'app.profiles'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('OptionProfiles') ? [] : ['className' => OptionProfilesTable::class];
        $this->OptionProfiles = TableRegistry::get('OptionProfiles', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->OptionProfiles);

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
