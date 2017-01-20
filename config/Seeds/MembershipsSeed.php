<?php
use Migrations\AbstractSeed;

/**
 * Memberships seed.
 */
class MembershipsSeed extends AbstractSeed
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
                'name' => 'Ruhendes Mitglied',
                'description' => 'hat keine Rechte und Pflichten im Verein',
                'membership_fee' => '0',
            ],
            [
                'id' => '2',
                'name' => 'Ehrenmitglied',
                'description' => 'hat sich um besondere Dienste um das Wohlergehen des Wohnheim behauptet und zahlt dadruch keinen Beitrag mehr und hat noch rechte',
                'membership_fee' => '0',
            ],
        ];

        $table = $this->table('memberships');
        $table->insert($data)->save();
    }
}
