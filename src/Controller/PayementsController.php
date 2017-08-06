<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Payements Controller
 *
 * @property \App\Model\Table\PayementsTable $Payements
 *
 * @method \App\Model\Entity\Payement[] paginate($object = null, array $settings = [])
 */
class PayementsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Plans', 'Clients', 'InternetServices']
        ];
        $payements = $this->paginate($this->Payements);

        $this->set(compact('payements'));
        $this->set('_serialize', ['payements']);
    }

    /**
     * View method
     *
     * @param string|null $id Payement id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $payement = $this->Payements->get($id, [
            'contain' => ['Plans', 'Clients', 'InternetServices']
        ]);

        $this->set('payement', $payement);
        $this->set('_serialize', ['payement']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $payement = $this->Payements->newEntity();
        if ($this->request->is('post')) {
            $payement = $this->Payements->patchEntity($payement, $this->request->getData());
            if ($this->Payements->save($payement)) {
                $this->Flash->success(__('The payement has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The payement could not be saved. Please, try again.'));
        }
        $plans = $this->Payements->Plans->find('list', ['limit' => 200]);
        $clients = $this->Payements->Clients->find('list', ['limit' => 200]);
        $internetServices = $this->Payements->InternetServices->find('list', ['limit' => 200]);
        $this->set(compact('payement', 'plans', 'clients', 'internetServices'));
        $this->set('_serialize', ['payement']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Payement id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $payement = $this->Payements->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $payement = $this->Payements->patchEntity($payement, $this->request->getData());
            if ($this->Payements->save($payement)) {
                $this->Flash->success(__('The payement has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The payement could not be saved. Please, try again.'));
        }
        $plans = $this->Payements->Plans->find('list', ['limit' => 200]);
        $clients = $this->Payements->Clients->find('list', ['limit' => 200]);
        $internetServices = $this->Payements->InternetServices->find('list', ['limit' => 200]);
        $this->set(compact('payement', 'plans', 'clients', 'internetServices'));
        $this->set('_serialize', ['payement']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Payement id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $payement = $this->Payements->get($id);
        if ($this->Payements->delete($payement)) {
            $this->Flash->success(__('The payement has been deleted.'));
        } else {
            $this->Flash->error(__('The payement could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
