<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PeopleMemberships Controller
 *
 * @property \App\Model\Table\PeopleMembershipsTable $PeopleMemberships
 */
class PeopleMembershipsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['People', 'Memberships']
        ];
        $peopleMemberships = $this->paginate($this->PeopleMemberships);

        $this->set(compact('peopleMemberships'));
        $this->set('_serialize', ['peopleMemberships']);
    }

    /**
     * View method
     *
     * @param string|null $id People Membership id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $peopleMembership = $this->PeopleMemberships->get($id, [
            'contain' => ['People', 'Memberships']
        ]);

        $this->set('peopleMembership', $peopleMembership);
        $this->set('_serialize', ['peopleMembership']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $peopleMembership = $this->PeopleMemberships->newEntity();
        if ($this->request->is('post')) {
            $peopleMembership = $this->PeopleMemberships->patchEntity($peopleMembership, $this->request->data);
            if ($this->PeopleMemberships->save($peopleMembership)) {
                $this->Flash->success(__('The people membership has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The people membership could not be saved. Please, try again.'));
            }
        }
        $people = $this->PeopleMemberships->People->find('list', ['limit' => 200]);
        $memberships = $this->PeopleMemberships->Memberships->find('list', ['limit' => 200]);
        $this->set(compact('peopleMembership', 'people', 'memberships'));
        $this->set('_serialize', ['peopleMembership']);
    }

    /**
     * Edit method
     *
     * @param string|null $id People Membership id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $peopleMembership = $this->PeopleMemberships->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $peopleMembership = $this->PeopleMemberships->patchEntity($peopleMembership, $this->request->data);
            if ($this->PeopleMemberships->save($peopleMembership)) {
                $this->Flash->success(__('The people membership has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The people membership could not be saved. Please, try again.'));
            }
        }
        $people = $this->PeopleMemberships->People->find('list', ['limit' => 200]);
        $memberships = $this->PeopleMemberships->Memberships->find('list', ['limit' => 200]);
        $this->set(compact('peopleMembership', 'people', 'memberships'));
        $this->set('_serialize', ['peopleMembership']);
    }

    /**
     * Delete method
     *
     * @param string|null $id People Membership id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $peopleMembership = $this->PeopleMemberships->get($id);
        if ($this->PeopleMemberships->delete($peopleMembership)) {
            $this->Flash->success(__('The people membership has been deleted.'));
        } else {
            $this->Flash->error(__('The people membership could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
