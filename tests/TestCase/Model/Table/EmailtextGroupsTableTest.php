<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EmailtextGroupsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EmailtextGroupsTable Test Case
 */
class EmailtextGroupsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EmailtextGroupsTable
     */
    public $EmailtextGroups;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.emailtext_groups',
        'app.emailtexts',
        'app.groups'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('EmailtextGroups') ? [] : ['className' => 'App\Model\Table\EmailtextGroupsTable'];
        $this->EmailtextGroups = TableRegistry::get('EmailtextGroups', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->EmailtextGroups);

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
