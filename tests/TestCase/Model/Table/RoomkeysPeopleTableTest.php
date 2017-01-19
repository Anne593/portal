<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RoomkeysPeopleTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RoomkeysPeopleTable Test Case
 */
class RoomkeysPeopleTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\RoomkeysPeopleTable
     */
    public $RoomkeysPeople;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.roomkeys_people',
        'app.roomkeys',
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
        'app.working_groups',
        'app.working_groups_people',
        'app.workshops'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('RoomkeysPeople') ? [] : ['className' => 'App\Model\Table\RoomkeysPeopleTable'];
        $this->RoomkeysPeople = TableRegistry::get('RoomkeysPeople', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->RoomkeysPeople);

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
