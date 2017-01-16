<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Ips Controller
 *
 * @property \App\Model\Table\IpsTable $Ips
 */
class IpsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Macs']
        ];
        $ips = $this->paginate($this->Ips);

        $this->set(compact('ips'));
        $this->set('_serialize', ['ips']);
    }

    /**
     * View method
     *
     * @param string|null $id Ip id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ip = $this->Ips->get($id, [
            'contain' => ['Macs']
        ]);

        $this->set('ip', $ip);
        $this->set('_serialize', ['ip']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ip = $this->Ips->newEntity();
        if ($this->request->is('post')) {
            $ip = $this->Ips->patchEntity($ip, $this->request->data);
            if ($this->Ips->save($ip)) {
                $this->Flash->success(__('The ip has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The ip could not be saved. Please, try again.'));
            }
        }
        $macs = $this->Ips->Macs->find('list', ['limit' => 200]);
        $this->set(compact('ip', 'macs'));
        $this->set('_serialize', ['ip']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Ip id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ip = $this->Ips->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ip = $this->Ips->patchEntity($ip, $this->request->data);
            if ($this->Ips->save($ip)) {
                $this->Flash->success(__('The ip has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The ip could not be saved. Please, try again.'));
            }
        }
        $macs = $this->Ips->Macs->find('list', ['limit' => 200]);
        $this->set(compact('ip', 'macs'));
        $this->set('_serialize', ['ip']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Ip id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ip = $this->Ips->get($id);
        if ($this->Ips->delete($ip)) {
            $this->Flash->success(__('The ip has been deleted.'));
        } else {
            $this->Flash->error(__('The ip could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
