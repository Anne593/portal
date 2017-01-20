<?php
use Migrations\AbstractSeed;

/**
 * Ips seed.
 */
class IpsSeed extends AbstractSeed
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
                'mac_id' => '1',
                'ip' => '123.123.5.5',
                'lease_start' => '2017-01-19 21:31:00',
                'lease_end' => '2017-01-27 21:31:00',
            ],
        ];

        $table = $this->table('ips');
        $table->insert($data)->save();
    }
}
