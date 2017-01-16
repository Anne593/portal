<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\JosegonzalezCakeQueuesadillaPhinxlogTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\JosegonzalezCakeQueuesadillaPhinxlogTable Test Case
 */
class JosegonzalezCakeQueuesadillaPhinxlogTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\JosegonzalezCakeQueuesadillaPhinxlogTable
     */
    public $JosegonzalezCakeQueuesadillaPhinxlog;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.josegonzalez_cake_queuesadilla_phinxlog'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('JosegonzalezCakeQueuesadillaPhinxlog') ? [] : ['className' => 'App\Model\Table\JosegonzalezCakeQueuesadillaPhinxlogTable'];
        $this->JosegonzalezCakeQueuesadillaPhinxlog = TableRegistry::get('JosegonzalezCakeQueuesadillaPhinxlog', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->JosegonzalezCakeQueuesadillaPhinxlog);

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
