<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ModelHistoryFixture
 *
 */
class ModelHistoryFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'model_history';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'model' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'e.g. \\\\"Installation\\\\"', 'precision' => null, 'fixed' => null],
        'foreign_key' => ['type' => 'uuid', 'length' => null, 'null' => true, 'default' => null, 'comment' => 'uuid', 'precision' => null],
        'user_id' => ['type' => 'uuid', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'action' => ['type' => 'string', 'length' => 45, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'e.g. \\\\"create\\\\", \\\\"update\\\\", \\\\"delete\\\\"', 'precision' => null, 'fixed' => null],
        'data' => ['type' => 'text', 'length' => 16777215, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'JSON text, schema per action', 'precision' => null],
        'context' => ['type' => 'text', 'length' => 16777215, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'JSON text, schema per action', 'precision' => null],
        'context_type' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'e.g. \\\\"controller\\\\", \\\\"shell\\\\"', 'precision' => null, 'fixed' => null],
        'context_slug' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'e.g. \\\\"Admin/Users/reset_password\\\\"', 'precision' => null, 'fixed' => null],
        'revision' => ['type' => 'integer', 'length' => 8, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
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
            'id' => 'd46ac4fa-0af4-49c1-bf4b-44eddc774a61',
            'model' => 'Lorem ipsum dolor sit amet',
            'foreign_key' => 'f28fc253-85f5-41b4-9801-fa41134221c1',
            'user_id' => '451d088d-226f-456d-911d-978a5203b673',
            'action' => 'Lorem ipsum dolor sit amet',
            'data' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'context' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'context_type' => 'Lorem ipsum dolor sit amet',
            'context_slug' => 'Lorem ipsum dolor sit amet',
            'revision' => 1,
            'created' => '2017-01-19 01:18:11'
        ],
    ];
}
