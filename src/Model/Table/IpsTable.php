<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Ips Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Macs
 *
 * @method \App\Model\Entity\Ip get($primaryKey, $options = [])
 * @method \App\Model\Entity\Ip newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Ip[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Ip|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Ip patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Ip[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Ip findOrCreate($search, callable $callback = null, $options = [])
 */
class IpsTable extends Table
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

        $this->table('ips');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Macs', [
            'foreignKey' => 'mac_id',
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
            ->requirePresence('ip', 'create')
            ->notEmpty('ip');

        $validator
            ->dateTime('lease_start')
            ->requirePresence('lease_start', 'create')
            ->notEmpty('lease_start');

        $validator
            ->dateTime('lease_end')
            ->allowEmpty('lease_end');

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
        $rules->add($rules->existsIn(['mac_id'], 'Macs'));

        return $rules;
    }
}
