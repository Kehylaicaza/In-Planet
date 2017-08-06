<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Typeofemployees Controller
 *
 * @property \App\Model\Table\TypeofemployeesTable $Typeofemployees
 *
 * @method \App\Model\Entity\Typeofemployee[] paginate($object = null, array $settings = [])
 */
class TypeofemployeesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $typeofemployees = $this->paginate($this->Typeofemployees);

        $this->set(compact('typeofemployees'));
        $this->set('_serialize', ['typeofemployees']);
    }

    /**
     * View method
     *
     * @param string|null $id Typeofemployee id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $typeofemployee = $this->Typeofemployees->get($id, [
            'contain' => []
        ]);

        $this->set('typeofemployee', $typeofemployee);
        $this->set('_serialize', ['typeofemployee']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $typeofemployee = $this->Typeofemployees->newEntity();
        if ($this->request->is('post')) {
            $typeofemployee = $this->Typeofemployees->patchEntity($typeofemployee, $this->request->getData());
            if ($this->Typeofemployees->save($typeofemployee)) {
                $this->Flash->success(__('The typeofemployee has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The typeofemployee could not be saved. Please, try again.'));
        }
        $this->set(compact('typeofemployee'));
        $this->set('_serialize', ['typeofemployee']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Typeofemployee id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $typeofemployee = $this->Typeofemployees->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $typeofemployee = $this->Typeofemployees->patchEntity($typeofemployee, $this->request->getData());
            if ($this->Typeofemployees->save($typeofemployee)) {
                $this->Flash->success(__('The typeofemployee has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The typeofemployee could not be saved. Please, try again.'));
        }
        $this->set(compact('typeofemployee'));
        $this->set('_serialize', ['typeofemployee']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Typeofemployee id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $typeofemployee = $this->Typeofemployees->get($id);
        if ($this->Typeofemployees->delete($typeofemployee)) {
            $this->Flash->success(__('The typeofemployee has been deleted.'));
        } else {
            $this->Flash->error(__('The typeofemployee could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
