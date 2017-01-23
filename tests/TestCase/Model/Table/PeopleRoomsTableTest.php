<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PeopleRoomsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PeopleRoomsTable Test Case
 */
class PeopleRoomsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PeopleRoomsTable
     */
    public $PeopleRooms;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.people_rooms',
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
        $config = TableRegistry::exists('PeopleRooms') ? [] : ['className' => 'App\Model\Table\PeopleRoomsTable'];
        $this->PeopleRooms = TableRegistry::get('PeopleRooms', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PeopleRooms);

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
