<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PeopleNetwork Model
 *
 * @property \Cake\ORM\Association\BelongsTo $People
 * @property \Cake\ORM\Association\BelongsToMany $Memberships
 *
 * @method \App\Model\Entity\PeopleNetwork get($primaryKey, $options = [])
 * @method \App\Model\Entity\PeopleNetwork newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\PeopleNetwork[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PeopleNetwork|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PeopleNetwork patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PeopleNetwork[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\PeopleNetwork findOrCreate($search, callable $callback = null, $options = [])
 */
class PeopleNetworkTable extends Table
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

        $this->table('people_network');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('People', [
            'foreignKey' => 'person_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsToMany('Memberships', [
            'foreignKey' => 'people_network_id',
            'targetForeignKey' => 'membership_id',
            'joinTable' => 'people_network_memberships'
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
            ->boolean('data_access')
            ->requirePresence('data_access', 'create')
            ->notEmpty('data_access');

        $validator
            ->boolean('mail_access')
            ->requirePresence('mail_access', 'create')
            ->notEmpty('mail_access');

        $validator
            ->requirePresence('tim', 'create')
            ->notEmpty('tim');

        $validator
            ->requirePresence('eth_unlocked_primary', 'create')
            ->notEmpty('eth_unlocked_primary');

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

        return $rules;
    }
}
