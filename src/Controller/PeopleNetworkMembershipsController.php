<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PeopleNetworkMemberships Controller
 *
 * @property \App\Model\Table\PeopleNetworkMembershipsTable $PeopleNetworkMemberships
 */
class PeopleNetworkMembershipsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Networkinfos', 'Memberships']
        ];
        $peopleNetworkMemberships = $this->paginate($this->PeopleNetworkMemberships);

        $this->set(compact('peopleNetworkMemberships'));
        $this->set('_serialize', ['peopleNetworkMemberships']);
    }

    /**
     * View method
     *
     * @param string|null $id People Network Membership id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $peopleNetworkMembership = $this->PeopleNetworkMemberships->get($id, [
            'contain' => ['Networkinfos', 'Memberships']
        ]);

        $this->set('peopleNetworkMembership', $peopleNetworkMembership);
        $this->set('_serialize', ['peopleNetworkMembership']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $peopleNetworkMembership = $this->PeopleNetworkMemberships->newEntity();
        if ($this->request->is('post')) {
            $peopleNetworkMembership = $this->PeopleNetworkMemberships->patchEntity($peopleNetworkMembership, $this->request->data);
            if ($this->PeopleNetworkMemberships->save($peopleNetworkMembership)) {
                $this->Flash->success(__('The people network membership has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The people network membership could not be saved. Please, try again.'));
            }
        }
        $networkinfos = $this->PeopleNetworkMemberships->Networkinfos->find('list', ['limit' => 200]);
        $memberships = $this->PeopleNetworkMemberships->Memberships->find('list', ['limit' => 200]);
        $this->set(compact('peopleNetworkMembership', 'networkinfos', 'memberships'));
        $this->set('_serialize', ['peopleNetworkMembership']);
    }

    /**
     * Edit method
     *
     * @param string|null $id People Network Membership id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $peopleNetworkMembership = $this->PeopleNetworkMemberships->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $peopleNetworkMembership = $this->PeopleNetworkMemberships->patchEntity($peopleNetworkMembership, $this->request->data);
            if ($this->PeopleNetworkMemberships->save($peopleNetworkMembership)) {
                $this->Flash->success(__('The people network membership has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The people network membership could not be saved. Please, try again.'));
            }
        }
        $networkinfos = $this->PeopleNetworkMemberships->Networkinfos->find('list', ['limit' => 200]);
        $memberships = $this->PeopleNetworkMemberships->Memberships->find('list', ['limit' => 200]);
        $this->set(compact('peopleNetworkMembership', 'networkinfos', 'memberships'));
        $this->set('_serialize', ['peopleNetworkMembership']);
    }

    /**
     * Delete method
     *
     * @param string|null $id People Network Membership id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $peopleNetworkMembership = $this->PeopleNetworkMemberships->get($id);
        if ($this->PeopleNetworkMemberships->delete($peopleNetworkMembership)) {
            $this->Flash->success(__('The people network membership has been deleted.'));
        } else {
            $this->Flash->error(__('The people network membership could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
