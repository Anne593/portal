<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EmailtextsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EmailtextsTable Test Case
 */
class EmailtextsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EmailtextsTable
     */
    public $Emailtexts;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.emailtexts',
        'app.emailtext_groups',
        'app.groups',
        'app.emailtext_users',
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
        $config = TableRegistry::exists('Emailtexts') ? [] : ['className' => 'App\Model\Table\EmailtextsTable'];
        $this->Emailtexts = TableRegistry::get('Emailtexts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Emailtexts);

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
