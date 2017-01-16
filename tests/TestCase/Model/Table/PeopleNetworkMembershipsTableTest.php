<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PeopleNetworkMembershipsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PeopleNetworkMembershipsTable Test Case
 */
class PeopleNetworkMembershipsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PeopleNetworkMembershipsTable
     */
    public $PeopleNetworkMemberships;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.people_network_memberships',
        'app.networkinfos',
        'app.memberships',
        'app.people_network',
        'app.people',
        'app.fileserver_users',
        'app.house_contibution',
        'app.macs',
        'app.ips',
        'app.tenants',
        'app.user_roles',
        'app.people_user_roles',
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
        $config = TableRegistry::exists('PeopleNetworkMemberships') ? [] : ['className' => 'App\Model\Table\PeopleNetworkMembershipsTable'];
        $this->PeopleNetworkMemberships = TableRegistry::get('PeopleNetworkMemberships', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PeopleNetworkMemberships);

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
