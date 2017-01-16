<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * HouseContibution Controller
 *
 * @property \App\Model\Table\HouseContibutionTable $HouseContibution
 */
class HouseContibutionController extends AppController
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
        $houseContibution = $this->paginate($this->HouseContibution);

        $this->set(compact('houseContibution'));
        $this->set('_serialize', ['houseContibution']);
    }

    /**
     * View method
     *
     * @param string|null $id House Contibution id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $houseContibution = $this->HouseContibution->get($id, [
            'contain' => ['People']
        ]);

        $this->set('houseContibution', $houseContibution);
        $this->set('_serialize', ['houseContibution']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $houseContibution = $this->HouseContibution->newEntity();
        if ($this->request->is('post')) {
            $houseContibution = $this->HouseContibution->patchEntity($houseContibution, $this->request->data);
            if ($this->HouseContibution->save($houseContibution)) {
                $this->Flash->success(__('The house contibution has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The house contibution could not be saved. Please, try again.'));
            }
        }
        $people = $this->HouseContibution->People->find('list', ['limit' => 200]);
        $this->set(compact('houseContibution', 'people'));
        $this->set('_serialize', ['houseContibution']);
    }

    /**
     * Edit method
     *
     * @param string|null $id House Contibution id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $houseContibution = $this->HouseContibution->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $houseContibution = $this->HouseContibution->patchEntity($houseContibution, $this->request->data);
            if ($this->HouseContibution->save($houseContibution)) {
                $this->Flash->success(__('The house contibution has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The house contibution could not be saved. Please, try again.'));
            }
        }
        $people = $this->HouseContibution->People->find('list', ['limit' => 200]);
        $this->set(compact('houseContibution', 'people'));
        $this->set('_serialize', ['houseContibution']);
    }

    /**
     * Delete method
     *
     * @param string|null $id House Contibution id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $houseContibution = $this->HouseContibution->get($id);
        if ($this->HouseContibution->delete($houseContibution)) {
            $this->Flash->success(__('The house contibution has been deleted.'));
        } else {
            $this->Flash->error(__('The house contibution could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
