<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PeopleUserRolesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PeopleUserRolesTable Test Case
 */
class PeopleUserRolesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PeopleUserRolesTable
     */
    public $PeopleUserRoles;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.people_user_roles',
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
        'app.user_roles',
        'app.roomkeys',
        'app.roomkeys_people',
        'app.working_groups',
        'app.working_groups_people'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('PeopleUserRoles') ? [] : ['className' => 'App\Model\Table\PeopleUserRolesTable'];
        $this->PeopleUserRoles = TableRegistry::get('PeopleUserRoles', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PeopleUserRoles);

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
