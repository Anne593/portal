<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * EmailtextGroups Controller
 *
 * @property \App\Model\Table\EmailtextGroupsTable $EmailtextGroups
 */
class EmailtextGroupsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Emailtexts', 'Groups']
        ];
        $emailtextGroups = $this->paginate($this->EmailtextGroups);

        $this->set(compact('emailtextGroups'));
        $this->set('_serialize', ['emailtextGroups']);
    }

    /**
     * View method
     *
     * @param string|null $id Emailtext Group id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $emailtextGroup = $this->EmailtextGroups->get($id, [
            'contain' => ['Emailtexts', 'Groups']
        ]);

        $this->set('emailtextGroup', $emailtextGroup);
        $this->set('_serialize', ['emailtextGroup']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $emailtextGroup = $this->EmailtextGroups->newEntity();
        if ($this->request->is('post')) {
            $emailtextGroup = $this->EmailtextGroups->patchEntity($emailtextGroup, $this->request->data);
            if ($this->EmailtextGroups->save($emailtextGroup)) {
                $this->Flash->success(__('The emailtext group has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The emailtext group could not be saved. Please, try again.'));
            }
        }
        $emailtexts = $this->EmailtextGroups->Emailtexts->find('list', ['limit' => 200]);
        $groups = $this->EmailtextGroups->Groups->find('list', ['limit' => 200]);
        $this->set(compact('emailtextGroup', 'emailtexts', 'groups'));
        $this->set('_serialize', ['emailtextGroup']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Emailtext Group id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $emailtextGroup = $this->EmailtextGroups->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $emailtextGroup = $this->EmailtextGroups->patchEntity($emailtextGroup, $this->request->data);
            if ($this->EmailtextGroups->save($emailtextGroup)) {
                $this->Flash->success(__('The emailtext group has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The emailtext group could not be saved. Please, try again.'));
            }
        }
        $emailtexts = $this->EmailtextGroups->Emailtexts->find('list', ['limit' => 200]);
        $groups = $this->EmailtextGroups->Groups->find('list', ['limit' => 200]);
        $this->set(compact('emailtextGroup', 'emailtexts', 'groups'));
        $this->set('_serialize', ['emailtextGroup']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Emailtext Group id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $emailtextGroup = $this->EmailtextGroups->get($id);
        if ($this->EmailtextGroups->delete($emailtextGroup)) {
            $this->Flash->success(__('The emailtext group has been deleted.'));
        } else {
            $this->Flash->error(__('The emailtext group could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
