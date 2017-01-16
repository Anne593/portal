<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Emailtext Entity
 *
 * @property int $id
 * @property string $topic
 * @property string $subject
 * @property string $text
 * @property string $resume_email
 * @property int $deadline
 *
 * @property \App\Model\Entity\EmailtextGroup[] $emailtext_groups
 * @property \App\Model\Entity\EmailtextUser[] $emailtext_users
 */
class Emailtext extends Entity
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
