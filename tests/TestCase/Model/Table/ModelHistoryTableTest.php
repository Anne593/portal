<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ModelHistoryTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ModelHistoryTable Test Case
 */
class ModelHistoryTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ModelHistoryTable
     */
    public $ModelHistory;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.model_history',
        'app.users',
        'app.phinxlog',
        'app.model_history_phinxlog'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ModelHistory') ? [] : ['className' => 'App\Model\Table\ModelHistoryTable'];
        $this->ModelHistory = TableRegistry::get('ModelHistory', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ModelHistory);

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
