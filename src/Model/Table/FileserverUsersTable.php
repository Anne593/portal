<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * FileserverUsers Model
 *
 * @property \Cake\ORM\Association\BelongsTo $People
 *
 * @method \App\Model\Entity\FileserverUser get($primaryKey, $options = [])
 * @method \App\Model\Entity\FileserverUser newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\FileserverUser[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\FileserverUser|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\FileserverUser patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\FileserverUser[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\FileserverUser findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class FileserverUsersTable extends Table
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

        $this->table('fileserver_users');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

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
            ->requirePresence('username', 'create')
            ->notEmpty('username');

        $validator
            ->requirePresence('password', 'create')
            ->notEmpty('password');

        $validator
            ->boolean('vip')
            ->requirePresence('vip', 'create')
            ->notEmpty('vip');

        $validator
            ->boolean('accepted')
            ->requirePresence('accepted', 'create')
            ->notEmpty('accepted');

        $validator
            ->boolean('active')
            ->requirePresence('active', 'create')
            ->notEmpty('active');

        $validator
            ->integer('password_retrieval')
            ->allowEmpty('password_retrieval');

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
        $rules->add($rules->isUnique(['username']));
        $rules->add($rules->existsIn(['person_id'], 'People'));

        return $rules;
    }
}
