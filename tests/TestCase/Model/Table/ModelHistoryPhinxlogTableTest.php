<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ModelHistoryPhinxlogTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ModelHistoryPhinxlogTable Test Case
 */
class ModelHistoryPhinxlogTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ModelHistoryPhinxlogTable
     */
    public $ModelHistoryPhinxlog;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
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
        $config = TableRegistry::exists('ModelHistoryPhinxlog') ? [] : ['className' => 'App\Model\Table\ModelHistoryPhinxlogTable'];
        $this->ModelHistoryPhinxlog = TableRegistry::get('ModelHistoryPhinxlog', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ModelHistoryPhinxlog);

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
