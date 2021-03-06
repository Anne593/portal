<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * WorkingGroups Model
 *
 * @property \Cake\ORM\Association\BelongsToMany $People
 *
 * @method \App\Model\Entity\WorkingGroup get($primaryKey, $options = [])
 * @method \App\Model\Entity\WorkingGroup newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\WorkingGroup[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\WorkingGroup|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\WorkingGroup patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\WorkingGroup[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\WorkingGroup findOrCreate($search, callable $callback = null, $options = [])
 */
class WorkingGroupsTable extends Table
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

        $this->table('working_groups');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->belongsToMany('People', [
            'foreignKey' => 'working_group_id',
            'targetForeignKey' => 'person_id',
            'joinTable' => 'working_groups_people'
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
            ->notEmpty('name')
            ->add('name', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->requirePresence('description', 'create')
            ->notEmpty('description');

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
        $rules->add($rules->isUnique(['name']));

        return $rules;
    }
}
