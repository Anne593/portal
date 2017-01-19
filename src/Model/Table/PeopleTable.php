<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * People Model
 *
 * @property \Cake\ORM\Association\HasMany $FileserverUsers
 * @property \Cake\ORM\Association\HasMany $Macs
 * @property \Cake\ORM\Association\HasMany $Tenants
 * @property \Cake\ORM\Association\BelongsToMany $Memberships
 * @property \Cake\ORM\Association\BelongsToMany $UserRoles
 * @property \Cake\ORM\Association\BelongsToMany $Roomkeys
 * @property \Cake\ORM\Association\BelongsToMany $WorkingGroups
 *
 * @method \App\Model\Entity\Person get($primaryKey, $options = [])
 * @method \App\Model\Entity\Person newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Person[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Person|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Person patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Person[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Person findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PeopleTable extends Table
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

        $this->table('people');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('FileserverUsers', [
            'foreignKey' => 'person_id'
        ]);
        $this->hasMany('Macs', [
            'foreignKey' => 'person_id'
        ]);
        $this->hasMany('Tenants', [
            'foreignKey' => 'person_id'
        ]);
        $this->belongsToMany('Memberships', [
            'foreignKey' => 'person_id',
            'targetForeignKey' => 'membership_id',
            'joinTable' => 'people_memberships'
        ]);
        $this->belongsToMany('UserRoles', [
            'foreignKey' => 'person_id',
            'targetForeignKey' => 'user_role_id',
            'joinTable' => 'people_user_roles'
        ]);
        $this->belongsToMany('Roomkeys', [
            'foreignKey' => 'person_id',
            'targetForeignKey' => 'roomkey_id',
            'joinTable' => 'roomkeys_people'
        ]);
        $this->belongsToMany('WorkingGroups', [
            'foreignKey' => 'person_id',
            'targetForeignKey' => 'working_group_id',
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
            ->requirePresence('surname', 'create')
            ->notEmpty('surname');

        $validator
            ->requirePresence('forename', 'create')
            ->notEmpty('forename');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmpty('email')
            ->add('email', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->date('birthday')
            ->requirePresence('birthday', 'create')
            ->notEmpty('birthday');

        $validator
            ->allowEmpty('matriculation_number');

        $validator
            ->integer('studentenwerk_identification')
            ->allowEmpty('studentenwerk_identification')
            ->add('studentenwerk_identification', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->requirePresence('nationality', 'create')
            ->notEmpty('nationality');

        $validator
            ->requirePresence('sex', 'create')
            ->notEmpty('sex');

        $validator
            ->integer('eth_unlocked_primary')
            ->requirePresence('eth_unlocked_primary', 'create')
            ->notEmpty('eth_unlocked_primary');

        $validator
            ->requirePresence('password', 'create')
            ->notEmpty('password');

        $validator
            ->integer('password_retrieval')
            ->allowEmpty('password_retrieval');

        $validator
            ->requirePresence('status', 'create')
            ->notEmpty('status');

        $validator
            ->integer('failed_login_count')
            ->requirePresence('failed_login_count', 'create')
            ->notEmpty('failed_login_count');

        $validator
            ->dateTime('failed_login_timestamp')
            ->allowEmpty('failed_login_timestamp');

        $validator
            ->allowEmpty('last_passwords');

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
        $rules->add($rules->isUnique(['email']));
        $rules->add($rules->isUnique(['studentenwerk_identification']));

        return $rules;
    }
}
