<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\WorkingGroupsPeopleTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\WorkingGroupsPeopleTable Test Case
 */
class WorkingGroupsPeopleTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\WorkingGroupsPeopleTable
     */
    public $WorkingGroupsPeople;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.working_groups_people',
        'app.people',
        'app.fileserver_users',
        'app.macs',
        'app.ips',
        'app.model_history',
        'app.tenants',
        'app.rooms',
        'app.memberships',
        'app.people_memberships',
        'app.user_roles',
        'app.people_user_roles',
        'app.permissions',
        'app.user_roles_permissions',
        'app.roomkeys',
        'app.roomkeys_people',
        'app.working_groups'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('WorkingGroupsPeople') ? [] : ['className' => 'App\Model\Table\WorkingGroupsPeopleTable'];
        $this->WorkingGroupsPeople = TableRegistry::get('WorkingGroupsPeople', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->WorkingGroupsPeople);

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

    /**
     * Test beforeMarshal method
     *
     * @return void
     */
    public function testBeforeMarshal()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
