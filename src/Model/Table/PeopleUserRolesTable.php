<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PeopleUserRoles Model
 *
 * @property \Cake\ORM\Association\BelongsTo $People
 * @property \Cake\ORM\Association\BelongsTo $UserRoles
 *
 * @method \App\Model\Entity\PeopleUserRole get($primaryKey, $options = [])
 * @method \App\Model\Entity\PeopleUserRole newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\PeopleUserRole[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PeopleUserRole|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PeopleUserRole patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PeopleUserRole[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\PeopleUserRole findOrCreate($search, callable $callback = null, $options = [])
 */
class PeopleUserRolesTable extends Table
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

        $this->table('people_user_roles');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('People', [
            'foreignKey' => 'person_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('UserRoles', [
            'foreignKey' => 'user_role_id',
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
        $rules->add($rules->existsIn(['user_role_id'], 'UserRoles'));

        return $rules;
    }
}
