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
                'title' => 'netzwerk',
            ],
            [
                'id' => '3',
                'title' => 'haussprecher',
            ],
            [
                'id' => '4',
                'title' => 'ag-sprecher',
            ],
            [
                'id' => '5',
                'title' => 'bewohner',
            ],
            [
                'id' => '6',
                'title' => 'belegungsausschluss',
            ],
            [
                'id' => '7',
                'title' => 'hausmeister',
            ],
        ];

        $table = $this->table('user_roles');
        $table->insert($data)->save();
    }
}
