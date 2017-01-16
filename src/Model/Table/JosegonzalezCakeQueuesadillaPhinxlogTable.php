<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * JosegonzalezCakeQueuesadillaPhinxlog Model
 *
 * @method \App\Model\Entity\JosegonzalezCakeQueuesadillaPhinxlog get($primaryKey, $options = [])
 * @method \App\Model\Entity\JosegonzalezCakeQueuesadillaPhinxlog newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\JosegonzalezCakeQueuesadillaPhinxlog[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\JosegonzalezCakeQueuesadillaPhinxlog|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\JosegonzalezCakeQueuesadillaPhinxlog patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\JosegonzalezCakeQueuesadillaPhinxlog[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\JosegonzalezCakeQueuesadillaPhinxlog findOrCreate($search, callable $callback = null, $options = [])
 */
class JosegonzalezCakeQueuesadillaPhinxlogTable extends Table
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

        $this->table('josegonzalez_cake_queuesadilla_phinxlog');
        $this->displayField('version');
        $this->primaryKey('version');
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
            ->allowEmpty('version', 'create');

        $validator
            ->allowEmpty('migration_name');

        $validator
            ->dateTime('start_time')
            ->requirePresence('start_time', 'create')
            ->notEmpty('start_time');

        $validator
            ->dateTime('end_time')
            ->requirePresence('end_time', 'create')
            ->notEmpty('end_time');

        $validator
            ->boolean('breakpoint')
            ->requirePresence('breakpoint', 'create')
            ->notEmpty('breakpoint');

        return $validator;
    }
}
