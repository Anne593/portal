<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * WorkingGroups Controller
 *
 * @property \App\Model\Table\WorkingGroupsTable $WorkingGroups
 */
class WorkingGroupsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $workingGroups = $this->paginate($this->WorkingGroups);

        $this->set(compact('workingGroups'));
        $this->set('_serialize', ['workingGroups']);
    }

    /**
     * View method
     *
     * @param string|null $id Working Group id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $workingGroup = $this->WorkingGroups->get($id, [
            'contain' => ['People']
        ]);

        $this->set('workingGroup', $workingGroup);
        $this->set('_serialize', ['workingGroup']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $workingGroup = $this->WorkingGroups->newEntity();
        if ($this->request->is('post')) {
            $workingGroup = $this->WorkingGroups->patchEntity($workingGroup, $this->request->data);
            if ($this->WorkingGroups->save($workingGroup)) {
                $this->Flash->success(__('The working group has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The working group could not be saved. Please, try again.'));
            }
        }
        $people = $this->WorkingGroups->People->find('list', [
            'limit' => 200,
            'keyField' => 'id',
            'valueField' => 'full_name'
        ]);
        $this->set(compact('workingGroup', 'people'));
        $this->set('_serialize', ['workingGroup']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Working Group id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $workingGroup = $this->WorkingGroups->get($id, [
            'contain' => ['People']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $workingGroup = $this->WorkingGroups->patchEntity($workingGroup, $this->request->data);
            if ($this->WorkingGroups->save($workingGroup)) {
                $this->Flash->success(__('The working group has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The working group could not be saved. Please, try again.'));
            }
        }
        $people = $this->WorkingGroups->People->find('list', [
            'limit' => 200,
            'keyField' => 'id',
            'valueField' => 'full_name'
        ]);
        $this->set(compact('workingGroup', 'people'));
        $this->set('_serialize', ['workingGroup']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Working Group id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $workingGroup = $this->WorkingGroups->get($id);
        if ($this->WorkingGroups->delete($workingGroup)) {
            $this->Flash->success(__('The working group has been deleted.'));
        } else {
            $this->Flash->error(__('The working group could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
