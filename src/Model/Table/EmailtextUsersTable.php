<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * EmailtextUsers Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Emailtexts
 * @property \Cake\ORM\Association\BelongsTo $Types
 *
 * @method \App\Model\Entity\EmailtextUser get($primaryKey, $options = [])
 * @method \App\Model\Entity\EmailtextUser newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\EmailtextUser[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\EmailtextUser|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\EmailtextUser patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\EmailtextUser[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\EmailtextUser findOrCreate($search, callable $callback = null, $options = [])
 */
class EmailtextUsersTable extends Table
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

        $this->table('emailtext_users');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Emailtexts', [
            'foreignKey' => 'emailtext_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Types', [
            'foreignKey' => 'type_id',
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
            ->requirePresence('type', 'create')
            ->notEmpty('type');

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
        $rules->add($rules->existsIn(['emailtext_id'], 'Emailtexts'));
        $rules->add($rules->existsIn(['type_id'], 'Types'));

        return $rules;
    }
}
