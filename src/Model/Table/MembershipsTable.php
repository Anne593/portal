<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Memberships Model
 *
 * @property \Cake\ORM\Association\BelongsToMany $People
 *
 * @method \App\Model\Entity\Membership get($primaryKey, $options = [])
 * @method \App\Model\Entity\Membership newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Membership[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Membership|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Membership patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Membership[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Membership findOrCreate($search, callable $callback = null, $options = [])
 */
class MembershipsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('memberships');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->belongsToMany('People', [
            'foreignKey' => 'membership_id',
            'targetForeignKey' => 'person_id',
            'joinTable' => 'people_memberships'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->requirePresence('type', 'create')
            ->notEmpty('type');

        $validator
            ->requirePresence('description', 'create')
            ->notEmpty('description');

        $validator
            ->integer('membership_fee')
            ->requirePresence('membership_fee', 'create')
            ->notEmpty('membership_fee');

        return $validator;
    }
}
