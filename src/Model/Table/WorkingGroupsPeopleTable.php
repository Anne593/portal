<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * WorkingGroupsPeople Model
 *
 * @property \Cake\ORM\Association\BelongsTo $People
 * @property \Cake\ORM\Association\BelongsTo $Workshops
 *
 * @method \App\Model\Entity\WorkingGroupsPerson get($primaryKey, $options = [])
 * @method \App\Model\Entity\WorkingGroupsPerson newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\WorkingGroupsPerson[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\WorkingGroupsPerson|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\WorkingGroupsPerson patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\WorkingGroupsPerson[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\WorkingGroupsPerson findOrCreate($search, callable $callback = null, $options = [])
 */
class WorkingGroupsPeopleTable extends Table
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

        $this->table('working_groups_people');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('People', [
            'foreignKey' => 'person_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Workshops', [
            'foreignKey' => 'workshop_id',
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
            ->dateTime('member_since')
            ->requirePresence('member_since', 'create')
            ->notEmpty('member_since');

        $validator
            ->dateTime('member_until')
            ->allowEmpty('member_until');

        $validator
            ->requirePresence('type', 'create')
            ->notEmpty('type');

        $validator
            ->allowEmpty('comment');

        $validator
            ->boolean('mailing_list_enabled')
            ->requirePresence('mailing_list_enabled', 'create')
            ->notEmpty('mailing_list_enabled');

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
        $rules->add($rules->existsIn(['workshop_id'], 'Workshops'));

        return $rules;
    }
}
