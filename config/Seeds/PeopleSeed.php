<?php
use Migrations\AbstractSeed;

/**
 * People seed.
 */
class PeopleSeed extends AbstractSeed
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
                'id' => '3',
                'surname' => 'Müller',
                'forename' => 'Franz',
                'email' => 'mk@example.com',
                'birthday' => '1994-03-03',
                'matriculation_number' => '331102',
                'studentenwerk_identification' => '1234569',
                'password' => '$2y$10$kFqg10Qxa3m.GiU8niklGOq4yIe7lhrYCf1IKUOMf2/Rz2SQLOJSy',
                'password_retrieval' => NULL,
                'status' => 'active',
                'failed_login_count' => '0',
                'failed_login_timestamp' => NULL,
                'created' => '2017-01-15 11:11:11',
                'modified' => '2017-01-15 11:11:11',
                'last_passwords' => NULL,
            ],
            [
                'id' => '2',
                'surname' => 'Stark',
                'forename' => 'Lukas',
                'email' => 'lukas.stark@example.com',
                'birthday' => '1994-03-03',
                'matriculation_number' => '331101',
                'studentenwerk_identification' => '1234568',
                'password' => '$2y$10$UvuzcXN55Q2mT.dllGu2DeIonCj/dCJR7kEXM./vEVnjrH7RtNo8q',
                'password_retrieval' => NULL,
                'status' => 'active',
                'failed_login_count' => '0',
                'failed_login_timestamp' => NULL,
                'created' => '2017-01-15 11:11:11',
                'modified' => '2017-01-17 23:51:08',
                'last_passwords' => NULL,
            ],
            [
                'id' => '1',
                'surname' => 'Snow',
                'forename' => 'Anne',
                'email' => 'anne.snow@example.com',
                'birthday' => '1994-11-29',
                'matriculation_number' => '331100',
                'studentenwerk_identification' => '1234567',
                'password' => '$2y$10$PBXMgv3AOoDk2zGzK/8n0.VKyA9PA4Dxg0ynMMM4tVDwRFxauHN2m',
                'password_retrieval' => NULL,
                'status' => 'active',
                'failed_login_count' => '0',
                'failed_login_timestamp' => NULL,
                'created' => '2017-01-15 11:11:11',
                'modified' => '2017-01-15 11:11:11',
                'last_passwords' => NULL,
            ],
        ];

        $table = $this->table('people');
        $table->insert($data)->save();
    }
}
