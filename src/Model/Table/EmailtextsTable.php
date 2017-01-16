<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Emailtexts Model
 *
 * @property \Cake\ORM\Association\HasMany $EmailtextGroups
 * @property \Cake\ORM\Association\HasMany $EmailtextUsers
 *
 * @method \App\Model\Entity\Emailtext get($primaryKey, $options = [])
 * @method \App\Model\Entity\Emailtext newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Emailtext[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Emailtext|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Emailtext patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Emailtext[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Emailtext findOrCreate($search, callable $callback = null, $options = [])
 */
class EmailtextsTable extends Table
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

        $this->table('emailtexts');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->hasMany('EmailtextGroups', [
            'foreignKey' => 'emailtext_id'
        ]);
        $this->hasMany('EmailtextUsers', [
            'foreignKey' => 'emailtext_id'
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
            ->requirePresence('topic', 'create')
            ->notEmpty('topic');

        $validator
            ->requirePresence('subject', 'create')
            ->notEmpty('subject');

        $validator
            ->requirePresence('text', 'create')
            ->notEmpty('text');

        $validator
            ->requirePresence('resume_email', 'create')
            ->notEmpty('resume_email');

        $validator
            ->integer('deadline')
            ->allowEmpty('deadline');

        return $validator;
    }
}
