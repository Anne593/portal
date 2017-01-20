<?php
use Migrations\AbstractSeed;

/**
 * Macs seed.
 */
class MacsSeed extends AbstractSeed
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
                'person_id' => '3',
                'mac' => '12345678',
                'device_name' => 'wifi',
            ],
        ];

        $table = $this->table('macs');
        $table->insert($data)->save();
    }
}
