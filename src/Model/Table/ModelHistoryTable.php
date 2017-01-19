<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ModelHistory Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\ModelHistory get($primaryKey, $options = [])
 * @method \App\Model\Entity\ModelHistory newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ModelHistory[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ModelHistory|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ModelHistory patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ModelHistory[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ModelHistory findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ModelHistoryTable extends Table
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

        $this->table('model_history');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('People', [
            'foreignKey' => 'person_id'
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
            ->uuid('id')
            ->allowEmpty('id', 'create');

        $validator
            ->allowEmpty('model');

        $validator
            ->uuid('foreign_key')
            ->allowEmpty('foreign_key');

        $validator
            ->allowEmpty('action');

        $validator
            ->allowEmpty('data');

        $validator
            ->allowEmpty('context');

        $validator
            ->allowEmpty('context_type');

        $validator
            ->allowEmpty('context_slug');

        $validator
            ->integer('revision')
            ->requirePresence('revision', 'create')
            ->notEmpty('revision');

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
