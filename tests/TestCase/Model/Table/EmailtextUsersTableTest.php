<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EmailtextUsersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EmailtextUsersTable Test Case
 */
class EmailtextUsersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EmailtextUsersTable
     */
    public $EmailtextUsers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.emailtext_users',
        'app.emailtexts',
        'app.types'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('EmailtextUsers') ? [] : ['className' => 'App\Model\Table\EmailtextUsersTable'];
        $this->EmailtextUsers = TableRegistry::get('EmailtextUsers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->EmailtextUsers);

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
