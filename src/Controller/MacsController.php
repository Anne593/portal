<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Macs Controller
 *
 * @property \App\Model\Table\MacsTable $Macs
 */
class MacsController extends AppController
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
        $macs = $this->paginate($this->Macs);

        $this->set(compact('macs'));
        $this->set('_serialize', ['macs']);
    }

    /**
     * View method
     *
     * @param string|null $id Mac id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $mac = $this->Macs->get($id, [
            'contain' => ['People', 'Ips']
        ]);

        $this->set('mac', $mac);
        $this->set('_serialize', ['mac']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $mac = $this->Macs->newEntity();
        if ($this->request->is('post')) {
            $mac = $this->Macs->patchEntity($mac, $this->request->data);
            if ($this->Macs->save($mac)) {
                $this->Flash->success(__('The mac has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The mac could not be saved. Please, try again.'));
            }
        }
        $people = $this->Macs->People->find('list', ['limit' => 200]);
        $this->set(compact('mac', 'people'));
        $this->set('_serialize', ['mac']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Mac id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $mac = $this->Macs->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $mac = $this->Macs->patchEntity($mac, $this->request->data);
            if ($this->Macs->save($mac)) {
                $this->Flash->success(__('The mac has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The mac could not be saved. Please, try again.'));
            }
        }
        $people = $this->Macs->People->find('list', ['limit' => 200]);
        $this->set(compact('mac', 'people'));
        $this->set('_serialize', ['mac']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Mac id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $mac = $this->Macs->get($id);
        if ($this->Macs->delete($mac)) {
            $this->Flash->success(__('The mac has been deleted.'));
        } else {
            $this->Flash->error(__('The mac could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
