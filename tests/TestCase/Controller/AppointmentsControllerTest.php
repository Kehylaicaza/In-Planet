<?php
namespace App\Test\TestCase\Controller;

use App\Controller\AppointmentsController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\AppointmentsController Test Case
 */
class AppointmentsControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.appointments',
        'app.clients',
        'app.users',
        'app.people',
        'app.cities',
        'app.profiles',
        'app.option_profiles',
        'app.options',
        'app.employees',
        'app.departments',
        'app.typeofemployees',
        'app.instalations',
        'app.modems',
        'app.internet_services',
        'app.payements',
        'app.plans',
        'app.contracts'
    ];

    /**
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
