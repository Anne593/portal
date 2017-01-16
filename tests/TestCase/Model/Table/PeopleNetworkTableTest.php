<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PeopleNetworkTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PeopleNetworkTable Test Case
 */
class PeopleNetworkTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PeopleNetworkTable
     */
    public $PeopleNetwork;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
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
        'app.working_groups_people',
        'app.memberships',
        'app.people_network_memberships'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('PeopleNetwork') ? [] : ['className' => 'App\Model\Table\PeopleNetworkTable'];
        $this->PeopleNetwork = TableRegistry::get('PeopleNetwork', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PeopleNetwork);

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
