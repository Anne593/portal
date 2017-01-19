<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * UserRole Entity
 *
 * @property int $id
 * @property string $title
 *
 * @property \App\Model\Entity\Person[] $people
 * @property \App\Model\Entity\Permission[] $permissions
 * @property \App\Model\Entity\PeopleUserRole[] $people_user_roles
 * @property \App\Model\Entity\UserRolesPermission[] $user_roles_permissions
 */
class UserRole extends Entity
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
