<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Roomkeys Controller
 *
 * @property \App\Model\Table\RoomkeysTable $Roomkeys
 */
class RoomkeysController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $roomkeys = $this->paginate($this->Roomkeys);

        $this->set(compact('roomkeys'));
        $this->set('_serialize', ['roomkeys']);
    }

    /**
     * View method
     *
     * @param string|null $id Roomkey id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $roomkey = $this->Roomkeys->get($id, [
            'contain' => ['People']
        ]);

        $this->set('roomkey', $roomkey);
        $this->set('_serialize', ['roomkey']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $roomkey = $this->Roomkeys->newEntity();
        if ($this->request->is('post')) {
            $roomkey = $this->Roomkeys->patchEntity($roomkey, $this->request->data);
            if ($this->Roomkeys->save($roomkey)) {
                $this->Flash->success(__('The roomkey has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The roomkey could not be saved. Please, try again.'));
            }
        }
        $people = $this->Roomkeys->People->find('list', [
            'limit' => 200,
            'keyField' => 'id',
            'valueField' => 'full_name'
        ]);
        $this->set(compact('roomkey', 'people'));
        $this->set('_serialize', ['roomkey']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Roomkey id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $roomkey = $this->Roomkeys->get($id, [
            'contain' => ['People']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $roomkey = $this->Roomkeys->patchEntity($roomkey, $this->request->data);
            if ($this->Roomkeys->save($roomkey)) {
                $this->Flash->success(__('The roomkey has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The roomkey could not be saved. Please, try again.'));
            }
        }
        $people = $this->Roomkeys->People->find('list', [
            'limit' => 200,
            'keyField' => 'id',
            'valueField' => 'full_name'
        ]);
        $this->set(compact('roomkey', 'people'));
        $this->set('_serialize', ['roomkey']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Roomkey id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $roomkey = $this->Roomkeys->get($id);
        if ($this->Roomkeys->delete($roomkey)) {
            $this->Flash->success(__('The roomkey has been deleted.'));
        } else {
            $this->Flash->error(__('The roomkey could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
