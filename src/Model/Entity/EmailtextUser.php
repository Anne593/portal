<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * EmailtextUser Entity
 *
 * @property int $id
 * @property int $emailtext_id
 * @property string $type
 * @property int $typeId
 *
 * @property \App\Model\Entity\Emailtext $emailtext
 */
class EmailtextUser extends Entity
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
