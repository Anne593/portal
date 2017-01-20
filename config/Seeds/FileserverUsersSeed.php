<?php
use Migrations\AbstractSeed;

/**
 * FileserverUsers seed.
 */
class FileserverUsersSeed extends AbstractSeed
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
                'person_id' => '1',
                'username' => 'AnneKaffeKanne',
                'password' => 'test',
                'vip' => '1',
                'accepted' => '1',
                'active' => '1',
                'created' => '2017-01-19 23:22:25',
                'password_retrieval' => NULL,
            ],
        ];

        $table = $this->table('fileserver_users');
        $table->insert($data)->save();
    }
}
