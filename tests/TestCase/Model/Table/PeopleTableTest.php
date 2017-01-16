<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PeopleTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PeopleTable Test Case
 */
class PeopleTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PeopleTable
     */
    public $People;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.people',
        'app.fileserver_users',
        'app.house_contibution',
        'app.macs',
        'app.ips',
        'app.people_network',
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
        $config = TableRegistry::exists('People') ? [] : ['className' => 'App\Model\Table\PeopleTable'];
        $this->People = TableRegistry::get('People', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->People);

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
