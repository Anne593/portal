<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * FileserverUsers Controller
 *
 * @property \App\Model\Table\FileserverUsersTable $FileserverUsers
 */
class FileserverUsersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['People']
        ];
        $fileserverUsers = $this->paginate($this->FileserverUsers);

        $this->set(compact('fileserverUsers'));
        $this->set('_serialize', ['fileserverUsers']);
    }

    /**
     * View method
     *
     * @param string|null $id Fileserver User id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $fileserverUser = $this->FileserverUsers->get($id, [
            'contain' => ['People']
        ]);

        $this->set('fileserverUser', $fileserverUser);
        $this->set('_serialize', ['fileserverUser']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $fileserverUser = $this->FileserverUsers->newEntity();
        if ($this->request->is('post')) {
            $fileserverUser = $this->FileserverUsers->patchEntity($fileserverUser, $this->request->data);
            if ($this->FileserverUsers->save($fileserverUser)) {
                $this->Flash->success(__('The fileserver user has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The fileserver user could not be saved. Please, try again.'));
            }
        }
        $people = $this->FileserverUsers->People->find('list', ['limit' => 200]);
        $this->set(compact('fileserverUser', 'people'));
        $this->set('_serialize', ['fileserverUser']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Fileserver User id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $fileserverUser = $this->FileserverUsers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $fileserverUser = $this->FileserverUsers->patchEntity($fileserverUser, $this->request->data);
            if ($this->FileserverUsers->save($fileserverUser)) {
                $this->Flash->success(__('The fileserver user has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The fileserver user could not be saved. Please, try again.'));
            }
        }
        $people = $this->FileserverUsers->People->find('list', ['limit' => 200]);
        $this->set(compact('fileserverUser', 'people'));
        $this->set('_serialize', ['fileserverUser']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Fileserver User id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $fileserverUser = $this->FileserverUsers->get($id);
        if ($this->FileserverUsers->delete($fileserverUser)) {
            $this->Flash->success(__('The fileserver user has been deleted.'));
        } else {
            $this->Flash->error(__('The fileserver user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
