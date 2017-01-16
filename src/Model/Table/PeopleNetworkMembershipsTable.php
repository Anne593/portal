<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PeopleNetworkMemberships Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Networkinfos
 * @property \Cake\ORM\Association\BelongsTo $Memberships
 *
 * @method \App\Model\Entity\PeopleNetworkMembership get($primaryKey, $options = [])
 * @method \App\Model\Entity\PeopleNetworkMembership newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\PeopleNetworkMembership[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PeopleNetworkMembership|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PeopleNetworkMembership patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PeopleNetworkMembership[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\PeopleNetworkMembership findOrCreate($search, callable $callback = null, $options = [])
 */
class PeopleNetworkMembershipsTable extends Table
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

        $this->table('people_network_memberships');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Networkinfos', [
            'foreignKey' => 'networkinfo_id',
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
            ->date('date_join')
            ->allowEmpty('date_join');

        $validator
            ->date('date_quit')
            ->allowEmpty('date_quit');

        $validator
            ->boolean('payment')
            ->requirePresence('payment', 'create')
            ->notEmpty('payment');

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
        $rules->add($rules->existsIn(['networkinfo_id'], 'Networkinfos'));
        $rules->add($rules->existsIn(['membership_id'], 'Memberships'));

        return $rules;
    }
}
