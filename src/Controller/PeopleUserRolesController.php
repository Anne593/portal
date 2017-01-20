<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PeopleUserRoles Controller
 *
 * @property \App\Model\Table\PeopleUserRolesTable $PeopleUserRoles
 */
class PeopleUserRolesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['People', 'UserRoles']
        ];
        $peopleUserRoles = $this->paginate($this->PeopleUserRoles);

        $this->set(compact('peopleUserRoles'));
        $this->set('_serialize', ['peopleUserRoles']);
    }

    /**
     * View method
     *
     * @param string|null $id People User Role id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $peopleUserRole = $this->PeopleUserRoles->get($id, [
            'contain' => ['People', 'UserRoles']
        ]);

        $this->set('peopleUserRole', $peopleUserRole);
        $this->set('_serialize', ['peopleUserRole']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $peopleUserRole = $this->PeopleUserRoles->newEntity();
        if ($this->request->is('post')) {
            $peopleUserRole = $this->PeopleUserRoles->patchEntity($peopleUserRole, $this->request->data);
            if ($this->PeopleUserRoles->save($peopleUserRole)) {
                $this->Flash->success(__('The people user role has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The people user role could not be saved. Please, try again.'));
            }
        }
        $people = $this->PeopleUserRoles->People->find('list', [
            'limit' => 200,
            'keyField' => 'id',
            'valueField' => 'full_name'
        ]);
        $userRoles = $this->PeopleUserRoles->UserRoles->find('list', ['limit' => 200]);
        $this->set(compact('peopleUserRole', 'people', 'userRoles'));
        $this->set('_serialize', ['peopleUserRole']);
    }

    /**
     * Edit method
     *
     * @param string|null $id People User Role id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $peopleUserRole = $this->PeopleUserRoles->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $peopleUserRole = $this->PeopleUserRoles->patchEntity($peopleUserRole, $this->request->data);
            if ($this->PeopleUserRoles->save($peopleUserRole)) {
                $this->Flash->success(__('The people user role has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The people user role could not be saved. Please, try again.'));
            }
        }
        $people = $this->PeopleUserRoles->People->find('list', [
            'limit' => 200,
            'keyField' => 'id',
            'valueField' => 'full_name'
        ]);
        $userRoles = $this->PeopleUserRoles->UserRoles->find('list', ['limit' => 200]);
        $this->set(compact('peopleUserRole', 'people', 'userRoles'));
        $this->set('_serialize', ['peopleUserRole']);
    }

    /**
     * Delete method
     *
     * @param string|null $id People User Role id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $peopleUserRole = $this->PeopleUserRoles->get($id);
        if ($this->PeopleUserRoles->delete($peopleUserRole)) {
            $this->Flash->success(__('The people user role has been deleted.'));
        } else {
            $this->Flash->error(__('The people user role could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
