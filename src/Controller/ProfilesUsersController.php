<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ProfilesUsers Controller
 *
 * @property \App\Model\Table\ProfilesUsersTable $ProfilesUsers
 *
 * @method \App\Model\Entity\ProfilesUser[] paginate($object = null, array $settings = [])
 */
class ProfilesUsersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Profiles', 'Users']
        ];
        $profilesUsers = $this->paginate($this->ProfilesUsers);

        $this->set(compact('profilesUsers'));
        $this->set('_serialize', ['profilesUsers']);
    }

    /**
     * View method
     *
     * @param string|null $id Profiles User id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $profilesUser = $this->ProfilesUsers->get($id, [
            'contain' => ['Profiles', 'Users']
        ]);

        $this->set('profilesUser', $profilesUser);
        $this->set('_serialize', ['profilesUser']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $profilesUser = $this->ProfilesUsers->newEntity();
        if ($this->request->is('post')) {
            $profilesUser = $this->ProfilesUsers->patchEntity($profilesUser, $this->request->getData());
            if ($this->ProfilesUsers->save($profilesUser)) {
                $this->Flash->success(__('The profiles user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The profiles user could not be saved. Please, try again.'));
        }
        $profiles = $this->ProfilesUsers->Profiles->find('list', ['limit' => 200]);
        $users = $this->ProfilesUsers->Users->find('list', ['limit' => 200]);
        $this->set(compact('profilesUser', 'profiles', 'users'));
        $this->set('_serialize', ['profilesUser']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Profiles User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $profilesUser = $this->ProfilesUsers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $profilesUser = $this->ProfilesUsers->patchEntity($profilesUser, $this->request->getData());
            if ($this->ProfilesUsers->save($profilesUser)) {
                $this->Flash->success(__('The profiles user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The profiles user could not be saved. Please, try again.'));
        }
        $profiles = $this->ProfilesUsers->Profiles->find('list', ['limit' => 200]);
        $users = $this->ProfilesUsers->Users->find('list', ['limit' => 200]);
        $this->set(compact('profilesUser', 'profiles', 'users'));
        $this->set('_serialize', ['profilesUser']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Profiles User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $profilesUser = $this->ProfilesUsers->get($id);
        if ($this->ProfilesUsers->delete($profilesUser)) {
            $this->Flash->success(__('The profiles user has been deleted.'));
        } else {
            $this->Flash->error(__('The profiles user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
