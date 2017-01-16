<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Tenant Entity
 *
 * @property int $id
 * @property int $person_id
 * @property int $room_id
 * @property \Cake\I18n\Time $date_move_in
 * @property \Cake\I18n\Time $date_move_out
 * @property string $tenant_type
 * @property string $comment
 *
 * @property \App\Model\Entity\Person $person
 * @property \App\Model\Entity\Room $room
 */
class Tenant extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}
