<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Instalations Controller
 *
 * @property \App\Model\Table\InstalationsTable $Instalations
 *
 * @method \App\Model\Entity\Instalation[] paginate($object = null, array $settings = [])
 */
class InstalationsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Clients', 'Employees', 'Modems']
        ];
        $instalations = $this->paginate($this->Instalations);

        $this->set(compact('instalations'));
        $this->set('_serialize', ['instalations']);
    }

    /**
     * View method
     *
     * @param string|null $id Instalation id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $instalation = $this->Instalations->get($id, [
            'contain' => ['Clients', 'Employees', 'Modems']
        ]);

        $this->set('instalation', $instalation);
        $this->set('_serialize', ['instalation']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $instalation = $this->Instalations->newEntity();
        if ($this->request->is('post')) {
            $instalation = $this->Instalations->patchEntity($instalation, $this->request->getData());
            if ($this->Instalations->save($instalation)) {
                $this->Flash->success(__('The instalation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The instalation could not be saved. Please, try again.'));
        }
        $clients = $this->Instalations->Clients->find('list', ['limit' => 200]);
        $employees = $this->Instalations->Employees->find('list', ['limit' => 200]);
        $modems = $this->Instalations->Modems->find('list', ['limit' => 200]);
        $this->set(compact('instalation', 'clients', 'employees', 'modems'));
        $this->set('_serialize', ['instalation']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Instalation id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $instalation = $this->Instalations->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $instalation = $this->Instalations->patchEntity($instalation, $this->request->getData());
            if ($this->Instalations->save($instalation)) {
                $this->Flash->success(__('The instalation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The instalation could not be saved. Please, try again.'));
        }
        $clients = $this->Instalations->Clients->find('list', ['limit' => 200]);
        $employees = $this->Instalations->Employees->find('list', ['limit' => 200]);
        $modems = $this->Instalations->Modems->find('list', ['limit' => 200]);
        $this->set(compact('instalation', 'clients', 'employees', 'modems'));
        $this->set('_serialize', ['instalation']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Instalation id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $instalation = $this->Instalations->get($id);
        if ($this->Instalations->delete($instalation)) {
            $this->Flash->success(__('The instalation has been deleted.'));
        } else {
            $this->Flash->error(__('The instalation could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
