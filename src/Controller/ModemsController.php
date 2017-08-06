<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Modems Controller
 *
 * @property \App\Model\Table\ModemsTable $Modems
 *
 * @method \App\Model\Entity\Modem[] paginate($object = null, array $settings = [])
 */
class ModemsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $modems = $this->paginate($this->Modems);

        $this->set(compact('modems'));
        $this->set('_serialize', ['modems']);
    }

    /**
     * View method
     *
     * @param string|null $id Modem id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $modem = $this->Modems->get($id, [
            'contain' => ['Instalations', 'InternetServices']
        ]);

        $this->set('modem', $modem);
        $this->set('_serialize', ['modem']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $modem = $this->Modems->newEntity();
        if ($this->request->is('post')) {
            $modem = $this->Modems->patchEntity($modem, $this->request->getData());
            if ($this->Modems->save($modem)) {
                $this->Flash->success(__('The modem has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The modem could not be saved. Please, try again.'));
        }
        $this->set(compact('modem'));
        $this->set('_serialize', ['modem']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Modem id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $modem = $this->Modems->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $modem = $this->Modems->patchEntity($modem, $this->request->getData());
            if ($this->Modems->save($modem)) {
                $this->Flash->success(__('The modem has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The modem could not be saved. Please, try again.'));
        }
        $this->set(compact('modem'));
        $this->set('_serialize', ['modem']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Modem id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $modem = $this->Modems->get($id);
        if ($this->Modems->delete($modem)) {
            $this->Flash->success(__('The modem has been deleted.'));
        } else {
            $this->Flash->error(__('The modem could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
