<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PeopleMemberships Model
 *
 * @property \Cake\ORM\Association\BelongsTo $People
 * @property \Cake\ORM\Association\BelongsTo $Memberships
 *
 * @method \App\Model\Entity\PeopleMembership get($primaryKey, $options = [])
 * @method \App\Model\Entity\PeopleMembership newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\PeopleMembership[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PeopleMembership|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PeopleMembership patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PeopleMembership[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\PeopleMembership findOrCreate($search, callable $callback = null, $options = [])
 */
class PeopleMembershipsTable extends Table
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

        $this->table('people_memberships');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('People', [
            'foreignKey' => 'person_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Memberships', [
            'foreignKey' => 'membership_id',
            'joinType' => 'INNER'
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
            ->integer('semester')
            ->requirePresence('semester', 'create')
            ->notEmpty('semester');

        $validator
            ->boolean('payment')
            ->requirePresence('payment', 'create')
            ->notEmpty('payment');

        $validator
            ->integer('social_service')
            ->requirePresence('social_service', 'create')
            ->notEmpty('social_service');

        $validator
            ->requirePresence('social_service_comment', 'create')
            ->notEmpty('social_service_comment');

        $validator
            ->requirePresence('comment', 'create')
            ->notEmpty('comment');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['person_id'], 'People'));
        $rules->add($rules->existsIn(['membership_id'], 'Memberships'));

        return $rules;
    }
}
