<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * InternetServices Controller
 *
 * @property \App\Model\Table\InternetServicesTable $InternetServices
 *
 * @method \App\Model\Entity\InternetService[] paginate($object = null, array $settings = [])
 */
class InternetServicesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Clients', 'Modems']
        ];
        $internetServices = $this->paginate($this->InternetServices);

        $this->set(compact('internetServices'));
        $this->set('_serialize', ['internetServices']);
    }

    /**
     * View method
     *
     * @param string|null $id Internet Service id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $internetService = $this->InternetServices->get($id, [
            'contain' => ['Clients', 'Modems', 'Payements']
        ]);

        $this->set('internetService', $internetService);
        $this->set('_serialize', ['internetService']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $internetService = $this->InternetServices->newEntity();
        if ($this->request->is('post')) {
            $internetService = $this->InternetServices->patchEntity($internetService, $this->request->getData());
            if ($this->InternetServices->save($internetService)) {
                $this->Flash->success(__('The internet service has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The internet service could not be saved. Please, try again.'));
        }
        $clients = $this->InternetServices->Clients->find('list', ['limit' => 200]);
        $modems = $this->InternetServices->Modems->find('list', ['limit' => 200]);
        $this->set(compact('internetService', 'clients', 'modems'));
        $this->set('_serialize', ['internetService']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Internet Service id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $internetService = $this->InternetServices->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $internetService = $this->InternetServices->patchEntity($internetService, $this->request->getData());
            if ($this->InternetServices->save($internetService)) {
                $this->Flash->success(__('The internet service has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The internet service could not be saved. Please, try again.'));
        }
        $clients = $this->InternetServices->Clients->find('list', ['limit' => 200]);
        $modems = $this->InternetServices->Modems->find('list', ['limit' => 200]);
        $this->set(compact('internetService', 'clients', 'modems'));
        $this->set('_serialize', ['internetService']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Internet Service id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $internetService = $this->InternetServices->get($id);
        if ($this->InternetServices->delete($internetService)) {
            $this->Flash->success(__('The internet service has been deleted.'));
        } else {
            $this->Flash->error(__('The internet service could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
