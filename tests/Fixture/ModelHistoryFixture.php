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
        'model' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'e.g. \\"Installation\\"', 'precision' => null, 'fixed' => null],
        'foreign_key' => ['type' => 'uuid', 'length' => null, 'null' => true, 'default' => null, 'comment' => 'uuid', 'precision' => null],
        'user_id' => ['type' => 'uuid', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'action' => ['type' => 'string', 'length' => 45, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'e.g. \\"create\\", \\"update\\", \\"delete\\"', 'precision' => null, 'fixed' => null],
        'data' => ['type' => 'text', 'length' => 16777215, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'JSON text, schema per action', 'precision' => null],
        'context' => ['type' => 'text', 'length' => 16777215, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'JSON text, schema per action', 'precision' => null],
        'context_type' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'e.g. \\"controller\\", \\"shell\\"', 'precision' => null, 'fixed' => null],
        'context_slug' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'e.g. \\"Admin/Users/reset_password\\"', 'precision' => null, 'fixed' => null],
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
            'id' => '329c3534-6f9a-4ad9-85cd-38ae10d12614',
            'model' => 'Lorem ipsum dolor sit amet',
            'foreign_key' => '52a81846-aced-43f0-9cfe-60e0de3e7527',
            'user_id' => 'ce42a369-8b65-4c26-987d-66ebbcb42ec4',
            'action' => 'Lorem ipsum dolor sit amet',
            'data' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'context' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'context_type' => 'Lorem ipsum dolor sit amet',
            'context_slug' => 'Lorem ipsum dolor sit amet',
            'revision' => 1,
            'created' => '2017-01-15 22:59:16'
        ],
    ];
}
