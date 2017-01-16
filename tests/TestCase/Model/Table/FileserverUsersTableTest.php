<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FileserverUsersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FileserverUsersTable Test Case
 */
class FileserverUsersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\FileserverUsersTable
     */
    public $FileserverUsers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.fileserver_users',
        'app.people'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('FileserverUsers') ? [] : ['className' => 'App\Model\Table\FileserverUsersTable'];
        $this->FileserverUsers = TableRegistry::get('FileserverUsers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->FileserverUsers);

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
