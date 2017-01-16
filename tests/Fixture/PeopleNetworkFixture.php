<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PeopleNetworkFixture
 *
 */
class PeopleNetworkFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'people_network';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 10, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'person_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'data_access' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'mail_access' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'tim' => ['type' => 'string', 'length' => 10, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'eth_unlocked_primary' => ['type' => 'text', 'length' => null, 'null' => false, 'default' => 'egal', 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null],
        'comment' => ['type' => 'string', 'length' => 50, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'latin1_swedish_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => 1,
            'person_id' => 1,
            'data_access' => 1,
            'mail_access' => 1,
            'tim' => 'Lorem ip',
            'eth_unlocked_primary' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'comment' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
