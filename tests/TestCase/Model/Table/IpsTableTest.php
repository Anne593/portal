<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\IpsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\IpsTable Test Case
 */
class IpsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\IpsTable
     */
    public $Ips;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ips',
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
        $config = TableRegistry::exists('Ips') ? [] : ['className' => 'App\Model\Table\IpsTable'];
        $this->Ips = TableRegistry::get('Ips', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Ips);

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
