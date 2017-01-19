<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link      http://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use App\Model\Entity\Person;
use App\Model\Table\PeopleTable;
use App\Model\Table\PeopleUserRolesTable;
use App\Model\Table\UserRolesTable;
use Cake\Controller\Controller;
use Cake\Event\Event;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link http://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{
    use \FrontendBridge\Lib\FrontendBridgeTrait;

    public $components = [
        'Flash',
        'FrontendBridge.FrontendBridge',
        'ListFilter.ListFilter',
        'Cookie',
        'CakeApiBaselayer.Api',
        'TinyAuth.AuthUser'
    ];


    public $helpers = ['TinyAuth.AuthUser'];

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * @return void
     */
    public function initialize()
    {
        $this->loadComponent('RequestHandler');
        $this->loadComponent('TinyAuth.Auth', [
                'authenticate' => [
                    'Form' => [
                        'userModel' => 'People',
                        'fields' => ['username' => 'email'],
                        'repository' => 'People',
                        'finder' => 'auth'
                    ]
                ],
                'loginAction' => ['plugin' => false, 'controller' => 'Login', 'action' => 'login'],
                'loginRedirect' => ['plugin' => false, 'controller' => 'Dashboard', 'action' => 'index'],
                'logoutRedirect' => ['plugin' => false, 'controller' => 'Home', 'action' => 'index'],
                'authError' => __('auth.not_allowed'),
                'flash' => [
                    'params' => [
                        'class' => 'alert alert-warning'
                    ]
                ],
                'authorize' => [
                    'TinyAuth.Tiny' => [
                        'rolesTable' => UserRolesTable::TABLE_NAME,
                        'pivotTable' => PeopleUserRolesTable::TABLE_NAME,
                        'roleColumn' => 'user_role_id',
                        'userColumn' => 'person_id',
                        'usersTable' => PeopleTable::TABLE_NAME,
                        'aliasColumn' => 'title',
                        'superAdmin' => ROLE_ADMIN
                    ]
                ]
            ]
        );
        $this->loadComponent('TinyAuth.AuthUser');

        /*
         * Enable the following components for recommended CakePHP security settings.
         * see http://book.cakephp.org/3.0/en/controllers/components/security.html
         */
        //$this->loadComponent('Security');
        //$this->loadComponent('Csrf');

        parent::initialize();
    }

    /**
     * Before render callback.
     *
     * @param \Cake\Event\Event $event The beforeRender event.
     * @return \Cake\Network\Response|null|void
     */
    public function beforeRender(Event $event)
    {
        if (!array_key_exists('_serialize', $this->viewVars) &&
            in_array($this->response->type(), ['application/json', 'application/xml'])
        ) {
            $this->set('_serialize', true);
        }
    }

    /**
     * {@inheritDoc}
     */
    public function beforeFilter(\Cake\Event\Event $event)
    {
        $this->loadModel('People');
        /*$this->Auth->eventManager()->attach([$this->People, 'resetLoginRetriesListener'], 'Auth.afterIdentify');

        if (!$this->Auth->loggedIn() && $userId = $this->AuthUtils->checkRememberMeCookie()) {
            $this->loadModel('People');
            $user = $this->People->get($userId)->toArray();
            $this->Auth->setUser($user);
        }

        if (!$this->Auth->user()) {
            $this->Auth->config('authError', false);
        }*/

        parent::beforeFilter($event);
    }

    /**
     * {@inheritDoc}
     */
    public function render($view = null, $layout = null)
    {
        if ($this->_isJsonActionRequest()) {
            return $this->renderJsonAction($view, $layout);
        }
        return parent::render($view, $layout);
    }
}
