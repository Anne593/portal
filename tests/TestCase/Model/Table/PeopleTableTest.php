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
        'app.memberships',
        'app.people_network_memberships',
        'app.networkinfos',
        'app.tenants',
        'app.rooms',
        'app.user_roles',
        'app.people_user_roles',
        'app.permissions',
        'app.user_roles_permissions',
        'app.roomkeys',
        'app.roomkeys_people',
        'app.working_groups',
        'app.working_groups_people',
        'app.workshops'
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

    /**
     * Test validationChangePassword method
     *
     * @return void
     */
    public function testValidationChangePassword()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationResetPassword method
     *
     * @return void
     */
    public function testValidationResetPassword()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationPassword method
     *
     * @return void
     */
    public function testValidationPassword()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test beforeSave method
     *
     * @return void
     */
    public function testBeforeSave()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test resetLoginRetries method
     *
     * @return void
     */
    public function testResetLoginRetries()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test hasLoginRetriesLock method
     *
     * @return void
     */
    public function testHasLoginRetriesLock()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test resetLoginRetriesListener method
     *
     * @return void
     */
    public function testResetLoginRetriesListener()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test getPersonByEmail method
     *
     * @return void
     */
    public function testGetPersonByEmail()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test increaseLoginRetries method
     *
     * @return void
     */
    public function testIncreaseLoginRetries()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test findAuth method
     *
     * @return void
     */
    public function testFindAuth()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test resetPassword method
     *
     * @return void
     */
    public function testResetPassword()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test changePassword method
     *
     * @return void
     */
    public function testChangePassword()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test getHash method
     *
     * @return void
     */
    public function testGetHash()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test sendForgotPasswordEmail method
     *
     * @return void
     */
    public function testSendForgotPasswordEmail()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test softDelete method
     *
     * @return void
     */
    public function testSoftDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
