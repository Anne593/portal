<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * RoomkeysPeople Controller
 *
 * @property \App\Model\Table\RoomkeysPeopleTable $RoomkeysPeople
 */
class RoomkeysPeopleController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Roomkeys', 'People']
        ];
        $roomkeysPeople = $this->paginate($this->RoomkeysPeople);

        $this->set(compact('roomkeysPeople'));
        $this->set('_serialize', ['roomkeysPeople']);
    }

    /**
     * View method
     *
     * @param string|null $id Roomkeys Person id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $roomkeysPerson = $this->RoomkeysPeople->get($id, [
            'contain' => ['Roomkeys', 'People']
        ]);

        $this->set('roomkeysPerson', $roomkeysPerson);
        $this->set('_serialize', ['roomkeysPerson']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $roomkeysPerson = $this->RoomkeysPeople->newEntity();
        if ($this->request->is('post')) {
            $roomkeysPerson = $this->RoomkeysPeople->patchEntity($roomkeysPerson, $this->request->data);
            if ($this->RoomkeysPeople->save($roomkeysPerson)) {
                $this->Flash->success(__('The roomkeys person has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The roomkeys person could not be saved. Please, try again.'));
            }
        }
        $roomkeys = $this->RoomkeysPeople->Roomkeys->find('list', ['limit' => 200]);
        $people = $this->RoomkeysPeople->People->find('list', [
            'limit' => 200,
            'keyField' => 'id',
            'valueField' => 'full_name'
        ]);
        $this->set(compact('roomkeysPerson', 'roomkeys', 'people'));
        $this->set('_serialize', ['roomkeysPerson']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Roomkeys Person id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $roomkeysPerson = $this->RoomkeysPeople->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $roomkeysPerson = $this->RoomkeysPeople->patchEntity($roomkeysPerson, $this->request->data);
            if ($this->RoomkeysPeople->save($roomkeysPerson)) {
                $this->Flash->success(__('The roomkeys person has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The roomkeys person could not be saved. Please, try again.'));
            }
        }
        $roomkeys = $this->RoomkeysPeople->Roomkeys->find('list', ['limit' => 200]);
        $people = $this->RoomkeysPeople->People->find('list', [
            'limit' => 200,
            'keyField' => 'id',
            'valueField' => 'full_name'
        ]);
        $this->set(compact('roomkeysPerson', 'roomkeys', 'people'));
        $this->set('_serialize', ['roomkeysPerson']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Roomkeys Person id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $roomkeysPerson = $this->RoomkeysPeople->get($id);
        if ($this->RoomkeysPeople->delete($roomkeysPerson)) {
            $this->Flash->success(__('The roomkeys person has been deleted.'));
        } else {
            $this->Flash->error(__('The roomkeys person could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
