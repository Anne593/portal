<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * JosegonzalezCakeQueuesadillaPhinxlog Controller
 *
 * @property \App\Model\Table\JosegonzalezCakeQueuesadillaPhinxlogTable $JosegonzalezCakeQueuesadillaPhinxlog
 */
class JosegonzalezCakeQueuesadillaPhinxlogController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $josegonzalezCakeQueuesadillaPhinxlog = $this->paginate($this->JosegonzalezCakeQueuesadillaPhinxlog);

        $this->set(compact('josegonzalezCakeQueuesadillaPhinxlog'));
        $this->set('_serialize', ['josegonzalezCakeQueuesadillaPhinxlog']);
    }

    /**
     * View method
     *
     * @param string|null $id Josegonzalez Cake Queuesadilla Phinxlog id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $josegonzalezCakeQueuesadillaPhinxlog = $this->JosegonzalezCakeQueuesadillaPhinxlog->get($id, [
            'contain' => []
        ]);

        $this->set('josegonzalezCakeQueuesadillaPhinxlog', $josegonzalezCakeQueuesadillaPhinxlog);
        $this->set('_serialize', ['josegonzalezCakeQueuesadillaPhinxlog']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $josegonzalezCakeQueuesadillaPhinxlog = $this->JosegonzalezCakeQueuesadillaPhinxlog->newEntity();
        if ($this->request->is('post')) {
            $josegonzalezCakeQueuesadillaPhinxlog = $this->JosegonzalezCakeQueuesadillaPhinxlog->patchEntity($josegonzalezCakeQueuesadillaPhinxlog, $this->request->data);
            if ($this->JosegonzalezCakeQueuesadillaPhinxlog->save($josegonzalezCakeQueuesadillaPhinxlog)) {
                $this->Flash->success(__('The josegonzalez cake queuesadilla phinxlog has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The josegonzalez cake queuesadilla phinxlog could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('josegonzalezCakeQueuesadillaPhinxlog'));
        $this->set('_serialize', ['josegonzalezCakeQueuesadillaPhinxlog']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Josegonzalez Cake Queuesadilla Phinxlog id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $josegonzalezCakeQueuesadillaPhinxlog = $this->JosegonzalezCakeQueuesadillaPhinxlog->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $josegonzalezCakeQueuesadillaPhinxlog = $this->JosegonzalezCakeQueuesadillaPhinxlog->patchEntity($josegonzalezCakeQueuesadillaPhinxlog, $this->request->data);
            if ($this->JosegonzalezCakeQueuesadillaPhinxlog->save($josegonzalezCakeQueuesadillaPhinxlog)) {
                $this->Flash->success(__('The josegonzalez cake queuesadilla phinxlog has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The josegonzalez cake queuesadilla phinxlog could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('josegonzalezCakeQueuesadillaPhinxlog'));
        $this->set('_serialize', ['josegonzalezCakeQueuesadillaPhinxlog']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Josegonzalez Cake Queuesadilla Phinxlog id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $josegonzalezCakeQueuesadillaPhinxlog = $this->JosegonzalezCakeQueuesadillaPhinxlog->get($id);
        if ($this->JosegonzalezCakeQueuesadillaPhinxlog->delete($josegonzalezCakeQueuesadillaPhinxlog)) {
            $this->Flash->success(__('The josegonzalez cake queuesadilla phinxlog has been deleted.'));
        } else {
            $this->Flash->error(__('The josegonzalez cake queuesadilla phinxlog could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
