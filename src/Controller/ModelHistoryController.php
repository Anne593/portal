<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ModelHistory Controller
 *
 * @property \App\Model\Table\ModelHistoryTable $ModelHistory
 */
class ModelHistoryController extends AppController
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
        $modelHistory = $this->paginate($this->ModelHistory);

        $this->set(compact('modelHistory'));
        $this->set('_serialize', ['modelHistory']);
    }

    /**
     * View method
     *
     * @param string|null $id Model History id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $modelHistory = $this->ModelHistory->get($id, [
            'contain' => ['People', 'Phinxlog']
        ]);

        $this->set('modelHistory', $modelHistory);
        $this->set('_serialize', ['modelHistory']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $modelHistory = $this->ModelHistory->newEntity();
        if ($this->request->is('post')) {
            $modelHistory = $this->ModelHistory->patchEntity($modelHistory, $this->request->data);
            if ($this->ModelHistory->save($modelHistory)) {
                $this->Flash->success(__('The model history has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The model history could not be saved. Please, try again.'));
            }
        }
        $people = $this->ModelHistory->People->find('list', ['limit' => 200]);
        $phinxlog = $this->ModelHistory->Phinxlog->find('list', ['limit' => 200]);
        $this->set(compact('modelHistory', 'people', 'phinxlog'));
        $this->set('_serialize', ['modelHistory']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Model History id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $modelHistory = $this->ModelHistory->get($id, [
            'contain' => ['Phinxlog']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $modelHistory = $this->ModelHistory->patchEntity($modelHistory, $this->request->data);
            if ($this->ModelHistory->save($modelHistory)) {
                $this->Flash->success(__('The model history has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The model history could not be saved. Please, try again.'));
            }
        }
        $people = $this->ModelHistory->People->find('list', ['limit' => 200]);
        $phinxlog = $this->ModelHistory->Phinxlog->find('list', ['limit' => 200]);
        $this->set(compact('modelHistory', 'people', 'phinxlog'));
        $this->set('_serialize', ['modelHistory']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Model History id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $modelHistory = $this->ModelHistory->get($id);
        if ($this->ModelHistory->delete($modelHistory)) {
            $this->Flash->success(__('The model history has been deleted.'));
        } else {
            $this->Flash->error(__('The model history could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
