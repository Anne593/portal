<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * WorkingGroupsPeople Controller
 *
 * @property \App\Model\Table\WorkingGroupsPeopleTable $WorkingGroupsPeople
 */
class WorkingGroupsPeopleController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['People', 'Workshops', 'WorkingGroups']
        ];
        $workingGroupsPeople = $this->paginate($this->WorkingGroupsPeople);

        $this->set(compact('workingGroupsPeople'));
        $this->set('_serialize', ['workingGroupsPeople']);
    }

    /**
     * View method
     *
     * @param string|null $id Working Groups Person id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $workingGroupsPerson = $this->WorkingGroupsPeople->get($id, [
            'contain' => ['People', 'Workshops', 'WorkingGroups']
        ]);

        $this->set('workingGroupsPerson', $workingGroupsPerson);
        $this->set('_serialize', ['workingGroupsPerson']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $workingGroupsPerson = $this->WorkingGroupsPeople->newEntity();
        if ($this->request->is('post')) {
            $workingGroupsPerson = $this->WorkingGroupsPeople->patchEntity($workingGroupsPerson, $this->request->data);
            if ($this->WorkingGroupsPeople->save($workingGroupsPerson)) {
                $this->Flash->success(__('The working groups person has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The working groups person could not be saved. Please, try again.'));
            }
        }
        $people = $this->WorkingGroupsPeople->People->find('list', ['limit' => 200]);
        $workshops = $this->WorkingGroupsPeople->Workshops->find('list', ['limit' => 200]);
        $workingGroups = $this->WorkingGroupsPeople->WorkingGroups->find('list', ['limit' => 200]);
        $this->set(compact('workingGroupsPerson', 'people', 'workshops', 'workingGroups'));
        $this->set('_serialize', ['workingGroupsPerson']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Working Groups Person id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $workingGroupsPerson = $this->WorkingGroupsPeople->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $workingGroupsPerson = $this->WorkingGroupsPeople->patchEntity($workingGroupsPerson, $this->request->data);
            if ($this->WorkingGroupsPeople->save($workingGroupsPerson)) {
                $this->Flash->success(__('The working groups person has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The working groups person could not be saved. Please, try again.'));
            }
        }
        $people = $this->WorkingGroupsPeople->People->find('list', ['limit' => 200]);
        $workshops = $this->WorkingGroupsPeople->Workshops->find('list', ['limit' => 200]);
        $workingGroups = $this->WorkingGroupsPeople->WorkingGroups->find('list', ['limit' => 200]);
        $this->set(compact('workingGroupsPerson', 'people', 'workshops', 'workingGroups'));
        $this->set('_serialize', ['workingGroupsPerson']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Working Groups Person id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $workingGroupsPerson = $this->WorkingGroupsPeople->get($id);
        if ($this->WorkingGroupsPeople->delete($workingGroupsPerson)) {
            $this->Flash->success(__('The working groups person has been deleted.'));
        } else {
            $this->Flash->error(__('The working groups person could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
