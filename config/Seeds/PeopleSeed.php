<?php
use Migrations\AbstractSeed;

/**
 * Users seed.
 */
class PeopleSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id' => '1',
                'status' => 'active',
                'forename' => 'Anne',
                'surname' => 'Heimes',
                'email' => 'anne.heimes@hilton.rwth-aachen.de',
                'password' => $this->_getDefaultPassword(),
                'last_passwords' => null,
                'password_retrieval' => null,
                'failed_login_count' => 0,
                'matriculation_number' => 331100,
                'studentenwerk_identification' => 1234567,
                'failed_login_timestamp' => null,
                'birthday' => '1994-11-29 00:00:00',
                'created' => '2017-01-15 11:11:11',
                'modified' => '2017-01-15 11:11:11'
            ],
            [
                'id' => '2',
                'status' => 'active',
                'forename' => 'Lukas',
                'surname' => 'Malcher',
                'email' => 'lukas.malcher@hilton.rwth-aachen.de',
                'password' => $this->_getDefaultPassword(),
                'last_passwords' => null,
                'password_retrieval' => null,
                'failed_login_count' => 0,
                'matriculation_number' => 331101,
                'studentenwerk_identification' => 1234568,
                'failed_login_timestamp' => null,
                'birthday' => '1994-03-03 00:00:00',
                'created' => '2017-01-15 11:11:11',
                'modified' => '2017-01-15 11:11:11'
            ],
            [
                'id' => '3',
                'status' => 'active',
                'forename' => 'Matthias',
                'surname' => 'Klein',
                'email' => 'mk@hilton.rwth-aachen.de',
                'password' => $this->_getDefaultPassword(),
                'last_passwords' => null,
                'password_retrieval' => null,
                'failed_login_count' => 0,
                'matriculation_number' => 331102,
                'studentenwerk_identification' => 1234569,
                'failed_login_timestamp' => null,
                'birthday' => '1994-03-03 00:00:00',
                'created' => '2017-01-15 11:11:11',
                'modified' => '2017-01-15 11:11:11'
            ]
        ];

        $table = $this->table('people');
        $table->insert($data)->save();

        $data = [
            [
                'id' => '1',
                'title' => 'admin'
            ],
            [
                'id' => '2',
                'title' => 'netzwerk'
            ],
            [
                'id' => '3',
                'title' => 'haussprecher'
            ],
            [
                'id' => '4',
                'title' => 'ag-sprecher'
            ],
            [
                'id' => '5',
                'title' => 'bewohner'
            ],
            [
                'id' => '6',
                'title' => 'belegungsausschluss'
            ],
            [
                'id' => '7',
                'title' => 'hausmeister'
            ],
        ];

        $table = $this->table('user_roles');
        $table->insert($data)->save();

        $data = [
            [
                'id' => '1',
                'person_id' => '1',
                'user_role_id' => '1'
            ],
            [
                'id' => '2',
                'person_id' => '2',
                'user_role_id' => '1'
            ],
            [
                'id' => '3',
                'person_id' => '3',
                'user_role_id' => '5'
            ],
        ];

        $table = $this->table('people_user_roles');
        $table->insert($data)->save();
    }

    /**
     * Get the default password
     *
     * @return string
     */
    protected function _getDefaultPassword()
    {
        return (new \Cake\Auth\DefaultPasswordHasher())->hash('password');
    }
}
