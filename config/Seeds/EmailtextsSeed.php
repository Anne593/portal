<?php
use Migrations\AbstractSeed;

/**
 * Emailtexts seed.
 */
class EmailtextsSeed extends AbstractSeed
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
                'topic' => 'welcome',
                'subject' => 'Willkommen im Hilton',
                'text' => 'hallo,
schön das du da bist',
                'resume_email' => 'haussprecher@example.de',
                'deadline' => NULL,
            ],
        ];

        $table = $this->table('emailtexts');
        $table->insert($data)->save();
    }
}
