<?php
namespace App\Model\Entity;

use App\Lib\Status;
use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\Entity;
use CkTools\Utility\TypeAwareTrait;
use JeremyHarris\LazyLoad\ORM\LazyLoadEntityTrait;
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
    use TypeAwareTrait;
    use LazyLoadEntityTrait;

    const ROLE_ADMIN = 1;
    const ROLE_NETWORK = 2;
    const ROLE_HOUSE_REPRESENTATIVE = 3;
    const ROLE_WORKING_GROUP_REPRESENTATIVE = 4;
    const ROLE_TENANT = 5;
    const ROLE_ASSIGNMENT_COMMITTEE = 6;
    const ROLE_HOUSEKEEPER = 7;

    protected $_virtual = ['full_name', 'role'];
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

    /**
     * Define type descriptions
     *
     * @return array
     */
    public static function typeDescriptions()
    {
        return [
            self::ROLE_ADMIN => __('user.role.admin'),
            self::ROLE_NETWORK => __('user.role.network'),
            self::ROLE_HOUSE_REPRESENTATIVE => __('user.role.house_representative'),
            self::ROLE_WORKING_GROUP_REPRESENTATIVE => __('user.role.working_group_representative'),
            self::ROLE_TENANT => __('user.role.tenant'),
            self::ROLE_ASSIGNMENT_COMMITTEE => __('user.role.assignment_committee'),
            self::ROLE_HOUSEKEEPER => __('user.role.housekeeper'),
        ];
    }

    /**
     * Returns a map of possible roles for a user with descriptions
     *
     * @return array
     */
    public static function getRoles()
    {
        return self::getTypeMap(
            self::ROLE_ADMIN,
            self::ROLE_NETWORK,
            self::ROLE_ASSIGNMENT_COMMITTEE,
            self::ROLE_WORKING_GROUP_REPRESENTATIVE,
            self::ROLE_TENANT,
            self::ROLE_HOUSE_REPRESENTATIVE,
            self::ROLE_HOUSEKEEPER
        );
    }

    /**
     * Returns a map of possible statuses for a user with descriptions
     *
     * @return array
     */
    public static function getStatuses()
    {
        return Status::getMap(Status::ACTIVE, Status::SUSPENDED, Status::DELETED);
    }


    /**
     * Setter for hashed password
     *
     * @param string $password not hashed password
     * @return string
     */
    protected function _setPassword($password)
    {
        if (!empty($password)) {
            $password = (new DefaultPasswordHasher)->hash($password);
        }

        return $password;
    }

    /**
     * Getter for the full name
     *
     * @return string
     */
    protected function _getFullName()
    {
        return $this->forename . ' ' . $this->surname;
    }

    /**
     * Getter for all roles
     *
     * @return string
     */
    protected function _getRoles()
    {
        $roles = [];
        foreach($this->user_roles as $role){
            array_push($roles, $role['id']);
        }
        return $roles;
    }

    /**
     * Api transform for user
     *
     * @return array
     */
    public function apiTransform()
    {
        return [
            'id' => $this->id,
            'api_token' => $this->api_token,
            'status' => $this->status,
            'role' => $this->role,
            'firstname' => $this->firstname,
            'lastname' => $this->lastname,
            'email' => $this->email,
        ];
    }
}
