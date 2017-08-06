<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * OptionProfiles Controller
 *
 * @property \App\Model\Table\OptionProfilesTable $OptionProfiles
 *
 * @method \App\Model\Entity\OptionProfile[] paginate($object = null, array $settings = [])
 */
class OptionProfilesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Options', 'Profiles']
        ];
        $optionProfiles = $this->paginate($this->OptionProfiles);

        $this->set(compact('optionProfiles'));
        $this->set('_serialize', ['optionProfiles']);
    }

    /**
     * View method
     *
     * @param string|null $id Option Profile id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $optionProfile = $this->OptionProfiles->get($id, [
            'contain' => ['Options', 'Profiles']
        ]);

        $this->set('optionProfile', $optionProfile);
        $this->set('_serialize', ['optionProfile']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $optionProfile = $this->OptionProfiles->newEntity();
        if ($this->request->is('post')) {
            $optionProfile = $this->OptionProfiles->patchEntity($optionProfile, $this->request->getData());
            if ($this->OptionProfiles->save($optionProfile)) {
                $this->Flash->success(__('The option profile has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The option profile could not be saved. Please, try again.'));
        }
        $options = $this->OptionProfiles->Options->find('list', ['limit' => 200]);
        $profiles = $this->OptionProfiles->Profiles->find('list', ['limit' => 200]);
        $this->set(compact('optionProfile', 'options', 'profiles'));
        $this->set('_serialize', ['optionProfile']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Option Profile id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $optionProfile = $this->OptionProfiles->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $optionProfile = $this->OptionProfiles->patchEntity($optionProfile, $this->request->getData());
            if ($this->OptionProfiles->save($optionProfile)) {
                $this->Flash->success(__('The option profile has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The option profile could not be saved. Please, try again.'));
        }
        $options = $this->OptionProfiles->Options->find('list', ['limit' => 200]);
        $profiles = $this->OptionProfiles->Profiles->find('list', ['limit' => 200]);
        $this->set(compact('optionProfile', 'options', 'profiles'));
        $this->set('_serialize', ['optionProfile']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Option Profile id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $optionProfile = $this->OptionProfiles->get($id);
        if ($this->OptionProfiles->delete($optionProfile)) {
            $this->Flash->success(__('The option profile has been deleted.'));
        } else {
            $this->Flash->error(__('The option profile could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
