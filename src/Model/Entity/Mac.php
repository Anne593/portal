<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Mac Entity
 *
 * @property int $id
 * @property int $person_id
 * @property string $mac
 * @property string $device_name
 *
 * @property \App\Model\Entity\Person $person
 * @property \App\Model\Entity\Ip[] $ips
 */
class Mac extends Entity
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
