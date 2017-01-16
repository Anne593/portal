<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UserRolesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UserRolesTable Test Case
 */
class UserRolesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\UserRolesTable
     */
    public $UserRoles;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
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
        'app.permissions',
        'app.user_roles_permissions'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('UserRoles') ? [] : ['className' => 'App\Model\Table\UserRolesTable'];
        $this->UserRoles = TableRegistry::get('UserRoles', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->UserRoles);

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
