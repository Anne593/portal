<?php
use Migrations\AbstractSeed;

/**
 * UserRoles seed.
 */
class UserRolesSeed extends AbstractSeed
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
                'title' => 'admin',
            ],
            [
                'id' => '2',
                'title' => 'network',
            ],
            [
                'id' => '3',
                'title' => 'house_representative',
            ],
            [
                'id' => '4',
                'title' => 'working_group_representative',
            ],
            [
                'id' => '5',
                'title' => 'tenant',
            ],
            [
                'id' => '6',
                'title' => 'assignment_committee',
            ],
            [
                'id' => '7',
                'title' => 'housekeeper',
            ],
        ];

        $table = $this->table('user_roles');
        $table->insert($data)->save();
    }
}
