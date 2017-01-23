<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * WorkingGroupsPerson Entity
 *
 * @property int $id
 * @property int $person_id
 * @property int $working_group_id
 * @property \Cake\I18n\Time $member_since
 * @property \Cake\I18n\Time $member_until
 * @property string $type
 * @property string $comment
 * @property bool $mailing_list_enabled
 *
 * @property \App\Model\Entity\Person $person
 * @property \App\Model\Entity\WorkingGroup $working_group
 */
class WorkingGroupsPerson extends Entity
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
