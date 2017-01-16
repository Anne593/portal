<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\WorkingGroupsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\WorkingGroupsTable Test Case
 */
class WorkingGroupsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\WorkingGroupsTable
     */
    public $WorkingGroups;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.working_groups',
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
        'app.user_roles',
        'app.people_user_roles',
        'app.permissions',
        'app.user_roles_permissions',
        'app.roomkeys',
        'app.roomkeys_people',
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
        $config = TableRegistry::exists('WorkingGroups') ? [] : ['className' => 'App\Model\Table\WorkingGroupsTable'];
        $this->WorkingGroups = TableRegistry::get('WorkingGroups', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->WorkingGroups);

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
