<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * FileserverUser Entity
 *
 * @property int $id
 * @property int $person_id
 * @property string $username
 * @property string $password
 * @property bool $vip
 * @property bool $accepted
 * @property bool $active
 * @property \Cake\I18n\Time $created
 * @property int $password_retrieval
 *
 * @property \App\Model\Entity\Person $person
 */
class FileserverUser extends Entity
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
