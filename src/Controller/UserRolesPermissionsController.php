<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * UserRolesPermissions Controller
 *
 * @property \App\Model\Table\UserRolesPermissionsTable $UserRolesPermissions
 */
class UserRolesPermissionsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['UserRoles', 'Permissions']
        ];
        $userRolesPermissions = $this->paginate($this->UserRolesPermissions);

        $this->set(compact('userRolesPermissions'));
        $this->set('_serialize', ['userRolesPermissions']);
    }

    /**
     * View method
     *
     * @param string|null $id User Roles Permission id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $userRolesPermission = $this->UserRolesPermissions->get($id, [
            'contain' => ['UserRoles', 'Permissions']
        ]);

        $this->set('userRolesPermission', $userRolesPermission);
        $this->set('_serialize', ['userRolesPermission']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $userRolesPermission = $this->UserRolesPermissions->newEntity();
        if ($this->request->is('post')) {
            $userRolesPermission = $this->UserRolesPermissions->patchEntity($userRolesPermission, $this->request->data);
            if ($this->UserRolesPermissions->save($userRolesPermission)) {
                $this->Flash->success(__('The user roles permission has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The user roles permission could not be saved. Please, try again.'));
            }
        }
        $userRoles = $this->UserRolesPermissions->UserRoles->find('list', ['limit' => 200]);
        $permissions = $this->UserRolesPermissions->Permissions->find('list', ['limit' => 200]);
        $this->set(compact('userRolesPermission', 'userRoles', 'permissions'));
        $this->set('_serialize', ['userRolesPermission']);
    }

    /**
     * Edit method
     *
     * @param string|null $id User Roles Permission id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $userRolesPermission = $this->UserRolesPermissions->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $userRolesPermission = $this->UserRolesPermissions->patchEntity($userRolesPermission, $this->request->data);
            if ($this->UserRolesPermissions->save($userRolesPermission)) {
                $this->Flash->success(__('The user roles permission has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The user roles permission could not be saved. Please, try again.'));
            }
        }
        $userRoles = $this->UserRolesPermissions->UserRoles->find('list', ['limit' => 200]);
        $permissions = $this->UserRolesPermissions->Permissions->find('list', ['limit' => 200]);
        $this->set(compact('userRolesPermission', 'userRoles', 'permissions'));
        $this->set('_serialize', ['userRolesPermission']);
    }

    /**
     * Delete method
     *
     * @param string|null $id User Roles Permission id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $userRolesPermission = $this->UserRolesPermissions->get($id);
        if ($this->UserRolesPermissions->delete($userRolesPermission)) {
            $this->Flash->success(__('The user roles permission has been deleted.'));
        } else {
            $this->Flash->error(__('The user roles permission could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
