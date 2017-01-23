<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PeopleRooms Controller
 *
 * @property \App\Model\Table\PeopleRoomsTable $PeopleRooms
 */
class PeopleRoomsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['People', 'Rooms']
        ];
        $peopleRooms = $this->paginate($this->PeopleRooms);

        $this->set(compact('peopleRooms'));
        $this->set('_serialize', ['peopleRooms']);
    }

    /**
     * View method
     *
     * @param string|null $id People Room id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $peopleRoom = $this->PeopleRooms->get($id, [
            'contain' => ['People', 'Rooms']
        ]);

        $this->set('peopleRoom', $peopleRoom);
        $this->set('_serialize', ['peopleRoom']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $peopleRoom = $this->PeopleRooms->newEntity();
        if ($this->request->is('post')) {
            $peopleRoom = $this->PeopleRooms->patchEntity($peopleRoom, $this->request->data);
            if ($this->PeopleRooms->save($peopleRoom)) {
                $this->Flash->success(__('The people room has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The people room could not be saved. Please, try again.'));
            }
        }
        $people = $this->PeopleRooms->People->find('list', ['limit' => 200]);
        $rooms = $this->PeopleRooms->Rooms->find('list', ['limit' => 200]);
        $this->set(compact('peopleRoom', 'people', 'rooms'));
        $this->set('_serialize', ['peopleRoom']);
    }

    /**
     * Edit method
     *
     * @param string|null $id People Room id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $peopleRoom = $this->PeopleRooms->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $peopleRoom = $this->PeopleRooms->patchEntity($peopleRoom, $this->request->data);
            if ($this->PeopleRooms->save($peopleRoom)) {
                $this->Flash->success(__('The people room has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The people room could not be saved. Please, try again.'));
            }
        }
        $people = $this->PeopleRooms->People->find('list', ['limit' => 200]);
        $rooms = $this->PeopleRooms->Rooms->find('list', ['limit' => 200]);
        $this->set(compact('peopleRoom', 'people', 'rooms'));
        $this->set('_serialize', ['peopleRoom']);
    }

    /**
     * Delete method
     *
     * @param string|null $id People Room id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $peopleRoom = $this->PeopleRooms->get($id);
        if ($this->PeopleRooms->delete($peopleRoom)) {
            $this->Flash->success(__('The people room has been deleted.'));
        } else {
            $this->Flash->error(__('The people room could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
