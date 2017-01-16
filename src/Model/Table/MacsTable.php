<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Macs Model
 *
 * @property \Cake\ORM\Association\BelongsTo $People
 * @property \Cake\ORM\Association\HasMany $Ips
 *
 * @method \App\Model\Entity\Mac get($primaryKey, $options = [])
 * @method \App\Model\Entity\Mac newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Mac[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Mac|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Mac patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Mac[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Mac findOrCreate($search, callable $callback = null, $options = [])
 */
class MacsTable extends Table
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

        $this->table('macs');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('People', [
            'foreignKey' => 'person_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Ips', [
            'foreignKey' => 'mac_id'
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
            ->requirePresence('mac', 'create')
            ->notEmpty('mac')
            ->add('mac', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->allowEmpty('device_name');

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
        $rules->add($rules->isUnique(['mac']));
        $rules->add($rules->existsIn(['person_id'], 'People'));

        return $rules;
    }
}
