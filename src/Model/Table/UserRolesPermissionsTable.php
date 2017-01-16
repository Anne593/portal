<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * UserRolesPermissions Model
 *
 * @property \Cake\ORM\Association\BelongsTo $UserRoles
 * @property \Cake\ORM\Association\BelongsTo $Permissions
 *
 * @method \App\Model\Entity\UserRolesPermission get($primaryKey, $options = [])
 * @method \App\Model\Entity\UserRolesPermission newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\UserRolesPermission[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\UserRolesPermission|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\UserRolesPermission patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\UserRolesPermission[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\UserRolesPermission findOrCreate($search, callable $callback = null, $options = [])
 */
class UserRolesPermissionsTable extends Table
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

        $this->table('user_roles_permissions');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('UserRoles', [
            'foreignKey' => 'user_role_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Permissions', [
            'foreignKey' => 'permission_id',
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
            ->boolean('can_view')
            ->requirePresence('can_view', 'create')
            ->notEmpty('can_view');

        $validator
            ->boolean('can_edit')
            ->requirePresence('can_edit', 'create')
            ->notEmpty('can_edit');

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
        $rules->add($rules->existsIn(['user_role_id'], 'UserRoles'));
        $rules->add($rules->existsIn(['permission_id'], 'Permissions'));

        return $rules;
    }
}
