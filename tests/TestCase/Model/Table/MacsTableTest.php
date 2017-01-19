<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MacsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MacsTable Test Case
 */
class MacsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MacsTable
     */
    public $Macs;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.macs',
        'app.people',
        'app.fileserver_users',
        'app.house_contibution',
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
        'app.working_groups',
        'app.working_groups_people',
        'app.workshops',
        'app.ips'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Macs') ? [] : ['className' => 'App\Model\Table\MacsTable'];
        $this->Macs = TableRegistry::get('Macs', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Macs);

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
