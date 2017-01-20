<?php
namespace App\Test\TestCase\Controller;

use App\Controller\PeopleMembershipsController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\PeopleMembershipsController Test Case
 */
class PeopleMembershipsControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.people_memberships',
        'app.people',
        'app.fileserver_users',
        'app.macs',
        'app.ips',
        'app.tenants',
        'app.rooms',
        'app.memberships',
        'app.user_roles',
        'app.people_user_roles',
        'app.permissions',
        'app.user_roles_permissions',
        'app.roomkeys',
        'app.roomkeys_people',
        'app.working_groups',
        'app.working_groups_people'
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
