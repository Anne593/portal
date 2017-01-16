<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * RoomkeysPeople Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Roomkeys
 * @property \Cake\ORM\Association\BelongsTo $People
 *
 * @method \App\Model\Entity\RoomkeysPerson get($primaryKey, $options = [])
 * @method \App\Model\Entity\RoomkeysPerson newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\RoomkeysPerson[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\RoomkeysPerson|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\RoomkeysPerson patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\RoomkeysPerson[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\RoomkeysPerson findOrCreate($search, callable $callback = null, $options = [])
 */
class RoomkeysPeopleTable extends Table
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

        $this->table('roomkeys_people');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Roomkeys', [
            'foreignKey' => 'roomkey_id',
            'joinType' => 'INNER'
        ]);
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
            ->requirePresence('type', 'create')
            ->notEmpty('type');

        $validator
            ->allowEmpty('comment');

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
        $rules->add($rules->existsIn(['roomkey_id'], 'Roomkeys'));
        $rules->add($rules->existsIn(['person_id'], 'People'));

        return $rules;
    }
}
