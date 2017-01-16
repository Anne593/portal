<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * EmailtextUsers Controller
 *
 * @property \App\Model\Table\EmailtextUsersTable $EmailtextUsers
 */
class EmailtextUsersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Emailtexts', 'Types']
        ];
        $emailtextUsers = $this->paginate($this->EmailtextUsers);

        $this->set(compact('emailtextUsers'));
        $this->set('_serialize', ['emailtextUsers']);
    }

    /**
     * View method
     *
     * @param string|null $id Emailtext User id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $emailtextUser = $this->EmailtextUsers->get($id, [
            'contain' => ['Emailtexts', 'Types']
        ]);

        $this->set('emailtextUser', $emailtextUser);
        $this->set('_serialize', ['emailtextUser']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $emailtextUser = $this->EmailtextUsers->newEntity();
        if ($this->request->is('post')) {
            $emailtextUser = $this->EmailtextUsers->patchEntity($emailtextUser, $this->request->data);
            if ($this->EmailtextUsers->save($emailtextUser)) {
                $this->Flash->success(__('The emailtext user has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The emailtext user could not be saved. Please, try again.'));
            }
        }
        $emailtexts = $this->EmailtextUsers->Emailtexts->find('list', ['limit' => 200]);
        $types = $this->EmailtextUsers->Types->find('list', ['limit' => 200]);
        $this->set(compact('emailtextUser', 'emailtexts', 'types'));
        $this->set('_serialize', ['emailtextUser']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Emailtext User id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $emailtextUser = $this->EmailtextUsers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $emailtextUser = $this->EmailtextUsers->patchEntity($emailtextUser, $this->request->data);
            if ($this->EmailtextUsers->save($emailtextUser)) {
                $this->Flash->success(__('The emailtext user has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The emailtext user could not be saved. Please, try again.'));
            }
        }
        $emailtexts = $this->EmailtextUsers->Emailtexts->find('list', ['limit' => 200]);
        $types = $this->EmailtextUsers->Types->find('list', ['limit' => 200]);
        $this->set(compact('emailtextUser', 'emailtexts', 'types'));
        $this->set('_serialize', ['emailtextUser']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Emailtext User id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $emailtextUser = $this->EmailtextUsers->get($id);
        if ($this->EmailtextUsers->delete($emailtextUser)) {
            $this->Flash->success(__('The emailtext user has been deleted.'));
        } else {
            $this->Flash->error(__('The emailtext user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
