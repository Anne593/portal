<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ModelHistory Entity
 *
 * @property string $id
 * @property string $model
 * @property string $foreign_key
 * @property string $user_id
 * @property string $action
 * @property string $data
 * @property string $context
 * @property string $context_type
 * @property string $context_slug
 * @property int $revision
 * @property \Cake\I18n\Time $created
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Phinxlog[] $phinxlog
 */
class ModelHistory extends Entity
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
