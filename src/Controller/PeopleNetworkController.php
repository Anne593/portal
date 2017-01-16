<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PeopleNetwork Controller
 *
 * @property \App\Model\Table\PeopleNetworkTable $PeopleNetwork
 */
class PeopleNetworkController extends AppController
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
        $peopleNetwork = $this->paginate($this->PeopleNetwork);

        $this->set(compact('peopleNetwork'));
        $this->set('_serialize', ['peopleNetwork']);
    }

    /**
     * View method
     *
     * @param string|null $id People Network id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $peopleNetwork = $this->PeopleNetwork->get($id, [
            'contain' => ['People', 'Memberships']
        ]);

        $this->set('peopleNetwork', $peopleNetwork);
        $this->set('_serialize', ['peopleNetwork']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $peopleNetwork = $this->PeopleNetwork->newEntity();
        if ($this->request->is('post')) {
            $peopleNetwork = $this->PeopleNetwork->patchEntity($peopleNetwork, $this->request->data);
            if ($this->PeopleNetwork->save($peopleNetwork)) {
                $this->Flash->success(__('The people network has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The people network could not be saved. Please, try again.'));
            }
        }
        $people = $this->PeopleNetwork->People->find('list', ['limit' => 200]);
        $memberships = $this->PeopleNetwork->Memberships->find('list', ['limit' => 200]);
        $this->set(compact('peopleNetwork', 'people', 'memberships'));
        $this->set('_serialize', ['peopleNetwork']);
    }

    /**
     * Edit method
     *
     * @param string|null $id People Network id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $peopleNetwork = $this->PeopleNetwork->get($id, [
            'contain' => ['Memberships']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $peopleNetwork = $this->PeopleNetwork->patchEntity($peopleNetwork, $this->request->data);
            if ($this->PeopleNetwork->save($peopleNetwork)) {
                $this->Flash->success(__('The people network has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The people network could not be saved. Please, try again.'));
            }
        }
        $people = $this->PeopleNetwork->People->find('list', ['limit' => 200]);
        $memberships = $this->PeopleNetwork->Memberships->find('list', ['limit' => 200]);
        $this->set(compact('peopleNetwork', 'people', 'memberships'));
        $this->set('_serialize', ['peopleNetwork']);
    }

    /**
     * Delete method
     *
     * @param string|null $id People Network id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $peopleNetwork = $this->PeopleNetwork->get($id);
        if ($this->PeopleNetwork->delete($peopleNetwork)) {
            $this->Flash->success(__('The people network has been deleted.'));
        } else {
            $this->Flash->error(__('The people network could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
