<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Person Entity
 *
 * @property int $id
 * @property string $surname
 * @property string $forename
 * @property string $email
 * @property \Cake\I18n\Time $birthday
 * @property string $matriculation_number
 * @property int $studentenwerk_identification
 * @property string $nationality
 * @property string $sex
 * @property int $eth_unlocked_primary
 * @property string $password
 * @property int $password_retrieval
 * @property string $status
 * @property int $failed_login_count
 * @property \Cake\I18n\Time $failed_login_timestamp
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 * @property string $last_passwords
 *
 * @property \App\Model\Entity\FileserverUser[] $fileserver_users
 * @property \App\Model\Entity\HouseContibution[] $house_contibution
 * @property \App\Model\Entity\Mac[] $macs
 * @property \App\Model\Entity\PeopleNetwork[] $people_network
 * @property \App\Model\Entity\Tenant[] $tenants
 * @property \App\Model\Entity\UserRole[] $user_roles
 * @property \App\Model\Entity\Roomkey[] $roomkeys
 * @property \App\Model\Entity\WorkingGroup[] $working_groups
 */
class Person extends Entity
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

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];
}
