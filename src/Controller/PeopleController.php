<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * People Controller
 *
 * @property \App\Model\Table\PeopleTable $People
 */
class PeopleController extends AppController
{

    /**
     * Provides ListFilter configuration 
     * 
     * @return array 
     */ 
    public function getListFilters() 
    { 
        $filters = []; 
        if ($this->request->action == 'index') { 
            $filters['fields'] = [ 
                'People.role' => [ 
                    'searchType' => 'select', 
                    'options' => Person::getRoles(), 
                    'inputOptions' => [ 
                        'label' => __('user.role') 
                    ] 
                ], 
                'People.status' => [ 
                    'searchType' => 'select', 
                    'options' => Person::getStatuses(), 
                    'inputOptions' => [ 
                        'label' => __('user.status') 
                    ] 
                ], 
                'People.matriculation_number' => [ 
                    'searchType' => 'wildcard', 
                    'inputOptions' => [ 
                        'label' => __('user.matriculation_number') 
                    ] 
                ], 
                'People.studentenwerk_identification' => [ 
                    'searchType' => 'wildcard', 
                    'inputOptions' => [ 
                        'label' => __('user.studentenwerk_identification') 
                    ] 
                ], 
                'People.status' => [ 
                    'searchType' => 'select', 
                    'options' => Person::getStatuses(), 
                    'inputOptions' => [ 
                        'label' => __('user.status') 
                    ] 
                ], 
                'People.fulltext' => [ 
                    'searchType' => 'fulltext', 
                    'searchFields' => [ 
                        'People.forename', 
                        'People.surname', 
                        'People.email' 
                    ] 
                ] 
            ]; 
        } 
 
        return $filters; 
    } 
 
    /** 
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $people = $this->paginate($this->People);

        $this->set(compact('people'));
        $this->set('_serialize', ['people']);
    }

    /**
     * View method
     *
     * @param string|null $id Person id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $person = $this->People->get($id, [
            'contain' => ['UserRoles', 'Roomkeys', 'WorkingGroups', 'FileserverUsers', 'HouseContibution', 'Macs', 'PeopleNetwork', 'Tenants']
        ]);

        $this->set('person', $person);
        $this->set('_serialize', ['person']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $person = $this->People->newEntity();
        if ($this->request->is('post')) {
            $person = $this->People->patchEntity($person, $this->request->data);
            if ($this->People->save($person)) {
                $this->Flash->success(__('The person has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The person could not be saved. Please, try again.'));
            }
        }
        $userRoles = $this->People->UserRoles->find('list', ['limit' => 200]);
        $roomkeys = $this->People->Roomkeys->find('list', ['limit' => 200]);
        $workingGroups = $this->People->WorkingGroups->find('list', ['limit' => 200]);
        $this->set(compact('person', 'userRoles', 'roomkeys', 'workingGroups'));
        $this->set('_serialize', ['person']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Person id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $person = $this->People->get($id, [
            'contain' => ['UserRoles', 'Roomkeys', 'WorkingGroups']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $person = $this->People->patchEntity($person, $this->request->data);
            if ($this->People->save($person)) {
                $this->Flash->success(__('The person has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The person could not be saved. Please, try again.'));
            }
        }
        $userRoles = $this->People->UserRoles->find('list', ['limit' => 200]);
        $roomkeys = $this->People->Roomkeys->find('list', ['limit' => 200]);
        $workingGroups = $this->People->WorkingGroups->find('list', ['limit' => 200]);
        $this->set(compact('person', 'userRoles', 'roomkeys', 'workingGroups'));
        $this->set('_serialize', ['person']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Person id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $person = $this->People->get($id);
        if ($this->People->delete($person)) {
            $this->Flash->success(__('The person has been deleted.'));
        } else {
            $this->Flash->error(__('The person could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
