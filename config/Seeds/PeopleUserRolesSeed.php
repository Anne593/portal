<?php
use Migrations\AbstractSeed;

/**
 * PeopleUserRoles seed.
 */
class PeopleUserRolesSeed extends AbstractSeed
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
                'user_role_id' => '1',
            ],
            [
                'id' => '2',
                'person_id' => '2',
                'user_role_id' => '1',
            ],
            [
                'id' => '3',
                'person_id' => '3',
                'user_role_id' => '5',
            ],
            [
                'id' => '4',
                'person_id' => '2',
                'user_role_id' => '5',
            ],
            [
                'id' => '5',
                'person_id' => '2',
                'user_role_id' => '4',
            ],
            [
                'id' => '6',
                'person_id' => '1',
                'user_role_id' => '3',
            ],
            [
                'id' => '7',
                'person_id' => '1',
                'user_role_id' => '5',
            ],
        ];

        $table = $this->table('people_user_roles');
        $table->insert($data)->save();
    }
}
