<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * HouseContibution Model
 *
 * @property \Cake\ORM\Association\BelongsTo $People
 *
 * @method \App\Model\Entity\HouseContibution get($primaryKey, $options = [])
 * @method \App\Model\Entity\HouseContibution newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\HouseContibution[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\HouseContibution|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\HouseContibution patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\HouseContibution[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\HouseContibution findOrCreate($search, callable $callback = null, $options = [])
 */
class HouseContibutionTable extends Table
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

        $this->table('house_contibution');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('People', [
            'foreignKey' => 'person_id',
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
            ->allowEmpty('semester');

        $validator
            ->boolean('payment')
            ->requirePresence('payment', 'create')
            ->notEmpty('payment');

        $validator
            ->boolean('social_service')
            ->requirePresence('social_service', 'create')
            ->notEmpty('social_service');

        $validator
            ->requirePresence('social_service_comment', 'create')
            ->notEmpty('social_service_comment');

        $validator
            ->boolean('new_tenant_bar')
            ->requirePresence('new_tenant_bar', 'create')
            ->notEmpty('new_tenant_bar');

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

        return $rules;
    }
}
