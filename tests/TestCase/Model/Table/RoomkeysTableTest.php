<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RoomkeysTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RoomkeysTable Test Case
 */
class RoomkeysTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\RoomkeysTable
     */
    public $Roomkeys;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
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
        'app.roomkeys_people',
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
        $config = TableRegistry::exists('Roomkeys') ? [] : ['className' => 'App\Model\Table\RoomkeysTable'];
        $this->Roomkeys = TableRegistry::get('Roomkeys', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Roomkeys);

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
