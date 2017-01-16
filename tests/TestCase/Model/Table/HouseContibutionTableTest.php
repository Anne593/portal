<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\HouseContibutionTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\HouseContibutionTable Test Case
 */
class HouseContibutionTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\HouseContibutionTable
     */
    public $HouseContibution;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.house_contibution',
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
        $config = TableRegistry::exists('HouseContibution') ? [] : ['className' => 'App\Model\Table\HouseContibutionTable'];
        $this->HouseContibution = TableRegistry::get('HouseContibution', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->HouseContibution);

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
