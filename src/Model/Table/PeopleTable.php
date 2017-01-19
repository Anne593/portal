<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use App\Lib\Status;
use Cake\Auth\DefaultPasswordHasher;
use Cake\Core\Configure;
use Cake\Database\Expression\QueryExpression;
use Cake\Datasource\EntityInterface;
use Cake\Event\Event;
use Cake\I18n\Time;
use Notifications\Notification\EmailNotification;
use App\Model\Entity\Person;

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
    /** 
     * Validation for the change password process 
     * 
     * @param Validator $validator Validator 
     * @return Validator 
     */ 
    public function validationChangePassword(Validator $validator) 
    { 
        $validator->requirePresence('password'); 
        $validator->requirePresence('password_confirm'); 
        $validator->requirePresence('current_password'); 
        $validator->notEmpty('password'); 
        $validator->notEmpty('password_confirm'); 
        $validator->notEmpty('current_password'); 
        $validator->add('current_password', 'custom', [ 
            'rule' => function ($value, $context) { 
                $person = $this->get($context['data']['id']); 
 
                return (new DefaultPasswordHasher)->check($value, $person->password); 
            }, 
            'message' => __('validation.user.old_password_wrong') 
        ]); 
        $this->validationPassword($validator, true); 
 
        return $validator; 
    } 
 
    /** 
     * Validation for the reset password process 
     * 
     * @param Validator $validator Validator 
     * @return Validator 
     */ 
    public function validationResetPassword(Validator $validator) 
    { 
        $validator->requirePresence('password'); 
        $validator->requirePresence('password_confirm'); 
        $validator->notEmpty('password'); 
        $validator->notEmpty('password_confirm'); 
        $this->validationPassword($validator, true); 
 
        return $validator; 
    } 
 
    /** 
     * Validation for password changes 
     * 
     * @param Validator $validator Validator 
     * @param bool $force Whether to require validation in all cases 
     * @return Validator 
     */ 
    public function validationPassword(Validator $validator, $force = false) 
    { 
        $shouldValidate = function ($context) use ($force) { 
            if ($force) { 
                return true; 
            } 
 
            return $context['newRecord'] || !empty($context['data']['password']); 
        }; 
        $validator 
            ->notEmpty('password', __('validation.user.enter_new_password'), $shouldValidate) 
            ->notEmpty('password_confirm', __('validation.user.repeat_new_password'), $shouldValidate) 
            ->add('password', [ 
                'minLength' => [ 
                    'rule' => ['minLength', 8], 
                    'last' => true, 
                    'message' => __('validation.user.password_min_length') 
                ], 
            ]) 
            ->add('password_confirm', 'custom', [ 
                'rule' => function ($value, $context) { 
                    return isset($context['data']['password']) && $value === $context['data']['password']; 
                }, 
                'message' => __('validation.user.password_confirmation_must_match') 
            ]); 
 
        return $validator; 
    } 
 
    /** 
     * beforeSave callback 
     * 
     * @param Event $event CakePHP Event 
     * @param Entity $entity Entity to be saved 
     * @param ArrayObject $options Additional options 
     * @return void 
     */ 
    public function beforeSave(Event $event, EntityInterface $entity, \ArrayObject $options) 
    { 
        // When editing, remove passwords if nothing was entered 
        if (empty($entity->password)) { 
            unset($entity->password, $entity->password_confirm); 
        } 
    } 
 
    /** 
     * Reset the login retries counter 
     * 
     * @param User $user User Entity 
     * @return mixed 
     */ 
    public function resetLoginRetries(Person $person) 
    { 
        $person->failed_login_count = 0; 
        $person->failed_login_timestamp = null; 
 
        return $this->save($person); 
    } 
 
    /** 
     * check if the user with the email from the reuqestData exists and is locked from 
     * login in because of a too high failed login count 
     * 
     * @param  array $requestData the request data array 
     * @return bool 
     */ 
    public function hasLoginRetriesLock($requestData) 
    { 
        if (!empty($requestData['email'])) { 
            $person = $this->getPersonByEmail($requestData['email']); 
            if (!empty($person) && $person->failed_login_count >= Configure::read('Authentication.max_login_retries')) { 
                return true; 
            } 
        } 
 
        return false; 
    } 
 
    /** 
     * Attached to the Auth.afterIdentify event to call the resetLoginRetries method 
     * 
     * @param Event $event CakePHP Event 
     * @param array $personData Array with user data 
     * @return void 
     */ 
    public function resetLoginRetriesListener(\Cake\Event\Event $event, array $personData) 
    { 
        if (isset($personData['id'])) { 
            $person = $this->get($personData['id']); 
            $this->resetLoginRetries($person); 
        } 
    } 
 
    /** 
     * return User data by Email 
     * 
     * @param string $email id 
     * @return object 
     */ 
    public function getPersonByEmail($email) 
    { 
        return $this->find() 
            ->where([ 
                'status' => Status::ACTIVE, 
                'email' => $email 
            ]) 
            ->first(); 
    } 
 
    /** 
     * This should be called after a failed login attempt. If a record with the given user 
     * email address exists and it was not created with social login, failed_login_count 
     * will be increased and the failed_login_timestamp is set to now. 
     * 
     * @param array $requestData Request Data 
     * @return bool Returns true if a user was found and the failed_login_count was increased 
     */ 
    public function increaseLoginRetries(array $requestData) 
    { 
        if (!empty($requestData['email'])) { 
            $now = Time::now()->i18nFormat('YYYY-MM-dd HH:mm:ss'); 
            $expression = new QueryExpression([ 
                'failed_login_count = failed_login_count + 1', 
                'failed_login_timestamp = "' . $now . '"' 
            ], [], ', '); 
 
            $this->updateAll($expression, [ 
                'email' => $requestData['email'] 
            ]); 
 
            return true; 
        } 
 
        return false; 
    } 
 
    /** 
     * Finder used for authentications 
     * 
     * @param Query $query Query 
     * @param array $options Options 
     * @return Query 
     */ 
    public function findAuth(\Cake\ORM\Query $query, array $options) 
    { 
        $query 
            ->where([ 
                'People.status' => Status::ACTIVE, 
                'People.failed_login_count <' => Configure::read('Authentication.max_login_retries') 
            ]); 
 
        return $query; 
    } 
 
    /** 
     * Validates the new_password and password_confirm fields for a user and 
     * saves them if valid. 
     * 
     * @param Person $person Person entity 
     * @param array $postData Array containing new_password and password_confirm keys 
     * @return Person 
     */ 
    public function resetPassword(Person $person, array $postData) 
    { 
        $person->accessible('*', false); 
        $person->accessible(['password'], true); 
        $this->patchEntity($person, $postData, ['validate' => 'resetPassword']); 
        if (empty($person->errors())) { 
            $person->password = $postData['password']; 
 
            return $this->save($person); 
        } 
 
        return $person; 
    } 
 
    /** 
     * Validates the new_password and password_confirm fields for a user and 
     * saves them if valid. 
     * 
     * @param Person $person Person entity 
     * @param array $postData Array containing new_password and password_confirm keys 
     * @return Person 
     */ 
    public function changePassword(Person $person, array $postData) 
    { 
        $person->accessible('*', false); 
        $person->accessible(['password'], true); 
        $this->patchEntity($person, $postData, ['validate' => 'changePassword']); 
        if (empty($person->errors())) { 
            $person->password = $postData['password']; 
 
            return $this->save($person); 
        } 
 
        return $person; 
    } 
 
    /** 
     * creates a unique hash for Person 
     * 
     * @param  Person $person the Person entity 
     * @return string 
     */ 
    public function getHash(Person $person) 
    { 
        $vars = [ 
            $person->email, 
            $person->id, 
            $person->password, 
            $person->modified, 
            $person->status 
        ]; 
        $secretStr = implode('', $vars); 
        $hash = \Cake\Utility\Security::hash($secretStr, 'sha512', true); 
 
        return $hash; 
    } 
 
    /** 
     * Sends a forgot password email 
     * 
     * @param  Person $person the Person entity 
     * @return void 
     */ 
    public function sendForgotPasswordEmail(Person $person) 
    { 
        $hash = $this->getHash($person); 
        $token = ($hash . strtotime('now')); 
        $restoreLink = Router::url([ 
            'plugin' => false, 
            'controller' => 'Login', 
            'action' => 'restorePassword', 
            $person->id, 
            $token 
        ], true); 
 
        $email = new EmailNotification(); 
        $email->template('forgot_password', 'default') 
            ->emailFormat('html') 
            ->to($person->email) 
            ->subject(__('email.subject.forgot_password')) 
            ->viewVars([ 
                'resetPasswordUrl' => $restoreLink, 
                'fullName' => $person->full_name 
            ]) 
            ->push(); 
    } 
 
    /** 
     * Softdeletes an person 
     * 
     * @param EntityInterface $person Person Entity 
     * @return mixed 
     */ 
    public function softDelete(Person $person) 
    { 
        $person = $this->patchEntity($person, ['status' => Status::DELETED]); 
 
        return $this->save($person); 
    } 
}
