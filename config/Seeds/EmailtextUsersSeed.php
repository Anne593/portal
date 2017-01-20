<?php
use Migrations\AbstractSeed;

/**
 * EmailtextUsers seed.
 */
class EmailtextUsersSeed extends AbstractSeed
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
                'type' => 'People',
                'typeId' => '2',
            ],
        ];

        $table = $this->table('emailtext_users');
        $table->insert($data)->save();
    }
}
