<?php
namespace App\Model\Entity;

use App\Lib\Status;
use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\Entity;
use CkTools\Utility\TypeAwareTrait;

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

    const ROLE_ADMIN = 'admin';
    const ROLE_USER = 'user';
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
            self::ROLE_USER => __('user.role.user'),
        ];
    }

    /**
     * Returns a map of possible roles for a user with descriptions
     *
     * @return array
     */
    public static function getRoles()
    {
        return self::getTypeMap(self::ROLE_USER, self::ROLE_ADMIN);
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
    protected function _getRole()
    {
        return 'admin';
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
