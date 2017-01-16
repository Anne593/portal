<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * PeopleNetwork Entity
 *
 * @property int $id
 * @property int $person_id
 * @property bool $data_access
 * @property bool $mail_access
 * @property string $tim
 * @property string $eth_unlocked_primary
 * @property string $comment
 *
 * @property \App\Model\Entity\Person $person
 * @property \App\Model\Entity\Membership[] $memberships
 */
class PeopleNetwork extends Entity
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
