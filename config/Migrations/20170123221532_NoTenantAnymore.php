<?php
use Migrations\AbstractMigration;

class NoTenantAnymore extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $this->table('tenants')->drop();
        $this->table('people_rooms')
            ->addPrimaryKey(['id'])
            ->addColumn('person_id', 'integer', [
                'comment' => 'foreign key persons',
                'default' => null,
                'limit' => 11,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('room_id', 'integer', [
                'comment' => 'foreign key rooms',
                'default' => null,
                'limit' => 4,
                'null' => false,
                'signed' => false,
            ])
            ->addColumn('date_move_in', 'date', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('date_move_out', 'date', [
                'comment' => 'pflicht fuer untermieter!',
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('tenant_type', 'text', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('comment', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addIndex(
                [
                    'room_id',
                ]
            )
            ->addIndex(
                [
                    'person_id',
                ]
            )
            ->create();

    }
}
