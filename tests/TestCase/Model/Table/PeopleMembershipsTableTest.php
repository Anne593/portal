<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PeopleMembershipsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PeopleMembershipsTable Test Case
 */
class PeopleMembershipsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PeopleMembershipsTable
     */
    public $PeopleMemberships;

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
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('PeopleMemberships') ? [] : ['className' => 'App\Model\Table\PeopleMembershipsTable'];
        $this->PeopleMemberships = TableRegistry::get('PeopleMemberships', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PeopleMemberships);

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
