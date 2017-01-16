<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Emailtexts Controller
 *
 * @property \App\Model\Table\EmailtextsTable $Emailtexts
 */
class EmailtextsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $emailtexts = $this->paginate($this->Emailtexts);

        $this->set(compact('emailtexts'));
        $this->set('_serialize', ['emailtexts']);
    }

    /**
     * View method
     *
     * @param string|null $id Emailtext id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $emailtext = $this->Emailtexts->get($id, [
            'contain' => ['EmailtextGroups', 'EmailtextUsers']
        ]);

        $this->set('emailtext', $emailtext);
        $this->set('_serialize', ['emailtext']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $emailtext = $this->Emailtexts->newEntity();
        if ($this->request->is('post')) {
            $emailtext = $this->Emailtexts->patchEntity($emailtext, $this->request->data);
            if ($this->Emailtexts->save($emailtext)) {
                $this->Flash->success(__('The emailtext has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The emailtext could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('emailtext'));
        $this->set('_serialize', ['emailtext']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Emailtext id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $emailtext = $this->Emailtexts->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $emailtext = $this->Emailtexts->patchEntity($emailtext, $this->request->data);
            if ($this->Emailtexts->save($emailtext)) {
                $this->Flash->success(__('The emailtext has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The emailtext could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('emailtext'));
        $this->set('_serialize', ['emailtext']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Emailtext id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $emailtext = $this->Emailtexts->get($id);
        if ($this->Emailtexts->delete($emailtext)) {
            $this->Flash->success(__('The emailtext has been deleted.'));
        } else {
            $this->Flash->error(__('The emailtext could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
