<?php
use Migrations\AbstractSeed;

/**
 * EmailtextGroups seed.
 */
class EmailtextGroupsSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id' => '1',
                'emailtext_id' => '1',
                'group_id' => '1',
            ],
        ];

        $table = $this->table('emailtext_groups');
        $table->insert($data)->save();
    }
}
