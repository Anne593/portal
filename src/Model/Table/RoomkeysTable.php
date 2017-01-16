<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Roomkeys Model
 *
 * @property \Cake\ORM\Association\BelongsToMany $People
 *
 * @method \App\Model\Entity\Roomkey get($primaryKey, $options = [])
 * @method \App\Model\Entity\Roomkey newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Roomkey[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Roomkey|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Roomkey patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Roomkey[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Roomkey findOrCreate($search, callable $callback = null, $options = [])
 */
class RoomkeysTable extends Table
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

        $this->table('roomkeys');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->belongsToMany('People', [
            'foreignKey' => 'roomkey_id',
            'targetForeignKey' => 'person_id',
            'joinTable' => 'roomkeys_people'
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
            ->notEmpty('name');

        $validator
            ->requirePresence('discription', 'create')
            ->notEmpty('discription');

        $validator
            ->integer('amount')
            ->requirePresence('amount', 'create')
            ->notEmpty('amount');

        return $validator;
    }
}
