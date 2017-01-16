<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ModelHistoryPhinxlog Controller
 *
 * @property \App\Model\Table\ModelHistoryPhinxlogTable $ModelHistoryPhinxlog
 */
class ModelHistoryPhinxlogController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $modelHistoryPhinxlog = $this->paginate($this->ModelHistoryPhinxlog);

        $this->set(compact('modelHistoryPhinxlog'));
        $this->set('_serialize', ['modelHistoryPhinxlog']);
    }

    /**
     * View method
     *
     * @param string|null $id Model History Phinxlog id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $modelHistoryPhinxlog = $this->ModelHistoryPhinxlog->get($id, [
            'contain' => []
        ]);

        $this->set('modelHistoryPhinxlog', $modelHistoryPhinxlog);
        $this->set('_serialize', ['modelHistoryPhinxlog']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $modelHistoryPhinxlog = $this->ModelHistoryPhinxlog->newEntity();
        if ($this->request->is('post')) {
            $modelHistoryPhinxlog = $this->ModelHistoryPhinxlog->patchEntity($modelHistoryPhinxlog, $this->request->data);
            if ($this->ModelHistoryPhinxlog->save($modelHistoryPhinxlog)) {
                $this->Flash->success(__('The model history phinxlog has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The model history phinxlog could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('modelHistoryPhinxlog'));
        $this->set('_serialize', ['modelHistoryPhinxlog']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Model History Phinxlog id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $modelHistoryPhinxlog = $this->ModelHistoryPhinxlog->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $modelHistoryPhinxlog = $this->ModelHistoryPhinxlog->patchEntity($modelHistoryPhinxlog, $this->request->data);
            if ($this->ModelHistoryPhinxlog->save($modelHistoryPhinxlog)) {
                $this->Flash->success(__('The model history phinxlog has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The model history phinxlog could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('modelHistoryPhinxlog'));
        $this->set('_serialize', ['modelHistoryPhinxlog']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Model History Phinxlog id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $modelHistoryPhinxlog = $this->ModelHistoryPhinxlog->get($id);
        if ($this->ModelHistoryPhinxlog->delete($modelHistoryPhinxlog)) {
            $this->Flash->success(__('The model history phinxlog has been deleted.'));
        } else {
            $this->Flash->error(__('The model history phinxlog could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
