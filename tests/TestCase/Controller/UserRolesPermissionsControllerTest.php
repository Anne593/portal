<?php
namespace App\Test\TestCase\Controller;

use App\Controller\UserRolesPermissionsController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\UserRolesPermissionsController Test Case
 */
class UserRolesPermissionsControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.user_roles_permissions',
        'app.user_roles',
        'app.people',
        'app.fileserver_users',
        'app.house_contibution',
        'app.macs',
        'app.ips',
        'app.people_network',
        'app.memberships',
        'app.people_network_memberships',
        'app.networkinfos',
        'app.tenants',
        'app.rooms',
        'app.people_user_roles',
        'app.roomkeys',
        'app.roomkeys_people',
        'app.working_groups',
        'app.working_groups_people',
        'app.workshops',
        'app.permissions'
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
