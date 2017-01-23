<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\Event\Event;
use ArrayObject;
use App\Utility\Utility;

/**
 * PeopleMemberships Model
 *
 * @property \Cake\ORM\Association\BelongsTo $People
 * @property \Cake\ORM\Association\BelongsTo $Memberships
 *
 * @method \App\Model\Entity\PeopleMembership get($primaryKey, $options = [])
 * @method \App\Model\Entity\PeopleMembership newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\PeopleMembership[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PeopleMembership|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PeopleMembership patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PeopleMembership[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\PeopleMembership findOrCreate($search, callable $callback = null, $options = [])
 */
class PeopleMembershipsTable extends Table
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

        $this->table('people_memberships');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('People', [
            'foreignKey' => 'person_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Memberships', [
            'foreignKey' => 'membership_id',
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
            ->integer('semester')
            ->requirePresence('semester', 'create')
            ->notEmpty('semester');

        $validator
            ->boolean('payment')
            ->requirePresence('payment', 'create')
            ->notEmpty('payment');

        $validator
            ->boolean('social_service')
            ->requirePresence('social_service', 'create')
            ->notEmpty('social_service');

        $validator
            ->requirePresence('social_service_comment', 'create')
            ->allowEmpty('social_service_comment');

        $validator
            ->requirePresence('comment', 'create')
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
        $rules->add($rules->existsIn(['person_id'], 'People'));
        $rules->add($rules->existsIn(['membership_id'], 'Memberships'));

        return $rules;
    }

    /**
     * Wird aufgerufen, bevor daten in die db geschrieben werden.
     *  - löscht social_service_comment, wenn social_service nicht gesetzt ist.
     * @param Event $event
     * @param ArrayObject $data
     * @param ArrayObject $options
     */
    public function beforeMarshal(Event $event, ArrayObject $data, ArrayObject $options)
    {
        $utilitys = new Utility();

        if (empty($data['id'])) {
            //INSERT Ein neues Element wurde erstellt

            // Setzt das Semester auf das aktuelle
            $now = new \DateTime('now');
            if ($utilitys->isSummerSemester($now)) {
                $data['semester'] = $now->format('Y') . '01';
            } else {
                $data['semester'] = $now->format('Y') . '02';
            }

            // setzt payment, social service und comment auf default
            $data['payment'] = false;
            $data['social_service'] = false;
            $data['social_service_comment'] = "";

        } else {
            //UPDATE Ein Element wurde geändert

            // löscht social Service comment, wenn social service nicht gesetzt ist.
            if (!$data['social_service']) {
                $data['social_service_comment'] = "";
            }
        }
    }
}
